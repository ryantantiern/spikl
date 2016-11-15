<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Universities;

class SearchController extends Controller
{
    
    public function index(Request $request)
    {
        if ($request->input('query') == null) { 

            return back();
        }

        $pattern = '%';
        $input_query = $request->input('query');
        
        // if user input a value, delimit words by single space
        if (strlen($input_query) > 0){
            $str_array = explode(" ", $input_query);
        }

        // if more than 1 word, concat %
        if (sizeof($str_array) > 1)  {

            foreach ($str_array as $word) {
                $pattern = $pattern . '%' . $word;
            }

            $pattern = $pattern . '%';

        }

        else {

            $pattern = '%' . $str_array[0] . '%';

        }


        // query for universities
        $unis = Universities::where('name', 'LIKE', $pattern )->get();
        if($unis) {
            foreach ($unis as $uni) {
                echo $uni->name . " <br />";
            }
        }

     
        
    }

}