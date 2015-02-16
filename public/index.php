<?php 
	echo "Dit is de index.php pagina"; 
	
	if (isset($_GET['url']))
	{
		$url = $_GET['url'];
	}
	else
	{
		$url = "homePage";
	}
?>