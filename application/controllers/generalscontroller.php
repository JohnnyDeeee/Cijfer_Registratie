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
    
    public function formulier()
    {
        $introtext = "Formulier";
        $this->set('header', $introtext);
    }
    
    public function login()
    {
        $introtext = "Login";
        $this->set('header', $introtext);
        
        if (isset($_POST['submit']))
        {
            if ($_POST['username'] == 'admin' && $_POST['password'] == 'password')
            {
                $_SESSION['userrole'] = 'admin';
            }
            else if ($_POST['username'] == 'guest' && $_POST['password'] == 'password')
            {
                $_SESSION['userrole'] = 'guest';
            }
        }
    }
}


?>