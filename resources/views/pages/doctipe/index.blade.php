@extends('layouts.app')
@section('content')
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="{{url('/doctipe/create')}}" class="panel-action"><i class="fa fa-plus"></i> New</a>
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>

    <h2 class="panel-title">Tipe Dokumen</h2>
  </header>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped table-condensed mb-none" id="datatable-default">
        <thead>
          <tr>
            <th>ID</th>
            <th>Document Type</th>
            <th width="40">Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $d)
          <tr>
            <td>{{ $d->tipeid }}</td>
            <td>{{ $d->tipename }}</td>
            <td>
              <a href="{{route('doctipe.edit',$d->tipeid)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Ubah Data">
               <span class="glyphicon glyphicon-pencil"></span>
             </a>
             {!! Form::open(['method' => 'DELETE', 'style' => 'display:inline', 'data-toggle' => 'tooltip', 'title' => 'Hapus Data' ,'route'=>['doctipe.destroy', $d->tipeid]]) !!}
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
@stop