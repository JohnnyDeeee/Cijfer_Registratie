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
    
    public function formulier_result()
    {
        $introtext = "Formulier Resultaat";
        $this->set('header', $introtext);
        
        //voornaam setup
        $voornaam_old = explode(" ", $_POST['voornaam']);
        $voornaam_old = str_replace(' ', '', $voornaam_old);
        $voornaam_new_array = array();
        foreach ($voornaam_old as $value){
            $element = ucfirst($value);
            array_push($voornaam_new_array, $element);
        }
        $voornaam_new = implode($voornaam_new_array);
        
        //achternaam setup
        $achternaam_old = explode(" ", $_POST['achternaam']);
        $achternaam_old = str_replace(' ', '', $achternaam_old);
        $achternaam_new_array = array();
        foreach ($achternaam_old as $value){
            $element = ucfirst($value);
            array_push($achternaam_new_array, $element);
        }
        $achternaam_new = implode($achternaam_new_array);
        
        $tussenvoegsel = str_replace(' ', '', $_POST['tussenvoegsel']);
        $huisnummer = str_replace(' ', '', $_POST['huisnummer']);
        $postcode = str_replace(' ', '', $_POST['postcode']);
        $woonplaats = str_replace(' ', '', $_POST['woonplaats']);
        $straatnaam = str_replace(' ', '', $_POST['straatnaam']);
        $mail = str_replace(' ', '', $_POST['mail']);
        $school = str_replace(' ', '', $_POST['scholen']);
        $schooltype = str_replace(' ', '', $_POST['schooltype']);
        $leerjaar = str_replace(' ', '', $_POST['leerjaar']);
        
        $this->set('voornaam', $voornaam_new);
        $this->set('tussenvoegsel', $tussenvoegsel);
        $this->set('achternaam', $achternaam_new);
        $this->set('huisnummer', $huisnummer);
        $this->set('postcode', $postcode);
        $this->set('woonplaats', $woonplaats);
        $this->set('straatnaam', $straatnaam);
        $this->set('mail', $mail);
        $this->set('school', $school);
        $this->set('schooltype', $schooltype);
        $this->set('leerjaar', $leerjaar);
    }
    
    public function formulier_save(){
        $introtext = "Your results have been saved!";
        $this->set('header', $introtext);
        
        echo var_dump($_POST);
        $this->model->insert_into_bezoekers_registratie($_POST);
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
    
    public function register()
    {
        $introtext = "Register";
        $this->set('header', $introtext);
    }
}


?>