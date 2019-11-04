<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\StandartLKPP;
use Carbon\Carbon;
use DB;

class StandartLKPPController extends Controller
{
    function index()
	{
		if(session('level') == 'petugas'){
			return redirect('lkpp');
		}
		$data = DB::select("SELECT * FROM `standartlkpp` order by cast(replace(standartid,'Standart ','') as integer) asc");
		return view('pages.standartlkpp.index', compact('data'));
	}

	function create(){
		return view('pages.standartlkpp.create');
	}

	public function store(Request $request) {
		$data = new StandartLKPP();
		$data->standartid = $request->standartid;
		$data->standartname = $request->standartname;
		$data->createdate = Carbon::now();
		$data->deskripsi = $request->deskripsi;
		$data->save();
		return redirect('standartlkpp');
	}

	public function edit($id)
	{
		$data=StandartLKPP::find($id);
		return view('pages.standartlkpp.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = StandartLKPP::where('standartid', $id)->first();
		$data->standartid = $request->standartid;
		$data->standartname = $request->standartname;
		$data->createdate = Carbon::now();
		$data->deskripsi = $request->deskripsi;
		$data->save();
		return redirect('standartlkpp');
	}

	public function destroy($id){
		$data = StandartLKPP::find($id)->delete();
		if($data){
			return redirect('standartlkpp');
		}

	}
}
