<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Response;
class UserController extends Controller
{

	
   public function viewAddUser()
    {
      $user = new User;
      $users= $user->fetech_user();
      return view('users.manageUser' ,compact('users'));
      
    }
    public function showUser()
    {
    	$user = new User;
    	$user->fetech_user();
    	return back();
    }
    public function delete_user(Request $request)
    {
      $user=User::find($request->id);
      $user->delete();

      return Response::json(['success' => 'removed']);
    }
}
