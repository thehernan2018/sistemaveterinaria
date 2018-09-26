<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of cliente
 *
 * @author HERNAN
 */
class cliente {
    //put your code here
    private $id;
    private $nombre;
    private $apellidos;
    private $direccion;
    private $telf1;
    private $telf2;
    private $email;
    private $fcreacion;
    private $paginaweb;
    
    function __construct() {
        
    }
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getApellidos() {
        return $this->apellidos;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getTelf1() {
        return $this->telf1;
    }

    function getTelf2() {
        return $this->telf2;
    }

    function getEmail() {
        return $this->email;
    }

    function getFcreacion() {
        return $this->fcreacion;
    }

    function getPaginaweb() {
        return $this->paginaweb;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setTelf1($telf1) {
        $this->telf1 = $telf1;
    }

    function setTelf2($telf2) {
        $this->telf2 = $telf2;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setFcreacion($fcreacion) {
        $this->fcreacion = $fcreacion;
    }

    function setPaginaweb($paginaweb) {
        $this->paginaweb = $paginaweb;
    }



}
