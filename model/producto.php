<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of producto
 *
 * @author HERNAN
 */
class producto {
    //put your code here
    private $id;
    private $codigo;
    private $descripcion;
    private $precio;
    private $stock;
    private $idperfil;
    private $observacion;
    private $idunidmed;
    
    function __construct() {
        
    }
    function getId() {
        return $this->id;
    }

    function getCodigo() {
        return $this->codigo;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getStock() {
        return $this->stock;
    }

    function getIdperfil() {
        return $this->idperfil;
    }

    function getObservacion() {
        return $this->observacion;
    }

    function getIdunidmed() {
        return $this->idunidmed;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setStock($stock) {
        $this->stock = $stock;
    }

    function setIdperfil($idperfil) {
        $this->idperfil = $idperfil;
    }

    function setObservacion($observacion) {
        $this->observacion = $observacion;
    }

    function setIdunidmed($idunidmed) {
        $this->idunidmed = $idunidmed;
    $objto

}
