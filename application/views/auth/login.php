<html>
<head>
<link rel="stylesheet" href="/iklimusaha/application/assets/css/bootstrap2.css">
</head>
<body>
<center><h3>Login Pengguna</h3></center>
<div align='center'>
<?php echo form_open('auth/login')?>
		
			<div class="input-append">
			<!--<input type="text" class="input-large" placeholder="Nama pengguna" name="identity">-->
			<?php echo form_input($identity);?>
		</div>

		
	<div class="input-append">
			 <!--<input type="password" class="input-large" name="password" value="" id="password" placeholder="Kata sandi">-->
			 <?php echo form_input($password);?>
			 <?php echo $message; ?>
		</div>
</div>
<div class="controls">
<center>
<button type='submit' class='btn btn-danger'>Masuk</button>
</center>
</div>		
<br>
<center><a href="<?php echo base_url();?>index.php/auth/forgot_password">Lupa kata sandi</a>| <a href="<?php echo base_url();?>index.php/auth/choose_user">Daftar</a></center>
<?php echo form_close()?>
</body>
</html>
