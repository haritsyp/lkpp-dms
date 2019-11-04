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
          <th class="text-center">Header</th>
          <th class="text-center">Komponen</th>
          <th class="text-center">Struktur</th>
          <th class="text-center">Total</th>
          <th class="text-center">Anggaran Finansial</th>
          <th class="text-center">Budget untuk Layanan</th>
          <th class="text-center">Pemantauan Triwulan 1</th>
          <th class="text-center">Pemantauan Triwulan 2</th>
          <th class="text-center">Pemantauan Triwulan 3</th>
          <th class="text-center">Pemantauan Triwulan 4</th>
          <th>Action</th>
        </tr>

      </thead>
      <tbody>
        @foreach($std as $d)
        <tr>
          <td class="text-center">{{ $d->header }}</td>
          <td class="text-center">{{ $d->komponen }}</td>
          <td class="text-center">{{ $d->struktur }}</td>
          <td class="text-center">{{ $d->total }}</td>
          <td class="text-center">{{ $d->anggaranfinansial }}</td>
          <td class="text-center">{{ $d->anggaranlpse }}</td>
          <td class="text-center">{{ $d->pemantauan1 }}</td>
          <td class="text-center">{{ $d->pemantauan2 }}</td>
          <td class="text-center">{{ $d->pemantauan3 }}</td>
          <td class="text-center">{{ $d->pemantauan4 }}</td>
          <td class="text-center"><a href="{{ url('dokumen/manage/delete/'.$detail->standartid.'/'.$d->id) }}"><i class="fa fa-trash"></i></a></td>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  <a target="_blank" class="btn btn-primary" style="margin-top: 10px;float: right;" href="{{ url('dokumen/import/'.$data->docid) }}"><i class="fa fa-print"> Cetak</i></a>