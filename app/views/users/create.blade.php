@extends('templates.default')

@section('content')
	<h1> Create New User</h1>
	
	{{ Form::open( ['route' => 'users.store'] ) }}
		<div>
			{{ Form::label('username', 'Username: ') }}
			{{ Form::text('username') }}
			{{ $errors->first('username', '<span class="error">:message</span>') }}
		</div>

		<div>
			{{ Form::label('password', 'Password: ') }}
			{{ Form::password('password') }}
			{{ $errors->first('password') }}
		</div>
		<div>
			{{ Form::label('email', 'Email: ') }}
			{{ Form::email('email') }}
			{{ $errors->first('email') }}
		</div>
		<div>
			{{ Form::label('name', 'Name: ') }}
			{{ Form::text('name') }}
			{{ $errors->first('name') }}
		</div>

		<div>{{ Form::submit('Create User') }}</div>
	{{ Form::close() }}
@stop