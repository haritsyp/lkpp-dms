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
	<label class="col-md-2 control-label">Username</label>
	<div class="col-md-4">
		<input type="text" name="username" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Hak Akses</label>
	<div class="col-md-4">
		<div class="radio">
			<label>
				<input type="radio" name="hakakses" value="LKPP" checked>LKPP
			</label>
			<label>
				<input type="radio" name="hakakses" value="Admin PPP">Admin PPP
			</label>
			<label>
				<input type="radio" name="hakakses" value="Programmer">Programmer
			</label>
			<label>
				<input type="radio" name="hakakses" value="Lainnya">Lainnya
			</label>
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
	<label class="col-md-2 control-label">Waktu Pemberian</label>
	<div class="col-md-4">
		<input type="date" name="waktupemberian" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Waktu Penutupan</label>
	<div class="col-md-4">
		<input type="date" name="waktupenutupan" class="form-control">
	</div>
</div>