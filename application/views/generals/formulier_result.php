<?php
    if ($_SESSION['userrole'] == 'guest')
    {
        echo "You are not logged in as admin! Redirecting you back to the homepage...";
        header("refresh:3;url=".BASE_URL."");
    }
    else
    {
        echo "<h2>".$header."</h2>";
        $results = array();
?>
        <html>
            <head><link rel="stylesheet" href="<?php echo BASE_URL."css/style.css" ?>"></head>
            <form method="post" action="<?php echo BASE_URL.'generals/formulier_save'; ?>">    
            <fieldset>
                    <div id="title">
                        <h1>RESULTAAT</h1>
                    </div>
                    <div id="voornaam">
                        <label for="voornaam">Voornaam:</label>
                        <input type="text" name="voornaam" value="<?php echo $voornaam ?>" readonly>
                    </div>
                    <div id="tussenvoegsel">
                        <label for="tussenvoegsel">Tussenvoegsel:</label>
                        <input type="text" name="tussenvoegsel" value="<?php echo $tussenvoegsel ?>" readonly>
                    </div>
                    <div id="achternaam">
                        <label for="achternaam">Achternaam:</label>
                        <input type="text" name="achternaam" value="<?php echo $achternaam ?>" readonly>
                    </div>
                    <div id="huisnummer">
                        <label for="huisnummer">Huisnummer:</label>
                        <input type="number" name="huisnummer" value="<?php echo $huisnummer ?>" readonly>
                    </div>
                    <div id="postcode">
                        <label for="postcode">Postcode:</label>
                        <input type="text" name="postcode" value="<?php echo $postcode ?>" readonly>
                    </div>
                    <div id="woonplaats">
                        <label for="woonplaats">Woonplaats:</label>
                        <input type="text" name="woonplaats" value="<?php echo $woonplaats ?>" readonly>
                    </div>
                    <div id="straatnaam">
                        <label for="straatnaam">Straatnaam:</label>
                        <input type="text" name="straatnaam" value="<?php echo $straatnaam ?>" readonly>
                    </div>
                    <div id="mail">
                        <label for="mail">Email-adres:</label>
                        <input type="text" name="mail" value="<?php echo $mail ?>" readonly>
                    </div>
                    <div id="geslacht">
                        <label for="geslacht">Geslacht:</label>
                        <input type="text" name="geslacht" value="<?php echo $_POST['geslacht'] ?>" readonly>
                    </div>
                    <div id="geboortedatum">
                        <label for="geboortedatum">Geboortedatum:</label>
                        <input type="text" name="geboortedatum" value="<?php echo $_POST['geboortedatum'] ?>" readonly>
                    </div>
                    <div id="school">
                        <label for="school">Op dit moment zit ik op de volgende school:</label>
                        <input type="text" name="school" value="<?php echo $school ?>" readonly>
                    </div>
                    <div id="schooltype">
                        <label for="schooltype">Kies je huidige school type:</label>
                        <input type="text" name="schooltype" value="<?php echo $schooltype ?>" readonly>
                    </div>
                    <div id="leerjaar">
                        <label for="leerjaar">Kies je huidige klas/leerjaar:</label>
                        <input type="text" name="leerjaar" value="<?php echo $leerjaar ?>" readonly>
                    </div>
                    <div id="opleiding">
                        <label for="opleiding">Naar welke opleiding(en) gaat je voorkeur uit:</label></br>
                        <?php
                            foreach($_POST['opleiding'] as $value){
                                switch ($value){
                                    case "opleiding_1":
                                        echo "<input type='text' name='opleiding_1' size=50 value='Niveau 4 Mediadeveloper/Gamedeveloper/Applicatieontwikkelaar' readonly></br>";
                                        break;
                                    case "opleiding_2":
                                        echo "<input type='text' name='opleiding_2' size=50 value='Niveau 4 ICT beheer/Netwerkbeheer' readonly></br>";
                                        break;
                                    case "opleiding_3":
                                        echo "<input type='text' name='opleiding_3' size=50 value='Niveau 4 Bouwkunde/Infra' readonly></br>";
                                        break;
                                    case "opleiding_4":
                                        echo "<input type='text' name='opleiding_4' size=50 value='Niveau 4 Enginering' readonly></br>";
                                        break;
                                    case "opleiding_5":
                                        echo "<input type='text' name='opleiding_5' size=50 value='Niveau 3 Medewerker beheer ICT' readonly></br>";
                                        break;
                                    case "opleiding_6":
                                        echo "<input type='text' name='opleiding_6' size=50 value='Niveau 3 Eerste Autotechnicus' readonly></br>";
                                        break;
                                    case "opleiding_7":
                                        echo "<input type='text' name='opleiding_7' size=50 value='Niveau 2 Autotechnicus' readonly></br>";
                                        break;
                                    case "opleiding_8":
                                        echo "<input type='text' name='opleiding_8' size=50 value='Niveau 2 medewerker ICT' readonly></br>";
                                        break;
                                }
                            }
                        ?>
                    </div>

                    
                    <button onclick="goBack()">Go Back</button>
                    <script>
                        function goBack() {
                            window.history.back();
                        }
                    </script>
                    
                    <input type="submit" value="Accept">

                    
                </fieldset>
            </form>
        </html>

<?php
    }
?>