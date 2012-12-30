<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"><html>
<html>
	<head>
		<title>
			Knights of Columbus
		</title>
		<link href="http://www.kofc.org/common/styles/knights.css" rel="stylesheet" type="text/css">
		<link href="assets/css/council.css" rel="stylesheet" type="text/css">
		
		<link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
		<script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
		
		<link type="text/css" rel="stylesheet" media="screen" charset="utf-8" href="libraries/picasaViewer2.0/css/slimbox.css" />
		<link type="text/css" rel="stylesheet" media="screen" charset="utf-8" href="libraries/picasaViewer2.0/css/picasaViewer.css" />
		<script type="text/javascript" src="libraries/picasaViewer2.0/js/mootools-core-1.4.0-full-compat-yc.js"></script>
		<script type="text/javascript" src="libraries/picasaViewer2.0/js/mootools-more-1.4.0.1.js"></script>
		<script type="text/javascript" src="libraries/picasaViewer2.0/js/slimbox.js"></script>
		<script type="text/javascript" src="libraries/picasaViewer2.0/js/picasaViewer2.0.js"></script>
	</head>
	<body>
		<?php
			$page = "home";
			if (isset($_GET['page']) && !empty($_GET['page']))
			{
				$page = htmlspecialchars($_GET["page"]);
			}		
		?>
		<div id="pagecontent">
			<div id="header">
				<img src="images/level1_logo.jpg" alt="Knights of Columbus" title="Knights of Columbus" width="313" height="75" vspace="4" border="0">
				<div id="topnav">
					<!-- <a class="topnavitem" href="index.php?page=home">
						<img src="images/3rdDegree.jpg" width="25" height="25" border="0">
						<font size="1" face="Verdana" color="#ffffff">3382</font>
						<img src="images/3rdDegree.jpg" width="25" height="25" border="0">
					</a> -->
					<a class="topnavitem <?php if($page == 'home'){echo 'active';} ?>" href="index.php?page=home">
						Home
					</a>
					<a class="topnavitem <?php if($page == 'events'){echo 'active';} ?>" href="index.php?page=events">
						Council Events
					</a>
					<a class="topnavitem <?php if($page == 'pictures'){echo 'active';} ?>" href="index.php?page=pictures">
						Council Pictures
					</a>
					<a class="topnavitem <?php if($page == 'membership'){echo 'active';} ?>" href="index.php?page=membership">
						Membership
					</a>
					<a class="topnavitem <?php if($page == 'newsletters'){echo 'active';} ?>" href="https://docs.google.com/folder/d/0Bzotbqt-0uxdUnJNS3RnYXdGZzg/edit" target="_blank">
						Newsletters
					</a>
					<a class="topnavitem <?php if($page == 'officers'){echo 'active';} ?>" href="index.php?page=officers">
						Officers
					</a>
					<a class="topnavitem <?php if($page == 'statecouncil'){echo 'active';} ?>" href="http://www.kofcohio.org/" target="_blank">
						State Council
					</a>
					<a class="topnavitem <?php if($page == 'supremecouncil'){echo 'active';} ?>" href="http://www.kofc.org" target="_blank">
						Supreme Council
					</a>
					<a class="topnavitem <?php if($page == 'findacouncil'){echo 'active';} ?>" href="http://www.kofc.org/un/en/officers/fac.html" target="_blank">
						Find a Council
					</a>
				</div>
			</div>
			<!-- <div id="leftnav">
				<a class="leftnavitem" href="">
					Home
				</a>
				<a class="leftnavitem" href="">
					Membership
				</a>
				<a class="leftnavitem" href="">
					Newsletters
				</a>
				<a class="leftnavitem" href="">
					Officers
				</a>				
			</div> -->