<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    //
    public function getProfile($uid)
    {
    	$user = User::where('id', $uid)->first();
    	return view('profile.index', ['user' => $user]);
    }

    public function getSettings() 
    {
    	return view('profile.settings');
    }

}
