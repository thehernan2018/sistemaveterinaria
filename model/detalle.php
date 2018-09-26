<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of detalle
 *
 * @author HERNAN
 */
class detalle {
    //put your code here
    private $id;
    private $idproducto;
    private $codigoprod;
    private $descripprod;
    private $precio;
    private $cantidad;
    private $iddocumento;
    
    function __construct() {
        
    }
    function getId() {
        return $this->id;
    }

    function getIdproducto() {
        return $this->idproducto;
    }

    function getCodigoprod() {
        return $this->codigoprod;
    }

    function getDescripprod() {
        return $this->descripprod;
    }

    function getPrecio() {
        return $this->precio;
    }

    function getCantidad() {
        return $this->cantidad;
    }

    function getIddocumento() {
        return $this->iddocumento;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setIdproducto($idproducto) {
        $this->idproducto = $idproducto;
    }

    function setCodigoprod($codigoprod) {
        $this->codigoprod = $codigoprod;
    }

    function setDescripprod($descripprod) {
        $this->descripprod = $descripprod;
    }

    function setPrecio($precio) {
        $this->precio = $precio;
    }

    function setCantidad($cantidad) {
        $this->cantidad = $cantidad;
    }

    function setIddocumento($iddocumento) {
        $this->iddocumento = $iddocumento;
    }



}
