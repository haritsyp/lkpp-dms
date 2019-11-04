@if($detail->standartid == 'Standart 3')
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Kategori :', ['class' => 'col-md-2 control-label']) !!}
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
  {!! Form::label('tipe', 'Nama Aset :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('nama',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Subklasifikasi :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('subklasifikasi',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>

<div id="form" class="pemisah"></div>


<div id="informasi" class="pemisah">
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Format Penyimpanan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('format',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Pemilik Aset :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('pemilik',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Masa Berlaku :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::Date('masa',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Kerahasiaan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('kerahasiaan',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Integritas :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('integritas',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Ketersediaan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('ketersediaan',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Nilai :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('nilai',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Keterangan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    <textarea class="form-control" name="keterangan"></textarea>
</div>
</div>
</div>




<div id="sdm" class="pemisah">
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'No. Identifikasi/NIP :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('nip',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Pemilik Aset :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('pemilik',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Jabatan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('jabatan',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'No. Kontrak/NDA :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('nokontrak',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Atasan Langsung :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('atasan',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Kerahasiaan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('kerahasiaan',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Integritas :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('integritas',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Ketersediaan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('ketersediaan',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Nilai :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('nilai',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Keterangan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    <textarea class="form-control" name="keterangan"></textarea>
</div>
</div>
</div>




<div id="fisik" class="pemisah">
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Jenis Aset :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('jenis',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Spesifikasi :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('spesifikasi',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Pemilik Aset :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('pemilik',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Penyedia Aset :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('penyedia',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Pemegang Aset:', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('pemegang',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Lokasi :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::textarea('lokasi',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Masa Berlaku :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::Date('masa',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Kerahasiaan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('kerahasiaan',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Integritas :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('integritas',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Ketersediaan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('ketersediaan',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Nilai :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('nilai',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Keterangan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    <textarea class="form-control" name="keterangan"></textarea>
</div>
</div>
</div>

<div id="software" class="pemisah">
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Pemilik Aset :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('pemilik',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Pemegang Aset :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('pemegang',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Lokasi :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::textarea('lokasi',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Masa Berlaku :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::Date('masa',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Metode Penghapusan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('jenis',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Kerahasiaan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('kerahasiaan',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Integritas :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('integritas',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Ketersediaan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('ketersediaan',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Nilai :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('nilai',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Keterangan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    <textarea class="form-control" name="keterangan"></textarea>
</div>
</div>
</div>


<div id="layanan" class="pemisah">
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Pemilik Aset :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('pemilik',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Pemegang Aset :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('pemegang',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Penyedia Aset :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('penyedia',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'No. Kontrak/SLA :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('nokontrak',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Deskripsi :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::textarea('deskripsikontrak',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Masa Berlaku :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::Date('masa',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Kerahasiaan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('kerahasiaan',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Integritas :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('integritas',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Ketersediaan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('ketersediaan',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Nilai :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('nilai',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Keterangan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    <textarea class="form-control" name="keterangan"></textarea>
</div>
</div>
</div>



<div id="intagibel" class="pemisah">
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Pemilik Aset :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('pemilik',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Kerahasiaan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('kerahasiaan',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Integritas :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('integritas',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Ketersediaan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('ketersediaan',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Nilai :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    {!! Form::text('nilai',null,['class'=>'form-control']) !!}
    {!! $errors->first('email', '<span class="glyphicon glyphicon-remove form-control-feedback"></span><span class="help-block">:message</span>'); !!}
</div>
</div>
<div class="form-group {{ $errors->has('username') ? 'has-error has-feedback' : '' }}">
  {!! Form::label('tipe', 'Keterangan :', ['class' => 'col-md-2 control-label']) !!}
  <div class="col-md-4">
    <textarea class="form-control" name="keterangan"></textarea>
</div>
</div>
</div>
@endif