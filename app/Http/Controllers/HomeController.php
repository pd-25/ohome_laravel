<?php

namespace App\Http\Controllers;

use App\Models\qsn;
use App\Models\Room;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Room::orderBy('id', 'DESC')->get();
        //dd($data);
        //return view('home');
    }

    
    }

