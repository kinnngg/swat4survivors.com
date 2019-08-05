@extends('layouts.main')
@section('meta-desc',"All Statistics of $player->name")
@section('title',$player->name)
@section('styles')
    <style>
        .text-points
        {
            font-weight:normal !important;
            font-style:italic !important;
        }
        .alert-inactive
        {
            padding: 5px;
            margin-bottom: 15px;
            border: 1px solid rgb(255, 0, 0);
             border-radius: 0px !important;
            background: rgba(255, 97, 97, 0.17);
            color: #a70000;
            text-align: center;
        }
        .guagecan{
            width: 8em !important;
            height: auto !important;
        }
        .light-grey-gradientBB
        {
            /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
            background: linear-gradient(#3b3b3b, #0c0c0c);
        }
        .panel-heading-separatorBB
        {
            margin-left: 10px;
            margin-right: 10px !important;
            padding-bottom: 6px;
            margin-bottom: 8px;
            border-bottom: 2px dashed #FF69B4;
        }
        .panel-heading
        {
            color: #fff !important;
            font-weight: bold;
            font-size: 1.1em;
            font-family: "Marcellus SC",serif !important;
            padding-top: 5px !important;
            padding-bottom: 5px !important;
        }
        .panel h3.header
        {
            color: #f8f8f8 !important;
        }
        .panel h3
        {
            font-weight: bold;
            font-size: 1.3em;
            font-family: "Marcellus SC",serif !important;
        }
        .table
        {
            padding: 14px !important;
            /*background-color: #FFF;*/
            border: 1px solid #CCC;
        }
        input[type="text"]
        {
            padding: 4px 8px;
            font-size: 13px;
            height: 35px;
            color: #808080;
            border: 1px solid #ccc;
            border-radius: 3px !important;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
        }
        .a-primary
        {
            color: #fff !important;
        }
        .color-gold
        {
            color: #ffd700 !important;
            text-shadow: 2px 2px 5px #DAA520;
        }
        .chevron-line
        {
            position: relative;
            height: 4px;
            margin: 60px 0 34px 0;
            background: linear-gradient(to right, #777777 0%, #444444 99%);
        }
    </style>
    @endsection
@section('main-container')
    <div class="col-xs-9">
        @include('partials._statistics-navbar')
        
        <div class="row panel player-rank-container light-grey-gradientBB" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
            <div class="col-xs-1">
                <img class="left" src="/images/game/chars/50/{{ $player->last_team."_".$player->loadout->body."_".$player->loadout->head }}.jpg">
            </div>
            <div class="col-xs-11">
                <div class="text-muted text-bold pull-left" style="font-size: 33px;">
                    {{ $player->name }}
                    <p class="small" style="font-size: 13px;">
                        @forelse($player->aliases()->whereNotIn('name',\App\DeletedPlayer::lists('player_name'))->limit(5)->get() as $alias)
                        @unless($player->name == $alias->name)
                            <span class="text-muted">aka <a href="{{  route('player-detail',$alias->name) }}">{{ $alias->name }}</a></span>
                        @endunless
                        @empty

                        @endforelse
                    </p>
                </div>
                @unless((\Carbon\Carbon::now()->timestamp - $player->lastGame->updated_at->timestamp) <= 60*60*24*7)
                        <p class="text-danger pull-right" style="font-size: 15px;">
                            {{ $player->name }} is not seen playing this week!
                        </p>
                    @endunless
            </div>
            <div class="col-xs-12"><br></div>
            <div class="col-xs-12">
                @foreach(App\Rank::where('id','>',1)->get() as $rank)
                    @if($rank->id == $player->rank->id)
                        <div class="col-xs-2 tooltipster" title="&lt;div class='text-center text-bold' &gt; {{ $rank->name }} &lt;/div&gt; &lt;br&gt;Points: {{ $rank->description }}">
                            <img src="/images/game/insignia/more/{{ $rank->id }}.png" style="height: 100%;width: 100%;/*border:1px solid #d62c1a;*/background: transparent;">
                            <p class="text-center" style="color: #d62c1a;margin-top: 5px;"><strong>{{ $rank->name }}</strong></p>
                        </div>
                    @else
                        <div class="col-xs-1 no-padding tooltipster" title="&lt;div class='text-center text-bold' &gt; {{ $rank->name }} &lt;/div&gt; &lt;br&gt;Points: {{ $rank->description }}">
                            <img src="/images/game/insignia/more/{{ $rank->id }}.png" style="height: 100%;width: 100%;background: transparent;">
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="col-xs-12"><br><br></div>
            <div class="col-xs-5">
                <div class="panel-heading panel-heading-separatorBB no-padding text-left">
                    Last Loadout
                </div>
                <div class="col-xs-6">
                    <img title="{{ $player->loadoutPa }}" class="tooltipster" src="/images/game/weapons/128/item{{ $player->loadout->primary_weapon }}.jpg" style="width: 100%;height: auto;max-height: 156px;">
                    <p class="text-center text-muted" style="margin-top: 5px;"><strong>{{ $player->loadoutPw }}</strong></p>
                </div>
                <div class="col-xs-6">
                    <img class="tooltipster" title="{{ $player->loadoutSa }}" src="/images/game/weapons/128/item{{ $player->loadout->secondary_weapon }}.jpg" style="width: 100%;height: auto;max-height: 156px;">
                    <p class="text-center text-muted" style="margin-top: 5px;"><strong>{{ $player->loadoutSw }}</strong></p>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-4 no-padding"><img class="tooltipster" title="{{ $player->loadoutEq1 }}" src="/images/game/weapons/64/item{{ $player->loadout->equip_one }}.jpg" style="width: 100%;"></div>
                    <div class="col-xs-4 no-padding"><img class="tooltipster" title="{{ $player->loadoutEq2 }}" src="/images/game/weapons/64/item{{ $player->loadout->equip_two }}.jpg" style="width: 100%;"></div>
                    <div class="col-xs-4 no-padding"><img class="tooltipster" title="{{ $player->loadoutEq3 }}" src="/images/game/weapons/64/item{{ $player->loadout->equip_three }}.jpg" style="width: 100%;"></div>
                    <div class="col-xs-4 no-padding"><img class="tooltipster" title="{{ $player->loadoutEq4 }}" src="/images/game/weapons/64/item{{ $player->loadout->equip_four }}.jpg" style="width: 100%;"></div>
                    <div class="col-xs-4 no-padding"><img class="tooltipster" title="{{ $player->loadoutEq5 }}" src="/images/game/weapons/64/item{{ $player->loadout->equip_five }}.jpg" style="width: 100%;"></div>
                    <div class="col-xs-4 no-padding"><img class="tooltipster" title="{{ $player->loadoutBr }}" src="/images/game/weapons/64/item{{ $player->loadout->breacher }}.jpg" style="width: 100%;"></div>
                    <p class="text-center text-muted" style="margin-top: 5px;width: 100%;float: left;text-align: center;"><strong>Equipment</strong>
                    </p>
                </div>
                <div class="col-xs-12">
                    <div class="col-xs-6"><img class="tooltipster" title="{{ $player->loadoutHead }}" src="/images/game/weapons/128/item{{ $player->loadout->head }}.jpg" style="width: 100%;">
                        <p class="text-center text-muted" style="margin-top: 5px;"><strong>{{ $player->loadoutHead }}</strong></p></div>
                    <div class="col-xs-6"><img class="tooltipster" title="{{ $player->loadoutBody }}" src="/images/game/weapons/128/item{{ $player->loadout->body }}.jpg" style="width: 100%;">
                        <p class="text-center text-muted" style="margin-top: 5px;"><strong>{{ $player->loadoutBody }}</strong></p>
                    </div>
                </div>
            </div>
            <div class="col-xs-7">
                <div class="panel-heading panel-heading-separatorBB no-padding text-left">
                    General Information
                </div>
                <table class="table table-condensed" style="border: 0px;font-size: 18px;">
                    <tbody>
                        <tr>
                            <td class="col-1 text-left color-gold">
                                <strong>Position</strong>
                            </td>
                            <td class="col-1 text-left text-success"><strong>{{ $player->position }}</strong></td>
                        </tr>
                        <tr>
                            <td class="col-5 text-left color-gold">
                                <strong>Rank</strong>
                            </td>
                            <td class="col-6 text-left text-muted"><strong>{{ $player->rankName }}</strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2 text-left color-gold">
                                <span style="border-bottom: 1px dotted darkgrey;" class="tooltipster" title="Available to those who played more than <b>10 hours</b> in server.<br><br>To keep your rating active you should play atleast <b>once every week</b>"><strong>Rating</strong></span>
                            </td>
                            <td class="col-3 text-left">
                                <strong>{!! $player->playerRating !!}</strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-5 text-left color-gold">
                                <span class="tooltipster" title="<b>Points are calculated by a secret Algorithm</b><br><br>Kills,Deaths,Arrests,Team Kills all affect points calculation.<br><br>Player ranks are allocated according to points."><strong>Total Points</strong></span>
                            </td>
                            <td class="col-6 text-left text-muted"><strong>{{ $player->total_points }}</strong>
                                @unless($playerPoints->isEmpty())
                                    {!! $playerPoints->sum('points') < 0 ?  "<span class='text-danger text-points small'>( -".$playerPoints->sum('points')." )</span>" : "<span class='text-green text-points small'>( +".$playerPoints->sum('points')." )</span>" !!}
                                @endunless
                            </td>
                        </tr>
                        <tr>
                            <td class="col-5 text-left color-gold">
                                <strong>Rounds Played</strong>
                            </td>
                            <td class="col-6 text-left text-muted"><strong>{{ $player->total_round_played }}</strong>
                            </td>
                        </tr>
                        <tr><td></td></tr>
                        <tr>
                            <td class="col-5 text-left color-gold">
                                <strong>Country</strong>
                            </td>
                            <td class="col-6 text-left text-muted"><strong>{{ $player->country->countryName }}</strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-5 text-left color-gold">
                                <strong>First Seen</strong>
                            </td>
                            <td class="col-6 text-left"><strong> {!! link_to_route('round-detail',$player->firstGame->created_at->diffForHumans(),[$player->first_game_id]) !!} </strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-5 text-left color-gold">
                                <strong>Last Seen</strong>
                            </td>
                            <td class="col-6 text-left"><strong>{!! link_to_route('round-detail',$player->lastGame->created_at->diffForHumans(),[$player->last_game_id]) !!}</strong>
                            </td>
                        </tr>
                        <tr>
                            <td class="col-2 text-left color-gold">
                                <strong>Time Played</strong>
                            </td>
                            <td class="col-3 text-left text-muted">
                                <strong>{{ $player->timePlayed }}</strong>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-5 text-left color-gold">
                                <strong>Owner</strong>
                            </th>
                            <td class="col-6 text-left text-muted"><strong>{!! $player->owner !!}</strong>
                            </td>
                        </tr>
                        @if(Auth::check() && Auth::user()->isAdmin())
                        <tr>
                            <th class="col-5 text-left color-gold">
                                <strong>Last IP Address</strong>
                            </th>
                            <td class="col-6 text-left text-info">{!! $player->last_ip_address !!}
                                <a title="View IP History" class='tooltipster fancybox livepfancy fancybox.ajax' href='/viewiphistory?player={{ $player->name }}'><i class='fa fa-cog color-gold'></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th class="col-5 text-danger text-left">
                                <strong>Delete Player</strong>
                            </th>
                            <td class="col-6 text-left">
                                <a class="btn btn-xs btn-danger" href="{{ route('player-delete',$player->name) }}">Delete</a>
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>

            <div class="col-xs-12">
                <br><br>
                <table class="table" style="border: 0px !important">
                    <thead style="border: 0px;">
                        <th class="panel-heading text-center" style="font-size: 22px;">
                            SCORE / MIN
                        </th>
                        <th class="panel-heading text-center" style="font-size: 22px;">
                            W/L RATIO
                        </th>
                        <th class="panel-heading text-center" style="font-size: 22px;">
                            ACCURACY
                        </th>
                        <th class="panel-heading text-center" style="font-size: 22px;">
                            K/D RATIO
                        </th>
                        <th class="panel-heading text-center" style="font-size: 22px;">
                            A/A RATIO
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <span class="color-gold" style="font-size: 35px;">{{ $player->score_per_min }}</span><br>
                                <span class="text-muted" style="font-size: 15px;">{{ $player->timePlayed }}</span>
                            </td>
                            <td>
                                <span class="color-gold" style="font-size: 35px;">{{ $player->winLostRatio }}</span><br>
                                <span class="text-muted" style="font-size: 15px;">{{ $player->game_won }} wins</span>
                            </td>
                            <td>
                                <span class="color-gold" style="font-size: 35px;">{{ $player->weaponAccuracy }}%</span><br>
                                <span class="text-muted" style="font-size: 15px;">Coming Soon</span>
                            </td>
                            <td>
                                <span class="color-gold" style="font-size: 35px;">{{ $player->killdeath_ratio }}</span><br>
                                <span class="text-muted" style="font-size: 15px;">{{ $player->total_kills }} kills</span>
                            </td>
                            <td>
                                <span class="color-gold" style="font-size: 35px;">{{ $player->arr_ratio }}</span><br>
                                <span class="text-muted" style="font-size: 15px;">{{ $player->total_arrests }} arrests</span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-xs-12"><br></div>
            <div class="col-xs-12">
                <h5 class="panel-heading panel-heading-separatorBB no-padding text-left">
                    All Time Statistics
                </h5>
                <div role="tabpanel">
                    <ul class="nav nav-tabs" role="tablist" style="background: transparent !important;">
                        <li role="presentation" class="active" style="border-bottom: 0px;"><a class="panel-heading" href="#killsarrests" aria-controls="killsarrests" role="tab" data-toggle="tab" style="background: transparent !important;">Kills / Arrests</a></li>
                        <li role="presentation"><a class="panel-heading" href="#scoring" aria-controls="scoring" role="tab" data-toggle="tab" style="background: transparent !important;">Scoring</a></li>
                        <li role="presentation"><a class="panel-heading" href="#violations" aria-controls="violations" role="tab" data-toggle="tab" style="background: transparent !important;">Violations</a></li>
                        <li role="presentation"><a class="panel-heading" href="#misc" aria-controls="misc" role="tab" data-toggle="tab" style="background: transparent !important;">Miscellaneous</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="killsarrests">
                            <table class="table no-margin" style="border-top: 0px;">
                                <tr>
                                    <td class="color-gold text-left">
                                        <strong>Kills</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->total_kills }}</strong>
                                    </td>
                                    <td class="color-gold text-left">
                                        <strong>Arrests</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->total_arrests }}</strong>
                                    </td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="color-gold text-left">
                                        <strong>Deaths</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->total_deaths }}</strong>
                                    </td>
                                    <td class="color-gold text-left">
                                        <strong>Arrested</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->total_arrested }}</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="color-gold text-left">
                                        <strong>K/D Ratio</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->killdeath_ratio }}</strong>
                                    </td>
                                    <td class="color-gold text-left">
                                        <strong>A/A Ratio</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->arr_ratio }}</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="color-gold text-left">
                                        <strong>Highest Kill Streak</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->best_killstreak }}</strong>
                                    </td>
                                    <td class="color-gold text-left">
                                        <strong>Highest Arrest Streak</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->best_arreststreak }}</strong>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="scoring">
                            <table class="table no-margin" style="border-top: 0px;">
                                <tr>
                                    <td class="color-gold text-left">
                                        <strong>Wins</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->game_won }}</strong>
                                    </td>
                                    <td class="color-gold text-left">
                                        <strong>Score/Min</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->score_per_min }}</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="color-gold text-left">
                                        <strong>Losses</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->game_lost }}</strong>
                                    </td>
                                    <td class="color-gold text-left">
                                        <strong>Highest Score</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->highest_score }}</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="color-gold text-left">
                                        <strong>W/L Ratio</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->winLostRatio }}</strong>
                                    </td>
                                    <td class="color-gold text-left">
                                        <strong>Draws</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->game_draw }}</strong>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="violations">
                            <table class="table no-margin" style="border-top: 0px;">
                                <tr>
                                    <td class="color-gold text-left">
                                        <strong>Teamkills</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->total_team_kills }}</strong>
                                    </td>
                                    <td class="color-gold text-left">
                                        <strong>Camps</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>Coming Soon</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="color-gold text-left">
                                        <strong>Teamtases</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>Coming Soon</strong>
                                    </td>
                                    <td class="color-gold text-left">
                                        <strong>Teambeanbags</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>Coming Soon</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="color-gold text-left">
                                        <strong>Arrest Kills</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>Coming Soon</strong>
                                    </td>
                                    <td class="color-gold text-left">
                                        <strong>Arrest Drops</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>Coming Soon</strong>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="misc">
                            <table class="table no-margin" style="border-top: 0px;">
                                <tr>
                                    <td class="color-gold text-left">
                                        <strong>Avg Weapon Accuracy</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->weaponAccuracy }}%</strong>
                                    </td>
                                    <td class="color-gold text-left">
                                        <strong>Shots Fired</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->totalAmmoFired }}</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="color-gold text-left">
                                        <strong>Longest Kill Distance</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ round($player->longestKillDistance/100) }} m</strong>
                                    </td>
                                    <td class="color-gold text-left">
                                        <strong>Suicides</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->total_suicides }}</strong>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="color-gold text-left">
                                        <strong>Score / Round</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->scorePerRound }}</strong>
                                    </td>
                                    <td class="color-gold text-left">
                                        <strong>Death Streak</strong>
                                    </td>
                                    <td class="text-muted text-right">
                                        <strong>{{ $player->best_deathstreak }}</strong>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12"><br></div>
            <div class="col-xs-12">
                <h5 class="panel-heading panel-heading-separatorBB no-padding text-left">
                    Used Equipment / Weapons
                </h5>
                <div role="tabpanel">
                    <ul class="nav nav-tabs" role="tablist" style="background: transparent !important;">
                        <li role="presentation" class="active" style="border-bottom: 0px;"><a class="panel-heading" href="#primary" aria-controls="primary" role="tab" data-toggle="tab" style="background: transparent !important;">Primary Weapon</a></li>
                        <li role="presentation"><a class="panel-heading" href="#secondary" aria-controls="secondary" role="tab" data-toggle="tab" style="background: transparent !important;">Secondary Weapon</a></li>
                        <li role="presentation"><a class="panel-heading" href="#tactical" aria-controls="tactical" role="tab" data-toggle="tab" style="background: transparent !important;">Tactical</a></li>
                        <li role="presentation"><a class="panel-heading" href="#breaching" aria-controls="breaching" role="tab" data-toggle="tab" style="background: transparent !important;">Breaching</a></li>
                    </ul>
                    <div class="tab-content">
                        @forelse($weaponFamilies as $weaponFamily)
                            @if($weaponFamily->first() != null && $weaponFamily->first()->family == 'Primary')
                                <div role="tabpanel" class="tab-pane active" id="primary">
                                    <table class="table no-margin">
                                        <thead>
                                            <tr style="font-size: 15px;font-weight: bold;">
                                                <td class="color-gold">Weapon</td>
                                                <td class="color-gold">Kills</td>
                                                <td class="color-gold">Time Used</td>
                                                <td class="color-gold">Kills / Min</td>
                                                <td class="color-gold">Accuracy</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse($weaponFamily as $weapon)
                                            <tr>
                                                <th class="col-xs-2 text-center" style="vertical-align: middle !important;"><img class="weapontableimg" src="/images/game/weapons/64/item{{ $weapon->id }}.jpg">
                                                <p class="no-margin padding5 text-danger"><b>{{ $weapon->name }}</b></p>
                                                </th>
                                                <th class="col-xs-1 text-center text-muted" style="vertical-align: middle !important;font-size: 17px;font-weight: bold;">{{ $weapon->kills }}</th>
                                                <th class="col-xs-1 text-center text-muted" style="vertical-align: middle !important;font-size: 17px;font-weight: bold;">{{ $weapon->time_used }}</th>
                                                <th class="col-xs-1 text-center text-muted" style="vertical-align: middle !important;font-size: 17px;font-weight: bold;">{{ $weapon->kills_per_min }}</th>
                                                <th class="col-xs-1 text-center text-muted" style="vertical-align: middle !important;font-size: 17px;font-weight: bold;">{{ $weapon->accuracy }}%</th>
                                            </tr>
                                            @empty
                                                <th>It's Lonely Here.</th>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            @elseif($weaponFamily->first() != null && $weaponFamily->first()->family == 'Secondary')
                                <div role="tabpanel" class="tab-pane" id="secondary">
                                    <table class="table no-margin" style="border-top: 0px;">
                                        <thead>
                                            <tr style="font-size: 15px;font-weight: bold;">
                                                <td class="color-gold">Weapon</td>
                                                <td class="color-gold">Kills</td>
                                                <td class="color-gold">Time Used</td>
                                                <td class="color-gold">Kills / Min</td>
                                                <td class="color-gold">Accuracy</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($weaponFamily as $weapon)
                                            <tr>
                                                <th class="col-xs-2 text-center" style="vertical-align: middle !important;"><img class="weapontableimg" src="/images/game/weapons/64/item{{ $weapon->id }}.jpg">
                                                    <p class="no-margin padding5 text-danger">{{ $weapon->name }}</p>
                                                </th>
                                                <th class="col-xs-1 text-center text-muted" style="vertical-align: middle !important;font-size: 17px;font-weight: bold;">{{ $weapon->kills }}</th>
                                                <th class="col-xs-1 text-center text-muted" style="vertical-align: middle !important;font-size: 17px;font-weight: bold;">{{ $weapon->time_used }}</th>
                                                <th class="col-xs-1 text-center text-muted" style="vertical-align: middle !important;font-size: 17px;font-weight: bold;">{{ $weapon->kills_per_min }}</th>
                                                <th class="col-xs-1 text-center text-muted" style="vertical-align: middle !important;font-size: 17px;font-weight: bold;">{{ $weapon->accuracy }}%</th>
                                            </tr>
                                        @empty
                                            <th>Its Lone here.</th>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            @elseif($weaponFamily->first() != null && $weaponFamily->first()->family == 'Tactical')
                                <div role="tabpanel" class="tab-pane" id="tactical">
                                    <table class="table no-margin" style="border-top: 0px;">
                                        <thead>
                                            <tr style="font-size: 15px;font-weight: bold;">
                                                <td class="color-gold">Weapon</td>
                                                <td class="color-gold">Stuns</td>
                                                <td class="color-gold">Time Used</td>
                                                <td class="color-gold">Stuns / Min</td>
                                                <td class="color-gold">Accuracy</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($weaponFamily as $weapon)
                                            <tr>
                                                <th class="col-xs-2 text-center" style="vertical-align: middle !important;"><img class="weapontableimg" src="/images/game/weapons/64/item{{ $weapon->id }}.jpg">
                                                    <p class="no-margin padding5 text-danger">{{ $weapon->name }}</p>
                                                </th>
                                                <th class="col-xs-1 text-center text-muted" style="vertical-align: middle !important;font-size: 17px;font-weight: bold;">{{ $weapon->shots_fired }}</th>
                                                <th class="col-xs-1 text-center text-muted" style="vertical-align: middle !important;font-size: 17px;font-weight: bold;">{{ $weapon->time_used }}</th>
                                                <th class="col-xs-1 text-center text-muted" style="vertical-align: middle !important;font-size: 17px;font-weight: bold;">{{ $weapon->stuns_per_min }}</th>
                                                <th class="col-xs-1 text-center text-muted" style="vertical-align: middle !important;font-size: 17px;font-weight: bold;">{{ $weapon->accuracy }}%</th>
                                            </tr>
                                        @empty
                                            <th>Its Lonely Here.</th>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            @elseif($weaponFamily->first() != null && $weaponFamily->first()->family == 'Others')
                                <div role="tabpanel" class="tab-pane" id="breaching">
                                    <table class="table no-margin" style="border-top: 0px;">
                                        <thead>
                                        <tr style="font-size: 15px;font-weight: bold;">
                                            <td class="color-gold">Weapon</td>
                                            <td class="color-gold">Kills</td>
                                            <td class="color-gold">Time Used</td>
                                            <td class="color-gold">Kills / Min</td>
                                            <td class="color-gold">Accuracy</td>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse($weaponFamily as $weapon)
                                            @unless($weapon->id == 32 || $weapon->id == 33)
                                            <tr>
                                                <th class="col-xs-2 text-center" style="vertical-align: middle !important;"><img class="weapontableimg" src="/images/game/weapons/64/item{{ $weapon->id }}.jpg">
                                                    <p class="no-margin padding5 text-danger">{{ $weapon->name }}</p>
                                                </th>
                                                <th class="col-xs-1 text-center text-muted" style="vertical-align: middle !important;font-size: 17px;font-weight: bold;">{{ $weapon->kills }}</th>
                                                <th class="col-xs-1 text-center text-muted" style="vertical-align: middle !important;font-size: 17px;font-weight: bold;">{{ $weapon->time_used }}</th>
                                                <th class="col-xs-1 text-center text-muted" style="vertical-align: middle !important;font-size: 17px;font-weight: bold;">{{ $weapon->kills_per_min }}</th>
                                                <th class="col-xs-1 text-center text-muted" style="vertical-align: middle !important;font-size: 17px;font-weight: bold;">{{ $weapon->accuracy }}%</th>
                                            </tr>
                                            @endunless
                                        @empty
                                            <th>Its Lone here.</th>
                                        @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            @endif
                        @empty
                            It's Empty
                        @endforelse
                    </div>
                </div>
            </div>

            <div class="col-xs-12"><br></div>
            <div class="col-xs-12">
                <h5 class="panel-heading panel-heading-separatorBB no-padding text-left">
                    <small class="pull-right"><i><b><a href="{{ route('player-rounds',$player->name) }}" style="color:#888;">show all</a></b></i></small>
                    Last Played Rounds
                </h5>
                <table class="table no-margin">
                    <thead>
                        <tr style="font-size: 18px !important;">
                            <th class="col-xs-1 color-gold">Round</th>
                            <th class="col-xs-2 color-gold text-center">Time</th>
                            <th class="col-xs-1 color-gold text-right">Swat</th>
                            <th class="col-xs-2 color-gold text-right">Suspects</th>
                            <th class="color-gold text-center">Map</th>
                            <th class="col-xs-2 text-right color-gold">Date</th>
                        </tr>
                    </thead>
                    <tbody id="data-items" class="roundstabledata">
                        @forelse($latestGames as $round)
                            <tr class="item pointer-cursor" data-id="{{ $round->id }}">
                                <td class="color-main text-bold text-left">{!! link_to_route('round-detail',$round->index,[$round->id]) !!}</td>
                                <td class="text-muted text-center">{{ $round->time }}</td>
                                <td class="text-right text-muted">{!! $round->swatScoreWithColor !!}</td>
                                <td class="text-right text-muted">{!! $round->suspectsScoreWithColor !!}</td>
                                <td class="text-info">{{ $round->mapName }}</td>
                                <td class="text-right text-muted tooltipster" title="{{ $round->timeDDTS }}">{{ $round->timeAgo }}</td>
                            </tr>
                         @empty
                            <th>Its lone here.</th>
                        @endforelse
                    </tbody>
                </table>
            </div>

            @unless($playerPoints->isEmpty())
                <div class="col-xs-12"><br></div>
                <div class="col-xs-12">
                    <h5 class="panel-heading panel-heading-separatorBB no-padding text-left">
                        Points Awarded {!! $playerPoints->sum('points') < 0 ?  "<span class='text-danger'>( -".$playerPoints->sum('points')." )</span>" : "<span class='text-green'>( +".$playerPoints->sum('points')." )</span>" !!}
                    </h5>
                    <table class="table no-margin">
                        <thead>
                            <tr style="font-size: 18px !important;">
                                <th class="col-xs-2 color-gold">Points</th>
                                <th class="col-xs-5 color-gold">Reason</th>
                                <th class="col-xs-2 color-gold text-center">Awarded By</th>
                                <th class="col-xs-2 color-gold text-right">Awarded At</th>
                                @if(Auth::check() && Auth::user()->isAdmin())
                                    <th class="col-xs-1"></th>
                                @endif
                            </tr>
                        </thead>
                        <tbody id="data-items" class="roundstabledata">
                            @forelse($playerPoints as $player)
                                <tr class="item">
                                    <td class="text-bold text-left">{!! $player->points < 0 ?  "<span class='text-danger'>".$player->points."</span>" : "<span class='text-green'>".$player->points."</span>" !!}</td>
                                    <td class="tooltipster text-left text-info" title="{{ $player->reason }}">{{ str_limit($player->reason,25) }}</td>
                                    <td class="color-main text-bold text-center">
                                        <a class="" style="margin-right:1em" href="{{ route('user.show',$player->admin->username) }}">
                                            <strong class="">{{ $player->admin->displayName() }}</strong>
                                        </a>
                                    </td>
                                    <td class="text-right text-muted">{{ $player->created_at->diffForHumans() }}</td>
                                    @if(Auth::check() && Auth::user()->isAdmin())
                                        <td>
                                            {!! Form::open(['route' => ['delete-playerpoints',urlencode($player->id)]]) !!}
                                            {!! Form::hidden('p_id',$player->id) !!}
                                            <button class="btn btn-xs btn-danger confirm tooltipster" title="Delete" type="submit">Delete</button>
                                            {!! Form::close() !!}
                                        </td>
                                    @endif
                                </tr>
                            @empty
                                <h1>Nothing in here :(</h1>
                            @endforelse
                            </tbody>
                    </table>
                </div>
            @endunless
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).ready(function(){
            makeGauge('gauge-spm', $('#gauge-spm').data('spm'), 5.00);
            makeGauge('gauge-wlr', $('#gauge-wlr').data('wlr'), 3.56);
            makeGauge('gauge-acr', $('#gauge-acr').data('acr'), 100.00);
            makeGauge('gauge-kdr', $('#gauge-kdr').data('kdr'), 5.00);
            makeGauge('gauge-aar', $('#gauge-aar').data('aar'), 3.56);
            makeGauge('gauge-spt', $('#gauge-spt').data('spt'), 25.00);

            $('.fancybox').fancybox();
        })
    </script>
@endsection