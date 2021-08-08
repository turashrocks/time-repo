<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ScheduleController extends Controller
{
    public function ScheduleView(){
    	// $allData = User::all();
    	$data['allData'] = User::where('usertype','Admin')->get();
    	return view('backend.schedule.view_schedule',$data);

    }

}
 