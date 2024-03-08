<?php

class Home extends Controllers{
    public function __construct()
    {
        parent::__construct();

    }
    public function home()
    {
        $data['page_id'] = 1;
        $data['tag_page'] = "Home";
        $data['page_title'] = "Pagina principal";
        $data['page_name'] ="home";
        $data['page_content'] = "Lorem ipsum dolor sit amet 
        consectetur adipisicing elit. Adipisci numquam placeat 
        maxime veniam vel sit incidunt nemo fuga corrupti quo similique
         saepe sunt quaerat voluptates provident voluptate, esse praesentium 
         perferendis?";
    $this->views->getView($this,"home", $data);
    }



    // METODOS DE PRUEBA- SE PUEDEN BORRAR
    // public function datos($params)
    // {
    //     echo "Datos recibidos:".$params;
    // }

    // public function carrito($params)
    // {
    //    $carrito = $this->model->getCarrito($params);
    //    echo $carrito;
    // }
}
?>