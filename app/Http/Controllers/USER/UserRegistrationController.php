<?php

namespace App\Http\Controllers\USER;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;


use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Illuminate\Auth\Events\Validated;

class UserRegistrationController extends Controller
{
    
    public function sign_up(){
        return view('userRegistration');
    }
    public function createsign_up(Request $request){

    //    $validate = $request->validate([
                    // 'first_name' => 'required|max:255',
                    // 'last_name' => 'required|max:255',
                    // 'email' => 'required|unique:users',
                    // 'password'=> 'password',
                    // 'phone_number' => 'required',
                    // 'dob' => 'required',
                    // 'mid' => 'required',
                    // 'idpic' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                    // 'gander' => 'required',
                   
               //  ]
               
         //  );
            // dd($validate);

    // if($validate){
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
       // dd($instr_data);


        $check_email = User::where('email', '=', $request->input('email'))->first();
          if ( $check_email === null) {
  // User does not exist
                $category = new User;
                 $resp = User::create($instr_data)->id;
                if($resp){
                   
                  return redirect('sign_in.sav');
               }else{
                 return redirect()->back();
                   }
                 } else {
  // User exits
               $request->session()->flash('message', 'email already exists!');
               return redirect()->back();
               

              }

            }
                // $request->session()->flash('message', 'fill the form correctly');
                // return redirect()->back();
            


        
         
        
        
    

//login code

public function show_user(Request $request){
    $data = ['lname'=>'eeeeee'];
    $get = User::where([['lname','=','eeeeee'],['idcard','=','driving']])->first();
    if($data['lname']==$get['lname']){
    return $get;
    }else{
        return 'itsss';
    }
}


    public function sign_in(Request $request){
        //dd($request->session()->get('userLogin'));
        if(!$request->session()->get('userLogin'))
        {
            return view('UserLogin'); 
        }

       
        return redirect('index');
    
    }

    public function signed_in(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
       

            
            $user =  User::where(['email'=>$request->email])->first();
            if(!$user || !Hash::check($request->password,$user->password)){
                return redirect()->back();
                $request->session()->flash('message', 'credential error!');
 
            }else{
                $request-> session()->put('userLogin', true);
                $request-> session()->put('ADMIN_ID', $user->id);
                //dd($request->session());

               
            
                return redirect('index');
            }
    }

    //logout
    public function logout()

    {
        Session::forget('userLogin') ;
        return redirect('/sign_in.sav');
        # code...
    }
}
