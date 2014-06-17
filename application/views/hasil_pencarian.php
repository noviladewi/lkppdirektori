<html>
	<head>
		<title>Hasil Pencarian</title>
	</head>
	<body>
		<?php 
			foreach ($pencarian_detail as $key) {
			echo "Hasil Pencarian";
				echo $key->jenis_perusahaan."<br/>";
				echo $key->nama_perusahaan."<br/>";
				echo $key->jml_karyawan."<br/>";
				echo $key->pendapatan_thn."<br/><br/>";
			}
		?>
	</body>
</html>