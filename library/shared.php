<?php
function callHook()
{
    /*
    voorbeeld link: 127.0.0.1/2014-2015/PROJECT/Cijfer_Registratie/users/adduser/123
    Dit wordt gebruikt in de class: users/adduser/123
    ControllerName: users
    Action: adduser
    Arguments: 123, ...
    */
    global $url;
    
    // Zet alle url onderdelen in een array (gescheiden door '/')
    $urlArray = explode('/', $url);
    
    $controller = $urlArray[0]; // $controller = 'users' (de controller)
    array_shift($urlArray);
    
    $action = $urlArray[0]; // $action = 'adduser' (een action)
    array_shift($urlArray);
    
    $queryString = $urlArray; // $queryString = '123' (argumentenlijst)
    
    //Dit wordt de map naam waar de views in komen te staan
    $controllerName = ucwords(strtolower($controller));
    
    //Dit wordt de naam voor de model class ($controller - s), dit is voor de database
    $model = ucwords(rtrim(strtolower($controller), 's')); //strtolower() en ucwords() zijn optioneel
    
    //Dit is de naam van de controller class
    $controller = ucwords(strtolower($controller));
    $controller = $controller."Controller";
    
    //Nieuw object aanmaken van de $controller class
    $dispatch = new $controller($model, $controllerName, $action);
    
    //Checken of method ($action) in class ($controller) bestaadt
    //daarna roep je die method aan
    if (method_exists($controller, $action))
    {
        echo "Method ".$action." bestaadt <BR>";
        call_user_func_array(array($dispatch, $action), $queryString);
    }
    else
    {
        echo "Method ".$action." bestaadt niet! <BR>";
    }
}

function __autoload($classname)
{
    $classname = strtolower($classname);
    if (file_exists(ROOT.DS.'application'.DS.'controllers'.DS.$classname.'.php'))
    {
        require_once(ROOT.DS.'application'.DS.'controllers'.DS.$classname.'.php');
    }
    else
    {
        echo $classname.'.php'.' class not found!';
    }
}

callHook();
?>