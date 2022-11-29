<?php

echo "probando 1 2 3 ";
echo"<br>";
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['mail'];
$dispositivos = $_POST['disp'];
$meses = $_POST['meses'];

echo $nombre;
echo "<br>";
echo $apellido;
echo "<br>";
echo $mail;
echo "<br>";
echo $dispositivos . " dispositivos";
echo "<br>";
echo $meses . " de subscripción";
?>