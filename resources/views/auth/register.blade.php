<style>
    .light-grey-gradientC
    {
        /*background: linear-gradient(to bottom, #f8f8f8 0%, #e0e0e0 74%, #ededed 100%);*/
        background: linear-gradient(#3b3b3b, #0c0c0c);
    }
    .panel-heading-separatorC
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
				<div class="panel light-grey-gradientC" style="border-radius: 12px;box-shadow: 1px 1px 1px rgba(0,0,0,.3);">
					<div class="panel-heading info-title panel-heading-separatorC no-padding">Create Account</div>
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

						<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group {{ $errors->has('username') ? 'has-error' : '' }}">
								<label class="col-xs-4 control-label color-gold">Username</label>
								<div class="col-xs-6">
									<input type="text" class="form-control" name="username" value="{{ old('username') }}">
								</div>
							</div>

							<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
								<label class="col-xs-4 control-label color-gold">E-Mail Address</label>
								<div class="col-xs-6">
									<input type="email" class="form-control" name="email" value="{{ old('email') }}">
								</div>
							</div>

							<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
								<label class="col-xs-4 control-label color-gold">Full Name</label>
								<div class="col-xs-6">
									<input type="text" class="form-control" name="name" value="{{ old('name') }}">
								</div>
							</div>

							<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
								<label class="col-xs-4 control-label color-gold">Password</label>
								<div class="col-xs-6">
									<input type="password" class="form-control" name="password">
								</div>
							</div>

							<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
								<label class="col-xs-4 control-label color-gold">Confirm Password</label>
								<div class="col-xs-6">
									<input type="password" class="form-control" name="password_confirmation">
								</div>
							</div>

							<div class="form-group">
								<div class="col-xs-6 col-xs-offset-4">
									<button type="submit" class="btn btn-primary register-btn">
										Register
									</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
