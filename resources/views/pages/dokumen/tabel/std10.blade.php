<style type="text/css">
th{
  vertical-align: center;
}
</style>
<div class="table-responsive">
  <div id="">
    <table class="table table-bordered table-striped table-condensed">
      <thead style="background-color: #b6efe4">
        <tr>
          <th class="text-center" rowspan="2">No.</th>
          <th class="text-center" rowspan="2">Nama</th>
          <th class="text-center" rowspan="2">Instansi</th>
          <th class="text-center" rowspan="2">Username</th>
          <th class="text-center" rowspan="2">Hak Akses</th>
          <th class="text-center" rowspan="2">Tujuan</th>
          <th class="text-center" colspan="2">Waktu</th>
        </tr>
        <tr>
          <th class="text-center">Pemberian</th>
          <th class="text-center">Penutupan</th>
        </tr>

      </thead>
      <tbody>
        @foreach($std as $d)
        <tr>
          <td  class="text-center">{{ $d->id }}</td>
          <td class="text-center">{{ $d->nama }}</td>
          <td class="text-center">{{ $d->instansi }}</td>
          <td class="text-center">{{ $d->username }}</td>
          <td class="text-center">{{ $d->hakakses }}</td>
          <td class="text-center">{{ $d->tujuan }}</td>
          <td class="text-center">{{ $d->waktupemberian }}</td>
          <td class="text-center">{{ $d->waktupenutupan }}</td>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <a target="_blank" class="btn btn-primary" style="margin-top: 10px;float: right;" href="{{ url('dokumen/import/'.$data->docid) }}"><i class="fa fa-print"> Cetak</i></a>