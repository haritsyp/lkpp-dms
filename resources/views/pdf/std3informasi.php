@extends('layouts.pdf')
@section('content')
<style type="text/css">
body{
	font-family: Helvetica;
}

table.table-bordered > thead > tr > th{

	font-size: 10px;
	
}
table.table-bordered > tbody > tr > td{

	font-size: 10px;
}
.tabel{
	margin-bottom: 20px;
}
</style>

<div class="tabel">
	<table class="table table-bordered table-condensed" style="border-color: black">
		<thead>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Tanggal</th>
				<?php $dates = new DateTime($dok->uploaddate) ?>
				<th class="text-center">{!! $dates->format('Y-m-d') !!}</th>
				<th class="text-center" colspan="9" rowspan="2"><p style="padding: 0" >DAFTAR ASET</p></th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Klasifikasi</th>
				<th class="text-center">Informasi</th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Kode</th>
				<th class="text-center">Nama Aset</th>
				<th class="text-center">Sub</th>
				<th class="text-center">Format</th>
				<th class="text-center">Pemilik Aset</th>
				<th class="text-center">Masa Berlaku</th>
				<th class="text-center">Kerahasiaan</th>
				<th class="text-center">Integritas</th>
				<th class="text-center">Ketersediaan</th>
				<th class="text-center">Nilai</th>
				<th class="text-center">Keterangan</th>
			</tr>
		</thead>
		<tbody>
			@foreach($dt as $d)
			@if($d->idklasifikasi == 1)
			<tr>
				<td  class="text-center">{{ $d->idaset }}</td>
				<td  class="text-center">{{ $d->nama }}</td>
				<td class="text-center">{{ $d->subklasifikasi }}</td>
				<td class="text-center">{{ $d->format }}</td>
				<td class="text-center">{{ $d->pemilik }}</td>
				<td class="text-center">{{ $d->masa }}</td>
				<td class="text-center">{{ $d->kerahasiaan }}</td>
				<td class="text-center">{{ $d->integritas }}</td>
				<td class="text-center">{{ $d->ketersediaan }}</td>
				<td class="text-center">{{ $d->nilai }}</td>
				<td class="text-center">{{ $d->keterangan }}</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>
@endsection