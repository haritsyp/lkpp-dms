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
          <th class="text-center" rowspan="3">Standar LPSE</th>
          <th class="text-center" rowspan="3">Kriteria Penilaian</th>
          <th class="text-center" rowspan="2" colspan="2">Temuan</th>
          <th class="text-center" colspan="9">Tindakan Perbaikan</th>
          <th class="text-center" rowspan="3">Persetujuan Penilai</th>
          <th rowspan="3">Action</th>
        </tr>
        <tr>
          <th class="text-center" colspan="5">Permintaan Tindakan Perbaikan</th>
          <th class="text-center" colspan="2">Tindakan Perbaikan</th>
          <th class="text-center" colspan="2">Status Perbaikan</th>                      
        </tr>
        <tr>
          <th class="text-center">No.</th>
          <th class="text-center">Keterangan</th>
          <th class="text-center">No.</th>
          <th class="text-center">Keterangan</th>
          <th class="text-center">Prioritas</th>
          <th class="text-center">Target</th>
          <th class="text-center">Penilai</th>
          <th class="text-center">PIC</th>
          <th class="text-center">Keterangan</th>
          <th class="text-center">Tanggal</th>
          <th class="text-center">Status</th>
        </tr>

      </thead>
      <tbody>
        @foreach($std as $d)
        <tr>
          <td  class="text-center">{{ $d->id }}</td>
          <td class="text-center">{{ $d->standar }}</td>
          <td class="text-center">{{ $d->kriteria }}</td>
          <td class="text-center">{{ $d->notemuan }}</td>
          <td class="text-center">{{ $d->keterangantemuan }}</td>
          <td class="text-center">{{ $d->nopermintaan }}</td>
          <td class="text-center">{{ $d->keteranganpermintaan }}</td>
          <td class="text-center">{{ $d->prioritas }}</td>
          <td class="text-center">{{ $d->target }}</td>
          <td class="text-center">{{ $d->penilai }}</td>
          <td class="text-center">{{ $d->pic }}</td>
          <td class="text-center">{{ $d->keterangantindakan }}</td>
          <td class="text-center">{{ $d->tanggalperbaikan }}</td>
          <td class="text-center">{{ $d->statusperbaikan }}</td>
          <td class="text-center">{{ $d->persetujuan }}</td>
          <td class="text-center"><a href="{{ url('dokumen/manage/delete/'.$detail->standartid.'/'.$d->id) }}"><i class="fa fa-trash"></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a target="_blank" class="btn btn-primary" style="margin-top: 10px;float: right;" href="{{ url('dokumen/import/'.$data->docid) }}"><i class="fa fa-print"> Cetak</i></a>