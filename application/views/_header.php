<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>mPurpose - Multipurpose Feature Rich Bootstrap Template</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <link rel="stylesheet" href="<?php echo base_url()?>front/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo base_url()?>front/css/icomoon-social.css">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600,800' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="<?php echo base_url()?>front/css/leaflet.css" />
		<!--[if lte IE 8]>
		    <link rel="stylesheet" href="css/leaflet.ie.css" />
		<![endif]-->
		<link rel="stylesheet" href="<?php echo base_url()?>front/css/main.css">

        <script src="<?php echo base_url()?>front/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        

        <!-- Navigation & Logo-->
        <div class="mainmenu-wrapper">
        <div class="col-md-12" style="background:#4F8DB2">
	        <div class="container" style="height:100px;padding-top: 40px;">
	        		<a href="index.php"><img src="<?php echo base_url()?>front/img/mPurpose-logo.png" alt="Multipurpose Twitter Bootstrap Template"></a>
			</div>
		</div>
		 <div class="col-md-12" style="background:#2898F3">
			<div class="container">
				<nav id="mainmenu" class="mainmenu">
					<ul>
						<li>
							<?php echo anchor("frontcontroller/home" , "Home"); ?>
						</li>
						<li>
							<?php echo anchor("frontcontroller/programming" , "Programming"); ?>
						</li>
						<li>
							<?php echo anchor("frontcontroller/web" , "Web"); ?>
						</li>
						<li>
							<?php echo anchor("frontcontroller/database" , "Database"); ?>
						</li>
						<li>
							<?php echo anchor("frontcontroller/contactus" , "Contact us"); ?>
						</li>
					</ul>
				</nav>
			</div>
		</div>
		</div>