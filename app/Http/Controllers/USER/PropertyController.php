<?php

namespace App\Http\Controllers\USER;

use App\Http\Controllers\Controller;
use App\Models\Room;
use App\Models\Usersignups;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PropertyController extends Controller
{
    //
    public function all_rooms(){
        // if(Auth::id()){
        $data['rooms'] = Room::get();

        return view('AllProperty',$data);
        // }else{
        //     return redirect('sign_in.sav');
        // }
    }


   

    public function single_room(Request $request, $id){
        $data['room'] = Room::get()->where($id);
        dd($data);
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
        
        $rooms = $request->except('room_image');
        $imagefullname = '';
        if ($request->hasFile('room_image')) {
            $image = $request->file('room_image');
            $imgname = time().rand(0000,9999).'.'.$image->getClientOriginalExtension();
            $imagefullname = $image->move('userIdImage', $imgname);
            //storePubliclyAs
        }

        $rooms['room_image'] =$imgname;
        //dd($rooms);
        $insert_room = Room::create($rooms);
        if($insert_room){
            $request->session()->flash('message', 'room inserted successfully');
            return redirect('all_rooms');
        }else{
            $request->session()->flash('message', 'some problem!');
            return redirect()->back()->with('message', 'error ');;
                }
    }
}

