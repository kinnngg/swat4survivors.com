@extends('layouts.main')
@section('title', 'Polls')
@section('styles')
    <style>
        .progress {
            height: 20px;
            border: 1px solid;
            padding:1px;
            -webkit-border-radius:0px;
            -moz-border-radius:0px;
            border-radius:0px;
        }
        .progress .progress-bar {
            font-size: 12px;
            line-height: 15px;
        }
        .pagination
        {
            display: block !important;
            visibility: visible !important;
        }
        .light-grey-gradient7
        {
            /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
            background: linear-gradient(#3b3b3b, #0c0c0c);
        }
        .panel-heading-separator7
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
    <div class="content col-xs-9" id="app" xmlns:v-on="http://www.w3.org/1999/xhtml">
        @include('partials._errors')

        <div class="page-data-items">
        @forelse($polls as $poll)
            <div class="page-item">
            @if(!$poll->isExpired() && !$poll->isVoted())
                <div class="panel pad10 light-grey-gradient7" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
                    {!! Form::open(['route' => ['poll.vote',$poll->id]]) !!}
                    <div class="panel-heading panel-heading-separator7 no-padding">
                        {{ $poll->question }}
                    </div>
                    <div class="panel-body">
                        @foreach($poll->pollos as $pollo)
                            <input type="radio" name="option" value="{{ $pollo->id }}"> <span class="text-muted">{{ $pollo->option }}</span><br>
                        @endforeach
                        <input type="submit" value="Vote" class="btn btn-primary btn-xs">
                        {!! Form::close() !!}
                    </div>
                    <span class="small text-muted">Total Votes: <b>{{ $poll->users()->count() }}</b></span>
                    <p class="pull-right small text-muted">Started {{ $poll->created_at->diffForHumans() }} by
                        <a class="" href="{{ route('user.show',$poll->user->username) }}">
                            <strong class="">{{ $poll->user->displayName() }}</strong>
                        </a>
                    </p>
                </div>

            @else
                <div class="panel pad10 light-grey-gradient7" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
                    <div class="panel-heading panel-heading-separator7 no-padding">
                        {{ $poll->question }}
                    </div>
                    <div class="panel-body">
                        @foreach($poll->pollos as $pollo)
                            <span class="color-gold">{{ $pollo->option }}</span><br>
                            <div class="progress">
                                <div class="progress-bar progress-bar-striped active {{ $polluserscount = $poll->users()->count() }}" role="progressbar"
                                     aria-valuenow="{{ $percent = round($polluserscount == 0 ? 0 : ( $pollo->users->count() / $polluserscount)*100) }}"
                                     aria-valuemin="0" aria-valuemax="100" style="width: {{ $percent }}%;">
                                    {{ $percent }}% ({{ $pollo->users->count() }})
                                </div>
                            </div>

                        @if(Auth::check() && Auth::user()->isAdmin())
                            <table style="margin-bottom: 10px;border: 0px;" class="table table-hover table-dark">
                                <thead style="border-bottom: 1px solid #ddd;font-family: Marcellus SC;">
                                    <tr>
                                        <th class="col-xs-1" style="color:#fff; font-weight: 900; font-size: 12px;"></th>
                                        <th style="color:#fff; font-weight: 900; font-size: 12px;">Name</th>
                                        <th style="color:#fff; font-weight: 900; font-size: 12px;">Voted On</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($pollo->users as $user)
                                <tr style="border-bottom: 1px solid #ccc;margin-left: -5px;margin-right: -5px;">
                                    <td class="text-muted"><img class="tooltipster" title="{{ $user->country->countryName }}" src="/images/flags/20_shiny/{{ $user->country->countryCode }}.png" alt="" height="22px"></td>
                                    <td class="color-main"><a class="" href="{{ route('user.show',$user->username) }}">{{ $user->displayName() }}</a></td>
                                    <td class="text-muted"><span class="tooltipster" title="{{ $user->pivot->created_at->toDayDateTimeString() }}">{{ $user->pivot->created_at->diffForHumans() }}</span></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        @endif

                        @endforeach
                    </div>

                    <span class="small text-muted">Total Votes: <b>{{ $poll->users()->count() }}</b></span>
                    <p class="pull-right small text-muted">Started {{ $poll->created_at->diffForHumans() }} by
                        <a class="" href="{{ route('user.show',$poll->user->username) }}">
                            <strong class="">{{ $poll->user->displayName() }}</strong>
                        </a>
                    </p>
                </div>
            @endif
            </div>
        @empty
            None Poll Now
        @endforelse
        </div>

        <div class="col-xs-12 no-padding" style="margin-bottom: 10px;">
            {!! $polls->appends(Request::except('page'))->render() !!}
        </div>
    </div>
@endsection