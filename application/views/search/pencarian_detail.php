<html>
<head>
</head>
<center><h3>Pencarian Detail</h3></center>
<body>
<form class="form-inline" action="<?php echo base_url() ?>index.php/lkppdirektori/searching">
			<div class="span6">
			<div class="input-append">
							<input class="input-large" id="search_needs" name="search_needs" type="text" class="form-control" placeholder="Kebutuhan (misal:Iklan) ">
			</div>
			</div>
			
			<div class="span6">
			<div class="input-append">
							<input class="input-large" id="search_kompetensi" type="text" class="form-control" placeholder="Kompetensi (misal : Marketing)">
			</div>
			</div>
			
			<div class="span6">
			<div class="input-append">
							<input class="input-large" id="search_company" name="search_company" type="text" class="form-control" placeholder="Nama perusahaan">
			</div>
			</div>			
							
			<div class="span6" >
			<div class="input-append">
			<select name='company' id='company'>
					<option value='Perseroan terbatas'>Perseroan terbatas</option>
					<option value='commanditaire vennootschap'>commanditaire vennootschap</option>
				</select>
			</div>
			</div>
			
			<div class="span6">
			<div class="input-append">
							<input class="input-large" id="search_location" name="search_location" type="text" class="form-control" placeholder="Lokasi">
			</div>
			</div>
			
			<div class="span6">
			<div class="input-append">
							<input class="input-large" id="search_total" name="search_total" name="search_total" type="text" class="form-control" placeholder="Jumlah minimum karyawan">
			</div>
			</div>
			
			<div class="span6">
			<div class="input-append">
					<div class="input-large" id="search_income" name="search_income" type="text" class="form-control" placeholder="pendapatan minimum tahunan">
			</div>
			</div>
			
			<input type='submit' class='btn btn-danger' value=" Cari bisnis">
			</form>
			
			
			
							