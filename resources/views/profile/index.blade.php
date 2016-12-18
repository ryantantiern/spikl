@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            @if ($user->avatar != NULL)
                <img src="/uploads/avatar/{{ $user->avatar }}" alt="profile-pic" 
                style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"/>
            @else
                <img src="/uploads/avatar/default.png" alt="profile-pic" 
                style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"/>
            @endif
            <h2>{{ $user->firstname }}</h2>
            <p>{{ $user->firstname }}</p>
            <p>{{ $user->lastname }}</p>
            <p>{{ $user->email }}</p>
            <p>{{ $user->university->name }}</p>

             
        </div>
    </div>
</div>
@endsection
