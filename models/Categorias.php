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
class Categorias extends Model {

    protected static $table = "Categorias";

    private $idCategorias;
    private $nombre;
   
    private $has_many = array(
        'Productos' => array(
            'class' => 'Productos',
            'my_key' => 'idCategorias',
            'other_key' => 'idProductos',
            'join_other_as' => 'idCategorias',
            'join_self_as' => 'idCategorias',
            'join_table' => 'Productos'
        )
    );
    
    public function getMyVars() {
        return get_object_vars($this);
    }
    
    function __construct($idCategorias, $nombre) {
        $this->idCategorias = $idCategorias;
        $this->nombre = $nombre;
    }
    
    function getIdCategorias() {
        return $this->idCategorias;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setIdCategorias($idCategorias) {
        $this->idCategorias = $idCategorias;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }



    
}

