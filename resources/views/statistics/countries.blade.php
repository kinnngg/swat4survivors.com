@extends('layouts.main')
@section('meta-desc','Server statistics per country')
@section('title','Countries')
@section('styles')
    <style>
        .light-grey-gradient
        {
            /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%) !important;*/
            background: linear-gradient(#3b3b3b, #0c0c0c);
        }
        .panel-heading-separator
        {
            margin-left: 10px !important;
            margin-right: 10px !important;
            padding-bottom: 6px !important;
            margin-bottom: 8px !important;
            border-bottom: 2px dashed #FF69B4 !important;
        }
        .panel-heading
        {
            color: #fff !important;
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

        <div id="regions_div" class="hidden-xs light-grey-gradient"></div>
        <br>
        <div class="rounds panel light-grey-gradient" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separator no-padding">
                <small class="pull-right" style="color:#888;">Total Countries: {{ $players->total() }}</small>
                All Countries
            </div>
            <div class="panel-body">
                <table id="" class="table no-margin">
                    <thead>
                        <tr>
                            <th class="col-xs-1 color-gold">#</th>
                            <th class="col-xs-3 color-gold">{!! sort_countries_by('country_id','Name') !!}</th>
                            <th class="col-xs-2 color-gold">{!! sort_countries_by('total_players','Total Players') !!}</th>
                            <th class="col-xs-2 color-gold">{!! sort_countries_by('total_score','Total Score') !!}</th>
                            <th class="col-xs-2 color-gold">{!! sort_countries_by('total_points','Total Points') !!}</th>
                            <th class="col-xs-2 color-gold text-right">{!! sort_countries_by('total_time_played','TimePlayed') !!}</th>
                        </tr>
                    </thead>
                    <tbody id="data-items">
                    @foreach($players as $player)
                        <tr class="item">
                            <td class="text-bold text-muted">{{ $position++ }}</td>
                            <td class="color-main text-bold"><img src="{{ $player->countryImage }}" alt="" height="16px"/>&nbsp;&nbsp;{!! link_to_route('country-detail', $player->country->countryName, [$player->country_id,$player->country->countryName]) !!}</td>
                            <td class="text-muted">{{ $player->total_players }}</td>
                            <td class="text-muted">{{ $player->total_score }}</td>
                            <td class="text-muted">{{ $player->total_points }}</td>
                            <td class="text-muted text-right">{{ \App\Server\Utils::getHMbyS($player->total_time_played,"%dh %dm") }}</td>
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

@section('scripts')
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['geochart']});
      google.charts.setOnLoadCallback(drawRegionsMap);

      function drawRegionsMap() {

        var data = google.visualization.arrayToDataTable([
            ['Country', 'Total Players'],
            @foreach($playersAll as $player)
                [ '{{ $player->country->countryName }}' , {{ $player->total_players }} ],
            @endforeach
        ]);

        var options = {
            colorAxis: {colors: ['#17af17','#F7FE2E', '#FF4000']},
        };

        var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));

        chart.draw(data, options);
      }
    </script>
@endsection