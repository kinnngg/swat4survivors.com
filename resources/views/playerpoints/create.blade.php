<style>
    .light-grey-gradientBB
    {
        /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
        background: linear-gradient(#3b3b3b, #0c0c0c);
    }
    .panel-heading-separatorBB
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
    .color-gold
    {
        color: #ffd700 !important;
        text-shadow: 2px 2px 5px #DAA520;
    }
</style>

@extends('layouts.main')
@section('title', 'Grant Points to a Player')
@section('main-container')
    <div class="content col-xs-9">
        <div class="row">
            <div class="col-xs-10 col-xs-offset-1">
                <div class="panel light-grey-gradientBB" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
                    <div class="panel-heading panel-heading-separatorBB no-padding">Points Distribution Form</div>
                    <div class="panel-body">

                        {!! Form::open(['class' => 'form-horizontal form']) !!}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            {!! Form::label('name', 'Player', ['class' => 'col-md-4 control-label color-gold']) !!}
                            <div class="col-md-6">
                                {!! Form::select('name',App\PlayerTotal::lists('name', 'id'),null,['class' => 'form-control']) !!}
                                @if ($errors->has('name'))
                                    <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('points') ? ' has-error' : '' }}">
                            {!! Form::label('points', 'Points', ['class' => 'col-xs-4 control-label color-gold'])  !!}
                            <div class="col-xs-6">
                                {!! Form::text('points',null,['class' => 'form-control','placeholder' => '-1000 to 5000'])  !!}
                                @if ($errors->has('points'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('points') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('reason') ? ' has-error' : '' }}">
                            {!! Form::label('reason', 'Reason', ['class' => 'col-xs-4 control-label color-gold'])  !!}
                            <div class="col-xs-6">
                                {!! Form::textarea('reason',null,['class' => 'form-control'])  !!}
                                @if ($errors->has('reason'))
                                    <span class="help-block">
                                <strong>{{ $errors->first('reason') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-6 col-xs-offset-4">
                                <button type="submit" class="btn btn-primary confirm">
                                    Grant Points
                                </button>
                            </div>
                        </div>
                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
