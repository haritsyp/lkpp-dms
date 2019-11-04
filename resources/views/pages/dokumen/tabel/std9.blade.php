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
          <th class="text-center" colspan="5">Identitas</th>
          <th class="text-center" rowspan="2">No. Badge</th>
          <th class="text-center" colspan="3">Waktu</th>
          <th class="text-center" rowspan="2">Tujuan</th>
          <th class="text-center" colspan="2">No. Seri Perangkat</th>
          <th class="text-center" rowspan="2">TTD</th>
          <th rowspan="2">Action</th>
        </tr>
        <tr>
          <th class="text-center">Nama</th>
          <th class="text-center">Instansi</th>
          <th class="text-center">Alamat</th>
          <th class="text-center">Jenis Identitas</th>
          <th class="text-center">No. Identitas</th>
          <th class="text-center">Tanggal</th>
          <th class="text-center">Jam Masuk</th>
          <th class="text-center">Jam Keluar</th>
          <th class="text-center">Masuk</th>
          <th class="text-center">Keluar</th>
        </tr>

      </thead>
      <tbody>
        @foreach($std as $d)
        <tr>
          <td  class="text-center">{{ $d->id }}</td>
          <td class="text-center">{{ $d->nama }}</td>
          <td class="text-center">{{ $d->instansi }}</td>
          <td class="text-center">{{ $d->alamat }}</td>
          <td class="text-center">{{ $d->jenis }}</td>
          <td class="text-center">{{ $d->noidentitas }}</td>
          <td class="text-center">{{ $d->nobadge }}</td>
          <td class="text-center">{{ $d->tanggal }}</td>
          <td class="text-center">{{ $d->jammasuk }}</td>
          <td class="text-center">{{ $d->jamkeluar }}</td>
          <td class="text-center">{{ $d->tujuan }}</td>
          <td class="text-center">{{ $d->masukperangkat }}</td>
          <td class="text-center">{{ $d->keluarperangkat }}</td>
          <td class="text-center">  </td>
          <td class="text-center"><a href="{{ url('dokumen/manage/delete/'.$detail->standartid.'/'.$d->id) }}"><i class="fa fa-trash"></i></a></td>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <a target="_blank" class="btn btn-primary" style="margin-top: 10px;float: right;" href="{{ url('dokumen/import/'.$data->docid) }}"><i class="fa fa-print"> Cetak</i></a>