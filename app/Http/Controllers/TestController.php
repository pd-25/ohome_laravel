<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Item_fasility;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TestController extends Controller
{
    
    
    public function insert_item(Request $request){
        $request->validate([
            'name' => 'required|string',
            'type' => 'required|string',
            'brand' => 'required|string',
            'hsn_sac' => 'string|numeric',
            'available' => 'required|boolean',
     ]);
        
    //    $item= Item::insertGetId($request->all());                                                                                                                                //$request->validate(['picture' => 'mimes:jpeg,png']) =$request->picture ?? Null;
    //     return response()->json([
    //         'status'=>1,
    //         'data'=>$item
    //     ]);

    
        // $item= Item::create($request->all());
       // $item= DB::table('items')->insertGetId($request->all());
       $item = new Item();
       $data = $request->all();
    //    $item->type =$request->type;
    //    $item->brand =$request->brand;
    //    $item->hsn_sac =$request->hsn_sac;
    //    $item->city =$request->city;
    //    $item->owner_name =$request->owner_name;
    //    $item->postbox =$request->postbox;
    //    $item->company =$request->company;
    //    $item->available =$request->available;
       
       if($item->fill($data)->save()){
        return response()->json([
            'status'=>'success',
            'data'=>$item
        ]);
       }
        

        // $item= Item::create($request->all());
        // $id =Item::findOrFail($item->id);                                                                                                                                //$request->validate(['picture' => 'mimes:jpeg,png']) =$request->picture ?? Null;
        // return response()->json([
        //     'status'=>'success',
        //     'data'=>$id
        // ]);

      
    }
    public function show_item(){
       
        return  Item::find('id');
    }

    // public function insert_item(Request $request){
    //     $request->validate([
    //         'name' => 'required|string',
    //         'type' => 'required|string',
    //         'brand' => 'required|string',
    //         'hsn_sac' => 'string|numeric',
    //         'available' => 'required|boolean',
    //  ]);'
    //  '
    //  $insert_data = [
    //      'name' =>$request->name,
    //      'type' =>$request->type,
    //      'brand' =>$request->brand,
    //      'hsn_sac' =>$request->hsn_sac,
    //      'city' =>$request->city,
    //      'owner_name' =>$request->owner_name,
    //      'country' =>$request->country,
    //      'postbox' =>$request->postbox,
    //      'company' =>$request->company,
    //      'available'=> $request->available
    //      'hh'=> $request->available
    //      'kk'=> $request->available
    //  ];
        
    //   $item= Item::create($insert_data);                                                                                                                                  //$request->validate(['picture' => 'mimes:jpeg,png']) =$request->picture ?? Null;
    //     return response()->json($item);
    // }
    public function get_fas(){
        
      

        $get_ammenities = '';
       
        //$coffee_shop = Item::where('id','1')->select('name','facility')->first();
        $coffee_shop = Item::where('id','1')->get('name')->first();
        return $coffee_shop;
        //$ammenities_id=explode(",",$coffee_shop);//['3','4','6',....]
        
        // $retrive_data = Item_fasility::whereIn('id',$ammenities_id)->where('item_fasilities','railway_pickup')->first();
       // return $retrive_data;
        // if($retrive_data){
        //     return 'yes';
        // }else{
        //     return 'no';
        // }
           
      
    }
   
}
