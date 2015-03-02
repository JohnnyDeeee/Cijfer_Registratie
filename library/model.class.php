<?php
    class Model extends SqlQuery
    {
        //Fields
        
        //Constructor
        public function __construct(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        {
            $this->connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        }
        
        //Methods
    }
?>