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

    public function single_room(){
        return view('singleRoom');
    }

    public function create_room(Request $request){
        $request->validate([
            'property_description'=> 'required',
            'rent_price'=> 'required',
            'address'=> 'required',
            'bed'=> 'required',
            'bathroom'=> 'required',
            'pin'=> 'required',
            'owner_name'=> 'required',
            'owner_contact'=> 'required',
        ]);
        $imagefullname = '';
        if ($request->hasFile('room_image')) {
            $image = $request->file('room_image');
            
            $imgname = time().rand(0000,9999).'.'.$image->getClientOriginalExtension();
            //$image['room_image'] = $imgname;
            $imagefullname = $image->move('userIdImage', $imgname);
            //storePubliclyAs
        }
      
// $ins = [
//     'property_description' => $request->property_description,
//     'room_image' =>$request->$imgname,
//     'rent_price' =>$request->rent_price,
//     'address' =>$request->address,
//     'bed' =>$request->bed,
//     'bathroom' =>$request->bathroom,
//     'pin' =>$request->pin,
//     'owner_name' =>$request->owner_name,
//     'owner_contact' =>$request->owner_contact,
// ];
        $insert_room = Room::create($request->all());
        if($insert_room){
            $request->session()->flash('message', 'room inserted successfully');
            return redirect('all_rooms');
        }else{
            $request->session()->flash('message', 'some problem!');
            return redirect()->back();
                }
    }
}
