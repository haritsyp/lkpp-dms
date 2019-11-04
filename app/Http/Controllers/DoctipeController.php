<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Doctipe;

class DoctipeController extends Controller
{
    function index()
	{
		$data = Doctipe::get();
		return view('pages.doctipe.index', compact('data'));
	}

	function create(){
		return view('pages.doctipe.create');
	}

	public function store(Request $request) {
		$data = new Doctipe();
		$data->tipename = $request->tipename;
		$data->save();
		return redirect('doctipe');
	}

	public function edit($id)
	{
		$data=Doctipe::find($id);
		return view('pages.doctipe.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = Doctipe::where('tipeid', $id)->first();
		$data->tipename = $request->tipename;
		$data->save();
		return redirect('doctipe');
	}

	public function destroy($id){
		$data = Doctipe::find($id)->delete();
		if($data){
			return redirect('doctipe');
		}

	}
}
