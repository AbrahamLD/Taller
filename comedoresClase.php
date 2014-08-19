<?php

class Comedor
{
    private $idComedor;
    private $descripcion;
    
     function __construct($idComedor,$descripcion) {
       $this->idComedor = $idComedor;
       $this->descripcion = $descripcion;
     }
    
     function setIdComedor($idComedor){
       $this->idComedor = $idComedor;
     } 
     function getIdComedor(){
       return $this->idComedor;
     } 
      function setDescripcion($descripcion){
       $this->descripcion = $descripcion;
     } 
     function getDescripcion(){
       return $this->descripcion;
     } 
    
}


?>
