@extends('layouts.app')

@section('content')
	<h3>Settings page for {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h3>
@endsection