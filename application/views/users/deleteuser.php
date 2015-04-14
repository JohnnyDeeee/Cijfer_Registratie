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
?>
            <form method="post" action="<?php echo BASE_URL.'users/deleteuser/'.$id.''; ?>">
            ID: <input type="text" name="id" readonly=true value="<?php echo $id ?>"><br>
            Username: <input type="text" name="username" readonly=true value="<?php echo $username ?>"><br>
            Password: <input type="text" name="password" readonly=true value="<?php echo $password ?>"><br>
            Userrole: <input type="text" name="userrole" readonly=true value="<?php echo $userrole ?>"><br>
            <input type="submit" name="submit">
            </form>
<?php
        }
    }
    else
    {
        echo "You are not logged in as admin! Redirecting you back to the homepage...";
        header("refresh:3;url=".BASE_URL."");
    }
?>
