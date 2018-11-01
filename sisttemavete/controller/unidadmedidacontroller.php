<?php

require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/dao/unidadmedidadao.php");

class unimeditocontroller {
    
     private $lista;
    private $dao;
    
    function __construct(){
        $this->lista = array();
        $this->dao = new unidadmedidadao();
       
        
    }
     function listar(){
 
        $this->lista =$this->dao->select();
        return $this->lista;
    }
    function insertar($unidadmedida){       
        $fila =0;
        $fila = $this->dao->insertar($unidadmedida);
        return $fila;
    } 
    

    
}


?>