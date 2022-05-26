<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Session as FacadesSession;

class ContactController extends Controller
{
    //
    public function contact(){
        $userid = Session::get('user_id');
        $username = User::where('id',$userid)->select('fname')->first();
        return view('contact',['username'=>$username->fname]);
    }
}
