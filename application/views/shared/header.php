<!DOCTYPE html>
<html lang="en">
  <head>
    <link href='http://fonts.googleapis.com/css?family=Lato:100|Gudea:400,700' rel='stylesheet' type='text/css'>
    <meta charset="utf-8">
    <title>Iklim Usaha</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" contvent="">

    <!-- Le styles -->
    <link href="<?php echo base_url();?>application/assets/css/bootstrap.css" rel="stylesheet" media="screen">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
    <script src="http://code.jquery.com/jquery-latest.js"></script>
  </head>

  <body>
  <div id="wrap">
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="<?php echo base_url();?>index.php/iklimusaha"><img class="branding" src="<?php echo base_url();?>application/assets/img/logo_lkpp.png" alt="LKPP" /></a>
          <div class="nav-collapse collapse">
            <ul class="nav pull-right">
              <li class="landing-page"><?php echo anchor('iklimusaha', 'Iklim Usaha'); ?></li>
             <li class="information"><?php echo anchor('iklimusaha/information', 'Informasi Survey'); ?></li>
			  <li class="dropdown vendor"><a href="#" class="toggle" data-toggle="dropdown" data-hover="dropdown">Vendor</a>
				<ul class="dropdown-menu">
					<li><?php echo anchor('iklimusaha/directories', 'Vendor Rating'); ?></li>
					<li><?php echo anchor('iklimusaha/directories', 'Vendor Coaching'); ?></li>
					<li><?php echo anchor('iklimusaha/directories', 'Vendor Directory'); ?></li>
				</ul>
			  </li>
			  <li class="contact"><?php echo anchor('iklimusaha/contact', 'Kontak'); ?></li>
			  <li><?php echo anchor('auth/login', 'Log In'); ?></li>-->
			  <li><a href="https://www.facebook.com/pages/LKPP-RI/396062567111282"><img class="socmed" src="<?php echo base_url();?>application/assets/img/facebook.png" alt="Like Facebook LKPP" /></a></li>
			  <li><a href="http://twitter.com/LKPP_RI"><img class="socmed" src="<?php echo base_url();?>application/assets/img/twitter.png" alt="Follow Twitter LKPP" /></a></li>             
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
      <div class="container">