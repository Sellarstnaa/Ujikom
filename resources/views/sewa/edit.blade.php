@extends('layouts.admin')
@section('content')
<div class="box box-widget">
<div class="box-header with-border">
	<center><h1>Detail Sewa</h1></center>
	<div class="panel panel-primary">
	<div class="panel-heading">Detail Sewa
	<div class="panel-title pull-right">
	<a href="{{URL('previous')}}">Kembali</a></div>
</div>



<div class="box-body">
	<form action="{{route('sewa.update',$sewa->id)}}" method="post">
		<input type="hidden" name="_method" value="PUT">
		<input type="hidden" name="_token" value="{{csrf_token()}}">

		<div class="form-group">
			<label class="control-lable">Tanggal Sewa</label>
				<input type="date" name="tanggal" class="form-control">{{$sewa->tanggal_sewa}}</div>

		<div class="form-group">
			<label class="control-lable">Nama Customer</label>
				<input type="text" name="nama" class="form-control"  value="{{$sewa->nama_customer}} "></div>

		<div class="form-group">
			<label class="control-lable">Jenis Kelamin</label>
				<br><input type="radio" name="jk"  value="laki-laki">Laki-laki
				<input type="radio" name="jk"  value="perempuan">Perempuan</div>

		<div class="form-group">
			<label class="control-lable">Alamat</label>
				<textarea name="alamat" class="form-control" >{{$sewa->alamat}} </textarea></div>

		<div class="form-group">
			<label class="control-lable">No Telepon</label>
				<input type="text" name="notlp" class="form-control" value="{{$sewa->no_tlp}} "></div>

		<div class="form-group">
			<label class="control-lable">No KTP</label>
				<input type="text" name="noktp" class="form-control" value="{{$sewa->no_ktp}} "></div>

		<div class="form-group">
			<label class="control-lable">Jumlah Hari</label>
				<input type="text" name="jumlah" class="form-control" value="{{$sewa->jumlah_hari}} "></div>

		<div class="form-group">
			<label class="control-lable">Merk Kamera</label>
				<select name="bmerk" class="form-control">
				@foreach($kamera as $data)
				<option value="{{$data->id}}">
				{{$data->merk_kamera}}</option>
				@endforeach
			</select></div>

		
		<div class="form-group">
			<button type="submit" class="btn btn-danger">Simpan</button>
			<button type="reset" class="btn btn-danger">Reset</button></div>

	</form>
</div>
</div>
</div>
@endsection