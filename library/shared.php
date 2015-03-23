<?php
function callHook()
{
    global $url;
    $urlArray = explode('/', $url);
    $controller = $urlArray[0];
    array_shift($urlArray);
    $action = $urlArray[0];
    array_shift($urlArray);
    $queryString = $urlArray;
    $controllerName = strtolower($controller);
    $controller = ucwords(strtolower($controller));
    $model = rtrim($controller, 's');
    $controller = $controller."Controller";
    $dispatch = new $controller($model, $controllerName, $action);
    
    //Checken of method ($action) in class ($controller) bestaadt
    //daarna roep je die method aan
    if (method_exists($controller, $action))
    {
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
    else if (file_exists(ROOT.DS.'application'.DS.'models'.DS.$classname.'.php'))
    {
        require_once(ROOT.DS.'application'.DS.'models'.DS.$classname.'.php');
    }
    else if (file_exists(ROOT.DS.'library'.DS.$classname.'.class.php'))
    {
        require_once(ROOT.DS.'library'.DS.$classname.'.class.php');
    }
    else
    {
        echo $classname.'.php'.' class not found!';
    }
}

callHook();
?>