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
class Consumidor extends Model {

    protected static $table = "Consumidor";
    
    private $idUsuario;
    private $nombre;
    private $direccion;
    private $telefono;
    private $email;
    
    private $has_one = array(
        'Usuario' => array(
            'class' => 'Usuario',
            'join_as' => 'idUsuario',
            'join_with' => 'idUsuario',
            'join_table' => 'Consumidor'
        ),
        'Carrito' => array(
            'class' => 'Carrito',
            'join_as' => 'idUsuario',
            'join_with' => 'idUsuario',
            'join_table' => 'Carrito'
        )
    );
    
    private $has_many = array(
        'Orden' => array(
            'class' => 'Orden',
            'my_key' => 'idUsuario',
            'other_key' => 'idOrden',
            'join_other_as' => 'idUsuario',
            'join_self_as' => 'idUsuario',
            'join_table' => 'Orden'
        )
    );
     public function getMyVars() {
        return get_object_vars($this);
    }
    function __construct($idUsuario, $nombre, $direccion, $telefono, $email) {
        $this->idUsuario = $idUsuario;
        $this->nombre = $nombre;
        $this->direccion = $direccion;
        $this->telefono = $telefono;
        $this->email = $email;
    }

    
    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getEmail() {
        return $this->email;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function getHas_one() {
        return $this->has_one;
    }

    function setHas_one($has_one) {
        $this->has_one = $has_one;
    }
    
    
    function getHas_many() {
        return $this->has_many;
    }

    function setHas_many($has_many) {
        $this->has_many = $has_many;
    }



}

