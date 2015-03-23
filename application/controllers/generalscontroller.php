<?php
class GeneralsController extends Controller
{
   
    //Constructor
    public function __construct($model, $controllerName, $action)
    {
        parent::__construct($model, $controllerName, $action);
        
    }
    
    //Methods
    public function homepage()
    {
        $introtext = "Homepage";
        $this->set('header', $introtext);
    }
}


?>