<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of privilegio
 *
 * @author HERNAN
 */
class privilegio {
    //put your code here
    private $id;
    private $descripcion;
    private $cita;
    private $cliente;
    private $documento;
    private $historial;
    private $mascota;
    private $producto;
    private $usuario;
    
    function __construct() {
        
    }
    function getId() {
        return $this->id;
    }

    function getDescripcion() {
        return $this->descripcion;
    }

    function getCita() {
        return $this->cita;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getDocumento() {
        return $this->documento;
    }

    function getHistorial() {
        return $this->historial;
    }

    function getMascota() {
        return $this->mascota;
    }

    function getProducto() {
        return $this->producto;
    }

    function getUsuario() {
        return $this->usuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    function setCita($cita) {
        $this->cita = $cita;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setDocumento($documento) {
        $this->documento = $documento;
    }

    function setHistorial($historial) {
        $this->historial = $historial;
    }

    function setMascota($mascota) {
        $this->mascota = $mascota;
    }

    function setProducto($producto) {
        $this->producto = $producto;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }



}
