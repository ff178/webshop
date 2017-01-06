<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria_bl
 *
 * @author camilo
 */
class Producto_bl {


    public static function getCategory($id){
        $lista = Categorias::where('idCategorias',$id);

        if($lista != null){
            return array_shift($lista);
        } else{
            $u = ['error' =>1,'msj' =>'No se encontro la Categoria Lista'];
            return $u;
        }
    }



    public static function getAllCategorys(){
        $lista = Categorias::getAll();
        return $lista;
    }

    public static function getAllProducts(){
      $list = Productos::getAll();
      return $list;
    }

    public static function getProductByCategory($idCategorias){
     $product = Productos::getAll();
     $array = array();
     for($i = 0; $i<count($product); $i++){
     if(trim(strtolower($product[$i]["idCategorias"])) == trim(strtolower($idCategorias))){
         array_push($array, $product[$i]);

     }

     }
     return $array;
    }
}
