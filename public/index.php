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
    //$_SESSION['userrole'] = 'guest'; //set userrole as guest standard
    //$_SESSION['loggedin'] = false; //set logged in false standard
}   


//DEBUG
echo "<font color='green'>";
echo "YOUR userrole = ".$_SESSION['userrole']."<BR>";
echo "Logged in = "; echo ($_SESSION['loggedin']) ? 'true' : 'false';
echo "</font>";

require_once(ROOT.DS.'library'.DS.'bootstrap.php');
?>