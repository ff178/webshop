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

    public function allCategorys(){
    	$r = Producto_bl::getAllCategorys();
        $json = json_encode($r);
        print_r($json);
        header("Content-type: application/json;charset=utf-8");
        return $json;
    }
    public function productByCategory($id){
    	$r = Producto_bl::getProductByCategory($id);
        $json = json_encode($r);
        print_r($json);
        header("Content-type: application/json;charset=utf-8");
        return $json;
    }

}
