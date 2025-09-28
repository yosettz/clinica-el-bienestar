<?php
// Este archivo procesa los datos enviados desde registro_paciente.php

// Capturamos los datos del formulario usando POST
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$identificacion = $_POST['identificacion'];
$sexo = $_POST['sexo'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$motivo = $_POST['motivo'];

// Aqui saldrian la informacion guardada en la base de datos
// pero para la tarea solo se mostraran los datos ingresados
echo "<h2>✅ Paciente Registrado Correctamente</h2>";
echo "Nombre: $nombre $apellido <br>";
echo "Identificación: $identificacion <br>";
echo "Sexo: $sexo <br>";
echo "Dirección: $direccion <br>";
echo "Teléfono: $telefono <br>";
echo "Correo: $correo <br>";
echo "Motivo: $motivo <br>";

// Link para ir al login administrativo
echo "<br><a href='login.php'>Ir al módulo administrativo</a>";
?>