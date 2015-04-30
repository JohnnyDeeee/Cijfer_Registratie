<?php
    if ($_SESSION['userrole'] == 'guest')
    {
        echo "You are not logged in as admin! Redirecting you back to the homepage...";
        header("refresh:3;url=".BASE_URL."");
    }
    else
    {
        echo "<h2>".$header."</h2>";
?>
        <html>
            <head>
                <link rel="stylesheet" href="<?php echo BASE_URL."css/style.css" ?>">
            </head>
            
            <form method="post" action="<?php echo BASE_URL.'generals/formulier_result'; ?>">
                <fieldset>
                    <div id="title">
                        <h1>BEZOEKERSREGISTRATIE</h1>
                    </div>
                    <div id="voornaam">
                        <label for="voornaam">Voornaam:</label>
                        <input type="text" name="voornaam" required>
                    </div>
                    <div id="tussenvoegsel">
                        <label for="tussenvoegsel">Tussenvoegsel:</label>
                        <input type="text" name="tussenvoegsel">
                    </div>
                    <div id="achternaam">
                        <label for="achternaam">Achternaam:</label>
                        <input type="text" name="achternaam" required>
                    </div>
                    <div id="huisnummer">
                        <label for="huisnummer">Huisnummer:</label>
                        <input type="number" name="huisnummer" required>
                    </div>
                    <div id="postcode">
                        <label for="postcode">Postcode:</label>
                        <input type="text" name="postcode" required>
                    </div>
                    <div id="woonplaats">
                        <label for="woonplaats">Woonplaats:</label>
                        <input type="text" name="woonplaats" required>
                    </div>
                    <div id="straatnaam">
                        <label for="straatnaam">Straatnaam:</label>
                        <input type="text" name="straatnaam" required>
                    </div>
                    <div id="mail">
                        <label for="mail">Email-adres:</label>
                        <input type="email" name="mail" required>
                    </div>
                    <div id="geslacht">
                        <label for="geslacht">Geslacht:</label>
                        <input type="radio" name="geslacht" value="man">Man
                        <input type="radio" name="geslacht" value="vrouw">Vrouw
                    </div>
                    <div id="geboortedatum">
                        <label for="geboortedatum">Geboortedatum:</label>
                        <input type="date" name="geboortedatum" required>
                    </div>
                    <div id="school">
                        <label for="school">Op dit moment zit ik op de volgende school:</label>
                        <input list="scholen" name="scholen" required>
                        <datalist id="scholen">
                          <option value="School 1">
                          <option value="School 2">
                          <option value="School 3">
                          <option value="School 4">
                          <option value="School 5">
                          <option value="School 6">
                          <option value="School 7">
                          <option value="School 8">
                          <option value="School 9">
                          <option value="School 10">
                        </datalist>
                    </div>
                    <div id="schooltype">
                        <label for="schooltype">Kies je huidige school type:</label>
                        <select name="schooltype">
                            <option value="geen">geen</option>
                            <option value="VMBO basisberoepsgericht">VMBO basisberoepsgericht</option>
                            <option value="VMBO kaderberoepsgericht">VMBO kaderberoepsgericht</option>
                            <option value="VMBO gemengde leerweg">VMBO gemengde leerweg</option>
                            <option value="VMBO theoretische leerweg">VMBO theoretische leerweg</option>
                            <option value="MAVO">MAVO</option>
                            <option value="HAVO">HAVO</option>
                            <option value="VWO">VWO</option>
                            <option value="Gymnasium">Gymnasium</option>
                        </select>
                    </div>
                    <div id="leerjaar">
                        <label for="leerjaar">Kies je huidige klas/leerjaar:</label>
                        <select name="leerjaar">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                    <div id="opleiding">
                        <label for="opleiding">Naar welke opleiding(en) gaat je voorkeur uit:</label></br>
                        <input type="checkbox" name="opleiding[]" value="opleiding_1">Niveau 4 Mediadeveloper/Gamedeveloper/Applicatieontwikkelaar </br>
                        <input type="checkbox" name="opleiding[]" value="opleiding_2">Niveau 4 ICT beheer/Netwerkbeheer </br>
                        <input type="checkbox" name="opleiding[]" value="opleiding_3">Niveau 4 Bouwkunde/Infra </br>
                        <input type="checkbox" name="opleiding[]" value="opleiding_4">Niveau 4 Enginering </br>
                        <input type="checkbox" name="opleiding[]" value="opleiding_5">Niveau 3 Medewerker beheer ICT </br>
                        <input type="checkbox" name="opleiding[]" value="opleiding_6">Niveau 3 Eerste Autotechnicus </br>
                        <input type="checkbox" name="opleiding[]" value="opleiding_7">Niveau 2 Autotechnicus </br>
                        <input type="checkbox" name="opleiding[]" value="opleiding_8">Niveau 2 medewerker ICT </br> 
                    </div>
                    <div id="submit">
                        <input type="submit" value="submit">
                    </div>
                </fieldset>
            </form>
        </html>

<?php
    }
?>