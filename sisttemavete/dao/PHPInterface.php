<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author HERNAN
 */
interface PHPInterface {
    //put your code here
    
    function  select ();
    function  selectid($id);
    function eliminar($id);
    function insertar($objeto);
    function actualizar($objeto);
}
