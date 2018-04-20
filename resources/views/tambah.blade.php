<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
	<title></title>
</head>
<body>
<h1 align="center"> Selamat Datang ! </h1>
<form action="{{url('mahasiswa')}}" method="post">
{{csrf_field()}}
	<table bgcolor="#01579b" align="center" style="border-radius: 5px">
	<tr>
		<td>Nim</td>
		<td><input type="text" name="nim"></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td><input type="text" name="nama"></td>
	</tr>
	<tr>
		<td>Alamat</td>
		<td><input type="text" name="alamat"></td>
	</tr>
	<tr>
		<td>Telp</td>
		<td><input type="text" name="telp"></td>
	</tr>
	<tr>
		<td>E-mail</td>
		<td><input type="text" name="email"></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="hidden" name="submit" value="TAMBAH">
				<button type="submit" class="btn btn-primary"> TAMBAH </button> </td>
	</tr>
</table>
</form>

	


@if ($errors->any())
    <div class="alert alert-danger" align="center">
        <br>
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        
    </div>
@endif

</body>
</html>