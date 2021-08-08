<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class SaleController extends Controller
{
    public function SaleView(){
    	// $allData = User::all();
    	$data['allData'] = User::where('usertype','Admin')->get();
    	return view('backend.sale.view_sale',$data);

    }


    public function SaleAdd(){
    	return view('backend.sale.add_sale');
    }


    public function SaleStore(Request $request){

    	$validatedData = $request->validate([
    		'email' => 'required|unique:users',
    		'name' => 'required',
    	]);

    	$data = new User();
        $code = rand(0000,9999);
    	$data->usertype = 'Admin';
        $data->role = $request->role;
    	$data->name = $request->name;
    	$data->email = $request->email;
    	$data->password = bcrypt($code);
        $data->code = $code;
    	$data->save();

    	$notification = array(
    		'message' => 'User Inserted Successfully',
    		'alert-type' => 'success'
    	);

    	return redirect()->route('sale.view')->with($notification);

    }



    public function SaleEdit($id){
    	$editData = User::find($id);
    	return view('backend.sale.edit_sale',compact('editData'));

    }



    public function SaleUpdate(Request $request, $id){

    	$data = User::find($id);
    	$data->name = $request->name;
    	$data->email = $request->email;
        $data->role = $request->role;
    	$data->save();

    	$notification = array(
    		'message' => 'User Updated Successfully',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('sale.view')->with($notification);

    }



    public function SaleDelete($id){
    	$user = User::find($id);
    	$user->delete();

    	$notification = array(
    		'message' => 'User Deleted Successfully',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('sale.view')->with($notification);

    }





}
 