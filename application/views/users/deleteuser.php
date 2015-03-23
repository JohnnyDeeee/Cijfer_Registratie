<h2><?php echo $header; ?></h2>

<?php 
    if (isset($_POST['submit']))
    {
        //show nothing but the header
    }
    else
    {
?>
        <form method="post" action="<?php echo BASE_URL.'users/deleteuser/'.$id.''; ?>">
        ID: <input type="text" name="id" readonly=true value="<?php echo $id ?>"><br>
        Voornaam: <input type="text" name="firstname" readonly=true value="<?php echo $firstname ?>"><br>
        Tussenvoegsel: <input type="text" name="infix" readonly=true value="<?php echo $infix ?>"><br>
        Achternaam: <input type="text" name="lastname" readonly=true value="<?php echo $lastname ?>"><br>
        <input type="submit" name="submit">
        </form>
<?php
    }
?>
