<?php
	$flier = "";
	if (isset($_GET['flier']) && !empty($_GET['flier']))
	{
		$flier = htmlspecialchars($_GET["flier"]);
	}
	$flierurl = "http://www.rc.net/cincinnati/kc3382/app/fliers/$flier/flier.htm";
?>

<div id="maincontent">
	<iframe src="<?php print $flierurl ?>" style=" border-width:0 " width="1920" height="1080" frameborder="0" scrolling="no"></iframe>
</div>