@extends('layouts.app')
@section('content')
<section class="panel">
  <header class="panel-heading">
    @foreach($doc as $do)
    <div class="panel-actions">
      <a href="{{url('/lkpp/create/'.$do->standartid)}}" class="panel-action"><i class="fa fa-plus"></i> New</a>
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>
    
    <h2 class="panel-title">{{ $do->standartid }} : {{ $do->standartname }}</h2>
    @endforeach
  </header>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-condensed mb-none" id="datatable-default">
        <thead>
          <tr>
            <th>No</th>
            <th>Butir</th>
            <th>Deskriptor</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $d)
          <tr>
            <td>{{ $d->no }}</td>
            <td>{{ $d->butir }}</td>
            <td>{{ $d->deskriptor }}</td>
            <td width="100px">
              <a href="{{url('dokumen/manage/'.$d->detailid)}}" class="btn btn-success btn-xs" data-toggle="tooltip" title="Manage Dokumen">
               <span class="glyphicon glyphicon-file"></span>
             </a>
              <a href="{{route('lkpp.edit',$d->detailid)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Ubah Data">
               <span class="glyphicon glyphicon-pencil"></span>
             </a>
             {!! Form::open(['method' => 'DELETE', 'style' => 'display:inline', 'data-toggle' => 'tooltip', 'title' => 'Hapus Data' ,'route'=>['lkpp.destroy', $d->detailid]]) !!}
             {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit','class' => 'btn btn-danger btn-xs delete-confirm']) !!}
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
@stop