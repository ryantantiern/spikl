<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use \App\Models\User;

use \App\Models\University;

use Auth;


class SearchController extends Controller
{
	    public function getResults(Request $request) 
	    {
	    	$users = [];
	    	$pattern = '';
	    	$query = $request->input('query');

	    	if (!$query) {
	    		return back();
	    	}

	    	$words = explode(" ", $query);

	    	if (sizeof($words) > 1)  {
	    	    foreach ($words as $word) {
	    	        $pattern .= $word . '%';
	    	    }

	    	    $unis = University::where('name' , 'LIKE', "%{$pattern}%")
	    	    	->get();
	    	}

	    	else {
	    		$unis = University::where('name' , 'LIKE', "%{$query}%")
	    			->get();
	    	}


	    	foreach ($unis as $uni) {
	    		foreach ($uni->users as $user) {
	    			if ($user->id != Auth::user()->id) { 
	    				array_push($users, $user);
	    			}
	    		}
	    	}



	    	return view('search.results')->with('users', $users);
	    }

	    // @param GET : str 
	    // return Json
	    // returns all universities that match str
	    	   

	    public function getUniSuggestion (Request $request)
	    {
	    	$term = $request->input('term');
	    	$unis = University::where('name' , 'LIKE', "%{$term}%")

    		->pluck('name')
    		->take(10)
    		->toJson();

	    	return $unis;
	    }

	    // @param GET : str 
	    // return Json
	    // return all universities that match str && belongs to user

	    public function getUniSugAssigned (Request $request)
	    {
	    	$term = $request->input('term');
	    	$unis = University::whereIn('id', User::distinct('university_id')->pluck('university_id')->all()) 
	    				->where('name', 'LIKE', "%{$term}%")
	    				->pluck('name')
	    				->all();

	    	return $unis;
	    }



}
