<?php

class Productos_controller extends Controller{

    function __construct() {
        parent::__construct();
    }

    public function products(){
        $this -> view -> render($this, 'products', 'Nuestros Productos');
    }

    public function single(){
        $this -> view -> render($this, 'single', 'Articulo');
    }

}
