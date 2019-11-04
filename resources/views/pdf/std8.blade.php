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
<h1 class="text-center">Form Matrik Kompetensi</h1><br>
<table class="table table-bordered table-striped table-condensed">
	<thead style="background-color: #b6efe4">
		<tr>
			<th class="text-center" rowspan="3">No.</th>
			<th class="text-center" rowspan="3">Jabatan/Fungsi</th>
			<th class="text-center" rowspan="3">Nama</th>
			<th class="text-center" colspan="4">Keahlian</th>
			<th class="text-center" rowspan="3">Analisa Kebutuhan Pelatihan</th>
			<th class="text-center" rowspan="2" colspan="3">Program Pelatihan</th>
		</tr>
		<tr>
			<th class="text-center" colspan="2">Kebutuhan</th>
			<th class="text-center" colspan="2">Ada Saat Ini</th>         
		</tr>
		<tr>
			<th class="text-center">Kompetensi</th>
			<th class="text-center">Tingkatan</th>
			<th class="text-center">Kompetensi</th>
			<th class="text-center">Tingkatan</th>
			<th class="text-center">Pelatihan</th>
			<th class="text-center">Tingkatan</th>
			<th class="text-center">Waktu</th>
		</tr>

	</thead>
	<tbody>
		@foreach($dt as $d)
		<tr>
			<td  class="text-center">{{ $d->id }}</td>
			<td class="text-center">{{ $d->jabatan }}</td>
			<td class="text-center">{{ $d->nama }}</td>
			<td class="text-center">{{ $d->kebutuhankompetensi }}</td>
			<td class="text-center">{{ $d->kebutuhantingkatan }}</td>
			<td class="text-center">{{ $d->adakompetensi }}</td>
			<td class="text-center">{{ $d->adatingkatan }}</td>
			<td class="text-center">{{ $d->analisakebutuhan }}</td>
			<td class="text-center">{{ $d->pelatihan }}</td>
			<td class="text-center">{{ $d->tingkatan }}</td>
			<td class="text-center">{{ $d->waktu }}</td>
			@endforeach
		</tbody>
	</table>
	@endsection