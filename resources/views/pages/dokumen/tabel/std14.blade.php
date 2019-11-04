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
          <th class="text-center" rowspan="3">No.</th>
          <th class="text-center" rowspan="3">Nama</th>
          <th class="text-center" rowspan="3">Alamat</th>
          <th class="text-center" rowspan="2" colspan="3">PIC</th>
          <th class="text-center" rowspan="3">Bidang Pekerjaan</th>
          <th class="text-center" colspan="7">Pekerjaan</th>
          <th class="text-center" rowspan="3">Keterangan</th>
          <th rowspan="3">Action</th>
        </tr>
        <tr>
          <th class="text-center" colspan="4">Kontrak</th>
          <th class="text-center" colspan="2">SLA</th>
          <th class="text-center" rowspan="2">PIC Internal</th>
        </tr>
        <tr>
          <th class="text-center">Nama</th>
          <th class="text-center">No. Telp</th>
          <th class="text-center">Email</th>
          <th class="text-center">No. Kontrak</th>
          <th class="text-center">Judul</th>
          <th class="text-center">Tanggal Mulai</th>
          <th class="text-center">Tanggal Selesai</th>
          <th class="text-center">No. SLA</th>
          <th class="text-center">Target</th>
        </tr>
      </thead>
      <tbody>
        @foreach($std as $d)
        <tr>
          <td class="text-center">{{ $d->id }}</td>
          <td class="text-center">{{ $d->penyedia }}</td>
          <td class="text-center">{{ $d->alamat }}</td>
          <td class="text-center">{{ $d->nama }}</td>
          <td class="text-center">{{ $d->telp }}</td>
          <td class="text-center">{{ $d->email }}</td>
          <td class="text-center">{{ $d->bidang }}</td>
          <td class="text-center">{{ $d->kontrak }}</td>
          <td class="text-center">{{ $d->judul }}</td>
          <td class="text-center">{{ $d->mulai }}</td>
          <td class="text-center">{{ $d->selesai }}</td>
          <td class="text-center">{{ $d->nosla }}</td>
          <td class="text-center">{{ $d->target }}</td>
          <td class="text-center">{{ $d->pic }}</td>
          <td class="text-center">{{ $d->keterangan }}</td> 
          <td class="text-center"><a href="{{ url('dokumen/manage/delete/'.$detail->standartid.'/'.$d->id) }}"><i class="fa fa-trash"></i></a></td>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <a target="_blank" class="btn btn-primary" style="margin-top: 10px;float: right;" href="{{ url('dokumen/import/'.$data->docid) }}"><i class="fa fa-print"> Cetak</i></a>