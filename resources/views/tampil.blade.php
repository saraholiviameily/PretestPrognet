<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<title></title>
</head>
<body>
<h1 align="center"> Selamat Datang ! </h1>

	<div class="container">
<thead><a href="{{action('MahasiswaController@create')}}"><button type="submit" class="btn btn-primary"> TAMBAH MAHASISWA</button> </a>
	<table class="table table-striped">
	<thead>
	<tr>
		<td>Nim</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>Telp</td>
		<td>E-mail</td>
		<td>Aksi</td>
	</tr>
	</thead>
	<tbody>
		@foreach($mahasiswa as $newmahasiswa)
	<tr>
		<td>{{$newmahasiswa['nama']}}</td>
		<td>{{$newmahasiswa['nim']}}</td>
		<td>{{$newmahasiswa['alamat']}}</td>
		<td>{{$newmahasiswa['telp']}}</td>
		<td>{{$newmahasiswa['email']}}</td>
		<td>
			<a href="{{action('MahasiswaController@edit', $newmahasiswa['id'])}}" class="btn btn-primary"> EDIT </a>
			<form action="{{action('MahasiswaController@destroy', $newmahasiswa['id'])}}" method="post" style="display:inline-block;">
				{{csrf_field()}}
				<input type="hidden" name="_method" value="DELETE">
				<button type="submit" class="btn btn-primary"> DELETE </button>
			</form>
		</td>
	</tr>
	@endforeach
	</tbody>
</table>
</div>
</body>
</html>