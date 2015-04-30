<?php
    if ($_SESSION['userrole'] == 'guest' || $_SESSION['userrole'] == 'administrator')
    {
        echo "<h2>".$header."</h2>";
        echo "Dit is de registratie pagina";
    }
    else
    {
        echo "You must be logged out or be an admin to register another user! Redirecting you back to the homepage...";
        header("refresh:3;url=".BASE_URL."");
    }
?>