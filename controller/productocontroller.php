<?php

require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria-master/dao/productodao.php");

class productocontroller {
    
    private $lista;
    private $dao;
    
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
  
    
}


?>