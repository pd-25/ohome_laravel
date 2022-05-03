<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    //
    public function index(Request $request){
        if(!$request->session()->get('userLogin'))
        {
            return view('UserLogin'); 
        }
        //$user['user'] =Auth::user('fname','id');
        //dd($user);
        $userid = Session::get('user_id');
        $username = User::where('id',$userid)->select('fname')->first();
        $data = Room::orderBy('id', 'DESC')->get()->toArray();
        
        //dd($data[0],$data[1],$data[2]);exit;
        $latestrooms =[ $data[0],$data[1],$data[2]];
        //dd($latestrooms);
        return view('index',["latestrooms"=>$latestrooms, 'username'=>$username->fname] );
    }

    public function home(Request $request)
    {
        if(!$request->session()->get('userLogin'))
        {
            return view('UserLogin'); 
        }
        $userid = Session::get('user_id');

        $data = Room::orderBy('id', 'DESC')->get()->toArray();
        $username = User::where('id',$userid)->select('fname')->first();
        //dd($data[0],$data[1],$data[2]);exit;
        $latestrooms =[ $data[0],$data[1],$data[2]];
        //dd($latestrooms);
        return view('index',["latestrooms"=>$latestrooms,'username'=>$username->fname] );
        
    }

    
}
