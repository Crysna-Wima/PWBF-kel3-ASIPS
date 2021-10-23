<html>
<head>
	<title>Tambah Posyandu</title>
</head>
<body>
 
	<a href="/posyandu"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/balita/store" method="post">
		{{ csrf_field() }}
		ID_Posyandu <input type="number" name="posyandu" required="required"> <br/>
        Nama_Balita <input type="text" name="nama" required="required"> <br/>
        NIK_Orang_Tua <input type="text" name="NIK" required="required"> <br/>
        Nama_Orang_Tua <input type="text" name="Ortu" required="required"> <br/>
        tgl_lahir_Balita <input type="date" name="lahir" required="required"> <br/>
        Jenis_Kelamin_Balita <input type="radio" name="jk" required="required" value="L">L <input type="radio" name="jk" required="required" value="P">P <br/>
        Status <input type="text" name="status" required="required"> <br/>
		Created_at <input type="datetime-local" name="created" required="required"> <br/>
		Update_at <input type="datetime-local" name="updated" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>