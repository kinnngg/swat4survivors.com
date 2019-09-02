<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use File;
use Response;

class DownloadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        return view('downloads');
    }

    public function download($name)
    {
        switch($name)
        {
            case 1:
                $name = "AMMod.u";
                break;
            case 2:
                $name = "antics_v1.u";
                break;
            case 3:
                $name = "KMod.u";
                break;
            case 4:
                $name = "StreakMod.u";
                break;
            case 5:
                $name = "Map_Converter.rar";
                break;
            case 6:
                $name = "Prima_Official_Game_Guide.pdf";
                break;
            case 7:
                $name = "SWAT4_Launcher.rar";
                break;
            case 8:
                $name = "SWAT4_Modding_Overview.pdf";
                break;
            case 9:
                $name = "SWAT4_Toolkit.rar";
                break;
            case 10:
                $name = "SWAT4SBA_install.exe";
                break;
            case 11:
                $name = "SWT4_Mn_TX_7162010.pdf";
                break;
            default:
                $name = "";
        }


        $file = storage_path() . DIRECTORY_SEPARATOR. "{$name}";
        //dd($file);
        if(File::exists($file))
        {
            return Response::download($file, $name);
        }
        else
        {
            return redirect()->home()->with('error','Error! File Not Found');
        }
    }
}
