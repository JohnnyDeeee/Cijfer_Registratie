<?php
    if ($_SESSION['userrole'] != 'admin')
    {
        echo "You are not logged in as admin! Redirecting you back to the homepage...";
        header("refresh:3;url=".BASE_URL."");
    }
    else if ($_SESSION['userrole'] == 'admin')
    {
?>
        <h2><?php echo $header; ?></h2>
        Dit is het formulier
<?php
    }
?>