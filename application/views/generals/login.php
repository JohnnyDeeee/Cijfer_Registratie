<h2><?php echo $header; ?></h2>

<?php 
    if (isset($_POST['submit']))
    {
        if ($_SESSION['userrole'] == 'admin')
        {
            echo "You are logged in as Admin!<BR>";
        }
        else if ($_SESSION['userrole'] == 'guest')
        {
            echo "You are logged in as a Guest!";
        }
        else
        {
            echo "This user doesn't exists!<BR>";
        }
    }
?>

<font color='red'>NOTE: The users: admin and guest are hardcoded for now [WIP]</font>
<form method="post" action="<?php echo BASE_URL.'generals/login'; ?>">
        Username: <input type="text" name="username" required><br>
        Password: <input type="password" name="password" required><br>
        <input type="submit" name="submit">
</form>

