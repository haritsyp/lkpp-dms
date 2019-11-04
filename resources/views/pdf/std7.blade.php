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
<h1 class="text-center">Formulir Pencatatan Kapasitas Layanan </h1>
<br>
<table class="table table-bordered table-striped table-condensed">
	<thead style="background-color: #b6efe4">
		<tr>
			<th class="text-center" rowspan="3">No.</th>
			<th class="text-center" rowspan="3">Item</th>
			<th class="text-center" rowspan="3">Batasan (Treshold)</th>
			<th class="text-center" rowspan="2" colspan="2">Penggunaan Resources</th>
			<th class="text-center" colspan="8">Forecast</th>
			<th class="text-center" rowspan="3">Perkiraan Resources</th>
			<th class="text-center" rowspan="3">Langkah Tindak Lanjut</th>
		</tr>
		<tr>
			<th class="text-center" colspan="4">Kondisi Aktual</th>
			<th class="text-center" colspan="4">Perkiraan Akan Datang</th>         
		</tr>
		<tr>
			<th class="text-center">Waktu Pemantauan</th>
			<th class="text-center">Utilisasi</th>
			<th class="text-center">Parameter 1</th>
			<th class="text-center">Parameter 2</th>
			<th class="text-center">Parameter 3</th>
			<th class="text-center">Parameter 4</th>
			<th class="text-center">Parameter 1</th>
			<th class="text-center">Parameter 2</th>
			<th class="text-center">Parameter 3</th>
			<th class="text-center">Parameter 4</th>
		</tr>

	</thead>
	<tbody>
		@foreach($dt as $d)
		<tr>
			<td  class="text-center">{{ $d->id }}</td>
			<td class="text-center">{{ $d->item }}</td>
			<td class="text-center">{{ $d->batasan }}</td>
			<td class="text-center">{{ $d->waktupemantauan }}</td>
			<td class="text-center">{{ $d->utilisasi }}</td>
			<td class="text-center">{{ $d->parameteraktual1 }}</td>
			<td class="text-center">{{ $d->parameteraktual2 }}</td>
			<td class="text-center">{{ $d->parameteraktual3 }}</td>
			<td class="text-center">{{ $d->parameteraktual4 }}</td>
			<td class="text-center">{{ $d->parameterakan1 }}</td>
			<td class="text-center">{{ $d->parameterakan2 }}</td>
			<td class="text-center">{{ $d->parameterakan3 }}</td>
			<td class="text-center">{{ $d->parameterakan4 }}</td>
			<td class="text-center">{{ $d->perkiraanresource }}</td>
			<td class="text-center">{{ $d->langkah }}</td>


			@endforeach
		</tbody>
	</table>
	@endsection