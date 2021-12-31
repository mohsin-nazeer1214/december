<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Disease;
use App\models\Symptoms;


class DiseaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $show=Disease::all();
        return view('diseases.index',compact('show'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        
        $show=Disease::all();
        


        return view('diseases.create',compact('show'));

       


        

    }
    

  

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add= new Disease();
        $add->name=$request->name;
        $add->save();
     return redirect('diseases');  
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $fetch=Disease::find($id);
        return view('diseases.show',compact('fetch'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edt=Disease::find($id);
        return view('diseases.edit',compact('edt'));

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
        $update=Disease::find($id);
        $update->name=$request->name;

        $update->save();
        return redirect('diseases')->with('message'," Data Updated  successfully");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delt=Disease::find($id);
        $delt->delete();
        return redirect('diseases');
    }
}
