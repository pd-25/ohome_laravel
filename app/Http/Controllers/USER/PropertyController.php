<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\User;
use App\Models\Usersignups;

use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PropertyController extends Controller
{
    //
    public function all_rooms(Request $request){
        
            $userid = Session::get('user_id');
            $username = User::where('id',$userid)->select('fname')->first();
            $search = $request['search'] ?? "";
            if($search != ""){
                $data['rooms'] = Room::where('address', 'LIKE', "%$search%")->where('availability',1)->get();
            }else{
                $data['rooms'] = Room::where('availability',1)->get();
            }
         return view('AllProperty',$data,['username'=>$username->fname]);
        
    }
    
    public function single_room(int $id){
        $data['room'] = Room::where('id',$id)->first();
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
        $rooms['availability'] =1;
        $rooms['user_id'] = Session::get('user_id');
        $insert_room = Room::create($rooms);
        if($insert_room){
            $request->session()->flash('message', 'room inserted successfully');
            return redirect('all_rooms');
        }else{
            $request->session()->flash('message', 'some problem!');
            return redirect()->back()->with('message', 'error ');;
        }
    }

    public function my_room(Request $request)
    {
        $userid = Session::get('user_id');
        $username = User::where('id',$userid)->select('fname')->first();
        $myRoom['myRooms'] = Room::where('user_id',$userid)->get();
        return view('myroom',$myRoom,['username'=>$username->fname]);
    }

    public function edit_Myroom(Request $request){
        $room['edit_room'] = Room::where('id',$request->id)->first();
        $userid = Session::get('user_id');
        
        $username = User::where('id',$userid)->select('fname')->first();
        return view('editRoom',$room,['username'=>$username->fname]);
    }

    public function edit_room(){
        
    }
}



// public function get_room(Request $request){
    //     $get_room = Room::where('id', 30)->value('property_description');//pluck
    //     return $get_room;
    // }

     // dd(Session::get('user_id'));
       // $rooms['user_id'] = $request->session()->get('ADMIN_ID');
        //dd($rooms);
        //dd($request->session()->all());

