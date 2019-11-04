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
<h1 class="text-center">Formulir Pencatatan Penggunaan Fasilitas</h1><br>
<table class="table table-bordered table-striped table-condensed">
  <thead style="background-color: #b6efe4">
    <tr>
      <th class="text-center">Komponen</th>
      <th class="text-center">Struktur</th>
      <th class="text-center">Total</th>
      <th class="text-center">Anggaran Finansial</th>
      <th class="text-center">Budget untuk Layanan</th>
      <th class="text-center">Pemantauan Triwulan 1</th>
      <th class="text-center">Pemantauan Triwulan 2</th>
      <th class="text-center">Pemantauan Triwulan 3</th>
      <th class="text-center">Pemantauan Triwulan 4</th>
    </tr>
  </thead>
  <tbody>
    @php($i=0)
    @foreach($dt as $d)
    @if($d->header == 'Biaya Modal')
    
    @if($i==0)
    @php($i=1)
    <tr>
      <td colspan="9">I. {{$d->header}}</td>
    </tr>
    @endif
    <tr>
      <td class="text-center">{{ $d->komponen }}</td>
      <td class="text-center">{{ $d->struktur }}</td>
      <td class="text-center">{{ $d->total }}</td>
      <td class="text-center">{{ $d->anggaranfinansial }}</td>
      <td class="text-center">{{ $d->anggaranlpse }}</td>
      <td class="text-center">{{ $d->pemantauan1 }}</td>
      <td class="text-center">{{ $d->pemantauan2 }}</td>
      <td class="text-center">{{ $d->pemantauan3 }}</td>
      <td class="text-center">{{ $d->pemantauan4 }}</td>
    </tr>
    @endif
    @endforeach
    @php($i=0)
    @foreach($dt as $d)
    @if($d->header == 'Biaya Operasional')
    @if($i==0)
    @php($i=1)
    <tr>
      <td colspan="9">I. {{$d->header}}</td>
    </tr>
    @endif
    <tr>
      <td class="text-center">{{ $d->komponen }}</td>
      <td class="text-center">{{ $d->struktur }}</td>
      <td class="text-center">{{ $d->total }}</td>
      <td class="text-center">{{ $d->anggaranfinansial }}</td>
      <td class="text-center">{{ $d->anggaranlpse }}</td>
      <td class="text-center">{{ $d->pemantauan1 }}</td>
      <td class="text-center">{{ $d->pemantauan2 }}</td>
      <td class="text-center">{{ $d->pemantauan3 }}</td>
      <td class="text-center">{{ $d->pemantauan4 }}</td>
    </tr>
    @endif
    @endforeach
  </tbody>
</table>
@endsection