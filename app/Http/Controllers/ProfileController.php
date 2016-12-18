<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Image;
use Auth;

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

    public function setProfilePicture($avatar)
    {
        // Handle the user upload avatar
        $filename = time() . '.' . $avatar->getClientOriginalExtension();
        Image::make($avatar)
            ->resize(150,150)
            ->save(public_path("uploads\\avatar\\{$filename}"));
        $user = Auth::user();
        $user->avatar = $filename;

    }

    public function set(Request $request)
    {
        if ($request->hasFile('avatar')) {
            $avatar = $request->file('avatar');
            $this->setProfilePicture($avatar);
        }

        if (!empty($request->firstname)) {
            Auth::user()->firstname = $request->firstname;
        }

        if (!empty($request->lastname)) {
            Auth::user()->lastname = $request->lastname;
        }

        Auth::user()->save();

        return view('profile.settings');
    }

}
