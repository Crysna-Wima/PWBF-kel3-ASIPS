<html>
<head>
	<title>Tambah Role</title>
</head>
<body>
 
	<a href="/role"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/role/store" method="post">
		{{ csrf_field() }}
		Role <input type="text" name="role" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>