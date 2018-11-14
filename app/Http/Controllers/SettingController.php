<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function index()
    {	
    	$path = storage_path() . "/json/settings.json"; // ie: /var/www/laravel/app/storage/json/filename.json
   		 $data = json_decode(file_get_contents($path), true); 
    	return view('settings.settings',compact('data'));
    }
    public  function settings(Request $request)
    {
    $path = storage_path() . "/json/settings.json"; // ie: /var/www/laravel/app/storage/json/filename.json
    $data = json_decode(file_get_contents($path), true);     
	   $data['regular']["new_post"] = $request->new_post;
	   $data['regular']["new_comment"] = $request->new_comment;
	   $data['regular']["first_login"] = $request->first_login;
	   $data['regular']["refer"] = $request->refer;
	   $data['regular']["minimum_withdraw"] = $request->minimum_withdraw;
	 	
	   $newJsonString = json_encode($data ,JSON_PRETTY_PRINT);
	   file_put_contents($path, $newJsonString);

	   return redirect()->back();
	    }
}