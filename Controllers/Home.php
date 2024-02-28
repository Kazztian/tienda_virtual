<?php

class Home{
    public function __construct()
    {}


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


