<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HourController extends Controller
{
    public function HourView(){
    	// $allData = User::all();
    	$data['allData'] = User::where('usertype','Admin')->get();
    	return view('backend.hour.view_hour',$data);

    }

	public function HourList(){
    	// $allData = User::all();
    	$data['allData'] = User::where('usertype','Admin')->get();
    	return view('backend.hour.list_hour',$data);

    }


    public function HourAdd(){
    	return view('backend.hour.add_hour');
    }


    public function HourStore(Request $request){

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



    public function HourEdit($id){
    	$editData = User::find($id);
    	return view('backend.user.edit_hour',compact('editData'));

    }



    public function HourUpdate(Request $request, $id){

    	$data = User::find($id);
    	$data->name = $request->name;
    	$data->email = $request->email;
        $data->role = $request->role;
    	$data->save();

    	$notification = array(
    		'message' => 'User Updated Successfully',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('hour.view')->with($notification);

    }



    public function HourDelete($id){
    	$user = User::find($id);
    	$user->delete();

    	$notification = array(
    		'message' => 'User Deleted Successfully',
    		'alert-type' => 'info'
    	);

    	return redirect()->route('hour.view')->with($notification);

    }





}
 