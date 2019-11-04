<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
use DB;
use Carbon\Carbon;
use PDF;
use App;
use App\Dokumen;
use App\StandartLKPP;
use App\Docdetail;

class FormController extends Controller
{
	function create(Request $request){
		$data = StandartLKPP::find($request->standartid);;
		return view('pages.docdetail.create', compact('data'));
	}

	public function store(Request $request) {
		if($request->std == 'Standart 3'){
			$data = new Standart3();
		}else if($request->std == 'Standart 4'){
			$data = new Standart4();
		}else if($request->std == 'Standart 5'){
			$data = new Standart5();
		}else if($request->std == 'Standart 7'){
			$data = new Standart7();
		}else if($request->std == 'Standart 8'){
			$data = new Standart8();
		}else if($request->std == 'Standart 9'){
			$data = new Standart9();
		}else if($request->std == 'Standart 10'){
			$data = new Standart10();
		}else if($request->std == 'Standart 13'){
			$data = new Standart13();
		}else if($request->std == 'Standart 14'){
			$data = new Standart14();
		}else if($request->std == 'Standart 17'){
			$data = new Standart17();
		}
		
		$input = $request->all();
		$data->fill($input)->save();
		return redirect('dokumen/manage/'.$request->detailid.'/'.$request->docid);
		
	}

	public function delete(Request $request){
		if($request->std == 'Standart 3'){
			$data = Standart3::find($request->id)->delete();
		}else if($request->std == 'Standart 4'){
			$data = Standart4::find($request->id)->delete();
		}else if($request->std == 'Standart 5'){
			$data = Standart5::find($request->id)->delete();
		}else if($request->std == 'Standart 7'){
			$data = Standart7::find($request->id)->delete();
		}else if($request->std == 'Standart 8'){
			$data = Standart8::find($request->id)->delete();
		}else if($request->std == 'Standart 9'){
			$data = Standart9::find($request->id)->delete();
		}else if($request->std == 'Standart 10'){
			$data = Standart10::find($request->id)->delete();
		}else if($request->std == 'Standart 13'){
			$data = Standart13::find($request->id)->delete();
		}else if($request->std == 'Standart 14'){
			$data = Standart14::find($request->id)->delete();
		}else if($request->std == 'Standart 17'){
			$data = Standart17::find($request->id)->delete();
		}
		return redirect()->back();
	}

	public function import(Request $request){
		$pdf = PDF::loadView('welcome');
		$pdf->setPaper('A4', 'landscape');
		$dok = Dokumen::find($request->docid);
		$det = Docdetail::find($dok->detailid);
		if($det->standartid == 'Standart 3'){
			$dt = Standart3::where('docid',$request->docid)->get();
			$pdf = PDF::loadView('pdf.std3', compact('dt','dok'));
			$pdf->setPaper('A3', 'landscape');
		}else if($det->standartid == 'Standart 4'){
			$dt = Standart4::where('docid',$request->docid)->get();
			$pdf = PDF::loadView('pdf.std4', compact('dt','dok'));
		}else if($det->standartid == 'Standart 5'){
			$dt = Standart5::where('docid',$request->docid)->get();
			$pdf = PDF::loadView('pdf.std5', compact('dt','dok'));
			$pdf->setPaper('A3', 'landscape');
		}else if($det->standartid == 'Standart 7'){
			$dt = Standart7::where('docid',$request->docid)->get();
			$pdf = PDF::loadView('pdf.std7', compact('dt','dok'));
			$pdf->setPaper('A3', 'landscape');
		}else if($det->standartid == 'Standart 8'){
			$dt = Standart8::where('docid',$request->docid)->get();
			$pdf = PDF::loadView('pdf.std8', compact('dt','dok'));
			$pdf->setPaper('A4', 'landscape');
		}else if($det->standartid == 'Standart 9'){
			$dt = Standart9::where('docid',$request->docid)->get();
			$pdf = PDF::loadView('pdf.std9', compact('dt','dok'));
			$pdf->setPaper('A4', 'landscape');
		}else if($det->standartid == 'Standart 10'){
			$dt = Standart10::where('docid',$request->docid)->get();
			$pdf = PDF::loadView('pdf.std10', compact('dt','dok'));
			$pdf->setPaper('A4', 'landscape');
		}
		else if($det->standartid == 'Standart 13'){
			$dt = Standart13::where('docid',$request->docid)->get();
			$pdf = PDF::loadView('pdf.std13', compact('dt','dok'));
			$pdf->setPaper('A4', 'landscape');
		}
		else if($det->standartid == 'Standart 14'){
			$dt = Standart14::where('docid',$request->docid)->get();
			$pdf = PDF::loadView('pdf.std14', compact('dt','dok'));
			$pdf->setPaper('A4', 'landscape');
		}
		else if($det->standartid == 'Standart 17'){
			$dt = Standart17::where('docid',$request->docid)->get();
			$pdf = PDF::loadView('pdf.std17', compact('dt','dok'));
			$pdf->setPaper('A4', 'landscape');
		}
				
		return $pdf->stream('Standart3.pdf');
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
		if($data){
			$file = public_path()."\uploads\dokumen\\".$datas->filename;
			unlink($file);
			return redirect('dokumen/manage/'.$datas->detailid);
		}

	}
}
