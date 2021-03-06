<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Arr;
use Illuminate\Support\Collection;
use Kinnngg\Swat4query\Server as Swat4Server;
use App\Server;
use Yandex\Translate\Translator;
use Yandex\Translate\Exception;

class ServerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $servers = Server::paginate();

        $collection = new Collection();

        foreach ($servers as $server) {
            try {
                $query = new Swat4Server($server->ip_address, $server->query_port);
                $query->query();
            } catch (\Exception $e) {
                continue;
            }
            $serverquery = json_decode($query);

            if ($serverquery->hostname == '...server is reloading or offline' || $serverquery->hostname == null || $serverquery->hostname == "" || empty($serverquery->hostname) )
                continue;

            $newserver = new Arr();
            $newserver->hostname = html_entity_decode(fixHostNameForServerList($serverquery->hostname));
            $newserver->map = $serverquery->map;
            $newserver->gametype = $serverquery->gametype;
            $newserver->version = $serverquery->patch;
            $newserver->players_current = $serverquery->players_current;
            $newserver->players_max = $serverquery->players_max;
            $newserver->ip_address = $server->ip_address;
            $newserver->join_port = $server->join_port;
            $newserver->id = $server->id;
            $newserver->rank = $server->rank;

            $collection->push($newserver);
        }
        //$collection = $collection->sortByDesc('players_current');

        $collection = $collection->sortByDesc(function ($server) {
            return $server->players_current > 0 ?  $server->players_current :  $server->rank;
        });

        return view('server.list')->with('servers', $collection)->with('page', $servers);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('server.submit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $validator = \Validator::make($request->all(),
            ['ip_address' => 'required|ip|max:255',
                'join_port' => 'required|numeric|min:0|max:65535',
                'query_port' => 'required|numeric|min:0|max:65535'
            ]);
        if ($validator->fails())
            return \Redirect::back()->with('errors', $validator->errors())->withInput();

        if ($this->is_server_registered($request)) {
            return \Redirect::back()->with('error', "Server already registered")->withInput();
        }

        try {
            $server = new Swat4Server($request->ip_address, $request->query_port);
            $server->query();
        } catch (\Exception $e) {
            return \Redirect::back()->with('error', "Unable to query Server. Are you sure it is live ?")->withInput();
        }

        $server = json_decode($server);

        if ($server->hostname == "...server is reloading or offline")
            return \Redirect::back()->with('error', "Unable to query Server. Are you sure it is live ?")->withInput();

        /**
         * Get the Country of Server
         */
        $geoip = \App::make('geoip');
        $server_ip = $request->ip_address;
        try {
            if ($server_geoip = $geoip->city($server_ip)) {
                $server_isoCode = $server_geoip->country->isoCode;
                $country = \App\Country::where('countryCode', 'LIKE', $server_isoCode)->first();

                /**
                 * Country returned is not in Countrie table
                 */
                if ($country == null) {
                    $server_country_id = 0;
                } else {
                    $server_country_id = $country->id;
                }
            }
        } /**
         * If the GeoIp2 failed to retrieve data
         */
        catch (\Exception $e) {
            switch ($e) {
                case $e instanceof \InvalidArgumentException:
                    $server_country_id = 0;
                    break;
                case $e instanceof \GeoIp2\Exception\AddressNotFoundException:
                    $server_country_id = 0;
                    break;
                default:
                    $server_country_id = 0;
                    break;
            }
        }

        $newServer = new Server();
        $newServer->ip_address = $request->ip_address;
        $newServer->join_port = $request->join_port;
        $newServer->query_port = $request->query_port;
        $newServer->description = $request->description == '' ? NULL : $request->description;
        $newServer->hostname = $server->hostname;
        $newServer->country_id = $server_country_id;
        $newServer->submitter_id = \Auth::user()->id;
        $newServer->save();

        return \Redirect::back()->with('message', "Server has been submitted!");
    }

    public function is_server_registered($request)
    {
        $d1 = Server::where('ip_address', $request->ip_address)->where('join_port', $request->join_port)->first();
        $d2 = Server::where('ip_address', $request->ip_address)->where('query_port', $request->query_port)->first();
        if ($d1 || $d2)
            return true;
        else
            return false;
    }


    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        $server = Server::findOrFail($id);

        $serverquery = new Swat4Server($server->ip_address, $server->query_port);
        $serverquery->query();

        return \Response::make($serverquery, 200, ['Content-Type' => "text/json"]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update($id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }

    public function chatInGameForKOS(Request $request)
    {
        $Username = $request->user()->displayName();
        $Msg = $request->serverchatmsg;
        $Msg = htmlentities($Msg);
        if ($Msg == '' || empty($Msg)) {
            return;
        }

        if($request->user()->muted)
            return;

        if($request->user()->isAdmin())
        {
            $explode = explode(" ",$Msg);
            // If server command then run it
            if($explode[0] == "s4s")
            {
                array_forget($explode,["0"]);
                $msg = implode(" ",$explode);
                $MsgFormated = env("ADMIN_COMMAND_SECRET")." ".$Username." ".$msg;
            }
            else
            {
                $explode = explode(" ",$Msg);
                // If server command then run it
                if($explode[0] == "!translate" || $explode[0] == "!tr" || $explode[0] == "!t")
                {
                    array_forget($explode,["0"]);
                    $Msg = implode(" ",$explode);

                    try {
                        $translator = new Translator(env('YANDEX_API_KEY'));
                        $translation = $translator->translate($Msg, 'en');

                        $Msg = $translation;

                    } catch (Exception $e) {
                        $Msg = implode(" ",$explode);
                    }
                }

                $userLvl = $request->user()->roles()->first()->display_name;
                if($userLvl == "Super Administrator")
                {
                    /*$userLvl = "[c=00ff00]<SuperAdmin>[\\c]";*/
                    $userLvl = "[c=ffd700]<SuperAdmin>[\\c]";
                }
                elseif ($userLvl == "Administrator")
                {
                    $userLvl = "[c=C0C0C0]<Admin>[\\c]";
                }
                else
                {
                    $userLvl = "[c=cd7f32]<{$userLvl}>[\\c]";
                }
                $MsgFormated = "[c=ffff00][u][b]" . $Username . "[\\b][\\u][\\c] $userLvl: [c=FFFFFF]" . $Msg;
            }
        }
        else
        {
            $explode = explode(" ",$Msg);
            // If server command then run it
            if($explode[0] == "!translate" || $explode[0] == "!tr" || $explode[0] == "!t")
            {
                array_forget($explode,["0"]);
                $Msg = implode(" ",$explode);

                try {
                    $translator = new Translator(env('YANDEX_API_KEY'));
                    $translation = $translator->translate($Msg, 'en');

                    $Msg = $translation;

                } catch (Exception $e) {
                    $Msg = implode(" ",$explode);
                }
            }

            $userLvl = $request->user()->roles()->first()->display_name;
            if($userLvl == "Super Administrator")
            {
                $userLvl = "[c=ffd700]<SuperAdmin>[\\c]";
            }
            elseif ($userLvl == "Administrator")
            {
                $userLvl = "[c=C0C0C0]<Admin>[\\c]";
            }
            else
            {
                $userLvl = "[c=cd7f32]<{$userLvl}>[\\c]";
            }
            $MsgFormated = "[c=ffff00][u][b]" . $Username . "[\\b][\\u][\\c] $userLvl: [c=FFFFFF]" . $Msg;
        }

        /*$txtip = "144.76.224.57";
        $txtportnum = "10485";*/
        $txtip = "127.0.0.1";
        $txtportnum = "10485";
        $sock = fsockopen("udp://" . $txtip, $txtportnum, $errno, $errstr, 2);
        if (!$sock) {
            echo "$errstr ($errno)<br/>\n";
            exit;
        }
        $MsgFormated = htmlspecialchars_decode(html_entity_decode($MsgFormated));

        $MsgFormated = trim($MsgFormated);

        //\Log::info($MsgFormated);

        fputs($sock, $MsgFormated);
        $gotfinal = False;
        $data = "";
        socket_set_timeout($sock, 0, 1000);
        fclose($sock);
        exit();
    }

    /**
     * Perform admin command from website
     *
     * @format secretkey adminame command dival-name
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function adminCommand(Request $request)
    {
        if(!$request->has('action'))
        {
            $data = ['error' => '<div class="text-center small text-danger">Error! No action specified!.</div>'];
            return response($data,422);
        }
        if(!$request->has('selected_player') && ($request->action=='forcemute' || $request->action=='kick' || $request->action=='kickban' || $request->action=='kick' || $request->action=='forceview' || $request->action=='forcespec' || $request->action=='forcejoin' || $request->action=='switchteam' || $request->action=='forcelesslethal' || $request->action=='forcenoweapons' || $request->action=='forcename' || $request->action=='forcenotaser' || $request->action=='forcenobeanbag' || $request->action=='forcenopepperball' || $request->action=='forcenosting' || $request->action=='forcenoflash' || $request->action=='forcenogas' || $request->action=='forcenopepperspray'))
        {
            $data = ['error' => '<div class="text-center small text-danger">Error! No Player Selected.</div>'];
            return response($data,422);
        }
        if($request->action == 'forcename' && (!$request->has('forcenametxt') || $request->forcenametxt == ""))
        {
            $data = ['error' => '<div class="text-center small text-danger">Error! New player name can\'t be Blank.</div>'];
            return response($data,422);
        }
        if($request->action == 'sc' && (!$request->has('sccmd') || $request->sccmd == ""))
        {
            $data = ['error' => '<div class="text-center small text-danger">Error! Server Command can\'t be Blank.</div>'];
            return response($data,422);
        }

        $admin = $request->user()->displayName();
        $player = $request->get('selected_player');
        $action = $request->get('action');

        if($action == 'forcename')
        {
            $newname = $request->get('forcenametxt');
            $command = env("ADMIN_COMMAND_SECRET")." ".$admin." ".$action." ".$player." ".$newname;
        }
        else if($action == 'sc')
        {
            $sc = $request->get('sccmd');
            $command = env("ADMIN_COMMAND_SECRET")." ".$admin." ".$action." ".$sc;
        }
        else
        {
            $command = env("ADMIN_COMMAND_SECRET")." ".$admin." ".$action." ".$player;
        }
        $command = trim($command);

        //\Log::info($command);

        /*$txtip = "144.76.224.57";
        $txtportnum = "10485";*/
        $txtip = "127.0.0.1";
        $txtportnum = "10485";
        $sock = fsockopen("udp://" . $txtip, $txtportnum, $errno, $errstr, 2);
        if (!$sock) {
            echo "$errstr ($errno)<br/>\n";
            exit;
        }
        fputs($sock, $command);
        $gotfinal = False;
        $data = "";
        socket_set_timeout($sock, 0, 1000);
        fclose($sock);

        $data = ['success' => '<div class="text-center small text-danger">Success! Command executed.</div>'];
        return response($data,200);
    }

    /**
     * Show form and btn of kick,ban,etc
     *
     * @param Request $request
     * @return $this
     */
    public function liveplayeraction(Request $request)
    {
        $player = $request->player;

        return view('partials.liveplayeraction')->with('player',$player);
    }

    public function liveserveraction(Request $request)
    {
        return view('partials.liveserveraction');
    }
}
