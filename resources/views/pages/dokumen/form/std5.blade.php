<style type="text/css">
	label{
		margin-right: 10px;
	}
</style>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">No. Tiket</label>
	<div class="col-md-4">
		<input type="text" name="notiket" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Nama</label>
	<div class="col-md-4">
		<input type="text" name="namapengguna" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Kontak</label>
	<div class="col-md-4">
		<input type="text" name="kontakpengguna" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Media</label>
	<div class="col-md-4">
		<input type="text" name="mediapelaporan" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Waktu Pelaporan</label>
	<div class="col-md-4">
		<input type="date" name="waktupelaporan" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Deskripsi</label>
	<div class="col-md-4">
		<textarea class="form-control" name="deskripsi"></textarea>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Tipe</label>
	<div class="col-md-4">
		<div class="radio">
			<label>
				<input type="radio" name="tipe" value="Gangguan" checked>Gangguan
			</label>
			<label>
				<input type="radio" name="tipe" value="Masalah">Masalah
			</label>
			<label>
				<input type="radio" name="tipe" value="Permintaan Layanan">Permintaan Layanan
			</label>
		</div>
		
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Kategori</label>
	<div class="col-md-4">
		<div class="radio">
			<label>
				<input type="radio" name="kategori" value="Teknik" checked>Teknik
			</label>
			<label>
				<input type="radio" name="kategori" value="Non Teknik">Non Teknik
			</label>
		</div>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">User</label>
	<div class="col-md-4">
		<div class="radio">
			<label>
				<input type="radio" name="user" value="Penyedia" checked>Penyedia
			</label>
			<label>
				<input type="radio" name="user" value="Publik">Publik
			</label>
			<label>
				<input type="radio" name="user" value="Lainnya">Lainnya
			</label>
		</div>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Jenis</label>
	<div class="col-md-4">
		<div class="radio">
			<label>
				<input type="radio" name="jenis" value="Hardware" checked>Hardware
			</label>
			<label>
				<input type="radio" name="jenis" value="Software">Software
			</label>
			<label>
				<input type="radio" name="jenis" value="Lainnya">Lainnya
			</label>
		</div>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Urgenal</label>
	<div class="col-md-4">
		<div class="radio">
			<label>
				<input type="radio" name="urgensi" value="Mendadak" checked>Mendadak
			</label>
			<label>
				<input type="radio" name="urgensi" value="Tidak Mendadak">Tidak MendadakT
			</label>
		</div>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Dampak</label>
	<div class="col-md-4">
		<div class="radio">
			<label>
				<input type="radio" name="dampak" value="Besar" checked>Besar
			</label>
			<label>
				<input type="radio" name="dampak" value="Kecil">Kecil
			</label>
			<label>
				<input type="radio" name="dampak" value="Sedang">Sedang
			</label>
		</div>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Prioritas</label>
	<div class="col-md-4">
		<div class="radio">
			<label>
				<input type="radio" name="prioritas" value="Tinggi" checked>Tinggi
			</label>
			<label>
				<input type="radio" name="prioritas" value="Menengah">Menengah
			</label>
			<label>
				<input type="radio" name="prioritas" value="Rendah">Rendah
			</label>
		</div>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Nama Petugas</label>
	<div class="col-md-4">
		<input type="text" name="namapetugas" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Status</label>
	<div class="col-md-4">
		<div class="radio">
			<label>
				<input type="radio" name="status" value="Belum" checked>Belum
			</label>
			<label>
				<input type="radio" name="status" value="Proses">Proses
			</label>
			<label>
				<input type="radio" name="status" value="Selesai">Selesai
			</label>
		</div>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Keterangan</label>
	<div class="col-md-4">
		<textarea class="form-control" name="keterangan"></textarea>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Tanggal Pemutakhiran</label>
	<div class="col-md-4">
		<input type="date" name="tanggalpemutakhiran" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Solusi</label>
	<div class="col-md-4">
		<textarea class="form-control" name="solusi"></textarea>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Tanggal Penyelesaian</label>
	<div class="col-md-4">
		<input type="date" name="tanggalpenyelesaian" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Status Konfirmasi</label>
	<div class="col-md-4">
		<label>
				<input type="radio" name="statuskonfirmasi" value="Belum" checked>Belum
			</label>
			<label>
				<input type="radio" name="statuskonfirmasi" value="Proses">Proses
			</label>
			<label>
				<input type="radio" name="statuskonfirmasi" value="Selesai">Selesai
			</label>
	</div>
</div>