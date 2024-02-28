<?php

require_once("Config/Config.php");

$url = !empty($_GET['url']) ? $_GET['url'] : 'home/home';
$arrUrl = explode("/", $url);
$controller = $arrUrl[0];
$method = $arrUrl[0];
$params = "";


if(!empty($arrUrl[1]))
{
    if($arrUrl[1] != "")
    {
        $method =  $arrUrl[1];
    }
}


if(!empty($arrUrl[2]))
{
    if($arrUrl[2] != ""){
        for($i=2; $i < count($arrUrl); $i++)  {
            $params .= $arrUrl[$i].',';
        }
        $params = trim($params,',');  
    }
}


spl_autoload_register(function($class){
    // Controllers/Home.php
    if(file_exists('Controllers/'.$class.".php")){
        require_once('Controllers/'.$class.".php");
    }
});


//LOAD
//LOAD
$controllerFile = "Controllers/".$controller.".php";
if(file_exists($controllerFile)) {
    require_once($controllerFile);
    $controllerInstance = new $controller();
    if(method_exists($controllerInstance, $method)) {
        $controllerInstance->{$method}($params);
    } else {
        echo "Método no encontrado";
    }
} else {
    echo "No existe controlador";
}




// echo "<br>";
// echo "Contolador: ". $controller;
// echo "<br>";
// echo "Metodo: ". $method;
// echo "<br>";
// echo "Parametros: ". $params;


?>
