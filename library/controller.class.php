<?php
    class Controller
    {
        //Fields
        private $model;
        private $controller;
        private $action;
        private $template;
        
        //Constructor
        public function __construct($model, $controller, $action)
        {
            $this->model = $model;
            $this->controller = $controller;
            $this->action = $action;
        }
    }
?>