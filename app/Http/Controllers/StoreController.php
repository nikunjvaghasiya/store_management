<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StoreController extends Controller
{
    public function list(Request $request){
        $view_store_data = DB::table('store')->select('*')->get();

        return view('store.list', compact('view_store_data'));
    }

    public function create(Request $request){
        $state_data = DB::table('state')->select('state_name')->get();
        $city_data = DB::table('city')->select('city_name')->get();
        return view('store.add', compact('state_data', 'city_data'));
    }

    public function add(Request $request){
        $store_name = $request->input('store_name');
        $store_number = $request->input('store_number');
        $state_name = $request->input('state_name');
        $city_name = $request->input('city_name');
        $store_area = $request->input('store_area');
        $store_address = $request->input('store_address');
        $pin = $request->input('store_pin');
         
        DB::table('store')
                    ->insert([
                        'store_name'=>$store_name,
                        'store_number'=>$store_number,
                        'state_name'=>$state_name,
                        'city_name'=>$city_name,
                        'store_area'=>$store_area,
                        'store_address'=>$store_address,
                        'pin'=>$pin
                    ]);
        return view('store.list');
    }

    public function edit(Request $request, $id){
        $state_data = DB::table('state')->select('state_name')->get();
        $city_data = DB::table('city')->select('city_name')->get();
        
        $edit_data = DB::table('store as s')
                            ->where(['s.id'=>$id])
                            ->Join('state as sd', 'sd.state_id', '=', 's.id')
                            ->Join('city as cd', 'cd.city_id', '=', 's.id')
                            ->select('s.id', 's.store_name', 's.store_number', 'sd.state_name', 'cd.city_name', 's.store_area', 's.store_address', 's.pin')
                            ->first();
        return view('store.edit', compact('state_data', 'city_data', 'edit_data',));
     }

    public function update(Request $request, $id){
        $store_name = $request->input('store_name');
        $store_number = $request->input('store_number');
        $state_name = $request->input('state_name');
        $city_name = $request->input('city_name');
        $store_area = $request->input('store_area');
        $store_address = $request->input('store_address');
        $pin = $request->input('store_pin');

        $update_data = DB::table('store')
                                ->update([
                                    'store_name'=>$store_name,
                                    'store_number'=>$store_number,
                                    'state_name'=>$state,
                                    'city_name'=>$city,
                                    'store_area'=>$store_area,
                                    'store_address'=>$store_address,
                                    'store_pin'=>$store_pin
                                ]);

        return view('store.list');
    }

    public function delete(Request $request, $id){
        $delete_data = DB::table('store')->where(['id'=>$id])->delete();

        return view('store.list');
    }
}
