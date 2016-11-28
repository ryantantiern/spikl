@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row">
	        <div class="col-md-8 col-md-offset-2">
	            <div class="panel panel-default">
	                <div class="panel-heading">Your search results for {{ Request::input('query') }}</div>

	                <div class="panel-body">
		                @if (!count($users))
		                	<p> No Results </p>
		                @else 
			                @foreach ($users as $user)
			                	<a href="{{ route('profile.index', ['uid' => $user->id]) }}"><h2>{{ $user->firstname }} {{ $user->lastname }}</h2></a>
			                	<p> {{ $user->university->name }}</p>
			                @endforeach
			             @endif
	                </div>
	            </div>
	        </div>
	    </div>
	</div>		
@endsection

