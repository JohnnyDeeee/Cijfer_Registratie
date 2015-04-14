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
            <form method="post" action="<?php echo BASE_URL.'users/adduser'; ?>">
            Username: <input type="text" name="username" required><br>
            Password: <input type="text" name="password" value=""><br>
            Userrole: <input type="text" name="userrole" required><br>
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
