<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dokumen;
use App\Docdetail;
use App\Doctipe;
use App\Standart3;
use App\Standart4;
use App\Standart5;
use App\Standart7;
use App\Standart8;
use App\Standart9;
use App\Standart10;
use App\Standart13;
use App\Standart14;
use App\Standart17;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Storage;

class DokumenController extends Controller
{
	function index(Request $request)
	{
		$tipe = Doctipe::get();
		$detail = Docdetail::where('detailid', $request->detailid)->first();
		$data = Dokumen::where('detailid', $request->detailid)->get();
		$check = collect(DB::select("select count(*) as cek from standartlkpp where tipe=1 and standartid = '$detail->standartid'"))->first();
		return view('pages.dokumen.index', compact('data','detail','tipe','check'));
	}

	function form(Request $request)
	{
		$tipe = Doctipe::get();
		$detail = Docdetail::find($request->detailid);
		$data = Dokumen::find($request->docid);
		if($detail->standartid == 'Standart 3'){
			$informasi = Standart3::where('docid',$request->docid)->where('idklasifikasi',1)->get();
			$sdm = Standart3::where('docid',$request->docid)->where('idklasifikasi',2)->get();
			$fisik = Standart3::where('docid',$request->docid)->where('idklasifikasi',3)->get();
			$software = Standart3::where('docid',$request->docid)->where('idklasifikasi',4)->get();
			$layanan = Standart3::where('docid',$request->docid)->where('idklasifikasi',5)->get();
			$intagibel = Standart3::where('docid',$request->docid)->where('idklasifikasi',6)->get();
			return view('pages.dokumen.create', compact('data','detail','tipe','informasi','sdm','fisik','software','layanan','intagibel'));

		}else if($detail->standartid == 'Standart 4'){
			$std = Standart4::where('docid',$request->docid)->get();
			return view('pages.dokumen.create', compact('data','detail','tipe','std'));
		}else if($detail->standartid == 'Standart 5'){
			$std = Standart5::where('docid',$request->docid)->get();
			return view('pages.dokumen.create', compact('data','detail','tipe','std'));
		}else if($detail->standartid == 'Standart 7'){
			$std = Standart7::where('docid',$request->docid)->get();
			return view('pages.dokumen.create', compact('data','detail','tipe','std'));
		}else if($detail->standartid == 'Standart 8'){
			$std = Standart8::where('docid',$request->docid)->get();
			return view('pages.dokumen.create', compact('data','detail','tipe','std'));
		}else if($detail->standartid == 'Standart 9'){
			$std = Standart9::where('docid',$request->docid)->get();
			return view('pages.dokumen.create', compact('data','detail','tipe','std'));
		}else if($detail->standartid == 'Standart 10'){
			$std = Standart10::where('docid',$request->docid)->get();
			return view('pages.dokumen.create', compact('data','detail','tipe','std'));
		}else if($detail->standartid == 'Standart 13'){
			$std = Standart13::where('docid',$request->docid)->get();
			return view('pages.dokumen.create', compact('data','detail','tipe','std'));
		}else if($detail->standartid == 'Standart 14'){
			$std = Standart14::where('docid',$request->docid)->get();
			return view('pages.dokumen.create', compact('data','detail','tipe','std'));
		}else if($detail->standartid == 'Standart 17'){
			$std = Standart17::where('docid',$request->docid)->get();
			return view('pages.dokumen.create', compact('data','detail','tipe','std'));
		}

	}

	public function upload(Request $request){
		$upload_dir = '/uploads/dokumen';
		if (!empty($_FILES)) 
		{ 
			$tempFile = $_FILES['file']['tmp_name'];
			$uploadPath = public_path(). $upload_dir . DIRECTORY_SEPARATOR;
			$filename = $_FILES['file']['name'];
			$mainFile = $uploadPath.$filename;

			$data = new Dokumen();
			$data->detailid = $request->detailid;
			$data->tipeid = $request->tipeid;
			$data->docname = $request->dokumen;
			$data->source = $request->source;
			$data->uploaddate = Carbon::now();
			$data->filename = $filename;
			$data->save();

			move_uploaded_file($tempFile,$mainFile);
		}
		if($request->source == 'Form'){
			$data = new Dokumen();
			$data->detailid = $request->detailid;
			$data->tipeid = $request->tipeid;
			$data->docname = $request->dokumen;
			$data->source = $request->source;
			$data->uploaddate = Carbon::now();
			$data->save();
			$detail = Docdetail::find($request->detailid);
			return redirect('dokumen/manage/'.$request->detailid);
		}
	}

	public function uploaddelete(Request $request){
		$data = Dokumen::where('filename',$request->id)->first();
		$datas = Dokumen::where('filename',$request->id)->first();
		if($data){
			$file = public_path()."\uploads\dokumen\\".$data->filename;
			unlink($file);
		}
		$data->delete();
		return redirect('dokumen/manage/'.$datas->detailid);

	}


	function detail(Request $request)
	{
		$doc = StandartLKPP::where('standartid', $request->standartid)->get();
		$data = Docdetail::where('standartid', $request->standartid)->get();
		return view('pages.docdetail.detail', compact('data','doc'));
	}

	function getDownload(Request $request){
		$file= public_path()."/uploads/dokumen/".$request->filename;
		$headers = [
			'Content-Type' => 'application/pdf',
		];
		return response()->download($file, $request->filename, $headers);
	}

	function create(Request $request){
		$data = StandartLKPP::find($request->standartid);;
		return view('pages.docdetail.create', compact('data'));
	}

	public function store(Request $request) {
		$data = new Dokumen();
		$data->detailid = $request->detailid;
		$data->tipeid = $request->tipeid;
		$data->docname = $request->dokumen;
		$data->source = $request->source;
		$data->uploaddate = Carbon::now();
		//upload
		if($request->source == 'Upload'){
			$dokumen=$request->file('filename');
			$upload='uploads/dokumen';
			$filename=$dokumen->getClientOriginalName();
			$success=$dokumen->move($upload,$filename);
			$data->filename = $filename;
		}

		$data->save();
		$detail = Docdetail::find($request->detailid);
		return redirect('dokumen/manage/'.$request->detailid);
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
		$datas = Dokumen::find($id);
		$data = Dokumen::find($id)->delete();	
		if($datas->source == 'Upload'){
			$file = public_path()."\uploads\dokumen\\".$datas->filename;
			unlink($file);
			
		}
		return redirect('dokumen/manage/'.$datas->detailid);

	}
}
