<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    //
    public function index(){
        //$user['user'] =Auth::user('fname','id');
        //dd($user);
        return view('index');
    }

    
}
