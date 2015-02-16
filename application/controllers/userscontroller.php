<?php
class UsersController
{
    //Constructor
    public function __construct($model, $controllerName, $action)
    {
        
    }
    
    //Methods
    public function adduser($id, $naam, $leeftijd)
    {
        echo "ID = ".$id."<BR>";
        echo "NAAM = ".$naam."<BR>";
        echo "LEEFTIJD = ".$leeftijd."<BR>";
    }
}


?>