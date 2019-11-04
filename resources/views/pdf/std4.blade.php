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
		<thead style="background-color: #b6efe4">
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Tanggal</th>
				<?php $dates = new DateTime($dok->uploaddate) ?>
				<th class="text-center">{!! $dates->format('Y-m-d') !!}</th>
				<th class="text-center" colspan="9" rowspan="2"><p style="padding: 0" >DAFTAR RISIKO</p></th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Klasifikasi</th>
				<th class="text-center">Informasi</th>
			</tr>
			<tr>
				<th class="text-center" rowspan="3">Kode</th>
				<th class="text-center" rowspan="3">Sub</th>
				<th class="text-center" colspan="6">Identifikasi Risiko Sisa</th>
				<th class="text-center" colspan="3" rowspan="2">Mitigasi</th>
			</tr>
			<tr>
				<th class="text-center" colspan="2">Kerentatan</th>
				<th class="text-center" colspan="2">Paparan</th>
				<th class="text-center" rowspan="2">Jenis Risiko</th>
				<th class="text-center" rowspan="2">Nilai Risiko</th>
			</tr>
			<tr>
				<th class="text-center">Keterangan</th>
				<th class="text-center">Nilai</th>
				<th class="text-center">Keterangan</th>
				<th class="text-center">Nilai</th>
				<th class="text-center">Kontrol</th>
				<th class="text-center">PIC</th>
				<th class="text-center"Target</th>
				</tr>

			</thead>
			<tbody>
				@foreach($dt as $d)
				@if($d->idklasifikasi == 1)
				<tr>
					<td  class="text-center">{{ $d->id }}</td>
					<td class="text-center">{{ $d->subklasifikasi }}</td>
					<td class="text-center">{{ $d->kerentatanket }}</td>
					<td class="text-center">{{ $d->kerentatannilai }}</td>
					<td class="text-center">{{ $d->paparanket }}</td>
					<td class="text-center">{{ $d->paparannilai }}</td>
					<td class="text-center">{{ $d->jenisrisikosisa }}</td>
					<td class="text-center">{{ $d->nilairisikosisa }}</td>
					<td class="text-center">{{ $d->mitigasikontrol }}</td>
					<td class="text-center">{{ $d->mitigaspic }}</td>
					<td  class="text-center">{{ $d->mitigasitarget }}</td>
				</tr>
				@endif
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="tabel">
	<table class="table table-bordered table-condensed" style="border-color: black">
		<thead style="background-color: #b6efe4">
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Tanggal</th>
				<?php $dates = new DateTime($dok->uploaddate) ?>
				<th class="text-center">{!! $dates->format('Y-m-d') !!}</th>
				<th class="text-center" colspan="9" rowspan="2"><p style="padding: 0" >DAFTAR RISIKO</p></th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Klasifikasi</th>
				<th class="text-center">SDM</th>
			</tr>
			<tr>
				<th class="text-center" rowspan="3">Kode</th>
				<th class="text-center" rowspan="3">Sub</th>
				<th class="text-center" colspan="6">Identifikasi Risiko Sisa</th>
				<th class="text-center" colspan="3" rowspan="2">Mitigasi</th>
			</tr>
			<tr>
				<th class="text-center" colspan="2">Kerentatan</th>
				<th class="text-center" colspan="2">Paparan</th>
				<th class="text-center" rowspan="2">Jenis Risiko</th>
				<th class="text-center" rowspan="2">Nilai Risiko</th>
			</tr>
			<tr>
				<th class="text-center">Keterangan</th>
				<th class="text-center">Nilai</th>
				<th class="text-center">Keterangan</th>
				<th class="text-center">Nilai</th>
				<th class="text-center">Kontrol</th>
				<th class="text-center">PIC</th>
				<th class="text-center"Target</th>
				</tr>

			</thead>
			<tbody>
				@foreach($dt as $d)
				@if($d->idklasifikasi == 2)
				<tr>
					<td  class="text-center">{{ $d->id }}</td>
					<td class="text-center">{{ $d->subklasifikasi }}</td>
					<td class="text-center">{{ $d->kerentatanket }}</td>
					<td class="text-center">{{ $d->kerentatannilai }}</td>
					<td class="text-center">{{ $d->paparanket }}</td>
					<td class="text-center">{{ $d->paparannilai }}</td>
					<td class="text-center">{{ $d->jenisrisikosisa }}</td>
					<td class="text-center">{{ $d->nilairisikosisa }}</td>
					<td class="text-center">{{ $d->mitigasikontrol }}</td>
					<td class="text-center">{{ $d->mitigaspic }}</td>
					<td  class="text-center">{{ $d->mitigasitarget }}</td>
				</tr>
				@endif
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="tabel">
	<table class="table table-bordered table-condensed" style="border-color: black">
		<thead style="background-color: #b6efe4">
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Tanggal</th>
				<?php $dates = new DateTime($dok->uploaddate) ?>
				<th class="text-center">{!! $dates->format('Y-m-d') !!}</th>
				<th class="text-center" colspan="9" rowspan="2"><p style="padding: 0" >DAFTAR RISIKO</p></th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Klasifikasi</th>
				<th class="text-center">Fisik</th>
			</tr>
			<tr>
				<th class="text-center" rowspan="3">Kode</th>
				<th class="text-center" rowspan="3">Sub</th>
				<th class="text-center" colspan="6">Identifikasi Risiko Sisa</th>
				<th class="text-center" colspan="3" rowspan="2">Mitigasi</th>
			</tr>
			<tr>
				<th class="text-center" colspan="2">Kerentatan</th>
				<th class="text-center" colspan="2">Paparan</th>
				<th class="text-center" rowspan="2">Jenis Risiko</th>
				<th class="text-center" rowspan="2">Nilai Risiko</th>
			</tr>
			<tr>
				<th class="text-center">Keterangan</th>
				<th class="text-center">Nilai</th>
				<th class="text-center">Keterangan</th>
				<th class="text-center">Nilai</th>
				<th class="text-center">Kontrol</th>
				<th class="text-center">PIC</th>
				<th class="text-center"Target</th>
				</tr>

			</thead>
			<tbody>
				@foreach($dt as $d)
				@if($d->idklasifikasi == 3)
				<tr>
					<td  class="text-center">{{ $d->id }}</td>
					<td class="text-center">{{ $d->subklasifikasi }}</td>
					<td class="text-center">{{ $d->kerentatanket }}</td>
					<td class="text-center">{{ $d->kerentatannilai }}</td>
					<td class="text-center">{{ $d->paparanket }}</td>
					<td class="text-center">{{ $d->paparannilai }}</td>
					<td class="text-center">{{ $d->jenisrisikosisa }}</td>
					<td class="text-center">{{ $d->nilairisikosisa }}</td>
					<td class="text-center">{{ $d->mitigasikontrol }}</td>
					<td class="text-center">{{ $d->mitigaspic }}</td>
					<td  class="text-center">{{ $d->mitigasitarget }}</td>
				</tr>
				@endif
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="tabel">
	<table class="table table-bordered table-condensed" style="border-color: black">
		<thead style="background-color: #b6efe4">
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Tanggal</th>
				<?php $dates = new DateTime($dok->uploaddate) ?>
				<th class="text-center">{!! $dates->format('Y-m-d') !!}</th>
				<th class="text-center" colspan="9" rowspan="2"><p style="padding: 0" >DAFTAR RISIKO</p></th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Klasifikasi</th>
				<th class="text-center">Softarew</th>
			</tr>
			<tr>
				<th class="text-center" rowspan="3">Kode</th>
				<th class="text-center" rowspan="3">Sub</th>
				<th class="text-center" colspan="6">Identifikasi Risiko Sisa</th>
				<th class="text-center" colspan="3" rowspan="2">Mitigasi</th>
			</tr>
			<tr>
				<th class="text-center" colspan="2">Kerentatan</th>
				<th class="text-center" colspan="2">Paparan</th>
				<th class="text-center" rowspan="2">Jenis Risiko</th>
				<th class="text-center" rowspan="2">Nilai Risiko</th>
			</tr>
			<tr>
				<th class="text-center">Keterangan</th>
				<th class="text-center">Nilai</th>
				<th class="text-center">Keterangan</th>
				<th class="text-center">Nilai</th>
				<th class="text-center">Kontrol</th>
				<th class="text-center">PIC</th>
				<th class="text-center"Target</th>
				</tr>

			</thead>
			<tbody>
				@foreach($dt as $d)
				@if($d->idklasifikasi == 4)
				<tr>
					<td  class="text-center">{{ $d->id }}</td>
					<td class="text-center">{{ $d->subklasifikasi }}</td>
					<td class="text-center">{{ $d->kerentatanket }}</td>
					<td class="text-center">{{ $d->kerentatannilai }}</td>
					<td class="text-center">{{ $d->paparanket }}</td>
					<td class="text-center">{{ $d->paparannilai }}</td>
					<td class="text-center">{{ $d->jenisrisikosisa }}</td>
					<td class="text-center">{{ $d->nilairisikosisa }}</td>
					<td class="text-center">{{ $d->mitigasikontrol }}</td>
					<td class="text-center">{{ $d->mitigaspic }}</td>
					<td  class="text-center">{{ $d->mitigasitarget }}</td>
				</tr>
				@endif
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="tabel">
	<table class="table table-bordered table-condensed" style="border-color: black">
		<thead style="background-color: #b6efe4">
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Tanggal</th>
				<?php $dates = new DateTime($dok->uploaddate) ?>
				<th class="text-center">{!! $dates->format('Y-m-d') !!}</th>
				<th class="text-center" colspan="9" rowspan="2"><p style="padding: 0" >DAFTAR RISIKO</p></th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Klasifikasi</th>
				<th class="text-center">Layanan</th>
			</tr>
			<tr>
				<th class="text-center" rowspan="3">Kode</th>
				<th class="text-center" rowspan="3">Sub</th>
				<th class="text-center" colspan="6">Identifikasi Risiko Sisa</th>
				<th class="text-center" colspan="3" rowspan="2">Mitigasi</th>
			</tr>
			<tr>
				<th class="text-center" colspan="2">Kerentatan</th>
				<th class="text-center" colspan="2">Paparan</th>
				<th class="text-center" rowspan="2">Jenis Risiko</th>
				<th class="text-center" rowspan="2">Nilai Risiko</th>
			</tr>
			<tr>
				<th class="text-center">Keterangan</th>
				<th class="text-center">Nilai</th>
				<th class="text-center">Keterangan</th>
				<th class="text-center">Nilai</th>
				<th class="text-center">Kontrol</th>
				<th class="text-center">PIC</th>
				<th class="text-center"Target</th>
				</tr>

			</thead>
			<tbody>
				@foreach($dt as $d)
				@if($d->idklasifikasi == 5)
				<tr>
					<td  class="text-center">{{ $d->id }}</td>
					<td class="text-center">{{ $d->subklasifikasi }}</td>
					<td class="text-center">{{ $d->kerentatanket }}</td>
					<td class="text-center">{{ $d->kerentatannilai }}</td>
					<td class="text-center">{{ $d->paparanket }}</td>
					<td class="text-center">{{ $d->paparannilai }}</td>
					<td class="text-center">{{ $d->jenisrisikosisa }}</td>
					<td class="text-center">{{ $d->nilairisikosisa }}</td>
					<td class="text-center">{{ $d->mitigasikontrol }}</td>
					<td class="text-center">{{ $d->mitigaspic }}</td>
					<td  class="text-center">{{ $d->mitigasitarget }}</td>
				</tr>
				@endif
				@endforeach
			</tbody>
		</table>
	</div>

	<div class="tabel">
	<table class="table table-bordered table-condensed" style="border-color: black">
		<thead style="background-color: #b6efe4">
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Tanggal</th>
				<?php $dates = new DateTime($dok->uploaddate) ?>
				<th class="text-center">{!! $dates->format('Y-m-d') !!}</th>
				<th class="text-center" colspan="9" rowspan="2"><p style="padding: 0" >DAFTAR RISIKO</p></th>
			</tr>
			<tr style="background-color: #d0d6e0">
				<th class="text-center">Klasifikasi</th>
				<th class="text-center">Intagibel</th>
			</tr>
			<tr>
				<th class="text-center" rowspan="3">Kode</th>
				<th class="text-center" rowspan="3">Sub</th>
				<th class="text-center" colspan="6">Identifikasi Risiko Sisa</th>
				<th class="text-center" colspan="3" rowspan="2">Mitigasi</th>
			</tr>
			<tr>
				<th class="text-center" colspan="2">Kerentatan</th>
				<th class="text-center" colspan="2">Paparan</th>
				<th class="text-center" rowspan="2">Jenis Risiko</th>
				<th class="text-center" rowspan="2">Nilai Risiko</th>
			</tr>
			<tr>
				<th class="text-center">Keterangan</th>
				<th class="text-center">Nilai</th>
				<th class="text-center">Keterangan</th>
				<th class="text-center">Nilai</th>
				<th class="text-center">Kontrol</th>
				<th class="text-center">PIC</th>
				<th class="text-center"Target</th>
				</tr>

			</thead>
			<tbody>
				@foreach($dt as $d)
				@if($d->idklasifikasi == 6)
				<tr>
					<td  class="text-center">{{ $d->id }}</td>
					<td class="text-center">{{ $d->subklasifikasi }}</td>
					<td class="text-center">{{ $d->kerentatanket }}</td>
					<td class="text-center">{{ $d->kerentatannilai }}</td>
					<td class="text-center">{{ $d->paparanket }}</td>
					<td class="text-center">{{ $d->paparannilai }}</td>
					<td class="text-center">{{ $d->jenisrisikosisa }}</td>
					<td class="text-center">{{ $d->nilairisikosisa }}</td>
					<td class="text-center">{{ $d->mitigasikontrol }}</td>
					<td class="text-center">{{ $d->mitigaspic }}</td>
					<td  class="text-center">{{ $d->mitigasitarget }}</td>
				</tr>
				@endif
				@endforeach
			</tbody>
		</table>
	</div>
	@endsection