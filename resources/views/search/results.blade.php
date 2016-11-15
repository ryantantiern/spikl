@extends('layouts.app')

@section('content')
		<h3>Your search for {{ Request::input('query') }}</h3>

		@if (!count($users))
			<p> No Results </p>
		@else 
			<div class="row">
				<div class="col-lg-12">
					@foreach ($users as $user)
						<p>{{ $user->firstName }} {{ $user->lastName }}</p>
					@endforeach
				</div>
			</div>
		@endif

@endsection