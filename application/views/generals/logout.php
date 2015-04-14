<h2><?php echo $header; ?></h2>

<?php
    echo "You are succesfully logged out! Redirecting you back to the homepage...";
    header("refresh:3;url=".BASE_URL."");
?>