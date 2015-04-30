<?php
    if ($_SESSION['userrole'] == 'guest')
    {
        echo "You are not logged in as admin! Redirecting you back to the homepage...";
        header("refresh:3;url=".BASE_URL."");
    }
    else
    {
        echo "<h2>".$header."</h2>";
        echo "Redirecting you back to the homepage...";
        header("refresh:3;url=".BASE_URL."");
    }
?>