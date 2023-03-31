<?php

namespace App\Http\Controllers;

use Auth;
use Carbon\Carbon;

use App\Models\Admin;
use App\Models\Certificates;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function Index(){
          
        return view('admin.admin_login');
    } // end method 

    public function Dashboard(){
        return view('admin.index');
    }// end method

    public function Login(Request $request){
        $check =$request->all();
        if(Auth::guard('admin')->attempt(['email'=> $check['email'], 'password' =>$check['password']])){
           return redirect()->route('admin.dashboard')->with('error', 'Admin Login Successfully');

        }
        else{ 
            return back()->with('error', 'invalid Email or Password');
        }
    }


    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login_from')->with('err', 'Admin Logout Successfully');

    }// end method


    public function AdminRegister(){
        return view('admin.admin_register');
    }// end method

    public function CreateAdmin(Request $request){
      
            //dd($request->all()); // to see if it passing data
    
            $request->validate([
                'email' => 'required|unique:admins', 
            ]);
            
            Admin::insert([
                'name' => $request->frist_name,
                'surname' => $request->surname,
                'last_name' => $request->last_name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'created_at' => Carbon::now(),
            ]);   
            return  redirect()->route('login_from')->with('err2', 'Admin Created Successfully');
           
        }// end method
    

        public function AdminAddCertificate(Request $request){
      
            // $departments = Department::get();

            return view('admin.addcertificate');

            //dd($request->all()); // to see if it passing data
        
           
        }// end method


        public function StoreCertificate(Request $request){
      
            //dd($request->all()); // to see if it passing data
    
            $request->validate([
                'email' => 'required|unique:certificates', 
            ]);
                
                $number = mt_rand(100000,999999);
                if($this->qrcodeExists($number)){
                    $number = mt_rand(100000,999999);
                }
            Certificates::insert([
                'fullname' => $request->fullname,
                'email' => $request->email,
                'phone' => $request->phone,
                'caddress' => $request->caddress,
                'dob' => $request->dob,
                'urine' => $request->urine,
                'methylendioxymethamphetamine' => $request->methylendioxymethamphetamine,
                'amphetamine' => $request->amphetamine,
                'ketamine' => $request->ketamine,
                'cotinine' => $request->cotinine,
                'methamphetamine' => $request->methamphetamine,
                'marijuana' => $request->marijuana,
                'morphine' => $request->morphine,
                'opiatestramadol' => $request->opiatestramadol,
                'benzodiazepines' => $request->benzodiazepines,
                'cocaineheroin' => $request->cocaineheroin,
                'note' => $request->note,
                'qrcode' =>'NDLEA-CET-'.$number,
            
            ]);   
            return  redirect()->route('admin.allcertificates')->with('err2', 'Certificate Created Successfully');
           
        }// end method
    
        public function qrcodeExists($number){
            return Certificates::whereQrcode($number)->exists();
        }

        public function AllCertificates(){
            $certificates =  Certificates::latest()->get();
    
            return view('admin.allcertificates', compact('certificates'));
        }
    
    
   

       



     

}
