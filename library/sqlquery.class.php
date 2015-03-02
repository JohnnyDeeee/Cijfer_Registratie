<?php
    class SqlQuery
    {
        //Fields
        private $db_connect;
        
        //Constructor
        
        //Methods
        public function connect($host, $user, $password, $dbname)
        {
            $this->db_connect = msqli_connect($host, $user, $password, $dbname);
        }
    }
?>