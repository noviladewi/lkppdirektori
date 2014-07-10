<html>
	<head>
		<title></title>
	</head>
	<body>
	<center><h3>Selamat! Bisnis Anda sudah terdaftar dalam direktori LKPP</h3></center>
<br>

		<?php
				foreach ($dataDariDatabase->result() as $daftar_bisnis)
				{ ?>
					<p>Bidang usaha			: <?php echo $daftar_bisnis->bidus?></p>
					<p>Industri 			: <?php echo $daftar_bisnis->industri ?></p>
					<p>Bentuk usaha			: <?php echo $daftar_bisnis->jenis_usaha?></p>
					<p>No.Siup				: <?php echo $daftar_bisnis->no_siup?></p>
					<p>NPWP					: <?php echo $daftar_bisnis->npwp?></p>
					<p>Alamat				: <?php echo $daftar_bisnis->alamat?></p>
					<p>Telepon				: <?php echo $daftar_bisnis->telepon?></p>
					<p>Website				: <?php echo $daftar_bisnis->website?></p>
					<p>Jumlah Karyawan		: <?php echo $daftar_bisnis->jml_karyawan?></p>
					<p>Pendapatan tahunan	: <?php echo $daftar_bisnis->pendapatan_thn?></p>
					<hr width="75%">
					<p>Pimpinan perusahaan	: <?php echo $daftar_bisnis->nama_direk?></p>
					<p>Alamat pimpinan		: <?php echo $daftar_bisnis->alamat_direk?></p>
					<p>Telepon pimpinan		: <?php echo $daftar_bisnis->telepon_direk?></p>
					<p>Email pimpinan		: <?php echo $daftar_bisnis->email_direk?></p>
					<hr width="75%">
					<p>Kontak perusahaan	: <?php echo $daftar_bisnis->nama_cp?></p>
					<p>Alamat kontak		: <?php echo $daftar_bisnis->alamat_cp?></p>
					<p>Telepon kontak 		: <?php echo $daftar_bisnis->tlp_cp?></p>
					<p>Email kontak			: <?php echo $daftar_bisnis->email_cp?></p>
					<?php } ?>
	<div class="spand6">
	</div>
	<a href=""><button>Ubah</button></a>
	<a href="<?php echo base_url();?>index.php/lkppdirektori/index"><button>Ke halaman awal</button></a>
	</body>
	</html>