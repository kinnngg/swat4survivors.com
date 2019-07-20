@extends('layouts.main')
@section('title', 'Admins List')
@section('styles')
    <style>
        .text-sa
        {
            color: #009688 !important;
        }
        .light-grey-gradient11
        {
            background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);
        }
        .panel-heading-separator11
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
    </style>
    @endsection
@section('main-container')
    <div class="content col-xs-9">
        <div class="row">
            <div class="col-xs-10">
                <div class="panel light-grey-gradient11" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);padding: 20px;">
                    <div class="panel-heading panel-heading-separator3 no-padding">Server Administrators</div>
                    <div class="panel-body">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <td class="col-xs-1"></td>
                                <td class="col-xs-4 col-xs-4">Name</td>
                                <td class="col-xs-4 col-xs-4">Rank</td>
                                <td class="col-xs-3 col-xs-3">Last Seen</td>
                            </tr>
                            </thead>
                            @foreach($roles as $role)
                                @foreach($role->users as $user)
                                    <tr>
                                        <td class="text-muted"><img class="tooltipster" title="{{ $user->country->countryName }}" src="/images/flags/20_shiny/{{ $user->country->countryCode }}.png" alt="" height="22px"></td>

                                        <td class="color-main text-bold">
                                            <a class="
                                            @if($user->isSuperAdmin())
                                                    {{ 'text-sa' }}
                                            @elseif($user->isAdmin())
                                                    {{ 'text-green' }}
                                            @endif
                                            " style="margin-right:1em" href="{{ route('user.show',$user->username) }}">
                                                <strong class="">{{ $user->displayName() }}</strong>
                                            </a>
                                        </td>
                                        <td>
                                            {{ $user->roles()->first()->display_name }}
                                        </td>
                                        <td>
                                            {{ $user->updated_at->diffForHumans() }}
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>

            <!--<div class="col-xs-10">
                <div class="panel panel-default">
                    <div class="panel-heading">uS| Official Members <small><i>(excluding admins)</i></small></div>
                    <div class="panel-body">
                        <table class="table table-hover table-striped">
                            <thead>
                            <tr>
                                <td class="col-xs-1"></td>
                                <td class="col-xs-4 col-xs-4">Name</td>
                                <td class="col-xs-4 col-xs-4">Rank</td>
                                <td class="col-xs-3 col-xs-3">Last Seen</td>
                            </tr>
                            </thead>
                            @foreach($roless as $role)
                                @foreach($role->users as $user)
                                    <tr>
                                        <td class="text-muted"><img class="tooltipster" title="{{ $user->country->countryName }}" src="/images/flags/20_shiny/{{ $user->country->countryCode }}.png" alt="" height="22px"></td>

                                        <td class="color-main text-bold">
                                            <a class="" style="margin-right:1em" href="{{ route('user.show',$user->username) }}">
                                                <strong class="">{{ $user->displayName() }}</strong>
                                            </a>
                                        </td>
                                        <td>
                                            uS| Member <small><i>({{ $user->roles()->first()->display_name }})</i></small>
                                        </td>
                                        <td>
                                            {{ $user->updated_at->diffForHumans() }}
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
@endsection
