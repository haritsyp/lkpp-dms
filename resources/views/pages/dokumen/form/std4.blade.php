<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  <label class="col-md-2 control-label">Kategori</label>
  <div class="col-md-4">
    <select class="form-control" name="idklasifikasi" id="klasifikasi">
        <option value="1">Informasi</option>
        <option value="2">Sumber Daya Manusia</option>
        <option value="3">Fisik</option>
        <option value="4">Software</option>
        <option value="5">Layanan</option>
        <option value="6">Intagibel</option>
    </select>
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Subklasifikasi</label>
	<div class="col-md-4">
		<input type="text" name="subklasifikasi" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Kerentatan Keterangan</label>
	<div class="col-md-4">
		<textarea class="form-control" name="kerentatanket"></textarea>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Kerentatan Nilai</label>
	<div class="col-md-4">
		<input type="number" name="kerentatannilai" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Paparan Keterangan</label>
	<div class="col-md-4">
		<textarea class="form-control" name="paparanket"></textarea>
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Paparan Nilai</label>
	<div class="col-md-4">
		<input type="number" name="paparannilai" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Jenis Risiko</label>
	<div class="col-md-4">
		<input type="text" name="jenisrisikosisa" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Nilai Risiko</label>
	<div class="col-md-4">
		<input type="number" name="nilairisikosisa" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Kontrol</label>
	<div class="col-md-4">
		<input type="text" name="mitigasikontrol" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">PIC</label>
	<div class="col-md-4">
		<input type="text" name="mitigasipic" class="form-control">
	</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
	<label class="col-md-2 control-label">Target</label>
	<div class="col-md-4">
		<input type="text" name="mitigasitarget" class="form-control">
	</div>
</div>