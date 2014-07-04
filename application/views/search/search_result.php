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
			echo from_label('Kebutuhan','search_needs',$attributes);
			echo from_label('Industri','search_industry',$attributes);
			echo from