<div class="table-responsive">
  <div id="">
    <table class="table table-bordered table-striped table-condensed mb-none">
      <thead style="background-color: #b6efe4">
        <tr>
          <th class="text-center" rowspan="3">Kode</th>
          <th class="text-center" rowspan="3">Klasifikasi</th>
          <th class="text-center" rowspan="3">Sub</th>
          <th class="text-center" colspan="6">Identifikasi Risiko Sisa</th>
          <th class="text-center" colspan="3" rowspan="2">Mitigasi</th>
          <th rowspan="3">Action</th>
        </tr>
        <tr>
          <th class="text-center" colspan="2">Kerentatan</th>
          <th class="text-center" colspan="2">Paparan</th>
          <th class="text-center" rowspan="2">Jenis Risiko</th>
          <th class="text-center" rowspan="2">Nilai Risiko</th>
        </tr>
        <tr>
          <th class="text-center">Keterangan</th>
          <th class="text-center">Nilai</th>
          <th class="text-center">Keterangan</th>
          <th class="text-center">Nilai</th>
          <th class="text-center">Kontrol</th>
          <th class="text-center">PIC</th>
          <th class="text-center">Target</th>
        </tr>

      </thead>
      <tbody>
        @foreach($std as $d)
        <tr>
          <td  class="text-center">{{ $d->id }}</td>
          <td class="text-center">{{ $d->idklasifikasi }}</td>
          <td class="text-center">{{ $d->subklasifikasi }}</td>
          <td class="text-center">{{ $d->kerentatanket }}</td>
          <td class="text-center">{{ $d->kerentatannilai }}</td>
          <td class="text-center">{{ $d->paparanket }}</td>
          <td class="text-center">{{ $d->paparannilai }}</td>
          <td class="text-center">{{ $d->jenisrisikosisa }}</td>
          <td class="text-center">{{ $d->nilairisikosisa }}</td>
          <td class="text-center">{{ $d->mitigasikontrol }}</td>
          <td class="text-center">{{ $d->mitigaspic }}</td>
          <td  class="text-center">{{ $d->mitigasitarget }}</td>
          <td class="text-center"><a href="{{ url('dokumen/manage/delete/'.$detail->standartid.'/'.$d->id) }}"><i class="fa fa-trash"></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a target="_blank" class="btn btn-primary" style="margin-top: 10px;float: right;" href="{{ url('dokumen/import/'.$data->docid) }}"><i class="fa fa-print"> Cetak</i></a>