<?php
    class Model extends SqlQuery
    {
        //Fields
        protected $model;
        
        //Constructor
        public function __construct()
        {
            $this->connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            $this->model = get_class($this);
        }
        
        //Methods
    }
?>