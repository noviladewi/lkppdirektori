<script type="text/javascript">
function changeLimit () {
		var e = document.getElementById("pagination2");
		var Limit = e.options
		var href = document.URL;
		var href_n = href.replace(/pagination=\d+/,"pagination="+limit);
		window.location.href=href_n;
	}
	function changeLimit2() {
		var e = document.getElementById("pagination3");
		var Limit = e.options[e.selectIndex].value;
		var href = document.URL;
		var href_n = href.replace(/pagination=\d+/,"pagination="+limit);
		window.location.href=href_n;
	}
	</script>
	<!-- Example row of columns -->
		<div class="row-fluid">
			<div class="span4">
			<div class="cari">
				<div class="form-pencarian">
			<h4>Pencarian</h4>
			<form method='get' action='<?php echo base_url();?>index.php/lkppdirektori/search_profile'>
					<?php
							$attributes=array(
							'class'=>'control-label',
							);
							$att=array('class'=>'btn');
						echo form_input( array('name'=>'search_needs'));
						echo form_input( array('name'=>'search_industry'));
						echo form_input( array('name'=>'search_kompetensi'));
						echo form_input( array('name'=>'search_company'));
						echo form_dropdown( array('name'=>'company'));
						echo form_input( array ('name'=>'search_location'));
						echo form_input( array ('name'=>'search_total'));
						echo form_input( array ('name'=>'search_income'));
							<p style="display:none">Tampilkan<select class="small" name="pagination">
									<option value="1">10</option>
									<option value="2">20</option>
									<option value="3">30</option>
									</select>
							</p>
							</td>
							</form>
					<?php echo form_close();
					?>
					</div><!--form pencarian-->
				</div><!--cari-->
				</div>
					<div class="span8">
						<table class="navi">
						
						<div class="daftar-temukan">
							<ul>
						<?php foreach ($company_profile as $profile)
							{
								if($profile->status=='company')
									{
										echo "<li><h5>";
										echo anchor ('/lkppdirektori/search_result/'.$profile->perusahaanID, $profile->direktur);
									</li>
								}
							}
						?>
					</div>
					
					<table class="navi">
					<tbody>
						<tr>
							<td><p>Perusahaan Ditemukan: <strong><?php echo $total_records ?></strong></p></td>
							<td><div class="pagination pagination-small">
							<ul>
							<?php echo $pagination;?>
							</ul>
							</div><!--pagination-->
							</div><!--span3--></td>
						<td>
						<form method='post' action='<?php echo base_url();?>index.php/lkppdirektori/search'>
						<p>Tampilkan<select class="small" name="pagination" id="pagination3" onchange="changeLimit2()">
								<option value="1">10</option>
								<option value="2">20</option>
								<option value="3">30</option>
								</select>
						</p>
						</td>
						</form>
						</tr>
						</tbody>
						</table>
						</div>
						
						</div>

						