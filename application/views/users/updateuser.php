

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
            <form method="post" action="<?php echo BASE_URL.'users/updateuser/'.$id.''; ?>">
            Username: <input type="text" name="username"><br>
            Password: <input type="text" name="password"><br>
            Userrole: <input type="text" name="userrole"><br>
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
