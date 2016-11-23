@extends('layouts.app')

@section('content')
			<h3>Your search for {{ Request::input('query') }}</h3>
			@if (!count($users))
				<p> No Results </p>
			@else 
				<div class="row">
					<div class="col-lg-12">
						@foreach ($users as $user)
							<a href="{{ route('profile.index', ['uid' => $user->id]) }}"><h2>{{ $user->firstname }} {{ $user->lastname }}</h2></a>
							<p> {{ $user->university->name }}</p>
						@endforeach
					</div>
				</div>
			@endif
@endsection