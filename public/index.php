<?php 
//Bepaalt het directory scheidings teken '/' of '\'
define("DS", DIRECTORY_SEPARATOR);

//Bepaalt de root van de project map
define("ROOT", dirname(dirname(__FILE__)));


	
if (isset($_GET['url']))
{
    $url = $_GET['url'];
}
else
{
    $url = "generals/homepage";
}

//Dit zorgt ervoor dat session_start() maar 1x start
if (session_status() == PHP_SESSION_NONE)
{
    session_start();
}   

if (!isset($_SESSION['userrole']))
{
    $_SESSION['userrole'] = 'guest'; //set userrole as guest standard
}

echo "<font color='green'>YOUR userrole = ".$_SESSION['userrole']."</font>";

require_once(ROOT.DS.'library'.DS.'bootstrap.php');
?>