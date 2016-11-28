@extends('layouts.app')

@section('content')
	@if (Auth::user())
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
				                	<a href="{{ route('profile.index', ['uid' => $user->id]) }}">
										@if ($user->avatar != NULL)
											<img src="/uploads/avatar/{{ $user->avatar }}" alt="profile-pic" 
											style="width:100px; height:100px; float:left; border-radius:50%; margin-right:25px;"/>
										@else
											<img src="/uploads/avatar/default.png" alt="profile-pic" 
											style="width:100px; height:100px; float:left; border-radius:50%; margin-right:25px;"/>
										@endif
					                	<h2>{{ $user->firstname }} {{ $user->lastname }}</h2>
				                	</a>
				                	<p> {{ $user->university->name }}</p>
				                @endforeach
				             @endif
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	@else
		<meta http-equiv="refresh" content="0; {{ route('home') }}}" />
	@endif
@endsection

