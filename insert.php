<html>
<head>
</head>

<body>
<div id="main">
<?php
$valor=$_POST["descrpcion"];
//$valor="manuel";
echo 'Hola ' . htmlspecialchars($valor) . '!';

include_once("comedoresControlador.php");

$DemoCollectorObj = new ComedorControlador();
$DemoCollectorObj->createDemo($valor);

echo "valor agregado </br>";
?>
<div><a href="index.php">Volver al Inicio</a></div>
</div>
</body>
</html>
