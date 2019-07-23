<style>
    .light-grey-gradientXX
    {
        /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
        background: linear-gradient(#3b3b3b, #0c0c0c);
    }
    .panel-heading-separatorXX
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
@section('title', 'Add Master Ban')
@section('main-container')
    <div class="content col-xs-9">
        @include('partials._errors')

        <div class="col-xs-10 panel light-grey-gradientXX"  style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separatorXX no-padding">
                Add Master Ban
            </div>

            {!! Form::open(['class' => 'form-horizontal']) !!}

            <div class="form-group{{ $errors->has('ip_address') ? ' has-error' : '' }}">
                {!! Form::label('ip_address', 'IP Address', ['class' => 'col-xs-3 control-label color-gold']) !!}
                <div class="col-xs-7">
                    {!! Form::text('ip_address',null,['class' => 'form-control', 'placeholder' => 'IP Address to ban']) !!}
                    @if ($errors->has('ip_address'))
                        <span class="help-block">
                <strong>{{ $errors->first('ip_address') }}</strong>
                </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('reason') ? ' has-error' : '' }}">
                {!! Form::label('reason', 'Reason', ['class' => 'col-xs-3 control-label color-gold']) !!}
                <div class="col-xs-7">
                    {!! Form::text('reason',null,['class' => 'form-control', 'placeholder' => 'Reason for this ban']) !!}
                    @if ($errors->has('reason'))
                        <span class="help-block">
                <strong>{{ $errors->first('reason') }}</strong>
                </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('banned_till') ? ' has-error' : '' }}">
                {!! Form::label('banned_till', 'Banned Till:', ['class' => 'col-xs-3 control-label color-gold']) !!}
                <div class="col-xs-7">
                    <div id="datetimepicker1" class="input-group">
                        {!! Form::text('banned_till', null, ['class' => 'form-control', 'data-format' => 'yyyy-MM-dd hh:mm:ss']) !!}
                        <span class="add-on input-group-btn">
                            <button class="btn btn-info btn-sm">
                                <i data-time-icon="fa fa-clock-o" data-date-icon="fa fa-calendar">
                                </i>
                            </button>
                        </span>
                    </div>
                    @if ($errors->has('banned_till'))
                        <span class="help-block">
                            <strong>{{ $errors->first('banned_till') }}</strong>
                        </span>
                    @endif
                    <span class="help-block color-gold">
                        Leave empty if <strong>permanent ban</strong>
                    </span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-3">
                    <button type="submit" class="btn btn-danger confirm">Add Ban</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>

    </div>
@endsection

@section('scripts')
        <!--<script src="{{ url('/') }}/js/angular.min.js"></script>-->
    <script>
        $(function () {
            $('#datetimepicker1').datetimepicker({
                language: 'en',
                pick12HourFormat: true
            });
        });
    </script>
@endsection