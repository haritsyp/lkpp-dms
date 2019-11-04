<div class="table-responsive" id="tblForm">
            <div id="tblInformasi">
                <table class="table table-bordered table-striped table-condensed mb-none">
                  <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Aset</th>
                        <th>Sub</th>
                        <th>Format</th>
                        <th>Pemilik Aset</th>
                        <th>Masa Berlaku</th>
                        <th>Kerahasiaan</th>
                        <th>Integritas</th>
                        <th>Ketersediaan</th>
                        <th>Nilai</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($informasi as $d)
                    <tr>
                      <td>{{ $d->idaset }}</td>
                      <td>{{ $d->nama }}</td>
                      <td>{{ $d->subklasifikasi }}</td>
                      <td>{{ $d->format }}</td>
                      <td>{{ $d->pemilik }}</td>
                      <td>{{ $d->masa }}</td>
                      <td>{{ $d->kerahasiaan }}</td>
                      <td>{{ $d->integritas }}</td>
                      <td>{{ $d->ketersediaan }}</td>
                      <td>{{ $d->nilai }}</td>
                      <td>{{ $d->keterangan }}</td>
                      <td class="text-center"><a href="{{ url('dokumen/manage/delete/'.$detail->standartid.'/'.$d->idaset) }}"><i class="fa fa-trash"></i></a></td>
                  </tr>
                  @endforeach
              </tbody>
          </table>

      </div>

      <div id="tblSdm">
        <table class="table table-bordered table-striped table-condensed mb-none" id="datatable-default">
          <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Aset</th>
                <th>Sub</th>
                <th>NIP</th>
                <th>Pemilik Aset</th>
                <th>Jabatan</th>
                <th>No. Kontrak/NDA</th>
                <th>Atasan Langsung</th>
                <th>Kerahasiaan</th>
                <th>Integritas</th>
                <th>Ketersediaan</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sdm as $d)
            <tr>
              <td>{{ $d->idaset }}</td>
              <td>{{ $d->nama }}</td>
              <td>{{ $d->subklasifikasi }}</td>
              <td>{{ $d->nip }}</td>
              <td>{{ $d->pemilik }}</td>
              <td>{{ $d->jabatan }}</td>
              <td>{{ $d->nokontrak }}</td>
              <td>{{ $d->atasan }}</td>
              <td>{{ $d->kerahasiaan }}</td>
              <td>{{ $d->integritas }}</td>
              <td>{{ $d->ketersediaan }}</td>
              <td>{{ $d->nilai }}</td>
              <td>{{ $d->keterangan }}</td>
              <td class="text-center"><a href="{{ url('dokumen/manage/delete/'.$detail->standartid.'/'.$d->idaset) }}"><i class="fa fa-trash"></i></a></td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>

<div id="tblFisik">
    <table class="table table-bordered table-striped table-condensed mb-none" id="datatable-default">
      <thead>
        <tr>
            <th>Kode</th>
            <th>Nama Aset</th>
            <th>Sub</th>
            <th>Jenis Aset</th>
            <th>Spesifikasi</th>
            <th>Pemilik Aset</th>
            <th>Penyedia Aset</th>
            <th>Pemegang Aset</th>
            <th>Lokasi Aset</th>
            <th>Masa Berlaku</th>
            <th>Kerahasiaan</th>
            <th>Integritas</th>
            <th>Ketersediaan</th>
            <th>Nilai</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($fisik as $d)
        <tr>
          <td>{{ $d->idaset }}</td>
          <td>{{ $d->nama }}</td>
          <td>{{ $d->subklasifikasi }}</td>
          <td>{{ $d->jenis }}</td>
          <td>{{ $d->spesifikasi }}</td>
          <td>{{ $d->pemilik }}</td>
          <td>{{ $d->penyedia }}</td>
          <td>{{ $d->pemegang }}</td>
          <td>{{ $d->lokasi }}</td>
          <td>{{ $d->masa }}</td>
          <td>{{ $d->kerahasiaan }}</td>
          <td>{{ $d->integritas }}</td>
          <td>{{ $d->ketersediaan }}</td>
          <td>{{ $d->nilai }}</td>
          <td>{{ $d->keterangan }}</td>
          <td class="text-center"><a href="{{ url('dokumen/manage/delete/'.$detail->standartid.'/'.$d->idaset) }}"><i class="fa fa-trash"></i></a></td>
      </tr>
      @endforeach
  </tbody>
</table>
</div>

<div id="tblSoftware">
    <table class="table table-bordered table-striped table-condensed mb-none" id="datatable-default">
        <thead>
            <tr>
                <th>Kode</th>
                <th>Nama Aset</th>
                <th>Sub</th>
                <th>Pemilik Aset</th>
                <th>Pemegang Aset</th>
                <th>Lokasi Aset</th>
                <th>Masa Berlaku</th>
                <th>Metode Penghapusan</th>
                <th>Kerahasiaan</th>
                <th>Integritas</th>
                <th>Ketersediaan</th>
                <th>Nilai</th>
                <th>Keterangan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($software as $d)
            <tr>
              <td>{{ $d->idaset }}</td>
              <td>{{ $d->nama }}</td>
              <td>{{ $d->subklasifikasi }}</td>
              <td>{{ $d->pemilik }}</td>
              <td>{{ $d->pemegang }}</td>
              <td>{{ $d->lokasi }}</td>
              <td>{{ $d->masa }}</td>
              <td>{{ $d->jenis }}</td>
              <td>{{ $d->kerahasiaan }}</td>
              <td>{{ $d->integritas }}</td>
              <td>{{ $d->ketersediaan }}</td>
              <td>{{ $d->nilai }}</td>
              <td>{{ $d->keterangan }}</td>
              <td class="text-center"><a href="{{ url('dokumen/manage/delete/'.$detail->standartid.'/'.$d->idaset) }}"><i class="fa fa-trash"></i></a></td>
          </tr>
          @endforeach
      </tbody>
  </table>
</div>

<div id="tblLayanan">
    <table class="table table-bordered table-striped table-condensed mb-none" id="datatable-default">
      <thead>
        <tr>
            <th>Kode</th>
            <th>Nama Aset</th>
            <th>Sub</th>
            <th>Pemilik Aset</th>
            <th>Pemegang Aset</th>
            <th>Penyedia Aset</th>
            <th>No. Kontrak/SLA</th>
            <th>Deskripsi</th>
            <th>Masa Berlaku</th>
            <th>Kerahasiaan</th>
            <th>Integritas</th>
            <th>Ketersediaan</th>
            <th>Nilai</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($layanan as $d)
        <tr>
          <td>{{ $d->idaset }}</td>
          <td>{{ $d->nama }}</td>
          <td>{{ $d->subklasifikasi }}</td>
          <td>{{ $d->pemilik }}</td>
          <td>{{ $d->pemegang }}</td>
          <td>{{ $d->penyedia }}</td>
          <td>{{ $d->nokontrak }}</td>
          <td>{{ $d->deskripsikontrak }}</td>
          <td>{{ $d->masa }}</td>
          <td>{{ $d->kerahasiaan }}</td>
          <td>{{ $d->integritas }}</td>
          <td>{{ $d->ketersediaan }}</td>
          <td>{{ $d->nilai }}</td>
          <td>{{ $d->keterangan }}</td>
          <td class="text-center"><a href="{{ url('dokumen/manage/delete/'.$detail->standartid.'/'.$d->idaset) }}"><i class="fa fa-trash"></i></a></td>
      </tr>
      @endforeach
  </tbody>
</table>
</div>

<div id="tblIntagibel">
    <table class="table table-bordered table-striped table-condensed mb-none" id="datatable-default">
      <thead>
        <tr>
            <th>Kode</th>
            <th>Nama Aset</th>
            <th>Sub</th>
            <th>Pemilik Aset</th>
            <th>Masa Berlaku</th>
            <th>Kerahasiaan</th>
            <th>Integritas</th>
            <th>Ketersediaan</th>
            <th>Nilai</th>
            <th>Keterangan</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($intagibel as $d)
        <tr>
          <td>{{ $d->idaset }}</td>
          <td>{{ $d->nama }}</td>
          <td>{{ $d->subklasifikasi }}</td>
          <td>{{ $d->pemilik }}</td>
          <td>{{ $d->masa }}</td>
          <td>{{ $d->kerahasiaan }}</td>
          <td>{{ $d->integritas }}</td>
          <td>{{ $d->ketersediaan }}</td>
          <td>{{ $d->nilai }}</td>
          <td>{{ $d->keterangan }}</td>
          <td class="text-center"><a href="{{ url('dokumen/manage/delete/'.$detail->standartid.'/'.$d->idaset) }}"><i class="fa fa-trash"></i></a></td>
      </tr>
      @endforeach
  </tbody>
</table>
</div>
<a target="_blank" class="btn btn-primary" style="margin-top: 10px;float: right;" href="{{ url('dokumen/import/'.$data->docid) }}"><i class="fa fa-print"> Cetak</i></a>
</div>