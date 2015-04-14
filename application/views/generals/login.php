<h2><?php echo $header; ?></h2>

<?php 
    if (isset($_POST['submit']))
    {
        if ($_SESSION['loggedin'] == true)
        {
            echo "You are logged in!";
        }
        else
        {
            echo "This user does not exist!";
        }
    }
?>

<?php 
    if ($_SESSION['loggedin'] == false)
    {
?>  
        <form method="post" action="<?php echo BASE_URL.'generals/login'; ?>">
            Username: <input type="text" name="username" required><br>
            Password: <input type="password" name="password" required><br>
            <input type="submit" name="submit">
        </form>   
<?php        
    }
?>

<?php
    if ($_SESSION['loggedin'] == true)
    {
        echo "<a href='".BASE_URL."generals/logout'>Logout</a>";
    }
?>


