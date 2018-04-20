<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<title></title>
</head>
<body>
<h1 align="center"> Selamat Datang ! </h1>
<form method="post" action="{{action('MahasiswaController@update', $id)}}">
{{csrf_field()}}
	<input name="_method" type="hidden" value="PATCH">
	<table bgcolor="#01579b" align="center" style="border-radius: 5px">
	<tr>
		<td>Nim</td>
		<td><input type="text" name="nim" value="{{$mahasiswa->nim}}"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama" value="{{$mahasiswa->nama}}"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat" value="{{$mahasiswa->alamat}}"></td>
	</tr>
	<tr>
		<td>Telp</td>
		<td><input type="text" name="telp" value="{{$mahasiswa->telp}}"></td>
	</tr>
	<tr>
		<td>E-mail</td>
		<td><input type="text" name="email" value="{{$mahasiswa->email}}"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="hidden" name="EDIT" value="EDIT">
				<button type="submit" class="btn btn-primary"> EDIT </button> </td>
	</tr>
</table>
</form>


</body>
</html>