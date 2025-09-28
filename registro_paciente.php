<?php
// Formulario para registrar pacientes
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Pacientes - Clínica El Bienestar</title>
</head>
<body>
    <h2>Formulario de Registro de Pacientes</h2>
    <!-- Los datos se enviarán a datos_pacientes.php usando POST -->
    <form action="datos_pacientes.php" method="POST">
        Nombre: <input type="text" name="nombre" required><br><br>
        Apellido: <input type="text" name="apellido" required><br><br>
        Identificación: <input type="text" name="identificacion" required><br><br>
        Sexo:
        <select name="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select><br><br>
        Dirección: <input type="text" name="direccion" required><br><br>
        Teléfono: <input type="text" name="telefono" required><br><br>
        Correo: <input type="email" name="correo" required><br><br>
        Motivo de la consulta: <textarea name="motivo" required></textarea><br><br>

        <button type="submit">Registrar</button>
    </form>
    <br>
    <!-- Enlace al login administrativo -->
    <a href="login.php">Ir al acceso administrativo</a>
</body>
</html>