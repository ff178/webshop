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
class Productos extends Model {

    protected static $table = "Productos";

    private $idProductos;
    private $codigo;
    private $nombre;
    private $talla;
    private $colores;
    private $ganchos;
    private $descripcion;
    private $precio;
    private $url;
    private $url2;
    private $idCategorias;
    
     private $has_one = array(
        'Categorias' => array(
            'class' => 'Categorias',
            'join_as' => 'idCategoria',
            'join_with' => 'idCategoria',
            'join_table' => 'Prodcutos'
        )
    );
    
    public function getMyVars() {
        return get_object_vars($this);
    }
    function __construct($idProductos, $codigo, $nombre, $talla, $colores, $ganchos, $descripcion, $precio, $url, $url2, $idCategorias) {
        $this->idProductos = $idProductos;
        $this->codigo = $codigo;
        $this->nombre = $nombre;
        $this->talla = $talla;
        $this->colores = $colores;
        $this->ganchos = $ganchos;
        $this->descripcion = $descripcion;
        $this->precio = $precio;
        $this->url = $url;
        $this->url2 = $url2;
        $this->idCategorias = $idCategorias;
    }

    function getIdProductos() {
        return $this->idProductos;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getTalla() {
        return $this->talla;
    }

    function getColores() {
        return $this->colores;
    }

    function getGanchos() {
        return $this->ganchos;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getUrl() {
        return $this->url;
    }

    function getUrl2() {
        return $this->url2;
    }

    function getIdCategorias() {
        return $this->idCategorias;
    }

    function setIdProductos($idProductos) {
        $this->idProductos = $idProductos;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setTalla($talla) {
        $this->talla = $talla;
    }

    function setColores($colores) {
        $this->colores = $colores;
    }

    function setGanchos($ganchos) {
        $this->ganchos = $ganchos;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setUrl($url) {
        $this->url = $url;
    }

    function setUrl2($url2) {
        $this->url2 = $url2;
    }

    function setIdCategorias($idCategorias) {
        $this->idCategorias = $idCategorias;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }


    
}