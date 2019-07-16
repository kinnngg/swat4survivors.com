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
            background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);
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
            color: #444;
            font-weight: bold;
            font-size: 1.1em;
            font-family: 'Trebuchet MS';
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
            font-family: 'Trebuchet MS';
        }
        .table
        {
            padding: 14px !important;
            background-color: #FFF;
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
    </style>
@endsection

@section('main-container')
    <div class="col-xs-9">
        @include('partials._statistics-navbar')
        <div class="row">
            <div class="col-xs-3 pad10lf">
                <div class="panel col-xs-12 pad10 light-grey-gradient8" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
                    <div class="col-xs-3"><i class="far fa-user fa-3x text-danger"></i></div>
                    <div class="col-xs-9 no-padding text-right"><b>Players Today:</b><br>{{ \App\PlayerTotal::todaycount() }}</div>
                </div>
            </div>
            <div class="col-xs-3 pad10lr">
                <div class="panel col-xs-12 pad10 light-grey-gradient8" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
                    <div class="col-xs-3"><i class="far fa-users-crown fa-3x text-success"></i></div>
                    <div class="col-xs-9 no-padding text-right"><b>Total Players:</b><br>{{ \App\PlayerTotal::count() }}</div>
                </div>
            </div>
            <div class="col-xs-3 pad10lr">
                <div class="panel col-xs-12 pad10 light-grey-gradient8" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
                    <div class="col-xs-3"><i class="far fa-chart-pie fa-3x text-warning"></i></div>
                    <div class="col-xs-9 no-padding text-right"><b>Rounds Played:</b><br>{{ \App\Game::count() }}</div>
                </div>
            </div>
            <div class="col-xs-3 pad10ll">
                <div class="panel col-xs-12 pad10 light-grey-gradient8" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
                    <div class="col-xs-3"><i class="far fa-clock fa-3x text-info"></i></div>
                    <div class="col-xs-9 no-padding text-right"><b>Last updated:</b><br>{{ \App\PlayerTotal::first()->updated_at->diffForHumans() }}</div>
                </div>
            </div>
        </div>

        <div class="rounds panel light-grey-gradient8" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separator8 no-padding">
                <small class="pull-right" style="color:#888;">Total Players: {{ App\PlayerTotal::count() }}</small>
                Swat 4 Survivors Top Players
            </div>
            <div class="panel-body">
                <table id="" class="table table-striped table-hover no-margin">
                    <thead>
                    <tr>
                        <th class="col-xs-1">{!! sort_players_by('position','#') !!}</th>
                        <th class="col-xs-1">{!! sort_players_by('country_id','Flag') !!}</th>
                        <th class="col-xs-1">{!! sort_players_by('rank_id','Rank') !!}</th>
                        <th class="col-xs-3">{!! sort_players_by('name','Name') !!}</th>
                        <th class="col-xs-1">{!! sort_players_by('player_rating','Rating') !!}</th>
                        <th class="col-xs-1">{!! sort_players_by('total_score','Score') !!}</th>
                        <th class="col-xs-1">{!! sort_players_by('total_points','Points') !!}</th>
                        <th class="col-xs-1">{!! sort_players_by('total_time_played','Time(h:m)') !!}</th>
                        <th class="col-xs-2 text-right">{!! sort_players_by('last_game_id','Last Seen') !!}</th>
                    </tr>
                    </thead>
                    <tbody id="data-items">
                    @foreach($players as $player)
                        <tr class="item">
                            <td class="color-main text-bold">{{ $player->position }}</td>
                            <td class="text-muted"><img class="tooltipster" title="{{ $player->country->countryName }}" src="{{ $player->countryImage }}" alt="" height="22px"/></td>
                            <td><img class="tooltipster" title="{{ $player->rank->name }}" src="{{ $player->rankImage }}" alt="" height="22px"/></td>
                            <td class="color-main text-bold">{!! link_to_route('player-detail', $player->name, [$player->name]) !!}</td>
                            <td>{!! $player->playerRating !!}</td>
                            <td>{{ $player->total_score }}</td>
                            <td>{{ $player->total_points }}</td>
                            <td>{{ $player->timePlayed }}</td>
                            <td class="text-right">{!! link_to_route('round-detail',$player->lastGame->created_at->diffForHumans(),[$player->lastGame->id]) !!}</td>
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