<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class TranslationController extends Controller
{
    public function TranslationView(){
    	// $allData = User::all();
    	$data['allData'] = User::where('usertype','Admin')->get();
    	return view('backend.translation.view_translation',$data);

    }

}
 