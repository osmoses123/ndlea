<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;
use App\Models\Hod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HodController extends Controller
{
    public function Index(){
          
        return view('hod.hod_login');
    } // end method 

    public function HodDashboard(){
        return view('hod.index');
    }// end method

    public function HodLogin(Request $request){
        $check =$request->all();
        if(Auth::guard('hod')->attempt(['email'=> $check['email'], 'password' =>$check['password']])){
           return redirect()->route('hod.dashboard')->with('error', 'HOD  Login Successfully');

        }
        else{ 
            return back()->with('error', 'invalid Email or Password');
        }
    }


    public function HodLogout(){
        Auth::guard('hod')->logout();
        return redirect()->route('hod.login')->with('err', 'HOD Logout Successfully');

    }// end method


    public function HodRegister(){
        return view('hod.hod_register');
    }// end method
 
    public function CreateHod(Request $request){
      
            //dd($request->all()); // to see if it passing data
    
            $request->validate([
                'email' => 'required|unique:hods', 
            ]);
            
            Hod::insert([
                'name' => $request->frist_name,
                'surname' => $request->surname,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'created_at' => Carbon::now(),
            ]);   
            return  redirect()->route('hod.login')->with('err2', 'HOD Created Successfully');
           
        }// end method
    
 

}
