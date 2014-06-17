<html>
<head>
</head>
<body>
<center><h3>Daftar sekarang untuk mengelola bisnis Anda</h3></center>
<br>
<center>Sudah mendaftar? Silakan <a href="<?php echo base_url();?>index.php/auth/login">login</a></center>
</br>
<center><hr width="85%"></center>
<!--<form method="post" action="<?php echo base_url();?>index.php/auth/add_user">-->
<?php echo form_open('auth/create_user') ?>
<center>
	<div class="span6">
	<div class="input-append">
			 <input type="text" class="input-large" name="nama_pengguna" placeholder="Nama pengguna" value="<?php echo set_value('nama_pengguna') ?>">
			</div>
			</div>
		

			<div class="span6">
	<div class="input-append">
	<label class="checkbox">
	<input type="checkbox"> Pria
</label>	
	<label class="checkbox">
	<input type="checkbox">wanita
	</label>
			</div>
			</div>
			
		<div class="span6">
		<div class="input-append">
		 <input type="password" class="input-large" name="password" value="" id="password" placeholder="Kata sandi" value="<?php echo set_value('password') ?>">
			</div>
			</div>
			
			<div class="span6">
	<div class="input-append">
			 <input type="text" class="input-large" name="telepon" placeholder="Telepon" value="<?php echo set_value('telepon') ?>">
			</div>
			</div>
			
			
	<div class="span6">
	<div class="input-append">
			
			 <input type="password" class="input-large" name="password_confirm" value="" id="password_confirm" placeholder="Konfirmasi kata sandi">
			</div>
		</div>
		
		<div class="span6">
	<div class="input-append">
		<input type="text" class="input-large" name="alamat" placeholder="Alamat">
		</div>
		</div>

	<div class="span6">
	<div class="input-append">
			
			<input type="text" class="input-large" name="email" placeholder="Email">
			</div>
		</div>
	
	<div class="span6">
	<div class="input-append">
		<input type="text" class="input-large" name="kota" placeholder="Kota">
		</div>
		</div>

	<div class="span6">
	<div class="input-append">
			
			<input type="text" class="input-large" name="nama_anda" placeholder="Nama Anda">
			</div>
			</div>
			
			<div class="span6">
	<div class="input-append">
		<input type="text" class="input-large" name="provinsi" placeholder="Provinsi">
		</div>
		</div>
			
			<div class="span6">
			<div class="input-append">
			<input type="text" name="file_foto"/>
				<input type="file" name="file_foto" accept="image/*">
		</div>
		</div>
	
		
		
	<div class="span6">
	<div class="input-append">
		<input type="text" class="input-large" name="kode_pos" placeholder="Kode Pos">
		</div>
		</div>
		
		<div class="span6">
	<div class="input-append">
		<hr width="35%">
		</div>
		</div>
		
		<div class="span6">
	<div class="input-append">
		<input type="text" class="input-large" name="keteranganlain" placeholder="Keterangan Lain...">
		</div>
		</div>
		


	<div class="span6">
	<div class="input-append">
	<label class="checkbox">
	<input type="checkbox"> Ya, kirimi saya berita terbaru</label>

	<div class="span6">
	<div class="input-append">
	<label class="checkbox">
	<input type="checkbox"> Saya telah membaca <a href="">syarat dan ketentuan</a> dan saya menerimanya.</label> 

</div>
</div>
			
	<div class="span6">
	<button type='submit' class='btn btn-danger'>Daftarkan Saya</button>
	</div>
	
</center>
<?php echo form_close(); ?>
</html>
</body>


		