<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of perfil
 *
 * @author HERNAN
 */
class perfil {
    //put your code here
    
    private $id;
    private $nombre;
    private $direccion;
    private $ciudad;
    private $codpostal;
    private $estado;
    private $telefono;
    private $telefono2;
    private $ruc;
    private $email;
    private $impuesto;
    private $moneda;
    private $logo;
    private $paginaweb;
    
    function __construct() {
        
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getCiudad() {
        return $this->ciudad;
    }

    function getCodpostal() {
        return $this->codpostal;
    }

    function getEstado() {
        return $this->estado;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getTelefono2() {
        return $this->telefono2;
    }

    function getRuc() {
        return $this->ruc;
    }

    function getEmail() {
        return $this->email;
    }

    function getImpuesto() {
        return $this->impuesto;
    }

    function getMoneda() {
        return $this->moneda;
    }

    function getLogo() {
        return $this->logo;
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

    function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    function setCiudad($ciudad) {
        $this->ciudad = $ciudad;
    }

    function setCodpostal($codpostal) {
        $this->codpostal = $codpostal;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setTelefono($telefono) {
        $this->telefono = $telefono;
    }

    function setTelefono2($telefono2) {
        $this->telefono2 = $telefono2;
    }

    function setRuc($ruc) {
        $this->ruc = $ruc;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setImpuesto($impuesto) {
        $this->impuesto = $impuesto;
    }

    function setMoneda($moneda) {
        $this->moneda = $moneda;
    }

    function setLogo($logo) {
        $this->logo = $logo;
    }

    function setPaginaweb($paginaweb) {
        $this->paginaweb = $paginaweb;
    }



    
            
    
}
