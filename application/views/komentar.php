<html>
	<head>
		<title></title>
	</head>
	<body>
<?php foreach ($dataDariDatabase->result() as $daftar_bisnis)
				{ ?>
					<p>Bidang usaha			: <?php echo $daftar_bisnis->bidus?></p>
	
	<div id ="post id" class="post-editor"></div>
		<div style="position: relative;"></div>
			<div class ="wmd-container"></div>
			<div id="wmd-button-bar" class="wmd-button-bar"></div>
			<div style="clear: both; height: 23px;"></div>
			<textarea id ="wmd-input" class="wmd-input processed" data-min-length="" tabindex="101" rows="15" cols="92" name="post-text"></textarea>
<a href=""><button>Batal</button></a>
<a href=""><button>Kirim tanggapan</button></a>
</body>
</html>