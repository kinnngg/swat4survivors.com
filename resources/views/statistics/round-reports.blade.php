<style>
    .light-grey-gradient13
    {
        background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);
    }
    .panel-heading-separator13
    {
        margin-left: 10px !important;
        margin-right: 10px !important;
        padding-bottom: 6px !important;
        margin-bottom: 8px !important;
        border-bottom: 2px dashed #FF69B4 !important;
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
</style>

@extends('layouts.main')
@section('meta-desc',"List of all rounds played.")
@section('title',"Round Reports")

@section('main-container')
    <div class="col-xs-9">
        @include('partials._statistics-navbar')

        @if(Request::route()->uri() == 'statistics/war-round-reports')
            <div style="border-radius: 12px;" class="text-center alert text-bold light-grey-gradient13"><span style="color: deeppink">War Server</span> <span style="color: red">(Antics)</span></div>
        @endif

        <div class="rounds panel light-grey-gradient13" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
            @if(Request::route()->uri() == 'statistics/war-round-reports')
                <div class="panel-heading panel-heading-separator13 no-padding">
                    <small class="pull-right" style="color:#888;">Total Reports: {{ App\Game::whereNotNull('server_id')->count() }}</small>
                    Round Reports
                </div>
            @else
                <div class="panel-heading panel-heading-separator13 no-padding">
                    <small class="pull-right" style="color:#888;">Total Reports: {{ App\Game::whereNull('server_id')->count() }}</small>
                    Round Reports
                </div>
            @endif
            <div class="panel-body">
                <table id="" class="table table-striped table-hover no-margin">
                    <thead>
                    <tr>
                        <th class="col-xs-1">{!! sort_rounds_by('id','Round') !!}</th>
                        <th class="col-xs-2">{!! sort_rounds_by('round_time','Time') !!}</th>
                        <th class="col-xs-1">{!! sort_rounds_by('swat_score','Swat') !!}</th>
                        <th class="col-xs-2">{!! sort_rounds_by('suspects_score','Suspects') !!}</th>
                        <th class="">{!! sort_rounds_by('map_id','Map') !!}</th>
                        <th class="col-xs-2 text-right">{!! sort_rounds_by('created_at','Date') !!}</th>
                    </tr>
                    </thead>
                    <tbody id="data-items" class="roundstabledata">
                    @foreach($rounds as $round)
                        <tr class="item pointer-cursor" data-id="{{ $round->id }}">
                            @if($round->server_id == null)
                                <td class="color-main text-bold">{!! link_to_route('round-detail',$round->index,[$round->id]) !!}</td>
                            @else
                                <td class="color-main text-bold">{!! link_to_route('war-round-detail',$round->index,[$round->id]) !!}</td>
                            @endif
                            <td class="text-muted">{{ $round->time }}</td>
                            <td>{!! $round->swatScoreWithColor !!}</td>
                            <td>{!! $round->suspectsScoreWithColor !!}</td>
                            <td>{{ $round->mapName }}</td>
                            <td class="text-right tooltipster" title="{{ $round->timeDDTS }}">{{ $round->timeAgo }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {!! $rounds->appends(Request::except('page'))->render() !!}
            <div id="loading" class="text-center"></div>
        </div>

    </div>
@endsection