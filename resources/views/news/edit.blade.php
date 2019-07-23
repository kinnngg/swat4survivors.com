<style>
    .light-grey-gradientxa
    {
        /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
        background: linear-gradient(#3b3b3b, #0c0c0c);
    }
    .panel-heading-separatorxa
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
@section('title', 'Edit News')
@section('main-container')
    <div class="content col-xs-9">
        @include('partials._errors')

        <div class="col-xs-10 panel composemail light-grey-gradientxa" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separatorxa no-padding">
                Edit News
            </div>
            <div class="panel-body">
                {!! Form::model($news,['class' => 'form-horizontal']) !!}

                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    {!! Form::label('title', 'Title', ['class' => 'col-xs-3 control-label color-gold']) !!}
                    <div class="col-xs-7">
                        {!! Form::text('title',null,['class' => 'form-control', 'placeholder' => 'News Title']) !!}
                        @if ($errors->has('title'))
                            <span class="help-block">
                    <strong>{{ $errors->first('title') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
                    {!! Form::label('text', 'Body', ['class' => 'col-xs-3 control-label color-gold']) !!}
                    <div class="col-xs-7">
                        {!! Form::textarea('text',null,['class' => 'form-control', 'placeholder' => 'Write your news here...']) !!}
                        <span class="help-block">
                        @if ($errors->has('text'))
                                <strong>{{ $errors->first('text') }}</strong>
                                <br>
                            @endif
                            <small class="text-info">BBCode is supported.</small>
                    </span>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('news_type') ? ' has-error' : '' }}">
                    {!! Form::label('news_type', 'News Type', ['class' => 'col-xs-3 control-label color-gold']) !!}
                    <div class="col-xs-7">
                        {!! Form::select('news_type',
                        [
                                            '0' => 'Global News',
                                            '1' => 'Tournament News',
                        ]
                        ,null,['class' => 'form-control']) !!}
                        @if ($errors->has('news_type'))
                            <span class="help-block">
                    <strong>{{ $errors->first('news_type') }}</strong>
                    </span>
                        @endif
                    </div>
                </div>


                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        <button type="submit" class="btn btn-info confirm">Update News</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>

    </div>
@endsection

@section('scripts')
    <script src="{{ url('/') }}/js/angular.min.js"></script>
@endsection