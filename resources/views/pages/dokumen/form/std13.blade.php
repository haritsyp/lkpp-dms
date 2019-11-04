<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Header Komponen</label>
	<div class="col-md-4">
		<select class="form-control" name="header">
			<option>Biaya Modal</option>
			<option>Biaya Operasional</option>
		</select>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Komponen</label>
	<div class="col-md-4">
		<input type="text" name="komponen" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Struktur Biaya</label>
	<div class="col-md-4">
		<input type="text" name="struktur" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Total Nilai</label>
	<div class="col-md-4">
		<input type="number" name="total" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Anggaran Finansial</label>
	<div class="col-md-4">
		<input type="number" name="anggaranfinansial" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Budget untuk Layanan</label>
	<div class="col-md-4">
		<input type="number" name="anggaranlpse" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Pemantauan Triwulan 1</label>
	<div class="col-md-4">
		<textarea class="form-control" name="pemantauan1"></textarea>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Pemantauan Triwulan 2</label>
	<div class="col-md-4">
		<textarea class="form-control" name="pemantauan2"></textarea>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Pemantauan Triwulan 3</label>
	<div class="col-md-4">
		<textarea class="form-control" name="pemantauan3"></textarea>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Pemantauan Triwulan 4</label>
	<div class="col-md-4">
		<textarea class="form-control" name="pemantauan4"></textarea>
	</div>
</div>