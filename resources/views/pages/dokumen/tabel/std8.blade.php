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
          <th class="text-center" rowspan="3">Jabatan/Fungsi</th>
          <th class="text-center" rowspan="3">Nama</th>
          <th class="text-center" colspan="4">Keahlian</th>
          <th class="text-center" rowspan="3">Analisa Kebutuhan Pelatihan</th>
          <th class="text-center" rowspan="2" colspan="3">Program Pelatihan</th>
          <th rowspan="3">Action</th>
        </tr>
        <tr>
          <th class="text-center" colspan="2">Kebutuhan</th>
          <th class="text-center" colspan="2">Ada Saat Ini</th>         
        </tr>
        <tr>
          <th class="text-center">Kompetensi</th>
          <th class="text-center">Tingkatan</th>
          <th class="text-center">Kompetensi</th>
          <th class="text-center">Tingkatan</th>
          <th class="text-center">Pelatihan</th>
          <th class="text-center">Tingkatan</th>
          <th class="text-center">Waktu</th>
        </tr>

      </thead>
      <tbody>
        @foreach($std as $d)
        <tr>
          <td  class="text-center">{{ $d->id }}</td>
          <td class="text-center">{{ $d->jabatan }}</td>
          <td class="text-center">{{ $d->nama }}</td>
          <td class="text-center">{{ $d->kebutuhankompetensi }}</td>
          <td class="text-center">{{ $d->kebutuhantingkatan }}</td>
          <td class="text-center">{{ $d->adakompetensi }}</td>
          <td class="text-center">{{ $d->adatingkatan }}</td>
          <td class="text-center">{{ $d->analisakebutuhan }}</td>
          <td class="text-center">{{ $d->pelatihan }}</td>
          <td class="text-center">{{ $d->tingkatan }}</td>
          <td class="text-center">{{ $d->waktu }}</td>
          <td class="text-center"><a href="{{ url('dokumen/manage/delete/'.$detail->standartid.'/'.$d->id) }}"><i class="fa fa-trash"></i></a></td>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <a target="_blank" class="btn btn-primary" style="margin-top: 10px;float: right;" href="{{ url('dokumen/import/'.$data->docid) }}"><i class="fa fa-print"> Cetak</i></a>