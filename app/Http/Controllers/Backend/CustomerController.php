<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
    public function CustomerView(){
    	// $allData = User::all();
    	$data['allData'] = User::where('usertype','Admin')->get();
    	return view('backend.customer.view_customer',$data);

    }


    public function CustomerAdd(){
    	return view('backend.customer.add_customer');
    }


    public function CustomerStore(Request $request){

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

    	return redirect()->route('user.view')->with($notification);

    }



    public function CustomerEdit($id){
    	$editData = User::find($id);
    	return view('backend.user.edit_user',compact('editData'));

    }



    public function CustomerUpdate(Request $request, $id){

    	$data = User::find($id);
    	$data->name = $request->name;
    	$data->email = $request->email;
        $data->role = $request->role;
    	$data->save();

    	$notification = array(
    		'message' => 'User Updated Successfully',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('customer.view')->with($notification);

    }



    public function CustomerDelete($id){
    	$user = User::find($id);
    	$user->delete();

    	$notification = array(
    		'message' => 'User Deleted Successfully',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('customer.view')->with($notification);

    }





}
 