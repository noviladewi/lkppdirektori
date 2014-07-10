<html>
<head>
<link rel="stylesheet" href="/iklimusaha/application/assets/css/bootstrap2.css">
</head>
<body>
<center><h3>Daftar sekarang untuk mengelola bisnis Anda</h3></center>
<br>
<center>Sudah mendaftar? Silahkan <a href="<?php echo base_url();?>index.php/auth/login">login</a></center>
</br>
<center><hr width="85%"></center>
<?php echo form_open("auth/create_user_company")?>
<center>
	<div class="span6">
	<div class="input-append">
			<input type="text class="input-large" name="nama_pengguna" placeholder="Nama pengguna" value="<?php echo set_value('nama_pengguna')?>">
			</div>
			</div>
			
			<div class="span6">
			<div class="input-append">
			<label class="checkbox"></label>
			<input type="checkbox">Pria
			
			<label class="checkbox"></label>
			<input type="checkbox">Wanita
			
			</div>
			</div>
			
			<div class="span6"
			<div class="input-append">
			<select='company' id='company' placeholder='Nama Perusahaan'>
			<?php
			if (is_array($user))
			{
				foreach ($user as $get)
				{
					echo"<option value='".$get->nama_perusahaan."'>".$get->nama_perusahaan."</option>";
				}
			}
			?>
				</select>
				</div>
				</div>
			
			<div class="span6">
			<div class="input-append">
			<input type="password" class="input-large" name="password" value="" id="password" placeholder="Kata sandi" value="<?php echo set_value('password') ?>">
				</div>
				</div>
			
			<div class="span6">
			<div class="input-append">
			<input type="text" class="input-large" name="telepon" placeholder="Telepon" value="<?php echo set_value('telepon')?>">
			</div>
			</div>
			
			<div class="span6">
			<div class="input-append">
			<input type="password" class="input-large" name="password_confirm" id="password_confirm" placeholder="Konfirmasi kata sandi">
			</div>
			</div>
			
			<div class="span6">
			<div class="input-append">
			<input type="text" class="input-large" name="address" placeholder="Alamat">
			</div>
			</div>
			
			<div class="span6">
			<div class="input-append">
			<input type="text" class="input-large" name="city"  placeholder="Kota">
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
			<input type="text" class="input-large" name="kode_pos" placeholder="Kode pos">
			</div>
			</div>
			
			<div class="span6">
			<div class="input-append">
			<hr width="35%"
			<input type="text" class="input-large" name="keteranganlain" placeholder="Keterangan Lain...">
			</div>
			</div>
			
			<div class="span6">
			<div class="input-append">
			<label class="checkbox"></label>
			<input type="checkbox"> Ya, kirimi saya berita terbaru
			
			<div class="span6">
			<div class="input-append">
			<label class="checkbox"></label>
			<input type="checkbox">Saya telah membaca <a href="">syarat dan ketentuan</a> dan saya menerimanya.</label>
			
		</div>
		</div>
		
		<div class="span6">
		<button type='submit' class='btn btn-danger'>Daftarkan Saya</button>
		</div>
		
	</center>
	<?php echo form_close(); ?>
	</html>
	</body>
			
			
			
			
			
			
			