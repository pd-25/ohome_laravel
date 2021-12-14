<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use App\Models\Usersignups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    //
    public function all_rooms(){
        if(Auth::id()){
        return view('AllProperty');
        }else{
            return redirect('sign_in');
        }
    }
}
