<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of unidadmedidadao
 *
 * @author HERNAN
 */
require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/config/DataSource.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/dao/PHPInterface.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/model/unidadmedida.php");

class unidadmedidadao implements PHPInterface{
    public function actualizar($objeto) {
        
    }

    public function eliminar($id) {
        
    }

    public function insertar($objeto) {
          $data_source = new DataSource();
        $fila = 0;
        $fila = $data_source->ejecutarActualizacion("
        INSERT INTO unidadmedida (descripcion,abreviatura) VALUES (?,?);
        " ,array($objeto->getDescripcion(),$objeto->getAbreviatura()));
        
      return $fila;
    }

    public function select() {
         $data_source = new DataSource();
        $data_tabla = $data_source->ejecutarconsulta("SELECT * FROM unidadmedida");
        $unidadmedidas=  array();
        $unidadmedida=null;
       foreach ($data_tabla as $clave => $valor){
           $unidadmedida= new unidadmedida();
           $unidadmedida->setId($data_tabla[$clave]["id_unidad_medida"]);
           $unidadmedida->setDescripcion($data_tabla[$clave]["descripcion"]);
           $unidadmedida->setAbreviatura($data_tabla[$clave]["abreviatura"]);
            array_push($unidadmedidas, $unidadmedida);
       }
        return $unidadmedidas;
    }

    public function selectid($id) {
        
    }
    

//put your code here
}
