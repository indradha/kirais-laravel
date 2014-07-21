@extends('templates.default')

@section('content')
	<div class="welcome">
	<div align="center" style="padding:10px">
 			<img src="{{ url('public/images/logo.png') }}" style="width:100px;padding-bottom:10px">
 		</div>
	{{ Form::open( ['id' => 'loginForm', 'route' => 'sessions.store'] ) }}
		<div>
			<core-field>
				{{ Form::text('username', NULL,  array('placeholder'=>'Username')) }}
  			</core-field>
  			{{ $errors->first('username') }}
		</div>
		<div>
			<core-field>
    			{{ Form::password('password', array('placeholder'=>'Password')) }}
  			</core-field>
		</div>
		@if ($error = $errors->first('combination'))
		  <div align="center" class="alert alert-danger">
		    {{ $error }}
		  </div>
		@endif
		<div align="right" style="padding:10px">{{ Form::submit('') }}
				<paper-button raisedButton label="Login" type="submit" onClick="document.getElementById('loginForm').submit()" onKeyPress="document.getElementById('loginForm').submit()"></paper-button>
		</div>
	
	{{ Form::close() }}
	</div>
@stop

<?php
// @section('content')
// 	<div class="welcome">
// 		<div align="center" style="padding:10px">
// 			<img src="{{ url('public/images/logo.png') }}" style="width:100px;padding-bottom:10px">
// 		</div>
// 		{{ Form::open( ['id' => 'loginForm','route' => 'sessions.store'] ) }}
// 			<paper-input extend="input" floatingLabel label="Username" name="username">
// 	  		</paper-input>
// 	  		{{ $errors->first('username') }}
// 			<paper-input extend="input" floatingLabel label="Password" name="password" type="password" onKeyPress="if(event.keyCode == 13) document.getElementById('loginForm').submit()">
// 	  		</paper-input>
// 			@if ($error = $errors->first('combination'))
// 		  		<div class="alert" style="padding:10px 0px">
// 				    {{ $error }}
// 				 </div>
// 			@endif
// 			<div align="right">
// 				<paper-button raisedButton label="Login" type="submit" onClick="document.getElementById('loginForm').submit()" onKeyPress="document.getElementById('loginForm').submit()"></paper-button>
// 				<script type="text/javascript"></script>
// 			</div>
// 		{{ Form::close() }}
// 	</div>
@stop


?>