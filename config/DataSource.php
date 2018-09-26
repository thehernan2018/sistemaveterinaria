<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  

class DataSource 
{

    private $conexion;
    private $host = "mysql:host=localhost;dbname=bdveterinariaii";
    private $username = 'root';
    private $password = '';
   

    
    function __construct() {

        try {
            

        $this->conexion = new PDO($this->host, $this->username, $this->password);
        $this->conexion->setAttribute(PDO::ATTR_PERSISTENT, TRUE);
        $this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $exc) {
            echo 'Fallo la conexion'.$exc->getMessage();
        }
            
    }
    function ejecutarconsulta($sql = "",$values = array())
    {
        if($sql!=""){
            $consulta = $this->conexion->prepare($sql);
            $consulta->execute($values);
            $tabla_datos = $consulta->fetchAll(PDO::FETCH_ASSOC);
            return $tabla_datos;
            
        }else {
            return 0;           
        }        
    }
    
    function ejecutarActualizacion($sql="",$values=array()){
        if($sql!=""){
            $consulta=  $this->conexion->prepare($sql);
            $consulta->execute($values);
            $numero_tabla_afectadas=$consulta->rowCount();
            return $numero_tabla_afectadas;
            
            
        }else {
            
            return 0;
        }
        
        
        
    }

    
    
    
    
}

