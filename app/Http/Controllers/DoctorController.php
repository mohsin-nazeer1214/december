<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Doctor;


class DoctorController extends Controller
{
    public function index(){
        return view('doctor.regdoctor');
    }

    public function create()
    {
        return view('doctor.regdoctor');
        
    }

    public function store(Request $request)
    {
        $fileName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('file'), $fileName);
       $file =new Doctor();
       $file->image = $fileName;
       $file->name=$request->name;
       $file->father_name=$request->father_name;
    
       $file->date_of_birth=$request->date_of_birth;
       $file->gender=$request->gender;
       $file->nationality=$request->nationality;
       $file->cnic=$request->cnic;
       $file->mobile_no=$request->mobile_no;
       $file->email_adress=$request->email_adress;

       $file->password=$request->password;



       $file->save();
        return redirect('/');
    }

}
