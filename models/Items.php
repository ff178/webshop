<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Model
 *
 * @author ff
 */
class Items extends Model {

    protected static $table = "Items";

    private $idItems;
    private $idProductos;
    private $idCarrito;
    private $cantidad;
    private $precio;
   
    private $has_one = array(
        'Carrito' => array(
            'class' => 'Carrito',
            'join_as' => 'idCarrito',
            'join_with' => 'idCarrito',
            'join_table' => 'Items'
        )
    );
     
     private $has_many = array(
        'Productos' => array(
            'class' => 'Productos',
            'my_key' => 'idItems',
            'other_key' => 'idProductos',
            'join_other_as' => 'idItems',
            'join_self_as' => 'idItems',
            'join_table' => 'Items'
        )
    );
     
    public function getMyVars() {
        return get_object_vars($this);
    }
    
    function __construct($idItems, $idProductos, $idCarrito, $cantidad, $precio) {
        $this->idItems = $idItems;
        $this->idProductos = $idProductos;
        $this->idCarrito = $idCarrito;
        $this->cantidad = $cantidad;
        $this->precio = $precio;
    }

    function getIdItems() {
        return $this->idItems;
    }

    function getIdProductos() {
        return $this->idProductos;
    }

    function getIdCarrito() {
        return $this->idCarrito;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getPrecio() {
        return $this->precio;
    }

    function setIdItems($idItems) {
        $this->idItems = $idItems;
    }

    function setIdProductos($idProductos) {
        $this->idProductos = $idProductos;
    }

    function setIdCarrito($idCarrito) {
        $this->idCarrito = $idCarrito;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function getHas_many() {
        return $this->has_many;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }

    function setHas_many($has_many) {
        $this->has_many = $has_many;
    }



}