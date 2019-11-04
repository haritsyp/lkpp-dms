@extends('layouts.pdf')
@section('content')
<style type="text/css">
body{
	font-family: Helvetica;
}

table.table-bordered{

	vertical-align: middle;
}

table.table-bordered > thead > tr > th{
	border:1px solid #373d3f;
	vertical-align: middle;
	font-size: 10px;
	
}
table.table-bordered > tbody > tr > td{
	border:1px solid #373d3f;
	vertical-align: middle;
	font-size: 10px;
}
.tabel{
	border:1px solid #373d3f;
	vertical-align: middle;
	margin-bottom: 20px;
}
</style>
<h1 class="text-center">Formulir Pencatatan Pemberian Remote Akses</h1><br>
<table class="table table-bordered table-striped table-condensed">
      <thead style="background-color: #b6efe4">
        <tr>
          <th class="text-center" rowspan="2">No.</th>
          <th class="text-center" rowspan="2">Nama</th>
          <th class="text-center" rowspan="2">Instansi</th>
          <th class="text-center" rowspan="2">Username</th>
          <th class="text-center" rowspan="2">Hak Akses</th>
          <th class="text-center" rowspan="2">Tujuan</th>
          <th class="text-center" colspan="2">Waktu</th>
        </tr>
        <tr>
          <th class="text-center">Pemberian</th>
          <th class="text-center">Penutupan</th>
        </tr>

      </thead>
      <tbody>
        @foreach($dt as $d)
        <tr>
          <td  class="text-center">{{ $d->id }}</td>
          <td class="text-center">{{ $d->nama }}</td>
          <td class="text-center">{{ $d->instansi }}</td>
          <td class="text-center">{{ $d->username }}</td>
          <td class="text-center">{{ $d->hakakses }}</td>
          <td class="text-center">{{ $d->tujuan }}</td>
          <td class="text-center">{{ $d->waktupemberian }}</td>
          <td class="text-center">{{ $d->waktupenutupan }}</td>
          @endforeach
        </tbody>
      </table>
	@endsection