<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $data = Room::orderBy('id', 'DESC')->get()->toArray();
        //dd($data[0],$data[1],$data[2]);exit;
        $latestrooms =[ $data[0],$data[1],$data[2]];
        //dd($latestrooms);
        return view('index',["latestrooms"=>$latestrooms] );
    }

    public function home(Request $request)
    {
        if(!$request->session()->get('userLogin'))
        {
            return view('UserLogin'); 
        }
        $data = Room::orderBy('id', 'DESC')->get()->toArray();
        //dd($data[0],$data[1],$data[2]);exit;
        $latestrooms =[ $data[0],$data[1],$data[2]];
        //dd($latestrooms);
        return view('index',["latestrooms"=>$latestrooms] );
        # code...
    }

    
}
