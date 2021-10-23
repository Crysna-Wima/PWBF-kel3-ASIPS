<html>
<head>
	<title>Tambah Kelurahan</title>
</head>
<body>
 
	<a href="/kelurahan"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/kelurahan/store" method="post">
		{{ csrf_field() }}
		ID Kecamatan <input type="number" name="id_kecamatan" required="required"> <br/>
        Kelurahan <input type="text" name="kelurahan" required="required"> <br/>
		Created_at <input type="datetime-local" name="created" required="required"> <br/>
		Update_at <input type="datetime-local" name="updated" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>