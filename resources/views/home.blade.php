@extends('layouts.main')
@section('styles')
    <style>
        .no-player-online {
            /*padding: 10px;*/
            text-align: center;
        }

        .font-13 {
            font-size: 13px;
        }

        .admincommandbtn {
            border-radius: 0px;
            margin-bottom: 10px;
            margin-right: 5px;
        }
        .ls-chats
        {
            background: linear-gradient(#3b3b3b, #0c0c0c);
            word-break: break-all;
            margin-left: 10px;
            margin-right: 10px;
        }
        .adminsrvcommandbtn
        {
            border-radius: 0px;
            margin-bottom: 10px;
            margin-right: 5px;
        }
        .panel-heading-separator
        {
            padding-bottom: 6px;
            margin-bottom: 8px;
            border-bottom: 2px dashed #FF69B4;
        }
        .panel-heading
        {
            color: #fff !important;
            font-weight: bold;
            font-size: 1.1em !important;
            font-family: "Marcellus SC",serif !important;
            padding-top: 5px !important;
            padding-bottom: 5px !important;
            text-shadow: 2px 2px 5px #FF69B4;
        }
        .panel h3.header
        {
            color: #f8f8f8 !important;
            font-family: "Marcellus SC",serif !important;
        }
        .panel h3
        {
            font-weight: bold;
            font-size: 1.2em;
            /*font-family: 'Trebuchet MS';*/
            font-family: "Marcellus SC",serif !important;
            text-shadow: 2px 2px 5px #FF69B4;
        }
        .header-separator
        {
            margin-left: 10px;
            margin-right: 10px !important;
            padding-bottom: 6px;
            margin-bottom: 8px;
            border-bottom: 2px dashed #FF69B4;
        }
        #shout-input-group2
        {
            border-top: 2px dashed #FF69B4;
            padding-top: 10px;
            margin-top: 10px;
            margin-left: 10px;
            margin-right: 10px;
            margin-bottom: 10px;
        }
        #serverchat-input-group-error
        {
            margin-top: 10px;
            margin-left: 10px !important;
            margin-right: 10px;
            margin-bottom: 10px;
        }
        .admin-info
        {
            margin-left: 10px !important;
            margin-right: 10px;
            margin-bottom: 10px;
            color: #f8f8f8 !important;
        }
        .admin-separator
        {
            padding-bottom: 6px;
            margin-bottom: 8px;
            border-bottom: 2px dashed #FF69B4;
        }
        #btn-chat
        {
            height: 35px;
            margin-left: 5px;
            cursor: pointer;
            line-height: 16px;
            color: #666;
            border: 1px solid #ababab;
            border-radius: 4px;
            box-shadow: 0 1px 1px rgba(0, 0, 0, .1);
            background: linear-gradient(#f9f9f9, #e8e8e8);
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
        .light-grey-gradient
        {
            /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
            background: linear-gradient(#3b3b3b, #0c0c0c);
        }
        .table
        {
            padding: 14px !important;
            /*background-color: transparent;*/
            border: 1px solid #CCC;
        }
        .color-gold
        {
            color: #ffd700 !important;
            text-shadow: 2px 2px 5px #DAA520;
        }
        .color-blue
        {
            color: #0000ff !important;
            text-shadow: 2px 2px 5px #1E90FF;
        }
    </style>
@endsection
@section('main-container')
    <div class="content col-xs-9">
        @if(Auth::check() && !Auth::user()->confirmed)
            <div class="alert alert-warning text-center row">
                <strong>You account is Muted! Verify your Email Address to unmute it!</strong><br> Dear Gamer, Please check your email ({{ Auth::user()->email }}) where we have sent a mail to verify your account. Just visit the link provided and follow the instructions to get your account verified. Once verified your account will get unmuted.
                <br>
                <b>{!! link_to_route('user.email.confirmation.resend','Resend Confirmation Email') !!}</b>
            </div>
        @endif

        @if($show_donation == "Hell")
        <div class="alert alert-info alert-dismissable text-center row">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Fellow Gamers!</strong> As we all know, we are frequently upgrading website and server & everything come at a cost. We always need your supports and feedbacks.
            If are are capable then please donate & help us keep this server online. <br>
            <br>
            <a target="_blank" class="btn btn-sm btn-primary" href="https://www.nfoservers.com/donate.pl?force_recipient=1&recipient=kinnngg786%40gmail.com">
                <i class="fa fa-cc"></i>
                Donate</a>
        </div>
        @endif

        <div id="server-viewer">
            <div class="row panel text-center live-server-summary light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
                <div class="col-xs-2 ls-swat4-summary">
                    <span class="info-title panel-heading" style="font-family: Marcellus SC;">SWAT</span>
                    <span class="color-gold info-value" id="ls-swat-score" style="font-family: Marcellus SC;color: #b4bcc2 !important;">0</span>
                    <span class="info-base" id="ls-swat-wins" style="font-family: Marcellus SC;">0 Wins</span>
                </div>
                <div class="col-xs-2 ls-suspects-summary">
                    <span class="info-title panel-heading" style="font-family: Marcellus SC;">SUSPECTS</span>
                    <span class="color-gold info-value" id="ls-suspects-score" style="font-family: Marcellus SC;color: #b4bcc2 !important;">0</span>
                    <span class="info-base" id="ls-suspects-wins" style="font-family: Marcellus SC;">0 Wins</span>
                </div>
                <div class="col-xs-3 ls-round-summary">
                    <span class="info-title panel-heading" style="font-family: Marcellus SC;">ROUND</span>
                    <span class="color-gold info-value" id="ls-round" style="font-family: Marcellus SC;">0/0</span>
                    <span class="info-base" id="ls-time" style="font-family: Marcellus SC;">00:00</span>
                </div>
                <div class="col-xs-5 ls-map-summary" style="font-family: Marcellus SC !important;">
                    <span class="info-title panel-heading" style="font-family: Marcellus SC;">MAP</span>
                    <span class="color-gold info-value" id="ls-map-name" style="font-family: Marcellus SC;">None</span>
                    <span class="info-base" id="ls-next-map" style="font-family: Marcellus SC;">Next: None</span>
                </div>
            </div> {{--Live Server Summary Ends --}}
            <div class="row">
                <div class="ls-players-and-top-player col-xs-6">
                    <div class="col-xs-12 panel light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);margin-left: -15px;">
                        <div class="panel-heading panel-heading-separator no-padding">
                            <span class="pull-right">
                                @if(Auth::check() && Auth::user()->isAdmin())
                            <a style='color:#fff;' class='fancybox livepfancy fancybox.ajax tooltipster' href='./liveserveraction' title='Server Action'><i class='fa fa-cog'></i></a>
                                @endif
                            </span>
                            Online Players <span id="ls-player-online"></span>
                        </div>
                        <div class="panel-body no-padding" id="ls-player-total-div" style="padding-bottom: 10px !important;">
                            <table class="table table-hover" id="ls-player-table">
                                <th class="loading-pt-info text-center">Loading
                                    Players table...
                                </th>
                            </table>
                        </div>

                    </div>
                    <div class="col-xs-12 panel light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);margin-left: -15px;">
                        <div class="panel-heading panel-heading-separator no-padding">Top Players</div>
                        <div class="panel-body no-padding">

                            <table class="table table-dark table-hover" style="border: 0px;">
                                <thead style="border-bottom: 1px solid #ddd;font-family: Marcellus SC;">
                                <tr>
                                    <th class="col-xs-1" style="color:#fff; font-weight: 900; font-size: 12px;">#</th>
                                    <th class="col-xs-1" style="color:#fff; font-weight: 900; font-size: 12px;">Rank</th>
                                    <th class="col-xs-1" style="color:#fff; font-weight: 900; font-size: 12px;">Name</th>
                                    <th class="col-xs-2 text-right" style="color:#fff; font-weight: 900; font-size: 12px;">Last Seen</th>
                                </tr>
                                </thead>
                                @forelse($topPlayers as $player)
                                    <tr style="border-bottom: 1px solid #ccc;margin-left: -5px;margin-right: -5px;">
                                        <th class="text-muted" style="vertical-align: middle;">{{ $player->position }}</th>
                                        <td style="vertical-align: middle;">{!! Html::image($player->rankImage,'',['title' => $player->rank->name,'class' => 'tooltipster' ,'height' => '22px']) !!}</td>
                                        <td class="text-bold color-main" style="vertical-align: middle;">{!! link_to_route('player-detail', $player->nameTrimmed, [$player->name]) !!}</td>
                                        <td class="text-right text-muted" style="vertical-align: middle;"><small>{{ $player->lastGame->created_at->diffForHumans() }}</small></td>
                                    </tr>
                                @empty
                                    Empty
                                @endforelse
                            </table>
                        </div>
                    </div>
                </div> {{--Server Players and Top Players Wrapper Ends--}}
                <div class="col-xs-6 panel no-padding" style="border-radius: 12px;background: linear-gradient(#3b3b3b, #0c0c0c);box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
                    <h3 class="header header-separator">Server Viewer<small class="pull-right"><b><a href="{{ route('chat.index') }}" style="color:#888;font-size: small !important;">show all</a></b></small></h3>
                    <div class="ls-chats">
                        <div class="loading-pt-info">Loading Server Chat...</div>
                    </div>
                    @if (Auth::check())
                        {!!  Form::open(['route' => 'server.chat', 'id' => 'serverchat-form']) !!}
                        <div id="shout-input-group2" class="input-group">
                            <input name="serverchatmsg" id="btn-input" type="text" class="textarea form-control"
                                   placeholder="Type your message here..." autocomplete="off">
                            <span class="input-group-btn">
                                <button class="btn" id="btn-chat">
                                    Send
                                </button>
                            </span>
                        </div>

                        <div id="serverchat-input-group-error" class="help-block"></div>
                            <div class="admin-info small">
                                <b>Translate:</b> <font color="red">!t</font>, <font color="red">!tr</font> or <font color="red">!translate</font> followed by text to translate from any language to english. Example: <font color="red">!tr salut les gars</font><br>
                            @if(Auth::user()->isAdmin())
                                <div class="admin-separator"></div>
                                <b>Note: You can execute any admin command using this chat also.</b> <br>
                                Example: <font color="red"><b>s4s</b> kick Name</font>, <font color="red"><b>s4s</b> restart</font>, <font color="red"><b>s4s</b> setmap 0</font>
                                @endif
                            </div>
                        {!! Form::close() !!}
                    @else
                        <div class='panel nomargin padding10 text-muted' style="background: transparent !important;border-bottom: 0px;border-right: 0px;border-left: 0px;"><b>{!!  link_to('/auth/login','Login') !!}
                                or {!! link_to('/auth/register', 'Register') !!} to chat with in-game players.</b>
                        </div>
                    @endif
                </div> {{--Live Server Viewer Ends--}}
            </div> {{--Live Server Players,Top Players and Server Viewer Row Ends--}}
        </div>
        <div class="server-viewer-loader row light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
            <div id="sv-loading" class="text-muted">Loading Server Viewer…</div>
        </div>

        <div class="row hidden-xs round-reports">
            <div class="col-xs-12 panel light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
                <div class="panel-heading panel-heading-separator no-padding" id="accordion">
                    Round Reports
                    <div class="pull-right">
                        <small><b><a href="{{ route('round-reports') }}" style="color:#888;font-size: small !important;">show all&nbsp;&nbsp;</a></b></small>
                        <a type="button" class="btn btn-xs pull-right" data-toggle="collapse" data-parent="#accordion"
                           href="#collapseTwo">
                            <span class="fa fa-chevron-down"></span>
                        </a>
                    </div>
                </div>
                <div class="" id="collapseTwo">
                    <div class="panel-body" style="padding-left: 0px !important;padding-right: 0px !important;padding-top: 0px !important;">
                        <table class="table table-dark table-hover no-margin" style="border: 0px;">
                            <thead style="border-bottom: 1px solid #ddd;font-family: Marcellus SC;">
                            <tr style="font-family: Marcellus SC;">
                                <th class="col-xs-1" style="color:#fff; font-weight: 900; font-size: 12px;">Round</th>
                                <th class="col-xs-2" style="color:#fff; font-weight: 900; font-size: 12px;">Time</th>
                                <th class="col-xs-1" style="color:#fff; font-weight: 900; font-size: 12px;">Swat</th>
                                <th class="col-xs-2" style="color:#fff; font-weight: 900; font-size: 12px;">Suspects</th>
                                <th style="color:#fff; font-weight: 900; font-size: 12px;">Map</th>
                                <th class="col-xs-2 text-right" style="color:#fff; font-weight: 900; font-size: 12px;">Date</th>
                            </tr>
                            </thead>
                            <tbody id="data-items" class="roundstabledata text-muted">
                            @foreach($latestGames as $round)
                                <tr class="item pointer-cursor" data-id="{{ $round->id }}" style="border-bottom: 1px solid #ccc;margin-left: -5px;margin-right: -5px;">
                                    <td class="color-main text-bold">{!! link_to_route('round-detail',$round->index,[$round->id]) !!}</td>
                                    <td class="text-muted">{{ $round->time }}</td>
                                    <td class="text-center">{!! $round->swatScoreWithColor !!}</td>
                                    <td class="text-center">{!! $round->suspectsScoreWithColor !!}</td>
                                    <td>{{ $round->mapName }}</td>
                                    <td class="text-right tooltipster" title="{{ $round->timeDDTS }}">{{ $round->timeAgo }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>                
            </div>
        </div>

        <div class="row player-records hidden-xs">
            <div class="col-xs-12 panel light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
                <div class="panel-heading panel-heading-separator no-padding" id="accordion">
                    Player Records
                    <div class="pull-right">
                        <a type="button" class="btn btn-xs" data-toggle="collapse" data-parent="#accordion"
                           href="#collapseThree">
                            <span class="fa fa-chevron-down"></span>
                        </a>
                    </div>
                </div>
                <div class="" id="collapseThree">
                    <div class="panel-body" style="padding-left: 0px !important;padding-right: 0px !important;padding-top: 0px !important;">
                        <div class="col-articles articles">
                            <div>
                                <!--Tab Starts-->
                                <div role="tabpanel" style="font-family: Marcellus SC;">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-tabs" role="tablist" style="border: 0px !important;">
                                        <li role="presentation" class="active"><a class="ainorange" href="#pastweek"
                                                                            aria-controls="pastweek" role="tab"
                                                                            data-toggle="tab">Past Week</a></li>
                                        <li role="presentation"><a class="ainorange" href="#pastmonth"
                                                                   aria-controls="pastmonth" role="tab" data-toggle="tab">Past
                                                Month</a></li>
                                        <li role="presentation"><a class="ainorange" href="#pastyear"
                                                                   aria-controls="pastyear" role="tab" data-toggle="tab">Past
                                                Year</a></li>
                                        <li role="presentation"><a class="ainorange" href="#alltime"
                                                                                  aria-controls="alltime" role="tab"
                                                                                  data-toggle="tab">All Time</a></li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content text-muted" style="background-color: transparent;">
                                        <div role="tabpanel" class="tab-pane active" id="pastweek">
                                            <table class="table borderless playerrecordtable">
                                                <tbody>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon totalscore"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Total Score
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastWeek->totalScore->name,[$PastWeek->totalScore->name]) !!}
                                                        <!--<span class="small">({{ $PastWeek->totalScore->totalscore }})</span>-->
                                                        <span class="small badge">{{ $PastWeek->totalScore->totalscore }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon arrests"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Arrests
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastWeek->totalArrests->name,[$PastWeek->totalArrests->name]) !!}
                                                        <span class="small badge">{{ $PastWeek->totalArrests->totalarrests }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon highscore"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        High Score
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastWeek->highestScore->name,[$PastWeek->highestScore->name]) !!}
                                                        <span class="small badge">{{ $PastWeek->highestScore->highestscore }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon arrested"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Arrested
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastWeek->totalArrested->name,[$PastWeek->totalArrested->name]) !!}
                                                        <span class="small badge">{{ $PastWeek->totalArrested->totalarrested }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon totalscore"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Score/Min
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastWeek->bestScorePerMin->name,[$PastWeek->bestScorePerMin->name]) !!}
                                                        <span class="small badge">{{ round($PastWeek->bestScorePerMin->toArray()['scorepermin'],2) }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon arreststreak"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Arrest Streak
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastWeek->bestArrestStreak->name,[$PastWeek->bestArrestStreak->name]) !!}
                                                        <span class="small badge">{{ $PastWeek->bestArrestStreak->best_arrest_streak }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon time"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Time Played
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastWeek->totalTimePlayed->name,[$PastWeek->totalTimePlayed->name]) !!}
                                                        <span class="small badge">{{ App\Server\Utils::getHMbyS($PastWeek->totalTimePlayed->totaltimeplayed,"%dh %dm") }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon kills"></div>
                                                    </td>
                                                    <td class="col-5">Kills</td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastWeek->totalKills->name,[$PastWeek->totalKills->name]) !!}
                                                        <span class="small badge">{{ $PastWeek->totalKills->totalkills }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon deaths"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Death Streak
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastWeek->bestDeathStreak->name,[$PastWeek->bestDeathStreak->name]) !!}
                                                        <span class="small badge">{{ $PastWeek->bestDeathStreak->best_death_streak }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon deaths"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Deaths
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastWeek->totalDeaths->name,[$PastWeek->totalDeaths->name]) !!}
                                                        <span class="small badge">{{ $PastWeek->totalDeaths->totaldeaths }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon teamkills"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Team Kills
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastWeek->totalTeamKills->name,[$PastWeek->totalTeamKills->name]) !!}
                                                        <span class="small badge">{{ $PastWeek->totalTeamKills->totalteamkills }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon killstreak"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Kill Streak
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastWeek->bestKillStreak->name,[$PastWeek->bestKillStreak->name]) !!}
                                                        <span class="small badge">{{ $PastWeek->bestKillStreak->best_kill_streak }}</span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="pastmonth">
                                            <table class="table borderless playerrecordtable">
                                                <tbody>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon totalscore"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Total Score
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastMonth->totalScore->name,[$PastMonth->totalScore->name]) !!}
                                                        <span class="small badge">{{ $PastMonth->totalScore->totalscore }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon arrests"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Arrests
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastMonth->totalArrests->name,[$PastMonth->totalArrests->name]) !!}
                                                        <span class="small badge">{{ $PastMonth->totalArrests->totalarrests }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon highscore"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        High Score
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastMonth->highestScore->name,[$PastMonth->highestScore->name]) !!}
                                                        <span class="small badge">{{ $PastMonth->highestScore->highestscore }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon arrested"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Arrested
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastMonth->totalArrested->name,[$PastMonth->totalArrested->name]) !!}
                                                        <span class="small badge">{{ $PastMonth->totalArrested->totalarrested }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon totalscore"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Score/Min
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastMonth->bestScorePerMin->name,[$PastMonth->bestScorePerMin->name]) !!}
                                                        <span class="small badge">{{ round($PastMonth->bestScorePerMin->toArray()['scorepermin'],2) }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon arreststreak"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Arrest Streak
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastMonth->bestArrestStreak->name,[$PastMonth->bestArrestStreak->name]) !!}
                                                        <span class="small badge">{{ $PastMonth->bestArrestStreak->best_arrest_streak }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon time"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Time Played
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastMonth->totalTimePlayed->name,[$PastMonth->totalTimePlayed->name]) !!}
                                                        <span class="small badge">{{ App\Server\Utils::getHMbyS($PastMonth->totalTimePlayed->totaltimeplayed,"%dh %dm") }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon kills"></div>
                                                    </td>
                                                    <td class="col-5">Kills</td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastMonth->totalKills->name,[$PastMonth->totalKills->name]) !!}
                                                        <span class="small badge">{{ $PastMonth->totalKills->totalkills }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon deaths"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Death Streak
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastMonth->bestDeathStreak->name,[$PastMonth->bestDeathStreak->name]) !!}
                                                        <span class="small badge">{{ $PastMonth->bestDeathStreak->best_death_streak }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon deaths"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Deaths
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastMonth->totalDeaths->name,[$PastMonth->totalDeaths->name]) !!}
                                                        <span class="small badge">{{ $PastMonth->totalDeaths->totaldeaths }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon teamkills"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Team Kills
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastMonth->totalTeamKills->name,[$PastMonth->totalTeamKills->name]) !!}
                                                        <span class="small badge">{{ $PastMonth->totalTeamKills->totalteamkills }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon killstreak"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Kill Streak
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastMonth->bestKillStreak->name,[$PastMonth->bestKillStreak->name]) !!}
                                                        <span class="small badge">{{ $PastMonth->bestKillStreak->best_kill_streak }}</span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="pastyear">
                                            <table class="table borderless playerrecordtable">
                                                <tbody>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon totalscore"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Total Score
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastYear->totalScore->name,[$PastYear->totalScore->name]) !!}
                                                        <span class="small badge">{{ $PastYear->totalScore->totalscore }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon arrests"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Arrests
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastYear->totalArrests->name,[$PastYear->totalArrests->name]) !!}
                                                        <span class="small badge">{{ $PastYear->totalArrests->totalarrests }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon highscore"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        High Score
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastYear->highestScore->name,[$PastYear->highestScore->name]) !!}
                                                        <span class="small badge">{{ $PastYear->highestScore->highestscore }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon arrested"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Arrested
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastYear->totalArrested->name,[$PastYear->totalArrested->name]) !!}
                                                        <span class="small badge">{{ $PastYear->totalArrested->totalarrested }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon totalscore"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Score/Min
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastYear->bestScorePerMin->name,[$PastYear->bestScorePerMin->name]) !!}
                                                        <span class="small badge">{{ round($PastYear->bestScorePerMin->toArray()['scorepermin'],2) }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon arreststreak"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Arrest Streak
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastYear->bestArrestStreak->name,[$PastYear->bestArrestStreak->name]) !!}
                                                        <span class="small badge">{{ $PastYear->bestArrestStreak->best_arrest_streak }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon time"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Time Played
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastYear->totalTimePlayed->name,[$PastYear->totalTimePlayed->name]) !!}
                                                        <span class="small badge">{{ App\Server\Utils::getHMbyS($PastYear->totalTimePlayed->totaltimeplayed,"%dh %dm") }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon kills"></div>
                                                    </td>
                                                    <td class="col-5">Kills</td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastYear->totalKills->name,[$PastYear->totalKills->name]) !!}
                                                        <span class="small badge">{{ $PastYear->totalKills->totalkills }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon deaths"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Death Streak
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastYear->bestDeathStreak->name,[$PastYear->bestDeathStreak->name]) !!}
                                                        <span class="small badge">{{ $PastYear->bestDeathStreak->best_death_streak }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon deaths"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Deaths
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastYear->totalDeaths->name,[$PastYear->totalDeaths->name]) !!}
                                                        <span class="small badge">{{ $PastYear->totalDeaths->totaldeaths }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon teamkills"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Team Kills
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$PastYear->totalTeamKills->name,[$PastYear->totalTeamKills->name]) !!}
                                                        <span class="small badge">{{ $PastYear->totalTeamKills->totalteamkills }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon killstreak"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Kill Streak
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$PastYear->bestKillStreak->name,[$PastYear->bestKillStreak->name]) !!}
                                                        <span class="small badge">{{ $PastYear->bestKillStreak->best_kill_streak }}</span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div role="tabpanel" class="tab-pane" id="alltime">
                                            <table class="table borderless playerrecordtable">
                                                <tbody>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon totalscore"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Total Score
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$AllTime->totalScore->name,[$AllTime->totalScore->name]) !!}
                                                        <span class="small badge">{{ $AllTime->totalScore->totalscore }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon arrests"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Arrests
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$AllTime->totalArrests->name,[$AllTime->totalArrests->name]) !!}
                                                        <span class="small badge">{{ $AllTime->totalArrests->totalarrests }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon highscore"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        High Score
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$AllTime->highestScore->name,[$AllTime->highestScore->name]) !!}
                                                        <span class="small badge">{{ $AllTime->highestScore->highestscore }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon arrested"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Arrested
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$AllTime->totalArrested->name,[$AllTime->totalArrested->name]) !!}
                                                        <span class="small badge">{{ $AllTime->totalArrested->totalarrested }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon totalscore"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Score/Min
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$AllTime->bestScorePerMin->name,[$AllTime->bestScorePerMin->name]) !!}
                                                        <span class="small badge">{{ round($AllTime->bestScorePerMin->toArray()['scorepermin'],2) }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon arreststreak"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Arrest Streak
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$AllTime->bestArrestStreak->name,[$AllTime->bestArrestStreak->name]) !!}
                                                        <span class="small badge">{{ $AllTime->bestArrestStreak->best_arrest_streak }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon time"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Time Played
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$AllTime->totalTimePlayed->name,[$AllTime->totalTimePlayed->name]) !!}
                                                        <span class="small badge">{{ App\Server\Utils::getHMbyS($AllTime->totalTimePlayed->totaltimeplayed,"%dh %dm") }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon kills"></div>
                                                    </td>
                                                    <td class="col-5">Kills</td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$AllTime->totalKills->name,[$AllTime->totalKills->name]) !!}
                                                        <span class="small badge">{{ $AllTime->totalKills->totalkills }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon deaths"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Death Streak
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$AllTime->bestDeathStreak->name,[$AllTime->bestDeathStreak->name]) !!}
                                                        <span class="small badge">{{ $AllTime->bestDeathStreak->best_death_streak }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon deaths"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Deaths
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$AllTime->totalDeaths->name,[$AllTime->totalDeaths->name]) !!}
                                                        <span class="small badge">{{ $AllTime->totalDeaths->totaldeaths }}</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="col-1">
                                                        <div class="player-records-icon teamkills"></div>
                                                    </td>
                                                    <td class="col-2">
                                                        Team Kills
                                                    </td>
                                                    <td class="col-3">
                                                        {!! link_to_route('player-detail',$AllTime->totalTeamKills->name,[$AllTime->totalTeamKills->name]) !!}
                                                        <span class="small badge">{{ $AllTime->totalTeamKills->totalteamkills }}</span>
                                                    </td>
                                                    <td class="col-4">
                                                        <div class="player-records-icon killstreak"></div>
                                                    </td>
                                                    <td class="col-5">
                                                        Kill Streak
                                                    </td>
                                                    <td class="col-6">
                                                        {!! link_to_route('player-detail',$AllTime->bestKillStreak->name,[$AllTime->bestKillStreak->name]) !!}
                                                        <span class="small badge">{{ $AllTime->bestKillStreak->best_kill_streak }}</span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--/Tab Ends-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row player-records">
            <div class="col-xs-12 panel light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
                <div class="panel-heading panel-heading-separator no-padding" id="accordion">
                    Latest Bans
                    <div class="pull-right">
                        <small><b><a href="{{ route('bans.index') }}" style="color:#888;font-size: small !important;">show all&nbsp;&nbsp;</a></b></small>
                        <a type="button" class="btn btn-xs pull-right" data-toggle="collapse" data-parent="#accordion"
                           href="#collapseFour">
                            <span class="fa fa-chevron-down"></span>
                        </a>
                    </div>
                </div>
                <div class="" id="collapseFour">
                    <div class="panel-body" style="padding-left: 0px !important;padding-right: 0px !important;padding-top: 0px !important;">
                        <table id="" class="table table-dark table-hover no-margin" style="border: 0px;">
                            <thead style="border-bottom: 1px solid #ddd;font-family: Marcellus SC;">
                            <tr style="font-family: Marcellus SC;">
                                <th class="col-xs-1"></th>
                                <th class="col-xs-3" style="color:#fff; font-weight: 900; font-size: 14px;">Name</th>
                                <th class="col-xs-2" style="color:#fff; font-weight: 900; font-size: 14px;">IP Address</th>
                                <th class="col-xs-3" style="color:#fff; font-weight: 900; font-size: 14px;">Banned By</th>
                                <th class="col-xs-2 text-right" style="color:#fff; font-weight: 900; font-size: 14px;">Date</th>
                            </tr>
                            </thead>
                            <tbody id="">
                            @foreach($bans as $ban)
                                <tr class="item" style="border-bottom: 1px solid #ccc;margin-left: -5px;margin-right: -5px;">
                                    <td class="text-muted"><img class="tooltipster" title="{{ $ban->countryName }}"
                                                                src="{{ $ban->countryImage }}" alt="" height="22px"/></td>
                                    <td class="color-main text-bold">{!! link_to_route('bans.show',$ban->name,[$ban->id]) !!}</td>
                                    <td class="text-muted">{!! $ban->ipAddrWithMask !!}</td>
                                    <td class="text-muted text-bold">{!! $ban->bannedByAdminURL !!}</td>
                                    <td class="text-right tooltipster text-muted" title="{{ $ban->updated_at->toDayDateTimeString() }}">{!! $ban->updated_at->diffForHumans() !!}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row player-records">
            <div class="col-xs-12 panel light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
                <div class="panel-heading panel-heading-separator no-padding" id="accordion">
                    Global Notifications
                    <div class="pull-right">
                        <small><b><a href="{{ route('notifications.index') }}" style="color:#888;font-size: small !important;">show all&nbsp;&nbsp;</a></b></small>
                        <a type="button" class="btn btn-xs" data-toggle="collapse" data-parent="#accordion"
                           href="#collapseFive">
                            <span class="fa fa-chevron-down"></span>
                        </a>
                    </div>
                </div>
                <div class="" id="collapseFive">
                    <div class="panel-body font-13" style="padding-left: 0px !important;padding-right: 0px !important;padding-top: 0px !important;">
                        <ul class="notifications">
                            @forelse($notifications as $notification)
                            <li class="notification pad5">
                                <div class="media">
                                    <div class="media-body text-muted">
                                        {!! $notification->body !!}

                                        <div class="notification-meta pull-right">
                                            <small class="timestamp">{{ $notification->created_at->diffForHumans() }}</small>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            @empty
                                <h3 class="text-center">No Notifications</h3>
                            @endforelse
                        </ul>
                    </div>
                </div>
              </div>
            </div>

            <div style="margin-bottom: 15px;" class="row player-records">
                <div class="col-xs-12 panel light-grey-gradient" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
                    <div class="panel-heading panel-heading-separator no-padding" id="accordion">
                        Last Active Users
                        <div class="btn-group pull-right">
                            <a type="button" class="btn btn-xs" data-toggle="collapse" data-parent="#accordion"
                               href="#collapseSix">
                                <span class="fa fa-chevron-down"></span>
                            </a>
                        </div>
                    </div>
                    <div class="" id="collapseSix">
                        <div class="panel-body font-13" style="padding-left: 0px !important;padding-right: 0px !important;padding-top: 0px !important;">
                            @forelse($activeUsers as $user)
                                <a class="{{ "color-".$user->roles()->first()->name }}" style="margin-right:1em"
                                   href="{{ route('user.show',$user->username) }}"><strong class="">{{ $user->displayName() }}{!! $user->isOnline ? "<sup class='text-green'>&#x25cf;</sup>" : "" !!}</strong></a>
                            @empty
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div> {{--Main Content Ends--}}
    </div>
        @endsection

        {{--Scripts section for Home Page--}}
        @section('scripts')
            <script type="text/javascript">

                var sv = {
                    url: '',
                    elems: {},
                    roundTime: 0,

                    init: function (obj) {
                        sv.url = obj.url;

                        //$('#ls-player-limit').text(player_max);

                        sv.elems = {
                            $container: $('#server-viewer'),
                            $scoreSwat: $('#ls-swat-score'),
                            $scoreSuspects: $('#ls-suspects-score'),
                            $swatWon: $('#ls-swat-wins'),
                            $susWon: $('#ls-suspects-wins'),
                            $onlinePlayers: $('#ls-player-total-div'),
                            $numPlayers: $('#ls-player-online'),
                            $chat: $('.ls-chats'),
                            $map: $('#ls-map-name'),
                            $nextMap: $('#ls-next-map'),
                            $roundNum: $('#ls-round'),
                            $roundTime: $('#ls-time')
                        };

                        $.doTimeout('svUpdate', 3000, sv.update);
                        $.doTimeout('svUpdate', true);

                        $.doTimeout('roundTime', 1000, sv.updateRoundTime);
                        $.doTimeout('roundTime', true);

                    },

                    update: function () {
                        $.getJSON(sv.url + '/get3', function (obj) {
                            if (!obj.isOnline) {
                                sv.elems.$container.fadeOut(300).next().show();
                                return;
                            }

                            var colors = sv.getScoreColors(obj.scoreSwat, obj.scoreSuspects);

                            sv.elems.$scoreSwat.html(obj.scoreSwat).css('color', colors[0]);
                            sv.elems.$scoreSuspects.html(obj.scoreSuspects).css('color', colors[1]);
                            sv.elems.$swatWon.html(obj.swatWon + ' win' + (obj.swatWon == 1 ? '' : 's'));
                            sv.elems.$susWon.html(obj.susWon + ' win' + (obj.susWon == 1 ? '' : 's'));
                            sv.elems.$roundNum.html(obj.roundNumber + '/' + obj.numRounds);
                            sv.updateRoundTime(obj.roundTime);
                            sv.elems.$map.html(obj.title).attr('title', obj.title);
                            sv.elems.$nextMap.html("Next: " + getMapByClass(obj.nextMap));
                            sv.elems.$numPlayers.html('(' + obj.numPlayers + '/' + obj.maxPlayers + ')');
                            sv.elems.$chat.html(obj.chatContent);

                            $('.tooltipster', sv.elems.$onlinePlayers).poshytip('destroy');
                            sv.elems.$onlinePlayers.html(obj.onlinePlayersContent);

                            sv.playerCountries = obj.playerCountries;

                            sv.elems.$container.delay(1000).fadeIn(300).next().delay(700).fadeOut(300);
                        });
                        return true; // loop
                    },

                    getScoreColors: function (swat, suspects) {
                        var tied = '#000', win = '#17AF17', loose = '#BB2F0E';

                        if (swat == suspects) {
                            return [tied, tied];
                        }
                        if (swat > suspects) {
                            return [win, loose];
                        }
                        return [loose, win];
                    },

                    updateRoundTime: function (roundTime) {
                        var mins, secs, formatted = '∞';

                        if (typeof roundTime != 'undefined') {
                            sv.roundTime = roundTime;
                        }
                        else if (sv.roundTime > 0) {
                            sv.roundTime--;
                        }

                        if (sv.roundTime > 0) {
                            mins = Math.floor(sv.roundTime / 60);
                            secs = sv.roundTime % 60;
                            formatted = mins + ':' + (secs < 10 ? '0' : '') + secs;
                        }

                        sv.elems.$roundTime.html(formatted);
                        return true; // loop
                    }
                };

                $(document).ready(function () {
                    sv.init({url: '/api/server-query'});

                    //Admin server commands ajax
                    $('body').on('click','.adminsrvcommandbtn',function(e) {

                        $('#admincommand-input-group-error').html('');

                        $.ajax({
                            type: 'POST',
                            url: '/kossrvadmin',
                            data: $('#adminsrvcommandform').serialize() + "&action=" + $(this).data('type'),
                            dataType: 'json',
                            encode: true,
                            beforeSend: function () {
                                $(this).hide();
                                $("#admincommand-input-group-error").html("<option class='text-center small'>Executing Command!  Plz wait...</option>");
                            },
                            success: function (data) {
                                $(this).show();
                                $.fancybox.close();
                                $('#admincommand-input-group-error').html('');
                            },
                            error: function (data) {
                                //$.fancybox.close();
                                var errors = data.responseJSON;
                                var message = "Unknown error! reload page.";
                                switch (data.status) {
                                    case 422:
                                        message = errors.error;
                                        break;
                                    case 500:
                                        message = "Server error! please reload the page.";
                                        break;
                                    default:
                                        message = data.statusText;
                                        break;
                                }

                                $(this).show();
                                $('#admincommand-input-group-error').html("");
                                $('#admincommand-input-group-error').html(message);
                            }
                        });
                        e.preventDefault();
                    });

                    //Admin players commands ajax
                    $('body').on('click','.admincommandbtn',function(e) {

                        $('#admincommand-input-group-error').html('');

                        $.ajax({
                            type: 'POST',
                            url: '/kosadmin',
                            data: $('#admincommandform').serialize() + "&action=" + $(this).data('type'),
                            dataType: 'json',
                            encode: true,
                            beforeSend: function () {
                                $(this).hide();
                                $("#admincommand-input-group-error").html("<option class='text-center small'>Executing Command!  Plz wait...</option>");
                            },
                            success: function (data) {
                                $(this).show();
                                $.fancybox.close();
                                $('#admincommand-input-group-error').html('');
                            },
                            error: function (data) {

                                //$.fancybox.close();
                                var errors = data.responseJSON;
                                var message = "Unknown error! reload page.";
                                switch (data.status) {
                                    case 422:
                                        message = errors.error;
                                        break;
                                    case 500:
                                        message = "Server error! please reload the page.";
                                        break;
                                    default:
                                        message = data.statusText;
                                        break;
                                }

                                $(this).show();
                                $('#admincommand-input-group-error').html("");
                                $('#admincommand-input-group-error').html(message);
                            }
                        });
                        e.preventDefault();
                    });


                    $('.fancybox').fancybox();

                    @if($show_add)
                        $.fancybox.open({
                            padding: 0,

                            openEffect: 'elastic',
                            openSpeed: 150,

                            closeEffect: 'elastic',
                            closeSpeed: 150,

                            closeClick: true,

                            helpers: {
                                title : {
                                    type : 'over'
                                }
                            },
                            href: 'images/kos_tourny.jpg',
                            title: '<a class="text-bold" href="./tournament">Click here<a/> to visit tournaments page for more information.'
                        });
                    @endif
                });
            </script>
@endsection
