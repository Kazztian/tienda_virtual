<?php
spl_autoload_register(function($class){
    // Controllers/Home.php
    if(file_exists(LIBS.'Core/'.$class.".php")){
        require_once(LIBS.'Core/'.$class.".php");
    }
});


?>