@extends('layouts.app')
@section('content')
<section class="panel">
  <header class="panel-heading">
    <div class="panel-actions">
      <a href="{{url('/standartlkpp/create')}}" class="panel-action"><i class="fa fa-plus"></i> New</a>
      <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
    </div>

    <h2 class="panel-title">Standart LKPP</h2>
  </header>
  <div class="panel-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped" id="datatable-default">
        <thead>
          <tr>
            <th>ID</th>
            <th>Standart Name</th>
            <th>Deskripsi</th>
            <th>Create Date</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $d)
          <tr>
            <td>{{ $d->standartid }}</td>
            <td>{{ $d->standartname }}</td>
            <td>{{ $d->deskripsi }}</td>
            <td>{{ $d->createdate }}</td>
            <td>
              <a href="{{route('standartlkpp.edit',$d->standartid)}}" class="btn btn-warning btn-xs" data-toggle="tooltip" title="Ubah Data">
               <span class="glyphicon glyphicon-pencil"></span>
             </a>
             {!! Form::open(['method' => 'DELETE', 'style' => 'display:inline', 'data-toggle' => 'tooltip', 'title' => 'Hapus Data' ,'route'=>['standartlkpp.destroy', $d->standartid]]) !!}
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