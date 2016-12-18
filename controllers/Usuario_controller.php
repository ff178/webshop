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

class Usuario_controller extends Controller{

    function __construct() {
        parent::__construct();
    }

    public function signIn(){
        $this -> view -> render($this, 'signup', 'signIn');
    }
    public function signUp(){
        $this -> view -> render($this, 'register', 'signUp');
    }

    public function contacto(){
        $this -> view -> render($this, 'contact', 'Contacto Figura Sana');
    }

}
