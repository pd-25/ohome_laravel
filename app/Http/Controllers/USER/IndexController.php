<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index(){
        return view('index');
    }

    
}
