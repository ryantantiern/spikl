@extends('layouts.app')

@section('content')
	@if (Auth::user())
		<div class="container">
		    <div class="row">
		        <div class="col-md-8 col-md-offset-2">
		            <div class="panel panel-default">
		                <div class="panel-heading">
		                	<h3>Chats page for {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h3>
		                </div>

		                <div class="panel-body">
		                  
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	@else
		<meta http-equiv="refresh" content="0; {{ route('home') }}" />
	@endif

@endsection