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

<div class="tabel">
	<table class="table table-bordered table-condensed" style="border-color: black">
		<thead>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Tanggal</th>
				<th class="text-center">{!! $dates->format('Y-m-d') !!}</th>
				<th class="text-center" colspan="11" rowspan="2"><p style="padding: 0" >DAFTAR ASET</p></th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Klasifikasi</th>
				<th class="text-center">SDM</th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Kode</th>
				<th class="text-center">Nama Aset</th>
				<th class="text-center">Sub</th>
				<th class="text-center">NIP</th>
				<th class="text-center">Pemilik Aset</th>
				<th class="text-center">Jabatan</th>
				<th class="text-center">No. Kontrak/NDA</th>
				<th class="text-center">Atasan Langsung</th>
				<th class="text-center">Kerahasiaan</th>
				<th class="text-center">Integritas</th>
				<th class="text-center">Ketersediaan</th>
				<th class="text-center">Nilai</th>
				<th class="text-center">Keterangan</th>
			</tr>
		</thead>
		<tbody>
			@foreach($dt as $d)
			@if($d->idklasifikasi == 2)
			<tr>
				<td>{{ $d->idaset }}</td>
				<td>{{ $d->nama }}</td>
				<td>{{ $d->subklasifikasi }}</td>
				<td>{{ $d->nip }}</td>
				<td>{{ $d->pemilik }}</td>
				<td>{{ $d->jabatan }}</td>
				<td>{{ $d->nokontrak }}</td>
				<td>{{ $d->atasan }}</td>
				<td>{{ $d->kerahasiaan }}</td>
				<td>{{ $d->integritas }}</td>
				<td>{{ $d->ketersediaan }}</td>
				<td>{{ $d->nilai }}</td>
				<td>{{ $d->keterangan }}</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>

<div class="tabel">
	<table class="table table-bordered table-condensed" style="border-color: black">
		<thead>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Tanggal</th>
				<th class="text-center">{!! $dates->format('Y-m-d') !!}</th>
				<th class="text-center" colspan="13" rowspan="2"><p style="padding: 0" >DAFTAR ASET</p></th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Klasifikasi</th>
				<th class="text-center">Fisik</th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Kode</th>
				<th class="text-center">Nama Aset</th>
				<th class="text-center">Sub</th>
				<th class="text-center">Jenis Aset</th>
				<th class="text-center">Spesifikasi</th>
				<th class="text-center">Pemilik Aset</th>
				<th class="text-center">Penyedia Aset</th>
				<th class="text-center">Pemegang Aset</th>
				<th class="text-center">Lokasi Aset</th>
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
			@if($d->idklasifikasi == 3)
			<tr>
				<td>{{ $d->idaset }}</td>
				<td>{{ $d->nama }}</td>
				<td>{{ $d->subklasifikasi }}</td>
				<td>{{ $d->jenis }}</td>
				<td>{{ $d->spesifikasi }}</td>
				<td>{{ $d->pemilik }}</td>
				<td>{{ $d->penyedia }}</td>
				<td>{{ $d->pemegang }}</td>
				<td>{{ $d->lokasi }}</td>
				<td>{{ $d->masa }}</td>
				<td>{{ $d->kerahasiaan }}</td>
				<td>{{ $d->integritas }}</td>
				<td>{{ $d->ketersediaan }}</td>
				<td>{{ $d->nilai }}</td>
				<td>{{ $d->keterangan }}</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>

<div class="tabel">
	<table class="table table-bordered table-condensed" style="border-color: black">
		<thead>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Tanggal</th>
				<th class="text-center">{!! $dates->format('Y-m-d') !!}</th>
				<th class="text-center" colspan="11" rowspan="2"><p style="padding: 0" >DAFTAR ASET</p></th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Klasifikasi</th>
				<th class="text-center">Software</th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Kode</th>
				<th class="text-center">Nama Aset</th>
				<th class="text-center">Sub</th>
				<th class="text-center">Pemilik Aset</th>
				<th class="text-center">Pemegang Aset</th>
				<th class="text-center">Lokasi Aset</th>
				<th class="text-center">Masa Berlaku</th>
				<th class="text-center">Metode Penghapusan</th>
				<th class="text-center">Kerahasiaan</th>
				<th class="text-center">Integritas</th>
				<th class="text-center">Ketersediaan</th>
				<th class="text-center">Nilai</th>
				<th class="text-center">Keterangan</th>
			</tr>
		</thead>
		<tbody>
			@foreach($dt as $d)
			@if($d->idklasifikasi == 4)
			<tr>
				<td>{{ $d->idaset }}</td>
				<td>{{ $d->nama }}</td>
				<td>{{ $d->subklasifikasi }}</td>
				<td>{{ $d->pemilik }}</td>
				<td>{{ $d->pemegang }}</td>
				<td>{{ $d->lokasi }}</td>
				<td>{{ $d->masa }}</td>
				<td>{{ $d->jenis }}</td>
				<td>{{ $d->kerahasiaan }}</td>
				<td>{{ $d->integritas }}</td>
				<td>{{ $d->ketersediaan }}</td>
				<td>{{ $d->nilai }}</td>
				<td>{{ $d->keterangan }}</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>

<div class="tabel">
	<table class="table table-bordered table-condensed" style="border-color: black">
		<thead>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Tanngal</th>
				<th class="text-center">{!! $dates->format('Y-m-d') !!}</th>
				<th class="text-center" colspan="12" rowspan="2"><p style="padding: 0" >DAFTAR ASET</p></th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Klasifikasi</th>
				<th class="text-center">Layanan</th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Kode</th>
				<th class="text-center">Nama Aset</th>
				<th class="text-center">Sub</th>
				<th class="text-center">Pemilik Aset</th>
				<th class="text-center">Pemegang Aset</th>
				<th class="text-center">Penyedia Aset</th>
				<th class="text-center">No. Kontrak/SLA</th>
				<th class="text-center">Deskripsi</th>
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
			@if($d->idklasifikasi == 5)
			<tr>
				<td>{{ $d->idaset }}</td>
				<td>{{ $d->nama }}</td>
				<td>{{ $d->subklasifikasi }}</td>
				<td>{{ $d->pemilik }}</td>
				<td>{{ $d->pemegang }}</td>
				<td>{{ $d->penyedia }}</td>
				<td>{{ $d->nokontrak }}</td>
				<td>{{ $d->deskripsikontrak }}</td>
				<td>{{ $d->masa }}</td>
				<td>{{ $d->kerahasiaan }}</td>
				<td>{{ $d->integritas }}</td>
				<td>{{ $d->ketersediaan }}</td>
				<td>{{ $d->nilai }}</td>
				<td>{{ $d->keterangan }}</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>

<div class="tabel">
	<table class="table table-bordered table-condensed" style="border-color: black">
		<thead>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Tanngal</th>
				<th class="text-center">{!! $dates->format('Y-m-d') !!}</th>
				<th class="text-center" colspan="8" rowspan="2"><p style="padding: 0" >DAFTAR ASET</p></th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Klasifikasi</th>
				<th class="text-center">Intagibel</th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Kode</th>
				<th class="text-center">Nama Aset</th>
				<th class="text-center">Sub</th>
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
			@if($d->idklasifikasi == 6)
			<tr>
				<td>{{ $d->idaset }}</td>
				<td>{{ $d->nama }}</td>
				<td>{{ $d->subklasifikasi }}</td>
				<td>{{ $d->pemilik }}</td>
				<td>{{ $d->masa }}</td>
				<td>{{ $d->kerahasiaan }}</td>
				<td>{{ $d->integritas }}</td>
				<td>{{ $d->ketersediaan }}</td>
				<td>{{ $d->nilai }}</td>
				<td>{{ $d->keterangan }}</td>
			</tr>
			@endif
			@endforeach
		</tbody>
	</table>
</div>
@endsection