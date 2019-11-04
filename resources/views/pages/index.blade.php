@extends('layouts.user')
@section('content')
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>

    <h2 class="panel-title">Selamat Datang, Dashboard - SIM Dokumen Standart LKPP</h2>
  </header>
  <div class="panel-body">
    <div class="table-responsive">
      @foreach($data as $d)
      <table class="table table-borderless">
        <tr>
          <td>{{ $d->standartid }} : {{ $d->standartname }}</td>
        </tr>
        <tr>
          <td><textarea class="form-control" readonly="">{{ $d->deskripsi }}</textarea></td>
        </tr>
        <tr>
          <td class="text-center"><a href="{{ url('detail/'.$d->standartid) }}" class="btn btn-success">Detail Dokumen</a></td>
        </tr>
      </table>
    </br>
      @endforeach
    </div>
  </div>
</section>
<style type="text/css">
.table-borderless > tbody > tr > td,
.table-borderless > tbody > tr > th,
.table-borderless > tfoot > tr > td,
.table-borderless > tfoot > tr > th,
.table-borderless > thead > tr > td,
.table-borderless > thead > tr > th {
  border: none;
}
</style>
@stop