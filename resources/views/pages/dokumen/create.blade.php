@extends('layouts.app')
@section('content')
<style type="text/css">
.pemisah{
  margin-bottom: 10px;
}
table.table-bordered{
    border:1px solid #373d3f;
    vertical-align: middle;
  }
table.table-bordered > thead > tr > th{
    border:1px solid #373d3f;
    vertical-align: middle;
}
table.table-bordered > tbody > tr > td{
    border:1px solid #373d3f;
    vertical-align: middle;

}
</style>

<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>

    <h2 class="panel-title">Detail Data : {{ $detail->standartid }}</h2>
  </header>
  <div class="panel-body">
    {!! Form::open(['url' => 'form','files'=>true, 'class' => 'form-horizontal']) !!}
    @if($detail->standartid == 'Standart 3')
      @include('pages.dokumen.form.std3')
    @elseif($detail->standartid == 'Standart 4')
      @include('pages.dokumen.form.std4')
    @elseif($detail->standartid == 'Standart 5')
      @include('pages.dokumen.form.std5')
    @elseif($detail->standartid == 'Standart 7')
      @include('pages.dokumen.form.std7')
    @elseif($detail->standartid == 'Standart 8')
      @include('pages.dokumen.form.std8')
    @elseif($detail->standartid == 'Standart 9')
      @include('pages.dokumen.form.std9')
    @elseif($detail->standartid == 'Standart 10')
      @include('pages.dokumen.form.std10')
    @elseif($detail->standartid == 'Standart 13')
      @include('pages.dokumen.form.std13')
    @elseif($detail->standartid == 'Standart 14')
      @include('pages.dokumen.form.std14')
    @elseif($detail->standartid == 'Standart 17')
      @include('pages.dokumen.form.std17')
    @endif
    <input type="hidden" name="docid" value="{{ $data->docid }}">
    <input type="hidden" name="detailid" value="{{ $detail->detailid }}">
    <input type="hidden" name="std" value="{{ $detail->standartid }}">
    <div class="form-group">
      <div class="col-md-offset-2 col-md-6">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{{ url('lkpp/detail/'.$detail)}}" class="btn btn-warning">Back</a>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</section>

<section class="panel">
  <div class="panel-body">
    @if($detail->standartid == 'Standart 3')
      @include('pages.dokumen.tabel.std3')
    @elseif($detail->standartid == 'Standart 4')
      @include('pages.dokumen.tabel.std4')
    @elseif($detail->standartid == 'Standart 5')
      @include('pages.dokumen.tabel.std5')
    @elseif($detail->standartid == 'Standart 7')
      @include('pages.dokumen.tabel.std7')
    @elseif($detail->standartid == 'Standart 8')
      @include('pages.dokumen.tabel.std8')
    @elseif($detail->standartid == 'Standart 9')
      @include('pages.dokumen.tabel.std9')
    @elseif($detail->standartid == 'Standart 10')
      @include('pages.dokumen.tabel.std10')
    @elseif($detail->standartid == 'Standart 13')
      @include('pages.dokumen.tabel.std13')
    @elseif($detail->standartid == 'Standart 14')
      @include('pages.dokumen.tabel.std14')
    @elseif($detail->standartid == 'Standart 17')
      @include('pages.dokumen.tabel.std17')
    @endif
  </div>
</section>
@endsection