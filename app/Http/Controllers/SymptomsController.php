<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Symptoms;
use App\Models\Disease;


class SymptomsController extends Controller
{

    public function index() 
    {


        $show=Disease::all();

        return view('diseases.symptoms',compact('show'));
       
    }
    public function store(Request $request)
    {
        $request->validate([
            'addMoreInputFields.*.symptoms' => 'required'
                      
            
        ]);
     
        foreach ($request->addMoreInputFields as $key => $value) {
            Symptoms::create($value);
        }
     
        return back()->with('success', 'New subject has been added.');
    }
    
}

    


