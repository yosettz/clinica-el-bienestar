<?php
// Este archivo valida los datos ingresados en login.php

// Capturamos los datos del formulario
$usuario = strtoupper($_POST['usuario']); // Se fuerza a mayúsculas
$clave = strtolower($_POST['clave']);     // Se fuerza a minúsculas

// Validamos reglas de negocio
if(strlen($usuario) > 10){
    die("❌ El usuario no puede tener más de 10 caracteres.");
}
if(strlen($clave) < 8){
    die("❌ La clave debe tener al menos 8 caracteres.");
}

// Usuario y clave de ejemplo (en la vida real se guarda en BD)
$usuario_valido = "YOSETTZ";
$clave_valida = "12345678";

if($usuario === $usuario_valido && $clave === $clave_valida){
    echo "<h2>✅ Acceso concedido. Bienvenido $usuario</h2>";
    echo "<a href='registro_paciente.php'>Ir al registro de pacientes</a>";
} else {
    echo "<h2>❌ Acceso denegado. Usuario o clave incorrectos.</h2>";
    echo "<a href='login.php'>Volver a intentar</a>";
}
?>