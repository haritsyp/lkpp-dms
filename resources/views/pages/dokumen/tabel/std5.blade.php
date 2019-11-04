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
          <th class="text-center" rowspan="3">No. Tiket</th>
          <th class="text-center" colspan="4">Informasi Pelaporan</th>
          <th class="text-center" rowspan="3">Deskripsi</th>
          <th class="text-center" colspan="7">Kualifikasi</th>
          <th class="text-center" colspan="4">Informasi Penanganan</th>
          <th class="text-center" colspan="6">Informasi Penyelesaian</th>
          <th rowspan="3"></th>
        </tr>
        <tr>
          <th class="text-center" rowspan="2">Nama Pengguna</th>
          <th class="text-center" rowspan="2">Kontak Pengguna</th>
          <th class="text-center" rowspan="2">Media Pelaporan</th>
          <th class="text-center" rowspan="2">Waktu Pelaporan</th>
          <th class="text-center" rowspan="1">Tipe</th>
          <th class="text-center" rowspan="1">Kategori</th>
          <th class="text-center" rowspan="1">User</th>
          <th class="text-center" rowspan="1">Jenis</th>
          <th class="text-center" rowspan="1">Urgensi</th>
          <th class="text-center" rowspan="1">Dampak</th>
          <th class="text-center" rowspan="1">Prioritas</th>
          <th class="text-center" rowspan="2">Nama Petugas</th>
          <th class="text-center" rowspan="2">Status</th>
          <th class="text-center" rowspan="2">Keterangan</th>
          <th class="text-center" rowspan="2">Tanggal Pemutakhiran</th>
          <th class="text-center" rowspan="2">Solusi</th>
          <th class="text-center" rowspan="2">Tanggal Penyelesaian</th>
          <th class="text-center" rowspan="2">Status Konfirmasi</th>
         
        </tr>
        <tr>
          <th class="text-center">Gangguan, Masalah, Permintaan</th>
          <th class="text-center">Teknik, Non Teknis </th>
          <th class="text-center">Panitia, Penyedia, PPK, Auditor, Publik, Lainnya</th>
          <th class="text-center">Hardware, Software, Prosedur, Lain-lain</th>
          <th class="text-center">Mendesak, Tidak Mendesak</th>
          <th class="text-center">Besar, Sedang, Kecil</th>
          <th class="text-center">Tinggi, Menengah, Rendah</th>
        </tr>

      </thead>
      <tbody>
        @foreach($std as $d)
        <tr>
          <td  class="text-center">{{ $d->notiket }}</td>
          <td class="text-center">{{ $d->namapengguna }}</td>
          <td class="text-center">{{ $d->kontakpengguna }}</td>
          <td class="text-center">{{ $d->mediapelaporan }}</td>
          <td class="text-center">{{ $d->waktupelaporan }}</td>
          <td class="text-center">{{ $d->deskripsi }}</td>
          <td class="text-center">{{ $d->tipe }}</td>
          <td class="text-center">{{ $d->kategori }}</td>
          <td class="text-center">{{ $d->user }}</td>
          <td class="text-center">{{ $d->jenis }}</td>
          <td class="text-center">{{ $d->urgensi }}</td>
          <td  class="text-center">{{ $d->dampak }}</td>
          <td  class="text-center">{{ $d->prioritas }}</td>
          <td  class="text-center">{{ $d->namapetugas }}</td>
          <td  class="text-center">{{ $d->status }}</td>
          <td  class="text-center">{{ $d->keterangan }}</td>
          <td  class="text-center">{{ $d->tanggalpemutakhiran }}</td>
          <td  class="text-center">{{ $d->solusi }}</td>
          <td  class="text-center">{{ $d->tanggalpenyelesaian }}</td>
          <td  class="text-center">{{ $d->statuskonfirmasi }}</td>
          <td class="text-center"><a href="{{ url('dokumen/manage/delete/'.$detail->standartid.'/'.$d->id) }}"><i class="fa fa-trash"></i></a></td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
<a target="_blank" class="btn btn-primary" style="margin-top: 10px;float: right;" href="{{ url('dokumen/import/'.$data->docid) }}"><i class="fa fa-print"> Cetak</i></a>