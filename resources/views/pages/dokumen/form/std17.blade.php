<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Standar LPSE</label>
	<div class="col-md-4">
		<input type="text" name="standar" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Kriteria Penilaian</label>
	<div class="col-md-4">
		<input type="text" name="kriteria" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">No. Temuan</label>
	<div class="col-md-4">
		<input type="text" name="notemuan" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Keterangan Temuan</label>
	<div class="col-md-4">
		<textarea name="keterangantemuan" class="form-control"></textarea>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">No. Permintaan Perbaikan</label>
	<div class="col-md-4">
		<input type="text" name="nopermintaan" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Keterangan Permintaan Perbaikan</label>
	<div class="col-md-4">
		<textarea name="keteranganpermintaan" class="form-control"></textarea>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Prioritas</label>
	<div class="col-md-4">
		<input type="text" name="prioritas" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Target</label>
	<div class="col-md-4">
		<input type="text" name="target" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Penilai</label>
	<div class="col-md-4">
		<input type="text" name="penilai" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">PIC</label>
	<div class="col-md-4">
		<input type="text" name="pic" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Keterangan Perbaikan</label>
	<div class="col-md-4">
		<textarea name="keterangantindakan" class="form-control"></textarea>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Tanggal Perbaikan</label>
	<div class="col-md-4">
		<input type="date" name="tanggalperbaikan" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Status Perbaikan</label>
	<div class="radio">
		<label>
			<input type="radio" name="statusperbaikan" value="Belum" checked>Belum
		</label>
		<label>
			<input type="radio" name="statusperbaikan" value="Proses">Proses
		</label>
		<label>
			<input type="radio" name="statusperbaikan" value="Sudah">Sudah
		</label>
	</div>
</div>