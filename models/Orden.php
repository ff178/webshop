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
class Orden extends Model {

    protected static $table = "Orden";
    
    private $idOrden;
    private $idUsuario;
    private $idItems;
    private $fechaOrden;
    private $fechaCompra;
    private $status;
    private $idInfoCompra;
    
    
   private $has_one = array(
        'Usuario' => array(
            'class' => 'Usuario',
            'join_as' => 'idUsuario',
            'join_with' => 'idUsuario',
            'join_table' => 'Orden'
        ), 
       'InfoCompra' => array(
            'class' => 'InfoCompra',
            'join_as' => 'idInfoCompra',
            'join_with' => 'idInfoCompra',
            'join_table' => 'Orden'
        )
    );
     
     private $has_many = array(
        'Items' => array(
            'class' => 'Items',
            'my_key' => 'idOrden',
            'other_key' => 'idItems',
            'join_other_as' => 'idOrden',
            'join_self_as' => 'idOrden',
            'join_table' => 'Orden'
        )
    );
    
    
    
    public function getMyVars() {
        return get_object_vars($this);
    }
    
    function __construct($idOrden, $idUsuario, $idItems, $fechaOrden, $fechaCompra, $status, $idInfoCompra) {
        $this->idOrden = $idOrden;
        $this->idUsuario = $idUsuario;
        $this->idItems = $idItems;
        $this->fechaOrden = $fechaOrden;
        $this->fechaCompra = $fechaCompra;
        $this->status = $status;
        $this->idInfoCompra = $idInfoCompra;
    }
    function getIdOrden() {
        return $this->idOrden;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getIdItems() {
        return $this->idItems;
    }

    function getFechaOrden() {
        return $this->fechaOrden;
    }

    function getFechaCompra() {
        return $this->fechaCompra;
    }

    function getStatus() {
        return $this->status;
    }

    function getIdInfoCompra() {
        return $this->idInfoCompra;
    }

    function setIdOrden($idOrden) {
        $this->idOrden = $idOrden;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setIdItems($idItems) {
        $this->idItems = $idItems;
    }

    function setFechaOrden($fechaOrden) {
        $this->fechaOrden = $fechaOrden;
    }

    function setFechaCompra($fechaCompra) {
        $this->fechaCompra = $fechaCompra;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setIdInfoCompra($idInfoCompra) {
        $this->idInfoCompra = $idInfoCompra;
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
