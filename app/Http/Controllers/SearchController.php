<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\User;

use \App\Models\University;


class SearchController extends Controller
{
	    public function getResults(Request $request) 
	    {
	    	$users = [];
	    	$query = $request->input('query');

	    	if (!$query) {
	    		return back();
	    	}

	    	$unis = University::where('name' , 'LIKE', "%{$query}%")
	    		->get();

	    	foreach ($unis as $uni) {
	    		foreach ($uni->users as $user) {
	    			array_push($users, $user);
	    		}
	    	}

	    	return view('search.results')->with('users', $users);
	    }
}
