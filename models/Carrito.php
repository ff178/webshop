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
class Carrito extends Model {

    protected static $table = "Carrito";

    private $idUsuario;
    private $idCarrito;
    private $cantidad;
    private $fecha;
    private $precioT;

     private $has_one = array(
        'Usuario' => array(
            'class' => 'Usuario',
            'join_as' => 'idUsuario',
            'join_with' => 'idUsuario',
            'join_table' => 'Carrito'
        )
    );

     private $has_many = array(
        'Items' => array(
            'class' => 'Items',
            'my_key' => 'idCarrito',
            'other_key' => 'idItems',
            'join_other_as' => 'idCarrito',
            'join_self_as' => 'idCarrito',
            'join_table' => 'Items'
        )
    );

    public function getMyVars() {
        return get_object_vars($this);
    }
    function __construct($idUsuario, $idCarrito, $cantidad, $fecha) {
        $this->idUsuario = $idUsuario;
        $this->idCarrito = $idCarrito;
        $this->cantidad = $cantidad;
        $this->fecha = $fecha;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getIdCarrito() {
        return $this->idCarrito;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getFecha() {
        return $this->fecha;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setIdCarrito($idCarrito) {
        $this->idCarrito = $idCarrito;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
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

    function getPrecioT() {
        return $this->precioT;
    }

    function setPrecioT($precioT) {
        $this->precioT = $precioT;
    }


}
