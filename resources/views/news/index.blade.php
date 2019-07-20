@extends('layouts.main')
@section('title', 'News Archive')
@section('main-container')

<style>
    .light-grey-gradient5
    {
        background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);
    }
    .panel-heading-separator5
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
</style>
    <div class="content col-xs-8">
        <div class="col-xs-12 panel light-grey-gradient5" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separator5 no-padding">
                News Archive
            </div>
            <div class="panel-body">
                <ul style="list-style-type:square">
                @forelse($newses as $news)
                    <li class="news-title" style="border-bottom: 1px dashed #FF69B4">
                        <a href="{{ route('news.show',$news->summary) }}"><b>{{ $news->title }}</b></a>
                        <small class="text-muted pull-right"><i>{{ $news->created_at->toDayDateTimeString() }}</i></small>
                    </li>
                    @empty
                    No News
                    @endforelse
                </ul>
            </div>                
        </div>

    </div>
@endsection