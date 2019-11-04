<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Docdetail;
use App\StandartLKPP;
use App\Dokumen;
use DB;

class DashboardController extends Controller
{
    function index(){
    	$data = DB::select("SELECT count(*) as jml,b.standartid FROM documents a join docdetails b on a.detailid=b.detailid left outer join standartlkpp c on c.standartid=b.standartid group by b.standartid  union select 0, standartid from standartlkpp where standartid not in (SELECT b.standartid FROM documents a join docdetails b on a.detailid=b.detailid left outer join standartlkpp c on c.standartid=b.standartid group by b.standartid) order by cast(replace(standartid,'Standart ','') as integer) ASC");
		return view('dashboard', compact('data'));
    }
}
