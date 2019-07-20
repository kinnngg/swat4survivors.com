@extends('layouts.main')
@section('meta-desc',"List of all bans.")
@section('title',"Ban List")

@section('main-container')

<style>
    .light-grey-gradient4
    {
        background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);
    }
    .panel-heading-separator4
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
        font-family: 'Marcellus SC' !important;
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
        font-family: 'Marcellus SC' !important;
    }
    .table
    {
        padding: 14px !important;
        background-color: #FFF;
        border: 1px solid #CCC;
    }
</style>
    <div class="col-xs-9">

        <div class="rounds panel light-grey-gradient4" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separator4 no-padding">
                <small class="pull-right" style="color:#888;">Total Bans: {{ $bans->total() }}</small>
                Swat 4 Survivors Master Banlist
            </div>
            <div class="panel-body">
                <table id="" class="table table-striped table-hover">
                    <thead style="border-bottom: 1px solid #ddd;">
                    <tr>
                        {{--<th class="col-xs-1">{!! sort_bans_by('position','#') !!}</th>--}}
                        <th class="col-xs-1">{!! sort_bans_by('country_id','Flag') !!}</th>
                        <th class="col-xs-3">{!! sort_bans_by('name','Name') !!}</th>
                        <th class="col-xs-2">{!! sort_bans_by('ip_address','IP Address') !!}</th>
                        <th class="col-xs-3">{!! sort_bans_by('admin_name','Banned By') !!}</th>
                        <th class="col-xs-1">{!! sort_bans_by('status','Status') !!}</th>
                        <th class="col-xs-2 text-right">{!! sort_bans_by('updated_at','Updated') !!}</th>
                    </tr>
                    </thead>
                    <tbody id="data-items">
                    @foreach($bans as $ban)
                        <tr class="item">
                            <td class="text-muted"><img class="tooltipster" title="{{ $ban->countryName }}" src="{{ $ban->countryImage }}" alt="" height="22px"/></td>
                            <td class="color-main text-bold">{!! link_to_route('bans.show',$ban->name,[$ban->id]) !!}</td>
                            <td>{!! $ban->ipAddrWithMask !!}</td>
                            <td>{!! $ban->bannedByAdminURL !!}</td>
                            <td><b>{!! $ban->statusWithColor !!}</b></td>
                            <td class="text-right">{!! $ban->updated_at->diffForHumans() !!}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {!! $bans->appends(Request::except('page'))->render() !!}
            <div id="loading" class="text-center"></div>
        </div>

    </div>
@endsection