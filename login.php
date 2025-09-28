<?php
// Formulario de acceso administrativo
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Acceso Administrativo - Clínica El Bienestar</title>
</head>
<body>
    <h2>Ingreso de Usuario Administrativo</h2>
    <!-- Se envía a verificar_login.php usando POST -->
    <form action="verificar_login.php" method="POST">
        Usuario:
        <!-- Máximo 10 caracteres y visualización en mayúsculas -->
        <input type="text" name="usuario" maxlength="10" style="text-transform: uppercase;" required><br><br>
        
        Clave:
        <!-- Mínimo 8 caracteres y visualización en minúsculas -->
        <input type="password" name="clave" minlength="8" style="text-transform: lowercase;" required><br><br>
        
        <button type="submit">Ingresar</button>
    </form>
    <br>
    <a href="registro_paciente.php">Volver al registro de pacientes</a>
</body>
</html>