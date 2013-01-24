<?php
	require ("includes/header.php");
?>
 
<?php
	$page = "home";
	if (isset($_GET['page']) && !empty($_GET['page']))
	{
		$page = htmlspecialchars($_GET["page"]);
	}
	if ($page != "fliers") {
		require ("announcements.php");
	}
	require ("$page.php");
?>

<?php
	require ("includes/footer.php");
?>