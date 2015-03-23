<h2><?php echo $header; ?></h2>

<?php
    if (isset($_POST['submit']))
    {
        //show nothing but the header
    }
    else
    {
?>
        <form method="post" action="<?php echo BASE_URL.'users/adduser'; ?>">
        Voornaam: <input type="text" name="firstname" required><br>
        Tussenvoegsel: <input type="text" name="infix" value=""><br>
        Achternaam: <input type="text" name="lastname" required><br>
        <input type="submit" name="submit">
        </form>
<?php
    }
?>
