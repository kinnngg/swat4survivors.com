<style>
    .light-grey-gradient13
    {
        /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
        background: linear-gradient(#3b3b3b, #0c0c0c);
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
                <table id="" class="table table-dark table-hover no-margin" style="border: 0px;">
                    <thead style="border-bottom: 1px solid #ddd;font-family: Marcellus SC;">
                    <tr>
                        <th class="col-xs-1" style="color: #fff !important;font-weight: 900; font-size: 12px;">{!! sort_rounds_by('id','Round') !!}</th>
                        <th class="col-xs-2" style="font-weight: 900; font-size: 12px;">{!! sort_rounds_by('round_time','Time') !!}</th>
                        <th class="col-xs-1" style="font-weight: 900; font-size: 12px;">{!! sort_rounds_by('swat_score','Swat') !!}</th>
                        <th class="col-xs-2" style="font-weight: 900; font-size: 12px;">{!! sort_rounds_by('suspects_score','Suspects') !!}</th>
                        <th class="" style="font-weight: 900; font-size: 12px;">{!! sort_rounds_by('map_id','Map') !!}</th>
                        <th class="col-xs-2 text-right" style="font-weight: 900; font-size: 12px;">{!! sort_rounds_by('created_at','Date') !!}</th>
                    </tr>
                    </thead>
                    <tbody id="data-items" class="roundstabledata">
                    @foreach($rounds as $round)
                        <tr class="item pointer-cursor" data-id="{{ $round->id }}" style="border-bottom: 1px solid #ccc;margin-left: -5px;margin-right: -5px;">
                            @if($round->server_id == null)
                                <td class="color-main text-bold">{!! link_to_route('round-detail',$round->index,[$round->id]) !!}</td>
                            @else
                                <td class="color-main text-bold">{!! link_to_route('war-round-detail',$round->index,[$round->id]) !!}</td>
                            @endif
                            <td class="text-muted">{{ $round->time }}</td>
                            <td class="text-muted">{!! $round->swatScoreWithColor !!}</td>
                            <td class="text-muted">{!! $round->suspectsScoreWithColor !!}</td>
                            <td class="text-muted">{{ $round->mapName }}</td>
                            <td class="text-right text-muted tooltipster" title="{{ $round->timeDDTS }}">{{ $round->timeAgo }}</td>
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