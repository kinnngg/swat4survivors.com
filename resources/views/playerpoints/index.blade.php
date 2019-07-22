<style>
    .light-grey-gradientAA
    {
        /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
        background: linear-gradient(#3b3b3b, #0c0c0c);
    }
    .panel-heading-separatorAA
    {
        margin-left: 10px;
        margin-right: 10px !important;
        padding-bottom: 6px;
        margin-bottom: 8px;
        border-bottom: 2px dashed #FF69B4 !important;
    }
    .panel-heading
    {
        color: #fff !important;
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
        /*background-color: #FFF;*/
        border: 1px solid #CCC;
    }
    .a-primary
    {
        color: #fff !important;
    }
</style>

@extends('layouts.main')
@section('meta-desc',"List of all players who are awarded extra points.")
@section('title',"Player with Extra Points")

@section('main-container')
    <div class="col-xs-9">

        <div class="rounds panel light-grey-gradientAA" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separatorAA no-padding">
                <small class="pull-right" style="color:#888;">Total Awards: {{ App\PlayerPoint::count() }}</small>
                Swat 4 Survivors Awarded Players
            </div>
            <div class="panel-body">
                <table id="" class="table table-dark table-hover no-margin" style="border: 0px;">
                    <thead style="border-bottom: 1px solid #ddd;font-family: Marcellus SC;">
                    <tr>
                        <th class="col-xs-3" style="color:#fff; font-weight: 900; font-size: 12px;">Name</th>
                        <th class="col-xs-1" style="color:#fff; font-weight: 900; font-size: 12px;">Points</th>
                        <th class="col-xs-3" style="color:#fff; font-weight: 900; font-size: 12px;">Reason</th>
                        <th class="col-xs-2" style="color:#fff; font-weight: 900; font-size: 12px;">Awarded By</th>
                        <th class="col-xs-2 text-right" style="color:#fff; font-weight: 900; font-size: 12px;">Awarded At</th>
                        @if(Auth::check() && Auth::user()->isAdmin())
                            <th class="col-xs-1" style="color:#fff; font-weight: 900; font-size: 12px;"></th>
                        @endif
                    </tr>
                    </thead>
                    <tbody id="data-items">
                    @forelse($players as $player)
                        <tr class="item">
                            <td class="color-main text-bold">{!! link_to_route('player-detail',$player->name,$player->name)   !!}</td>
                            <td class="text-bold">{!! $player->points < 0 ?  "<span class='text-danger'>".$player->points."</span>" : "<span class='text-green'>".$player->points."</span>" !!}</td>
                            <td class="tooltipster text-muted" title="{{ $player->reason }}">{{ str_limit($player->reason,25) }}</td>
                            <td class="color-main text-bold">
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
                        <p class="text-info text-center">No awards have been issued yet.  Don't forget to award people for their successes!</p>
                    @endforelse
                    </tbody>
                </table>
            </div>
            {!! $players->appends(Request::except('page'))->render() !!}
            <div id="loading" class="text-center"></div>
        </div>

    </div>
@endsection