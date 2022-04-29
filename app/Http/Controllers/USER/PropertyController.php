<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Usersignups;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Session\Session as SessionSession;

class PropertyController extends Controller
{
    //
    public function all_rooms(Request $request){
        // if(Auth::id()){
            $search = $request['search'] ?? "";
            if($search != ""){
                $data['rooms'] = Room::where('address', 'LIKE', "%$search%")->get();
            }else{
                $data['rooms'] = Room::all();
            }
        
            //$data['names'] = $something;
        return view('AllProperty',$data);
        // }else{
        //     return redirect('sign_in.sav');
        // }
    }
    // public function get_room(Request $request){
    //     $get_room = Room::where('id', 30)->value('property_description');//pluck
    //     return $get_room;
    // }


   

    public function single_room(int $id){
        $data['room'] = Room::where('id',$id)->first();
        //dd($data);
        return view('singleRoom', $data);
    }

    public function create_room(Request $request){
        $request->validate([
            'property_description'=> 'required|string',
            'rent_price'=> 'required|numeric',
            'address'=> 'required|string',
            'bed'=> 'required|numeric',
            'room_image'=> 'image|mimes:jpeg,png,jpg,gif,svg',
            'bathroom'=> 'required|numeric',
            'pin'=> 'required|numeric',
            'owner_name'=> 'required|string',
            'owner_contact'=> 'required|string',
        ]);
        
        $rooms = $request->except(['room_image','user_id']);
        $imagefullname = '';
        if ($request->hasFile('room_image')) {
            $image = $request->file('room_image');
            $imgname = time().rand(0000,9999).'.'.$image->getClientOriginalExtension();
            $imagefullname = $image->move('userIdImage', $imgname);
            //storePubliclyAs
        }

        $rooms['room_image'] =$imgname;
       // $rooms['user_id'] = $request->session()->get('ADMIN_ID');
        $rooms['user_id'] = Session::get('id');
        //dd($request->session()->all());
        $insert_room = Room::create($rooms);
        dd($insert_room);
        if($insert_room){
            $request->session()->flash('message', 'room inserted successfully');
            return redirect('all_rooms');
        }else{
            $request->session()->flash('message', 'some problem!');
            return redirect()->back()->with('message', 'error ');;
        }

        // public function my_room(Request $request)
        // {
        //     # code...
        // }
    }
}

