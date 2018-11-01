<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of productodao
 *
 * @author HERNAN
 */
require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/config/DataSource.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/dao/PHPInterface.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/sistemaveterinaria/sistemaveterinaria/model/producto.php");

class productodao implements PHPInterface{
    
    public function actualizar($objeto) {
        $data_source = new DataSource();
        $fila = 0;
        
//        $producto = new producto();
//        $producto=$objeto;
        $fila = $data_source->ejecutarActualizacion("CALL sp_modiproductos(?,?,?,?,?,?);" 
                ,array($objeto->getId(),
                       $objeto->getDescripcion(),
                       $objeto->getPrecio(),
                       $objeto->getStock(),
                       $objeto->getactivo(),
                       $objeto->getObservacion()
                ));
        
      return $fila;
    }

    public function eliminar($id) {
        
    }

    public function insertar($objeto) {
        
        $data_source = new DataSource();
        $fila = 0;
        $fila = $data_source->ejecutarActualizacion("
        INSERT INTO producto (codigo,descripcion,precio,stock, activo,idusuario,observacion,id_unidad_medida) 
        VALUES (?,?,?,?,?,?,?,?);" ,array($objeto->getcodigo(),
                                          $objeto->getdescripcion(),
                                          $objeto->getprecio(),
                                          $objeto->getstock(),
                                          $objeto->getactivo(),
                                          $objeto->getidperfil(),
                                          $objeto->getobservacion(),
                                          $objeto->getidunidmed()));
        
      return $fila;
    }

    public function select() {
        $data_source = new DataSource();
        $data_tabla = $data_source->ejecutarconsulta("SELECT *,p.descripcion as pro FROM producto p
        inner join unidadmedida u on p.id_unidad_medida=u.id_unidad_medida;");
        $productos=  array();
        $producto=null;
       foreach ($data_tabla as $clave => $valor){
           $producto= new producto();
           $producto->setId($data_tabla[$clave]["id_producto"]);
           $producto->setcodigo($data_tabla[$clave]["codigo"]);
           $producto->setdescripcion($data_tabla[$clave]["pro"]);
           $producto->setPrecio($data_tabla[$clave]["precio"]);
           $producto->setStock($data_tabla[$clave]["stock"]);
           $producto->setObservacion($data_tabla[$clave]["observacion"]);
           $producto->setIdunidmed($data_tabla[$clave]["abreviatura"]);
            array_push($productos, $producto);
       }
        return $productos;
    }
    
    
 
    

    public function selectid($id) {
        
    }

//put your code here
}
