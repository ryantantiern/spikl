
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	<h3>Settings page for {{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</h3>
                </div>

                <div class="panel-body">
                    @if (Auth::user()->avatar != NULL)
                        <img src="/uploads/avatar/{{ Auth::user()->avatar }}" alt="profile-pic" 
                         style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"/>
                    @else
                        <img src="/uploads/avatar/default.png" alt="profile-pic" 
                         style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;"/>
                    @endif
                    <form enctype="multipart/form-data" action="{{ route('profile.settings.avatar') }}" method="POST">
                        <label for="update-profie-pic">Upload Profile Picture</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="pull-right btn btn-sm btn-primary">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
