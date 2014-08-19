<html>
<head>
</head>

<body>
<div id="main">
<?php
$descripcion=$_POST["descripcion"];
$idComedor=$_POST["idComedor"];

echo "Edici&oacute;n en proceso ....  </br>";

include_once("comedoresControlador.php");
$DemoCollectorObj = new ComedorControlador();
$DemoCollectorObj->actualizarComedor($idComedor,$descripcion);

echo "id :".$idComedor." actualizado a:".$descripcion." </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
