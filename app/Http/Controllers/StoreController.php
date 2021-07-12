<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class StoreController extends Controller
{
    public function list(Request $request){
        if ($request->ajax()) {
            $data = User::latest()->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        $btn = '<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">View</a>';
                        return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('store.list');
    }

    public function create(Request $request){
        $state_data = DB::table('state')->select('*')->get();
        $city_data = DB::table('city')->select('*')->get();
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
        
        $store_data = DB::table('store')->insert([
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

    public function show(){
        $data =  DB::table('store')->select('*')->get();
        print_r($data); exit();
        return view('store.list', compact('data'));
    }

    public function edit(Request $request, $id){
        $store_name = $request->input('store_name');
        $store_number = $request->input('store_number');
        $state = $request->input('state');
        $city = $request->input('city');
        $store_area = $request->input('store_area');
        $store_address = $request->input('store_address');
        $store_pin = $request->input('store_pin');
    }

    public function update(Request $request, $id){
        $store_name = $request->input('store_name');
        $store_number = $request->input('store_number');
        $state = $request->input('state');
        $city = $request->input('city');
        $store_area = $request->input('store_area');
        $store_address = $request->input('store_address');
        $store_pin = $request->input('store_pin');

        $store_data = DB::table('store')->update([
                                    'store_name'=>$store_name,
                                    'store_number'=>$store_number,
                                    'state'=>$state,
                                    'city'=>$city,
                                    'store_area'=>$store_area,
                                    'store_address'=>$store_address,
                                    'store_pin'=>$store_pin
                                ]);

        return view('store.list');
    }
}
