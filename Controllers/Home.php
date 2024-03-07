<?php

class Home extends Controllers {  
    public function __construct()
    {
        parent::__construct();
    }

    public function home($parems)
    {
        echo "Mensajes desde el controlador";
    }

    public function datos($params)
    {
        echo "Datos recibidos:".$params;
    }
}
?>


