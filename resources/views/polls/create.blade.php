<style>
    .light-grey-gradientZ
    {
        /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
        background: linear-gradient(#3b3b3b, #0c0c0c);
    }
    .panel-heading-separatorZ
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

@extends('layouts.main')
@section('title', 'Create Poll')
@section('main-container')
    <div class="content col-xs-9" id="app" xmlns:v-on="http://www.w3.org/1999/xhtml">
        @include('partials._errors')

        <div class="col-xs-10 panel composemail light-grey-gradientZ" style="border-radius: 12px;box-shadow: 2px 2px 2px rgba(0,0,0,.3);">
            <div class="panel-heading panel-heading-separatorZ no-padding">
                Create Poll
            </div>
            <div class="panel-body">
                <div class="form-horizontal">

                <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
                    {!! Form::label('question', 'Question', ['class' => 'col-xs-3 control-label color-gold'])  !!}
                    <div class="col-xs-7">
                        {!! Form::text('question',null,['v-model' => 'question','class' => 'form-control', 'placeholder' => 'Poll Question'])  !!}
                        @if ($errors->has('question'))
                        <span class="help-block">
                            <strong>{{ $errors->first('question') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('options') ? ' has-error' : '' }}">
                    {!! Form::label('options', 'Poll Options', ['class' => 'col-xs-3 control-label color-gold'])  !!}
                    <div class="col-xs-7">
                    {!! Form::text(null,null,['v-model' => 'newOption', 'v-on:keyup.enter' => 'addOption', 'class' => 'form-control', 'placeholder' => 'Write and press Enter to add option'])  !!}
                    @if ($errors->has('options'))
                    <span class="help-block">
                    <strong>{{ $errors->first('options') }}</strong>
                    </span>
                    @endif
                        <button style="margin-top: 5px" class="btn btn-primary btn-sm" v-on:click="addOption">+Add Option</button>
                    </div>
                </div>

                </div>

                {!! Form::open(['class' => 'form-horizontal']) !!}
                <div class="panel pad10" style="background: transparent;border: 0px;">
                <span class="color-gold"><b>Question:</b></span><span class="panel-heading">@{{ question | "Plz type question" }}</span>
                    <input type="hidden" name="question" v-model="question">

                    <div class="panel pad10" style="background: transparent;border: 0px;">
                        <ul class="no-padding" style="list-style-type: none">
                            <li v-for="option in options">
                                <input type="radio" name="options">
                                <span class="color-gold">@{{ option.text }}</span>
                                <input type="hidden" name="options[]" value="@{{ option.text }}">
                                <button class="btn btn-xs" v-on:click="removeOption($index)">&times;</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="form-group{{ $errors->has('closed_at') ? ' has-error' : '' }}">
                    {!! Form::label('closed_at', 'End Date:', ['class' => 'col-xs-3 control-label color-gold']) !!}
                    <div class="col-xs-7">
                        <div id="datetimepicker1" class="input-group">
                            {!! Form::text('closed_at', null, ['class' => 'form-control', 'data-format' => 'yyyy-MM-dd']) !!}
                            <span class="add-on input-group-btn">
                                <button class="btn btn-info">
                                    <i data-time-icon="fa fa-clock-o" data-date-icon="fa fa-calendar">
                                    </i>
                                </button>
                            </span>
                        </div>
                        @if ($errors->has('closed_at'))
                            <span class="help-block">
                                <strong>{{ $errors->first('closed_at') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        <button type="submit" class="btn btn-info confirm">Create Poll</button>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}

        </div>

    </div>
@endsection

@section('scripts')
    <script src="{{ url('/') }}/js/vue.min.js"></script>
    <script>
        new Vue({
            el: '#app',
            data: {
                newOption: '',
                options: [
                ]
            },
            methods: {
                addOption: function () {
                    var text = this.newOption.trim()
                    if (text) {
                        this.options.push({ text: text })
                        this.newOption = ''
                    }
                },
                removeOption: function (index) {
                    this.options.splice(index, 1)
                }
            }
        })

        $(function () {
            $('#datetimepicker1').datetimepicker({
                language: 'en',
                pickTime: false
            });
        });
    </script>
@endsection