<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Universities;

class SearchController extends Controller
{
    
    public function index(Request $request)
    {
     
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

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
