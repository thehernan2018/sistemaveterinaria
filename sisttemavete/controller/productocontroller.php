<?php

require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/dao/productodao.php");

class productocontroller {
    
    private $lista;
    private $dao;
//    private $producto;
    function __construct(){
        $this->lista = array();
        $this->dao = new productodao();
       
        
    }
    
    function listar(){
 
        $this->lista =$this->dao->select();
        return $this->lista;
    }
    
    function insertar($producto){       
    $fila =0;
        $fila = $this->dao->insertar($producto);
        return $fila;
    } 
    function modificarpro($producto){       
    $fila =0;
        $fila = $this->dao->actualizar($producto);
        return $fila;
    } 
}


?>