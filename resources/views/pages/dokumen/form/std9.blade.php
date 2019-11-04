<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Nama</label>
	<div class="col-md-4">
		<input type="text" name="nama" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Instansi</label>
	<div class="col-md-4">
		<input type="text" name="instansi" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Alamat</label>
	<div class="col-md-4">
		<textarea class="form-control" name="alamat"></textarea>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Jenis Identitas</label>
	<div class="col-md-4">
		<input type="text" name="jenis" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">No. Identitas</label>
	<div class="col-md-4">
		<input type="text" name="noidentitas" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">No. Badge</label>
	<div class="col-md-4">
		<input type="text" name="nobadge" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Tanggal</label>
	<div class="col-md-4">
		<input type="date" name="tanggal" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Jam Masuk</label>
	<div class="col-md-4">
		<div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-clock-o"></i>
			</span>
			<input type="text" name="jammasuk" data-plugin-timepicker class="form-control" data-plugin-options='{ "showMeridian": false }'>
		</div>

	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Jam Keluar</label>
	<div class="col-md-4">
		<div class="input-group">
			<span class="input-group-addon">
				<i class="fa fa-clock-o"></i>
			</span>
			<input type="text" name="jamkeluar" data-plugin-timepicker class="form-control" data-plugin-options='{ "showMeridian": false }'>
		</div>

	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Tujuan</label>
	<div class="col-md-4">
		<textarea class="form-control" name="tujuan"></textarea>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">No. Seri Perangkat Masuk</label>
	<div class="col-md-4">
		<input type="text" name="masukperangkat" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">No. Seri Perangkat Keluar</label>
	<div class="col-md-4">
		<input type="text" name="keluarperangkat" class="form-control">
	</div>
</div>