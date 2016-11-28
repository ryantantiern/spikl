@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Profile</div>

                <div class="panel-body">
                    <img class="media-object" src="" alt="profile-pic"/>
                    <p>{{ $user->firstname }}</p>
                    <p>{{ $user->lastname }}</p>
                    <p>{{ $user->email }}</p>
                    <p>{{ $user->university->name }}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
