<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of unidadmedida
 *
 * @author HERNAN
 */
class unidadmedida {
    //put your code here
    private $id;
    private $descripcion;
    private $abreviatura;
    
    function __construct() {
        
    }
    function getId() {
        return $this->id;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getAbreviatura() {
        return $this->abreviatura;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setAbreviatura($abreviatura) {
        $this->abreviatura = $abreviatura;
    }



}
