@extends('layouts.app')
@section('content')
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>
    <h2 class="panel-title">{{ $detail->deskriptor }}</h2>
  </header>
  <form method="post" action="{{ url('/upload') }}" enctype="multipart/form-data" class="dropzone" id="fup">
    {{ csrf_field() }}
    <div class="fallback" id="uploadme">
      <input type="file" name="file" multiple />
    </div>
    <div class="panel-body">
      <input type="hidden" name="detailid" value="{{ $detail->detailid }}">
      <div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
        {!! Form::label('tipe', 'Dokumen :', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-4">
          {!! Form::text('dokumen',null,['class'=>'form-control','required','id'=>'nama']) !!}
          {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
        </div>
      </div>
      <div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
        {!! Form::label('tipe', 'Jenis Dokumen :', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-4">
          <div class="radio">
            <label>
              <input type="radio" name="source" id="upload" checked="" value="Upload"> Upload 
            </label>
          </div>
          @if($check->cek != 0)
          <div class="radio">
            <label>
              <input type="radio" name="source" id="form" value="Form"> Form 
            </label>
          </div>
          @endif
        </div>
      </div>

      <div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
        {!! Form::label('tipe', 'Tipe :', ['class' => 'col-md-2 control-label']) !!}
        <div class="col-md-4">
         <select class="form-control" name="tipeid">
          @foreach ($tipe as $t)
          <option value="{{ $t->tipeid }}">{{ $t->tipename }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <div class="col-md-offset-2 col-md-6">
        {!! Form::submit('Save', ['class' => 'btn btn-primary','id'=>'fip']) !!}
      </div>
    </div>
  </div>
  <div class="panel-body">

  </div>
  <br>
</form>



<div class="panel-body">
  <div class="table-responsive">
    <table class="table table-bordered table-striped table-condensed mb-none" id="datatable-default">
      <thead>
        <tr>
          <th>ID</th>
          <th>Document Name</th>
          <th>Create Date</th>
          <th>Source : Filename</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $d)
        <tr>
          <td>{{ $d->docid }}</td>
          <td>{{ $d->docname }}</td>
          <td>{{ $d->uploaddate }}</td>
          <td>{{ $d->source.' : '.$d->filename }}</td>
          <td width="40">
            @if ($d->source == 'Upload')
            <a href="{{ url('dokumen/download/'.$d->filename) }}" class="btn btn-primary btn-xs" data-toggle="tooltip" title="Download Dokumen"><i class="fa fa-download"></i></a>
            @else
            <a href="{{ url('dokumen/manage/'.$d->detailid.'/'.$d->docid) }}" class="btn btn-success btn-xs" data-toggle="tooltip" title="Manage Dokumen"><i class="fa fa-file"></i></a>
            @endif
            {!! Form::open(['method' => 'DELETE', 'style' => 'display:inline', 'data-toggle' => 'tooltip', 'title' => 'Hapus Data' ,'route'=>['dokumen.destroy', $d->docid]]) !!}
            {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit','class' => 'btn btn-danger btn-xs delete-confirm']) !!}
            {!! Form::close() !!}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
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

@endsection
