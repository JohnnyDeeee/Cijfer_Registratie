<?php
    class General extends Model
    {
        public function check_login($username, $password)
        {
            $query = "SELECT * FROM `users` WHERE `username` = '".$username."' AND `password` = '".$password."';";
            return $this->query($query);
        }
    }
?>