<html>
<head>
<link rel="stylesheet" href="/iklimusaha/application/assets/css/bootstrap2.css">
</head>
<body>
<center><h3>Daftarkan bisnis Anda</h3></center>
<center><hr width="85%"></center>
<h3>Data perusahaan</h3>

<?php echo form_open('lkppdirektori/add_bussiness') ?>
	<div class="span6">
	<div class="input-append">
		<input type="text" name="company-name" placeholder="Nama perusahaan">
		</div>
		</div>

	<div class="span6">
		<div class="input-append">
				<input type="text" name="file-name"/>
				<input type="file" name="pic" accept="image/*">
		</div>
		</div>
	<!---->
	<div class="span6">
	<div class="input-append">
				<select name='company' id='company'>
					<option value='Perseroan terbatas'>Perseroan terbatas</option>
					<option value='commanditaire vennootschap'>commanditaire vennootschap</option>
				</select>
	</div>
	</div>
	
	<div class="span6">
	<div class="input-append">
						<input type="text" name="since-date" placeholder="Tanggal berdiri">
	</div>
	</div>
	<!---->
	
	<div class="span6">
	<div class="input-append">
		<input type="text" name="no-siup" placeholder="No.SIUP">
		</div>
		</div>

	<div class="span6">
	<div class="input-append">
				<select name='bid-us' id='bid-us'>
					<option value='Bidang usaha'>Bidang usaha</option>
					
				</select>
		</div>
		</div>
	
	<div class="span6">
	<div class="input-append">
		<input type="TEXT" name="npwp" placeholder="NPWP">
		
		</div>
		</div>
		
	<div class="span6">
	<div class="input-append">
				<select name='industry' id='industry'>
					<option value='Industri'>Industri</option>
				</select>
 
		</div>
		</div>
	
	<div class="span6">
	<div class="input-append">
		<input type="text" name="address" placeholder="Alamat">
		</div>
		</div>

	<div class="span6">
	<div class="input-append">
				<input type="TEXT" name="jumlah-kar" placeholder="Jumlah karyawan">
 
		</div>
		</div>
	
	<div class="span6">
	<div class="input-append">
		<input type="text" name="city" placeholder="Kota/Kabupaten">
		</div>
		</div>

	<div class="span6">
	<div class="input-append">
				<input type="TEXT" name="pendatahun" placeholder="Pendapatan tahunan">
 
		</div>
		</div>
	
	<div class="span6">
	<div class="input-append">
		<input type="text" name="prov" placeholder="Provinsi">
		</div>
		</div>

	<div class="span6">
	<div class="input-append">
				<input type="TEXT" name="alamatweb" placeholder="Alamat website">
 
		</div>
		</div>
	
	<div class="span6">
	<div class="input-append">
		<input type="text" name="kodpos" placeholder="Kode pos">
		</div>
		</div>

	<div class="span6">
	<div class="input-append">
				<input type="TEXT" name="ket" placeholder="Keterangan lain">
 
		</div>
		</div>
	
 
	<div class="span6">
	<div class="input-append">
		<input type="text" name="tlp" placeholder="Telepon">
		</div>
		</div>
		
		<!---------------------------------->
		

<center><hr width="75%"></center>	
<div align='left' class="span12">
<h3>Pimpinan perusahaan</h3>
</div>	
	<div class="span6">
	<div class="input-append">
		<input type="text" name="name-direk" placeholder="Nama direktur">
	</div>
	</div>

	<div class="span6">
	<div class="input-append">
				<input type="TEXT" name="name-contac" placeholder="Nama contac person">
	</div>
	</div>

	
	<div class="span6">
	<div class="input-append">
		<input type="text" name="address-direk" placeholder="Alamat direktur">
		</div>
		</div>

	<div class="span6">
	<div class="input-append">
				<input type="TEXT" name="address-cp" placeholder="Alamat contac person">
				</div>
				</div>
				
	<div class="span6">
	<div class="input-append">
		<input type="text" name="tlp-direk" placeholder="Telepon direktur">
		</div>
		</div>

	<div class="span6">
	<div class="input-append">
				<input type="TEXT" name="tlp-cp" placeholder="Telepon contac person">
				</div>
				</div>
	<center>			
	<div class="spand6">
	<button type='submit' class='btn btn-danger'>Lanjutkan>></button>
	</div>
	</center>
	
<?php echo form_close(); ?>
</body>
</html>

			