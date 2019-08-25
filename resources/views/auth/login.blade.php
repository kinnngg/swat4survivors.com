<style>
    .light-grey-gradientA
    {
        /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
        background: linear-gradient(#3b3b3b, #0c0c0c);
    }
    .panel-heading-separatorA
    {
        margin-left: 10px !important;
        margin-right: 10px !important;
        padding-bottom: 6px !important;
        margin-bottom: 8px !important;
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

@section('main-container')
<div class="content col-xs-9">
	<div class="row">
		<div class="col-xs-10 col-xs-offset-1">
			<div class="panel light-grey-gradientA" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
				<div class="panel-heading info-title panel-heading-separatorA no-padding">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
<div class="col-xs-6">
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-xs-4 control-label color-gold">Username</label>
							<div class="col-xs-8">
								<input type="text" class="form-control" name="username" value="{{ old('username') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-xs-4 control-label color-gold">Password</label>
							<div class="col-xs-8">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-6 col-xs-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> <span class="color-gold">Remember Me</span>
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-xs-6 col-xs-offset-4">
								<button type="submit" class="btn btn-primary login-btn">Login</button>

								<a class="btn btn-link" href="{{ url('/password/email') }}">Forgot Your Password?</a>
							</div>
						</div>
					</form>
				</div>
				<div class="col-xs-6">
					<img src="https://cdn.discordapp.com/attachments/402840242484281345/615292077089095748/moja.png" style="width: 70%;margin-top: -30px;margin-left: 50px;">
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
