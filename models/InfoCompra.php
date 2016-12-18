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
class InfoCompra extends Model {

    protected static $table = "InfoCompra";

    private $idInfoCompra;
    private $pago;
    private $costo;
    private $region;
   
    
    public function getMyVars() {
        return get_object_vars($this);
    }
    
    function __construct($idInfoCompra, $pago, $costo, $region) {
        $this->idInfoCompra = $idInfoCompra;
        $this->pago = $pago;
        $this->costo = $costo;
        $this->region = $region;
    }

    
    
    function getIdInfoCompra() {
        return $this->idInfoCompra;
    }

    function getPago() {
        return $this->pago;
    }

    function getCosto() {
        return $this->costo;
    }

    function getRegion() {
        return $this->region;
    }

    function setIdInfoCompra($idInfoCompra) {
        $this->idInfoCompra = $idInfoCompra;
    }

    function setPago($pago) {
        $this->pago = $pago;
    }

    function setCosto($costo) {
        $this->costo = $costo;
    }

    function setRegion($region) {
        $this->region = $region;
    }


}