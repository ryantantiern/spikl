@extends('layouts.app')

@section('content')

	<p>{{ $user->firstname }}</p>
	<p>{{ $user->lastname }}</p>
	<p>{{ $user->email }}</p>
	<p>{{ $user->university->name }}</p>
	
@endsection