<?php
    if ($_SESSION['userrole'] == 'administrator')
    {
        echo "<h2>".$header."</h2>";

        if (isset($_POST['submit']))
        {
            //show nothing but the header
        }
        else
        {
            echo $table;
        }
    }
    else
    {
        echo "You are not logged in as admin! Redirecting you back to the homepage...";
        header("refresh:3;url=".BASE_URL."");
    }
?>
