<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    function index()
	{
		if(session('level') == 'petugas'){
			return redirect('dashboard');
		}
		$data = User::where('level', 'petugas')->get();
		return view('pages.user.index', compact('data'));
	}

	function create(){
		return view('pages.user.create');
	}

	public function store(Request $request) {
		$data = new User();
		$data->name = $request->name;
		$data->username = $request->username;
		$data->password = $request->password;
		$data->level = 'petugas';
		$data->save();
		return redirect('user');
	}

	public function edit($id)
	{
		$data=User::find($id);
		return view('pages.user.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = User::where('id', $id)->first();
		$data->name = $request->name;
		$data->username = $request->username;
		$data->password = $request->password;
		$data->level = 'petugas';
		$data->save();
		return redirect('user');
	}

	public function destroy($id){
		$data = User::find($id)->delete();
		if($data){
			return redirect('user');
		}

	}
}
