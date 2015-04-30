<?php
    class General extends Model
    {
        public function check_login($username, $password)
        {
            $query = "SELECT * FROM `users` WHERE `username` = '".$username."' AND `password` = '".$password."';";
            return $this->query($query);
        }
        
        public function get_city_from_zip($zip){
            $query = "SELECT `city` FROM `postcode` WHERE `postcode` = '".$zip."'; ";
            return $this->query($query);
        }
        
        public function insert_into_bezoekers_registratie($post){
            if(!isset($post['opleiding_1'])){
                $post['opleiding_1'] = null;
            }
            if(!isset($post['opleiding_2'])){
                $post['opleiding_2'] = null;
            }
            if(!isset($post['opleiding_3'])){
                $post['opleiding_3'] = null;
            }
            if(!isset($post['opleiding_4'])){
                $post['opleiding_4'] = null;
            }
            if(!isset($post['opleiding_5'])){
                $post['opleiding_5'] = null;
            }
            if(!isset($post['opleiding_6'])){
                $post['opleiding_6'] = null;
            }
            if(!isset($post['opleiding_7'])){
                $post['opleiding_7'] = null;
            }
            if(!isset($post['opleiding_8'])){
                $post['opleiding_8'] = null;
            }
            
            $query = "INSERT INTO `bezoekers_registraties` VALUES (null, '".$post['voornaam']."', '".$post['tussenvoegsel']."', '".$post['achternaam']."', '".$post['huisnummer']."', '".$post['postcode']."', '".$post['woonplaats']."', '".$post['straatnaam']."', '".$post['mail']."', '".$post['geslacht']."', '".$post['geboortedatum']."', '".$post['school']."', '".$post['schooltype']."', '".$post['leerjaar']."', '".$post['opleiding_1']."', '".$post['opleiding_2']."', '".$post['opleiding_3']."', '".$post['opleiding_4']."', '".$post['opleiding_5']."', '".$post['opleiding_6']."', '".$post['opleiding_7']."', '".$post['opleiding_8']."');";
            return $this->query($query);
        }
    }
?>