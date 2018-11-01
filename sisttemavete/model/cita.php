<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cita
 *
 * @author HERNAN
 */
class cita {
    //put your code here
    
    private $id;
    private $id_cliente;
    private $cliente;
    private $fecha;
    private $nota;
    private $asunto;
    
    function __construct() {
        
    }
    function getId() {
        return $this->id;
    }

    function getId_cliente() {
        return $this->id_cliente;
    }

    function getCliente() {
        return $this->cliente;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getNota() {
        return $this->nota;
    }

    function getAsunto() {
        return $this->asunto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setId_cliente($id_cliente) {
        $this->id_cliente = $id_cliente;
    }

    function setCliente($cliente) {
        $this->cliente = $cliente;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setNota($nota) {
        $this->nota = $nota;
    }

    function setAsunto($asunto) {
        $this->asunto = $asunto;
    }



}
