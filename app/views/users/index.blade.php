@extends('templates.default')

@section('content')

	@if ($users->count()>0)
	    @foreach($users as $user)
	    	<li>{{ link_to("/users/{$user->username}", $user->name ) }}</li>
	    @endforeach
    @else
		<p> No users detected </p>
	@endif
@stop