<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContentController extends Controller
       
        
        {
            function store(Request $request){
                $jsonString = file_get_contents(base_path('public/results.json'));
                $data = json_decode($jsonString, true);
                $data[] = array (
                "name" => $request->input('name'),
                "phonenumber" => $request->input('phonenumber'),
                "address" => $request->input('address'),
                "job" => $request->input('job'),
                );
                $newJsonString = json_encode($data);
                file_put_contents(base_path('public/results.json'),$newJsonString);
                return redirect('/content')->with(['success'=>'Thanks for filling the form']);
            }
        }
           