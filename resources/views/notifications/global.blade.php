<style>
    .light-grey-gradientxb
    {
        /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
        background: linear-gradient(#3b3b3b, #0c0c0c);
    }
    .panel-heading-separatorxb
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
    .color-gold
    {
        color: #ffd700 !important;
        text-shadow: 2px 2px 5px #DAA520;
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

@extends('layouts.main')
@section('title',$header)
@section('main-container')
    <div class="content col-xs-9">

        <div class="panel light-grey-gradientxb" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separatorxb no-padding">
                {{ $header }}
                <!--@if($header == "Your Notifications")
                    <i class="fa fa-bell"></i>
                @else
                    <i class="fa fa-globe"></i>
                @endif-->
            </h4>
        </div>

        <div class="panel-body">

            <ul class="notifications" id="data-items">
                @forelse($notifications as $notification)
                    <li class="notification item {{ $header == "Your Notifications" ? $notification->getUnreadColorClass() : "" }}">
                        <div class="media">
                            <div class="media-body">
                                {!! $notification->body !!}

                                <div class="notification-meta pull-right">
                                    <small class="timestamp">{{ $notification->created_at->diffForHumans() }}</small>
                                </div>
                            </div>
                        </div>
                    </li>
                @empty
                    <h3 class="text-center color-gold">No Notifications</h3>
                @endforelse
            </ul>

            {!! $notifications->appends(Request::except('page'))->render() !!}
            <div id="loading" class="text-center"></div>

        </div>


    </div>
@endsection