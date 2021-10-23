<html>
<head>
	<title>Tambah Kecamatan</title>
</head>
<body>
 
	<a href="/kecamatan"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/kecamatan/store" method="post">
		{{ csrf_field() }}
		Kecamatan <input type="text" name="kecamatan" required="required"> <br/>
		Created_at <input type="datetime-local" name="created" required="required"> <br/>
		Update_at <input type="datetime-local" name="updated" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>