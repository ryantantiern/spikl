@extends('layouts.app')

@section('content')
	
	<img class="media-object" src="" alt="profile-pic"/>
	<p>{{ $user->firstname }}</p>
	<p>{{ $user->lastname }}</p>
	<p>{{ $user->email }}</p>
	<p>{{ $user->university->name }}</p>

@endsection