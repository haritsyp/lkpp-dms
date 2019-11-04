<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docdetail;
use App\StandartLKPP;
use App\Dokumen;
use DB;

class DocdetailController extends Controller
{
    function index()
	{
		$data = DB::select("SELECT * FROM `standartlkpp` order by cast(replace(standartid,'Standart ','') as integer) asc");
		return view('pages.docdetail.index', compact('data'));
	}

	function indexUser()
	{
		$data = DB::select("SELECT * FROM `standartlkpp` order by cast(replace(standartid,'Standart ','') as integer) asc");
		return view('pages.index', compact('data'));
	}


	function detail(Request $request)
	{
		$doc = StandartLKPP::where('standartid', $request->standartid)->get();
		$data = Docdetail::where('standartid', $request->standartid)->get();
		return view('pages.docdetail.detail', compact('data','doc'));
	}

	function userDetail(Request $request)
	{
		$doc = StandartLKPP::where('standartid', $request->standartid)->get();
		$data = Docdetail::where('standartid', $request->standartid)->get();
		$dokumen = DB::table('documents')
            ->join('doctipes', 'documents.tipeid', '=', 'doctipes.tipeid')
			->select('documents.*', 'doctipes.tipename')
            ->get();
		return view('pages.viewdetail', compact('data','doc','dokumen'));
	}

	function create(Request $request){
		$data = StandartLKPP::find($request->standartid);;
		return view('pages.docdetail.create', compact('data'));
	}

	public function store(Request $request) {
		$data = new Docdetail();
		$data->standartid = $request->standartid;
		$data->no = $request->no;
		$data->butir = $request->butir;
		$data->deskriptor = $request->deskriptor;
		$data->save();
		return redirect('lkpp/detail/'.$request->standartid);
	}

	public function edit($id)
	{
		$data=Docdetail::find($id);
		return view('pages.docdetail.edit',compact('data'));
	}

	public function update(Request $request, $id)
	{
		$data = Docdetail::where('detailid', $id)->first();
		$data->standartid = $request->standartid;
		$data->no = $request->no;
		$data->butir = $request->butir;
		$data->deskriptor = $request->deskriptor;
		$data->save();
		return redirect('lkpp/detail/'.$request->standartid);
	}

	public function destroy($id){
		$datas = Docdetail::find($id);
		$data = Docdetail::find($id)->delete();	
		if($data){
			return redirect('lkpp/detail/'.$datas->standartid);
		}

	}
}
