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
class Usuario extends Model {

    protected static $table = "Usuario";
    
    private $idUsuario;
    private $usuario;
    private $pass;
    private $estado;
    private $tipo;
    private $email;
    
    public function getMyVars() {
        return get_object_vars($this);
    }
    
    
    
    function __construct($idUsuario, $usuario, $pass, $estado, $tipo, $email) {
        $this->idUsuario = $idUsuario;
        $this->usuario = $usuario;
        $this->pass = $pass;
        $this->estado = $estado;
        $this->tipo = $tipo;
        $this->email = $email;
    }

    function getIdUsuario() {
        return $this->idUsuario;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function getPass() {
        return $this->pass;
    }

    function getEstado() {
        return $this->estado;
    }

    function getTipo() {
        return $this->tipo;
    }

    function getEmail() {
        return $this->email;
    }

    function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setPass($pass) {
        $this->pass = $pass;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    function setEmail($email) {
        $this->email = $email;
    }
    



   
}

