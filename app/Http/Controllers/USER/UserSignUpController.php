<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Usersignups;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserSignUpController extends Controller
{
    //
    public function sign_up(){
        return view('userSignUp');
    }
    public function createsign_up(Request $request){
       
        $validatedData = $request->validate([
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|unique:users',
            'password'=> 'password',
            'phone_number' => 'required',
            'dob' => 'required',
            'mid' => 'required',
            'idpic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'gander' => 'required',
           
        ]);
        
        $imagefullname = '';
        if ($request->hasFile('idpic')) {
            $image = $request->file('idpic');
            $imgname = time().rand(0000,9999).'.'.$image->getClientOriginalExtension();
            $imagefullname = $image->move('userIdImage', $imgname);
            //storePubliclyAs
        }

        $instr_data = array(
            'fname' =>$request->first_name,
            'lname' => $request->last_name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
            'phn_num' => $request->phone_number,
            'DOB' => $request->dob,
            'idcard' => $request->mid,
            'idimage' => $imagefullname,
            'gander' => $request->gander,
        );
        $category = new User;
        $resp = User::create($instr_data)->id;
        if($resp){
            echo "Success";
        }else{
            echo "Fail";
        }
    }




    public function sign_in(){
        return view('UserLogin');
    }

    public function signed_in(Request $request){
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);
        
        $check = Usersignups::where(['email'=>$request->username,'password'=>$request->password])->count();
            if($check>0){
                session(['userLogin',true]);
                return redirect('index');
            }else{
                $request->session()->flash('message', 'login cradencial are wrong');
                return redirect()->back();
            }
    }
}





/* $image = $request('idpic');//<form name
                 
                    $imageName = time().'.'.$request->file('idpic')->getClientOriginalName();
                    $request->idpic->move('userIdImage',$imageName);*/
