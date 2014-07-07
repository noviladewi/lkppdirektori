	<div class="row-fluid">
		<div class="span4">
		<div class="cari">
			<div class="form-pencarian">
			<?php echo $map	['js']; ?>
			<h4>Hasil pencarian</h4>
			<form method='get' action='<?php echo base_url();?>index.php/lkppdirektori/search_profile'>
			<?php
					$attributes=array(
					'class'=>'control-label',
					);
			echo form_input( array('name'=>'search_needs'));
			echo form_input( array('name'=>'search_industry'));
			echo form_input( array('name'=>'search_kompetensi'));
			echo form_input( array('name'=>'search_company'));
			echo form_dropdown( array('name'=>'company'));
			echo form_input( array ('name'=>'search_location'));
			echo form_input( array ('name'=>'search_total'));
			echo form_input( array ('name'=>'search_income'));
			echo "<buton type='submit' class='btn'>Filter</button>";
			echo form_close();
			?>
			
			
<hr>

<h5>Hasil pencarian untuk</h5>
<ul>
<?php foreach ($get_category as $category)
	{
		echo "<li><a href='#'>"; print_r($category->namaPerusahaan);echo"</a></li>";
		}?>
</ul>
		</div>
		</div>
		
		</div>
		
		<div class="span8">
			<table class="navi">
				<tbody>
					<tr>
						<td><p>Detail perusahaan</td>
						<td></td>
						<td></td>
						</tr>
					</tr>
					</body>
					</table>
					
					<hr class = "navi">
					
					<div class="daftar-temukan">
						<?php
							if ()
								{
									echo $map['js'];
									foreach($pic as $picture)
										{
										echo "<div>
												<img src=.base_url()."application/assets/img/upload/".$picture->file_photo" class='account'>
										</div>";
										}
									foreach($desc_profile as profile)
									{
									echo "<div>
												<h3>$profile->direktur."</h3>
												<p class='detail'>".$profile-alamat." <br/>
												<strong>Kontak</strong></br>
												&nbsp; &nbsp; &nbsp;Email :".$profile->emailDirektur."<br/>
												&nbsp; &nbsp; &nbsp;Telepon :".$profile->teleponDirektur."<br/>
												&nbsp; &nbsp; &nbsp;Website <a href=".$profile->website.">".$profile->website."</a>
												
											<hr>
											<h5>Peta Lokasi</h5>".$map['html']."
												<div class='row-fluid'>
													<div class='span6'>
												</div>
											</div>
										</div>";
									}
								}
							else
							{
								foreach($desc_profile as profile)
								{
									echo "
									<h4>".$profile->namaPerusahaan."</h4>";}
								foreach($pic as $picture)
								{
									echo "<div
											<img src=".base_url()."application/assets/img/upload/".$picture->file_photo." class='account'>
										</div>";
								}
								foreach ($desc_profile as $profile)
								{
									echo <h5>Peta Lokasi</h5>".$map['html']."
									<hr>
									<div class='row-fluid'>
										<div class='span6'>
											<h5>Summary</h5>
											<p>Industri : ".$profile->rincianPekerjaan."<br/>
											Pendapatan tahunan : ".$profile->pendapatan."<br/>
											Jumlah karyawan :".$profile->jumlahKaryawan."<br/>
										</p>
										</div>
									<div class='span6'>
										<h5>Pimpinan perusahaan</h5>
										<p>".$profile->direktur."| <small>Direktur Utama</small><br/>
											Email 	: <a>".$profile->emailDireltur."</a><br/>
											Telepon : ".$profile->telponDirektur."</p>
										<p>".$profile->marketing." | <small>Marketing</small></br>
											Email	: <a>".$profile->emailMarketing."</a><br/>
											Telepon	: ".$profile->teleponMarketing."
										</p>
									</div>
									</div>";
									}
							}
				?>
				<hr>
				<h5>Portofolio</h5>
				<ul class="portofolio">
				<?php
				foreach($dataPortofolio as $portofolio) {?>
						<li class="portofolio">
							<img class="portofolio" src="<?php echo base_url();?>application/assets/img/upload/<?php echo $portofolio->file; ?>"/>
						<p><strong><?php echo $portofolio->judul;?></strong</p>
						<p><?php echo $portofolio->deskripsi;?></p>
						<p><a href='<?php echo $portofolio->link;?>'>Lihat proyek</a></p>
						</li><?php }?>
					</ul>
				</div>
			</div>
		</div>
			
				
											