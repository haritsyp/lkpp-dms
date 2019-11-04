<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;
use App\User;

class LoginController extends Controller
{

    function attempt(Request $request)
	{
		$username = $request->username;
	    $password = $request->password;
	    $user = DB::table('users')->where('username', $username)->where('password', $password)->first();
        if(isset($user->id)){
            session(['id' => $user->id, 'username' => $user->username,'name' => $user->name, 'level' => $user->level]);
            return redirect('dashboard');
        }
        
        return Redirect::back()->withErrors(['These credentials do not match our records.', 'The Message']);

	}

	function destroy(Request $request){
		session()->flush();
		return redirect('/');
	}
}
