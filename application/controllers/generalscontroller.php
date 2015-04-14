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
            $result = $this->model->check_login($_POST['username'], $_POST['password']);
            
            if ($result != null)
            {
                foreach($result as $value)
                {
                    $username = $value->username;
                    $password = $value->password;
                    $userrole = $value->userrole;
                }
            
                if ($_POST['username'] == $username && $_POST['password'] == $password)
                {
                    $_SESSION['userrole'] = $userrole;
                    $_SESSION['loggedin'] = true;
                }
                else
                {
                    $_SESSION['loggedin'] = false;
                }
            }
            else
            {
                $_SESSION['loggedin'] = false;
            }

        }
    }
    
    public function logout()
    {
        $introtext = "Logout";
        $this->set('header', $introtext);
        
        $_SESSION['loggedin'] = false;
        $_SESSION['userrole'] = 'guest';
    }
}


?>