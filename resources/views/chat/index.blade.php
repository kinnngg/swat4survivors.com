@extends('layouts.main')
@section('title', 'Server Chat Archive')
@section('main-container')
<style>
    .ls-chats
    {
        background: linear-gradient(#3b3b3b, #0c0c0c);
        border-radius: 5px;
        word-break: break-all;
    }
    .light-grey-gradient6
    {
        background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);
    }
    .panel-heading-separator6
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
</style>
    <div class="content col-xs-8">
        @include('partials._errors')

        <div class="col-xs-12 panel light-grey-gradient6" style="border-radius: 5px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
            @if(Request::has('search'))
                <h4 class="well well-sm">Search for "<b>{{ Request::get('search') }}</b>" matched {{ $chats->total() }}
                    chats</h4>
            @endif
            <div class="panel-heading">
                <a href="{{ route('chat.index') }}" class="btn btn-warning pull-right btn-xs">Reset</a>

                {!! Form::open(['method' => 'get', 'name' => 'search', 'class' => 'form']) !!}
                <div class="input-group col-xs-7">
                    {!! Form::text('search',null,['class' => 'form-control col-xs-5', 'placeholder' => 'Search within chat...']) !!}
                    <span class="add-on input-group-btn">
                    <button type="submit" class="btn btn-info">Search</button>
                    </span>

                </div>
                {!! Form::close() !!}


            </div>
            <div class="panel-body ls-chats" id="data-items">
                @foreach($chats as $chat)
                    <p class="no-margin item">
                        {!! $chat->message !!}
                        <small class="text-info"><i>{{ $chat->created_at->toDayDateTimeString() }}</i></small>
                    </p>
                @endforeach
            </div>
            <div class="panel-footer">
                <b>{{ $chats->total() }}</b> matching chats found.
            </div>
            {!! $chats->appends(Request::except('page'))->render() !!}
            <div id="loading" class="text-center"></div>
        </div>
    </div>
@endsection