<html>
<head>
</head>
<?php
include_once("comedoresControlador.php");

$DemoCollectorObj = new ComedorControlador();
?>
<body>
<div id="main">
<table>
<tr><td><a href="formularioDemoInsert.php">Nuevo</a></td></tr>
<?php
foreach ($DemoCollectorObj->leerComedores() as $c){
  echo "<tr>";  
  echo "<td>".$c->getIdComedor() ."</td>";
  echo "<td>".$c->getDescripcion."</td>";
  echo "<td><a href='formularioDemoEditar.php?id=".$c->getIdComedor()."'>editar</a></td>";
  echo "<td><a href='eliminar.php?id=".$c->getIdComedor()."'>eliminar</a></td>"; 
  echo "</tr>"; 
}
?>
</table>
</div>
</body>
</html>
