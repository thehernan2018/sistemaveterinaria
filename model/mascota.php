<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mascota
 *
 * @author HERNAN
 */
class mascota {
    //put your code here
    private $id;
    private $nombre;
    private $especie;
    private $raza;
    private $sexo;
    private $pelaje;
    private $fnac;
    private $fallecido;
    private $extraviado;
    private $foto;
    private $activo;
    private $fcreacion;
    private $codigodvi;
    private $idcliente;
    
    function __construct() {
        
    }
    
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function getEspecie() {
        return $this->especie;
    }

    function getRaza() {
        return $this->raza;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getPelaje() {
        return $this->pelaje;
    }

    function getFnac() {
        return $this->fnac;
    }

    function getFallecido() {
        return $this->fallecido;
    }

    function getExtraviado() {
        return $this->extraviado;
    }

    function getFoto() {
        return $this->foto;
    }

    function getActivo() {
        return $this->activo;
    }

    function getFcreacion() {
        return $this->fcreacion;
    }

    function getCodigodvi() {
        return $this->codigodvi;
    }

    function getIdcliente() {
        return $this->idcliente;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    function setEspecie($especie) {
        $this->especie = $especie;
    }

    function setRaza($raza) {
        $this->raza = $raza;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setPelaje($pelaje) {
        $this->pelaje = $pelaje;
    }

    function setFnac($fnac) {
        $this->fnac = $fnac;
    }

    function setFallecido($fallecido) {
        $this->fallecido = $fallecido;
    }

    function setExtraviado($extraviado) {
        $this->extraviado = $extraviado;
    }

    function setFoto($foto) {
        $this->foto = $foto;
    }

    function setActivo($activo) {
        $this->activo = $activo;
    }

    function setFcreacion($fcreacion) {
        $this->fcreacion = $fcreacion;
    }

    function setCodigodvi($codigodvi) {
        $this->codigodvi = $codigodvi;
    }

    function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }



}
