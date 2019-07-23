<style>
    .light-grey-gradientX
    {
        /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
        background: linear-gradient(#3b3b3b, #0c0c0c);
    }
    .panel-heading-separatorX
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
</style>

@extends('layouts.main')
@section('meta-desc',"List of all bans.")
@section('title',"Ban #".$ban->id." of ".$ban->name)

@section('main-container')
    <div class="col-xs-9">
        <div class="panel light-grey-gradientX" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);padding: 10px;">
            <div class="panel-heading panel-heading-separatorX no-padding">
                @if(Auth::check() && Auth::user()->isAdmin())
                <small class="pull-right"><a href="{{ route('bans.edit',$ban->id) }}" style="color:#888 !important;">Edit Ban</a></small>
                @endif
                Swat 4 Survivors Ban Record #{{ $ban->id }}
            </div>
            <div class="panel-body" style="border: 0px !important">
                <table style="font-size: large;border: 0px !important;" class="table table-dark">
                    <tbody>
                        <tr>
                            <td class="col-xs-4 color-gold">Ban ID</td>
                            <td class="col-xs-8 text-muted"><b>{{ $ban->id }}</b></td>
                        </tr>
                        <tr>
                            <td class="color-gold">Name</td>
                            <td class="text-muted">{!! $ban->bannedUserURL !!}</td>
                        </tr>
                        <tr>
                            <td class="color-gold">IP Address</td>
                            <td class="text-muted">{{ $ban->ipAddrWithMask }}</td>
                        </tr>
                        <tr>
                            <td class="color-gold">Banned Till</td>
                            <td><span class="tooltipster text-muted" title="{{ $ban->bannedTillDateTime }}">{{ $ban->bannedTill }}</span></td>
                        </tr>
                        <tr>
                            <td class="color-gold">Country</td>
                            <td class="text-muted" style="vertical-align: middle;"><img class="tooltipster" title="{{ $ban->countryName }}" src="{{ $ban->countryImage }}" alt="" height="16px"/> {{ $ban->countryName }}</td>
                        </tr>
                        <tr>
                            <td class="color-gold">Status</td>
                            <td><b>{!! $ban->statusWithColor !!}</b></td>
                        </tr>
                        <tr>
                            <td class="color-gold">Reason</td>
                            <td class="text-muted">{{ $ban->reason }}</td>
                        </tr>
                        <tr>
                            <td class="color-gold">Created</td>
                            <td class="text-muted">{{ $ban->created_at->diffForHumans() }} ( by {!! $ban->bannedByAdminURL !!} )</td>
                        </tr>
                        @if($ban->updated_by != null)
                        <tr>
                            <td class="color-gold">Last Modified</td>
                            <td class="text-muted">{{ $ban->updated_at->diffForHumans() }} ( by {!! $ban->updatedByAdminURL !!} )</td>
                        </tr>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>

        @if(Auth::check())
            <div class="media comment-media panel padding10 light-grey-gradientX" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
                <div class="pull-left">
                    {!! Html::image(Auth::user()->getGravatarLink(40),'',array('class'=>'img media-oject inprofile-thumbs','width'=>'40','height'=>'40')) !!}
                </div>
                @if(Auth::user()->muted)
                    <form class="comment-create-form media-body">
                    <textarea name="" id="muted" cols="5" rows="2" class="form-control comment-textarea no-margin" placeholder="You are muted because of your behaviors" disabled></textarea>
                    </form>
                @else
                {!! Form::open(['route' => ['ban-comment',$ban->id], 'class'=>'comment-create-form media-body']) !!}
                {!! Form::textarea('body', null, ['placeholder' => 'Your comment here', 'class' => 'form-control comment-textarea no-margin', 'rows' => 2, 'cols' => 5]) !!}
                {!! Form::submit('Comment',['class' => 'btn btn-xs btn-default right comment-create-form-submit']) !!}
                {!! Form::close() !!}
                @endif
            </div>
        @endif

        <div class="comments-container">
            @foreach($ban->comments->reverse() as $comment)
                <div class="media comment-media panel light-grey-gradientX padding10" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
                    <div class="pull-left">
                        {!! Html::image($comment->user->getGravatarLink(50),'',array('class'=>'img media-oject inprofile-thumbs','width'=>'50','height'=>'50')) !!}
                    </div>
                    <div class="media-body" style="font-size: 14px;word-break: break-all;">
                        @if(Auth::check() && (Auth::user()->isAdmin() || Auth::user()->id == $comment->user_id))
                            <span class="pull-right">
                                    {!! Form::open(['method' => 'delete','route' => ['comment.destroy',$comment->id],'class' => 'pull-right']) !!}
                                <button type="submit" class="tooltipster confirm submit btn-link"
                                        title="Delete Comment"><i class="fa fa-times"></i></button>
                                {!! Form::close() !!}
                                </span>
                        @endif
                        <p class="no-margin convert-emoji text-muted">
                            <b>{!! link_to_route('user.show',$comment->user->displayName(),[$comment->user->username]) !!}</b>
                        </p>
                        <p class="no-margin small text-muted">{{ $comment->created_at->diffForHumans() }}</p>
                        <p class="text-muted">{!! $comment->showBody() !!}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection