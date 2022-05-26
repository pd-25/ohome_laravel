<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class AboutController extends Controller
{
    //
   public function about(){
    $userid = Session::get('user_id');
    $username = User::where('id',$userid)->select('fname')->first();
       return view('about',['username'=>$username->fname]);
   }
}
