<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Symptoms;

use Illuminate\Support\Facades\DB;


class PatientController extends Controller
{
    public function index(){

        
        $see=Symptoms::all();

        
        return view('patient.patient_registration',compact('see'));




    }
    public function create()
    {


        

        return view('patient.patient_registration');
    }
    

    public function getdisease(Request $request){


        $symptoms_id=$request->post('symptoms_id');
        $sympt = DB::table('diseases')->get();//query return data in DB method
		$html='<option value="">You may have these diseases</option>';
		foreach($sympt as $list){
			$html.='<option value="'.$list->id.'">'.$list->name.'</option>';
		}
		echo $html;
    }
 
    public function store(Request $request)
    {
        

        $add=New Patient();
        $add->name=$request->name;
        $add->email=$request->email;
        $add->phone=$request->phone;
        $add->Location=$request->Location;
        $add->checks=$request->checks;
        $add->msg=$request->msg;


        $add->symptoms=$request->symptoms;
        $add->disease=$request->disease;

        $add->save();


            return redirect('login');
     


    

    
    }

}
