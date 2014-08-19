<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>formulario Demo</title>
</head>
<body>

<?php
//obtener el valor de ID que viene del metodo GET a traves de HTTP
$id=$_GET["id"];
include_once("comedoresControlador.php");
include_once("comedoresClase.php");
$DemoCollectorObj = new ComedorControlador();
$ObjDemo = $DemoCollectorObj->showDemo($id);
?>
<h2>Editar Objeto Demo </h2>
<form action="editar.php" method="post" >
<p>
Id: <input type="text" name="idComedor" value="<?php echo $ObjDemo->getIdComedor(); ?>" readonly />
</p>

<p>
Nombre: <input type="text" name="descripcion"  value="<?php echo $ObjDemo->getDescripcion(); ?>" autofocus required />
</p>
<a href="index.php">Cancelar</a>
<input type="submit" value="Guardar" />

</form>
