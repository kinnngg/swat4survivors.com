<style>
    .light-grey-gradient1x
    {
        /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
        background: linear-gradient(#3b3b3b, #0c0c0c);
    }
    .panel-heading-separator1x
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
@section('title',$news->title)
@section('main-container')
    <div class="content col-xs-8">

        <div class="col-xs-12 panel light-grey-gradient1x" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separator1x no-padding">
                <small class="pull-right" style="color: #888 !important;">
                    @if(Auth::check() && Auth::user()->isAdmin())
                    <a href="{{ route('news.edit',$news->id) }}" style="color: #888 !important;">Edit News</a> || 
                @endif
                    {{ $news->getHumanReadableNewsType() }}</small>
                {{ $news->title }}
            </div>
            <div class="panel-body">
            <p class=""><i>
                <small>{!! link_to_route('user.show', $news->user->displayName(), [$news->user->username]) !!}</small>
                 -
                <small class="text-muted">{{ $news->created_at->toDayDateTimeString() }}</small>
                </i>

                @if(Auth::check() && Auth::user()->isAdmin())
                    <br>
                    <small class="text-muted">Last updated: <i>{{ $news->updated_at->toDayDateTimeString() }}<!--
                     -
                    <a href="{{ route('news.edit',$news->id) }}">Edit News</a>--></i></small>
                @endif
                <hr>
            </p>
            <p class="convert-emoji text-muted">{!! BBCode::parseCaseInsensitive((htmlentities($news->text))) !!}</p>
        </div>
        </div>

    </div>
@endsection