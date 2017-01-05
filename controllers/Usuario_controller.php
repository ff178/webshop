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

    public function checkout(){
        $this -> view -> render($this, 'checkout', 'Ultimos Pasos');
    }

    public function singUp(){
       $keys = Usuario::getKeys();
             unset($keys[0]);
             unset($keys[3]);
             unset($keys[4]);


        $_POST["idUsuario"] = null;
        $_POST["estado"] = 1;
        $_POST["tipo"] = 0;


       $this->validateKeys($keys, filter_input_array(INPUT_POST));

       $user = Usuario::instanciate($_POST);
       $r = $user ->create();

       header("Content-type: application/json;charset=utf-8");
       $g = User_bl::crearSesion($user);
       print_r($g);


    }

    public function salir(){
      User_bl::cerrarSesion();
    }

    public function singIn(){
        if(filter_input(INPUT_POST, "email") != null && filter_input(INPUT_POST, "pass") != null){
            $usr = Usuario::getBy("email", filter_input(INPUT_POST, "email"));
            $pass = Usuario::getBy("pass", filter_input(INPUT_POST, "pass"));
            if(!is_null($usr) && !is_null($pass)){
                $r = User_bl::login($usr,filter_input(INPUT_POST, "pass"));
                header("Content-type: application/json;charset=utf-8");
                json_encode($r);
            }

        }
    }

    public function verificarUsername($username,$ajax = true){
        $r = Usuario::getBy("usuario", $username);
        if($ajax){
            $r = (empty($r))? 0 : 1;
            echo $r;
        }else{
            $r = (empty($r))? 0 : $r;
            return $r;
        }
    }

    public function verificarCorreo($email,$ajax = true){
        $r = Usuario::getBy("email", $email);
        if($ajax){
            $r = (empty($r))? 0 : 1;
            echo $r;
        }else{
            $r = (empty($r))? 0 : $r;
            return $r;
        }
    }
}
