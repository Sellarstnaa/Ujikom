@extends('layouts.admin')
@section('content')
<div class="box box-widget">
<div class="box-header with-border">
	<center><h1>Data Kamera</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Data Kamera
	<div class="panel-title pull-right">
	<a href="{{URL('previous')}}">Kembali</a></div>
</div>


<div class="box-body">
	<form action="{{route('kamera.update',$kamera->id)}}" method="post" enctype="multipart/form-data">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<label class="control-lable">Gambar</label>
			<input type="file" name="gambar" class="form-control" required="">{{$kamera->gambar}}</div>

		<div class="form-group">
			<label class="control-lable">Merk </label>
				<input type="text" name="merk" class="form-control" required="" value="{{$kamera->merk_kamera}}"></div>

		<div class="form-group">
			<label class="control-lable">Harga Sewa</label>
			<input type="text" name="harga" class="form-control" value="{{$kamera->harga_sewa}}"  required=""></div>

		<div class="form-group">
			<label class="control-lable">Deskripsi</label>
			<input type="text" name="deskripsi" class="form-control" value="{{$kamera->deskripsi}}"  required=""></div>

		<div class="form-group">
			<button type="submit" class="btn btn-danger">Simpan</button>
			<button type="reset" class="btn btn-danger">Reset</button></div>

	</form>
</div>
</div>
</div>
@endsection