@extends('layouts.main')
@section('meta-desc',"List of all players.")
@section('title',"Top Players")

@section('styles')
    <style>
        .pad10lr
        {
            padding: 0px 10px 0px 10px !important;
        }
        .pad10lf
        {
            padding: 0px 10px 0px 15px !important;
        }
        .pad10ll
        {
            padding: 0px 15px 0px 10px !important;
        }
        .light-grey-gradient8
        {
            /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
            background: linear-gradient(#3b3b3b, #0c0c0c);
        }
        tr:hover
        {
            background-color: #6c6c6c !important;
        }
        .panel-heading-separator8
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
    </style>
@endsection

@section('main-container')
    <div class="col-xs-9">
        @include('partials._statistics-navbar')
        <div class="row">
            <div class="col-xs-3 pad10lf">
                <div class="panel col-xs-12 pad10 light-grey-gradient8" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);border-color: #00ff00;">
                    <div class="col-xs-3"><i class="fad fa-user fa-3x text-muted" style="margin-left: -15px;"></i></div>
                    <div class="col-xs-9 no-padding text-left panel-heading" style="padding-left: 5px !important;"><b>Players Today:</b><br><span class="color-gold">{{ \App\PlayerTotal::todaycount() }}<span></div>
                </div>
            </div>
            <div class="col-xs-3 pad10lr">
                <div class="panel col-xs-12 pad10 light-grey-gradient8" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);border-color: #0000ff;">
                    <div class="col-xs-3"><i class="fad fa-users fa-3x text-muted" style="margin-left: -15px;"></i></div>
                    <div class="col-xs-9 no-padding text-left panel-heading" style="padding-left: 20px !important;"><b>Total Players:</b><br><span class="color-gold">{{ \App\PlayerTotal::count() }}</span></div>
                </div>
            </div>
            <div class="col-xs-3 pad10lr">
                <div class="panel col-xs-12 pad10 light-grey-gradient8" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);border-color: #ffa500;">
                    <div class="col-xs-3"><i class="fad fa-analytics fa-3x text-muted" style="margin-left: -15px;"></i></div>
                    <div class="col-xs-9 no-padding text-left panel-heading" style="padding-left: 15px !important;"><b>Rounds Played:</b><br><span class="color-gold">{{ \App\Game::count() }}</span></div>
                </div>
            </div>
            <div class="col-xs-3 pad10ll">
                <div class="panel col-xs-12 pad10 light-grey-gradient8" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);border-color: #ff0000;">
                    <div class="col-xs-3"><i class="fad fa-clock fa-3x text-muted" style="margin-left: -15px;"></i></div>
                    <div class="col-xs-9 no-padding text-left panel-heading" style="padding-left: 10px !important;"><b>Last updated:</b><br><span class="color-gold">{{ \App\PlayerTotal::first()->updated_at->diffForHumans() }}</span></div>
                </div>
            </div>
        </div>

        <div class="rounds panel light-grey-gradient8" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separator8 no-padding">
                <small class="pull-right" style="color:#888;">Total Players: {{ App\PlayerTotal::count() }}</small>
                Swat 4 Survivors Top Players
            </div>
            <div class="panel-body">
                <table id="" class="table no-margin" style="border: 0px;">
                    <thead style="font-family: Marcellus SC;">
                    <tr>
                        <th class="col-xs-1" style="font-weight: 900; font-size: 12px;">{!! sort_players_by('position','#') !!}</th>
                        <th class="col-xs-1 text-center" style="font-weight: 900; font-size: 12px;">{!! sort_players_by('rank_id','Rank') !!}</th>
                        <th class="col-xs-3" style="font-weight: 900; font-size: 12px;">{!! sort_players_by('name','Name') !!}</th>
                        <th class="col-xs-1" style="font-weight: 900; font-size: 12px;">{!! sort_players_by('player_rating','Rating') !!}</th>
                        <th class="col-xs-1" style="font-weight: 900; font-size: 12px;">{!! sort_players_by('total_score','Score') !!}</th>
                        <th class="col-xs-1" style="font-weight: 900; font-size: 12px;">{!! sort_players_by('total_points','Points') !!}</th>
                        <th class="col-xs-1" style="font-weight: 900; font-size: 12px;">{!! sort_players_by('total_time_played','Time(h:m)') !!}</th>
                        <th class="col-xs-2 text-right" style="color:#fff; font-weight: 900; font-size: 12px;">{!! sort_players_by('last_game_id','Last Seen') !!}</th>
                    </tr>
                    </thead>
                    <tbody id="data-items">
                    @foreach($players as $player)
                        <tr class="item" style="border-top: 1px solid #ccc;margin-left: -5px;margin-right: -5px;">
                            <td class="color-main text-bold" style="vertical-align: middle;">{{ $player->position }}</td>
                            <td style="vertical-align: middle;"><center><img class="tooltipster" title="{{ $player->rank->name }}" src="{{ $player->rankImage }}" alt="" height="38px"/></center></td>
                            <td class="color-main text-bold" style="vertical-align: middle;"><img class="tooltipster" title="{{ $player->country->countryName }}" src="{{ $player->countryImage }}" alt="" height="16px"/>&nbsp;&nbsp;{!! link_to_route('player-detail', $player->name, [$player->name]) !!}</td>
                            <td style="vertical-align: middle;">{!! $player->playerRating !!}</td>
                            <td class="text-muted" style="vertical-align: middle;">{{ $player->total_score }}</td>
                            <td class="text-muted" style="vertical-align: middle;">{{ $player->total_points }}</td>
                            <td class="text-muted" style="vertical-align: middle;">{{ $player->timePlayed }}</td>
                            <td class="text-right text-muted" style="vertical-align: middle;">{!! link_to_route('round-detail',$player->lastGame->created_at->diffForHumans(),[$player->lastGame->id]) !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {!! $players->appends(Request::except('page'))->render() !!}
            <div id="loading" class="text-center"></div>
        </div>

    </div>
@endsection