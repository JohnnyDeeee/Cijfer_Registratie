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

<h3>Index</h3>
get = 
<?php 
	echo $url; 
	require_once($url.".php");
?>