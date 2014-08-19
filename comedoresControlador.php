<?php

include('databaseControlador.php');
include('comedoresClase.php');

class ComedorControlador extends DataBaseControlador 
{

	function leerComedores() {
		$rows = self::$db->getRows("SELECT * FROM comedor");        
    	$arrayComedor= array();
    
        foreach ($rows as $c){
          $comedorAuxiliar = new Comedor($c{'idComedor'},$c{'descripcion'});
          array_push($arrayComedor, $comedorAuxiliar);
        }
   		return $arrayComedor;       
	}

	function eliminarComedor($id) {    
    $deleterow = self::$db->deleteRow("DELETE FROM prueba.comedor WHERE idComedor= ?", array("{$id}"));
  }  

	function actualizarComedor($idComedor,$descripcion) {    
    $insertrow = self::$db->updateRow("UPDATE prueba.comedor SET comedor.descripcion = ?  WHERE prueda.idComedor = ? ", array( "{$descripcion}",$idComedor));
  	}  

  	function createDemo($nombre) {    
    $insertrow = self::$db->insertRow("INSERT INTO prueba.comedor (idComedor, descripcion) VALUES (?, ?)", array(null, "{$nombre}"));
  	}  

   	function showDemo($id) {
    $row = self::$db->getRows("SELECT * FROM comedor where idComedor= ? ", array("{$id}")); 
    $ObjDemo = new Comedor($row[0]{'idComedor'},$row[0]{'descripcion'});
    return $ObjDemo;
  	}






}	

?>
