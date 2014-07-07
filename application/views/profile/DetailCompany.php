<center><a href="<?php echo base_url();?>index.php/lkppdirektori/hasil_pencarian">Kembali ke hasil pencarian</a></center>
	<center><hr width="85%"></center>
	<br>
		<center> Detail perushaan</center>
	<?php
	if ($dataCompany =="detailcompany")
			foreach ($companyProfile as $detail_perusahaan)
			{
				echo "<div class='span4'>
						<img src=".base_url()."application/assets/img/upload/".$detail_perusahaan->file_photo." class='account'></br>
						</div>
						<div class='span8'>";
				echo 
				  <p>Bidang usaha			<? echo $detail_perusahaan->bidus?></p>
				  <p>Industri				<? echo $detail_perusahaan->industri?></p>
				  <p>Bentuk Usaha			<? echo $detail_perusahaan->jenis_usaha?></p>
				  <p>No.Siup				<? echo $detail_perusahaan->no_siup?></p>
				  <p>NPWP					<? echo $detail_perusahaan->npwp?></p>
				  <p>Alamat					<? echo $detail_perusahaan->alamat?></p>
				  <p>Telepon				<? echo $detail_perusahaan->telepon?></p>
				  <p>Website				<? echo $detail_perusahaan->website?></p>
				  <center><hr width ="20%"></center>
				  <div class ='span8'>
				  <h5>Peta Lokasi</h5>".$map['html']."
				  </div>
				 <center> <hr width ="20%"></center>
				  <div class = 'span8'>
				  <p> Pimpinan perusahaan	<? echo $detail_perusahaan->nama_direk?></p>
				  <p> Alamat pimpinan		<? echo $detail_perusahaan->alamat_direk?></p>
				  <p> Telepom pimpinan		<? echo $detail_perusahaan->telepon_direk?></p>
				  <p> Email pimpinan		<? echo $detail_perusahaan->email_direk?></p>
				  <hr width="20%">
				  <p> Kontak perusahaan		<? echo $detail_perusahaan->nama_cp?></p>
				  <p> Alamat kontak			<? echo	$detail_perusahaan->alamat_cp?></p>
				  <p> Telepon kontak		<? echo $detail_perusahaan->tlp_cp?></p>
				  <p> Email kontak			<? echo $detail_perusahaan->email_cp?></p>
				  <hr width ="20%">
				  <p> Jumlah Karyawan		<? echo $detail_perusahaan->jml_karyawan?></p>
				  <p> Pendapatan tahunan	<? echo $detail_perusahaan->pendapatan_thn?>
				 
				 
				 <h5> Portofolio <h5>
				 "<div class='span8'>
					<img src=".base_url()."application/assets/img/upload/".$detail_perusahaan->file_photo." class='account'></br>
						</div>
						<div class='span8'>";		
				"<div class = 'span8'>
				<img src=".base_url()."application/assets/img/upload/".$detail_perusahaan->file_photo." class='account'></br>
				</div>
					<div class='span8'>";
					
				  
				  
	