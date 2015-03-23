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

session_start();

require_once(ROOT.DS.'library'.DS.'bootstrap.php');
?>