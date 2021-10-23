<html>
<head>
	<title>Tambah Posyandu</title>
</head>
<body>
 
	<a href="/posyandu"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/posyandu/store" method="post">
		{{ csrf_field() }}
		ID_Kelurahan <input type="number" name="kelurahan" required="required"> <br/>
        Nama Posyandu <input type="text" name="nama" required="required"> <br/>
        Alamat_posyandu <input type="text" name="alamat" required="required"> <br/>
		Created_at <input type="datetime-local" name="created" required="required"> <br/>
		Update_at <input type="datetime-local" name="updated" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>