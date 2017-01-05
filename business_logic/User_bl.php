<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Users_bl
 *
 * @author PabloAnibal
 */
class User_bl {

    public static function crearSesion(Usuario $usr){

        Session::set("usuario", $usr->getUsuario());
        Session::set("idUsuario", $usr->getIdUsuario());

    }

    public static function cerrarSesion(){

        Session::remove("usuario");
        Session::remove("idUsuario");

    }

    public static function login(Usuario $usr,$password){
           if($usr->getPass() == $password){
               $r["error"] = 0;
               self::crearSesion($usr);
           }else{
               $r["error"] = 1;
           }
           return $r;
    }



}
