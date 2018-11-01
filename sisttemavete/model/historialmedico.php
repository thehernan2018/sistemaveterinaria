<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of historialmedico
 *
 * @author HERNAN
 */
class historialmedico {
    //put your code here
    private $id;
    private $registro;
    private $medicamento;
    private $atentido;
    private $idmascota;
    private $nombremasc;
    
    function __construct() {
        
    }
    function getId() {
        return $this->id;
    }

    function getRegistro() {
        return $this->registro;
    }

    function getMedicamento() {
        return $this->medicamento;
    }

    function getAtentido() {
        return $this->atentido;
    }

    function getIdmascota() {
        return $this->idmascota;
    }

    function getNombremasc() {
        return $this->nombremasc;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setRegistro($registro) {
        $this->registro = $registro;
    }

    function setMedicamento($medicamento) {
        $this->medicamento = $medicamento;
    }

    function setAtentido($atentido) {
        $this->atentido = $atentido;
    }

    function setIdmascota($idmascota) {
        $this->idmascota = $idmascota;
    }

    function setNombremasc($nombremasc) {
        $this->nombremasc = $nombremasc;
    }



}
