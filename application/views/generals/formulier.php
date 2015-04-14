<?php
    if ($_SESSION['userrole'] == 'administrator' || $_SESSION['userrole'] == 'user')
    {
        echo "<h2>".$header."</h2>";
        echo "Dit is het formulier";
    }
    else
    {
        echo "You are not logged in as admin! Redirecting you back to the homepage...";
        header("refresh:3;url=".BASE_URL."");
    }
?>