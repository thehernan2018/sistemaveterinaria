<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of documento
 *
 * @author HERNAN
 */
class documento {
    //put your code here
    private $id;
    private $comprobante;
    private $tipopago;
    private $fecha;
    private $total;
    private $acuenta;
    private $idmov;
    private $porcentajeigv;
    private $idcliente;
    private $idusuario;
    function __construct() {
        
    }
    
    function getId() {
        return $this->id;
    }

    function getComprobante() {
        return $this->comprobante;
    }

    function getTipopago() {
        return $this->tipopago;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getTotal() {
        return $this->total;
    }

    function getAcuenta() {
        return $this->acuenta;
    }

    function getIdmov() {
        return $this->idmov;
    }

    function getPorcentajeigv() {
        return $this->porcentajeigv;
    }

    function getIdcliente() {
        return $this->idcliente;
    }

    function getIdusuario() {
        return $this->idusuario;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setComprobante($comprobante) {
        $this->comprobante = $comprobante;
    }

    function setTipopago($tipopago) {
        $this->tipopago = $tipopago;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setTotal($total) {
        $this->total = $total;
    }

    function setAcuenta($acuenta) {
        $this->acuenta = $acuenta;
    }

    function setIdmov($idmov) {
        $this->idmov = $idmov;
    }

    function setPorcentajeigv($porcentajeigv) {
        $this->porcentajeigv = $porcentajeigv;
    }

    function setIdcliente($idcliente) {
        $this->idcliente = $idcliente;
    }

    function setIdusuario($idusuario) {
        $this->idusuario = $idusuario;
    }



           
}
