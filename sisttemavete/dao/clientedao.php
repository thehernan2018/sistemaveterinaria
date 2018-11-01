<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of clientedao
 *
 * @author HERNAN
 */
require_once ($_SERVER['DOCUMENT_ROOT']."/sisveterinaria/config/DataSource.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/sisveterinaria/dao/PHPInterface.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/sisveterinaria/model/cliente.php");
class clientedao implements PHPInterface {
    public function actualizar($objeto) {
        
    }

    public function eliminar($id) {
        
    }

    public function insertar($cliente) {
         $data_source = new DataSource();
        $filas=0;
//        $cliente = new cliente();
//        $cliente = $objeto;
        $filas=$data_source->ejecutarActualizacion("call sp_insertarcliente(?,?,?,?,?,?,?,?);",
                array($cliente->getNombre(),$cliente->getApellidos(),$cliente->getDireccion(),
                    $cliente->getTelf1(),$cliente->getTelf2(),
                $cliente->getEmail(),$cliente->getFcreacion(),$cliente->getPaginaweb()));
        return $filas;
        
    }

    public function select() {
        $data_source = new DataSource();
//        echo ("select * from sp_busquedasensitivacliente('NOMBRE','$cadena');");
        $data_tabla = $data_source->ejecutarconsulta("select * from cliente;");
        $clientes=  array();
        $cliente=null;
        foreach ($data_tabla as $clave => $valor){
           $cliente= new cliente();
           $cliente->setId($data_tabla[$clave]["id_cliente"]);
           $cliente->setNombre($data_tabla[$clave]["nombre"]);
           $cliente->setApellidos($data_tabla[$clave]["apellidos"]);
           $cliente->setDireccion($data_tabla[$clave]["direccion"]);
           $cliente->setTelf1($data_tabla[$clave]["telf1"]);
           $cliente->setTelf2($data_tabla[$clave]["telf2"]);
           $cliente->setEmail($data_tabla[$clave]["email"]);
           $cliente->setFcreacion($data_tabla[$clave]["f_creacion"]);
           $cliente->setPaginaweb($data_tabla[$clave]["paginaweb"]);
           
           
           
           array_push($clientes, $cliente);
            
        }
        return $clientes;
        
    }

    public function selectid($id) {
        
    }

}{
    //put your code here
}
