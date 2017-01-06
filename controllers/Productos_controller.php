<?php

class Productos_controller extends Controller{

    function __construct() {
        parent::__construct();
    }

    public function products(){
        $this -> view -> render($this, 'products', 'Nuestros Productos');
    }

    public function productsByCat(){
        $this -> view -> render($this, 'categorys', 'Nuestros Productos');
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

    public function allProducts(){
    	  $r = Producto_bl::getAllProducts();
        $json = json_encode($r);
        header("Content-type: application/json;charset=utf-8");
        print_r($json);

        return $json;
    }

    public function productByCategory($id){
    	$r = Producto_bl::getProductByCategory($id);
        $json = json_encode($r);
        header("Content-type: application/json;charset=utf-8");
        print_r($json);

        return $json;
    }

    public function singleProduct($idProductos){
        $product = Productos::where("idProductos", $idProductos);
        header("Content-type: application/json;charset=utf-8");
        echo json_encode($product);
    }

}
