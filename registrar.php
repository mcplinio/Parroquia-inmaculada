<?php
include 'cn.php';
// Recibir los datos y alamacenarlos en variables
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$asunto = $_POST["asunto"];
$mensaje = $_POST["mensaje"];
//Consulta pra insertar
INSERT INTO `usuarios`(`id`, `nombre`, `email`, `asunto`, `mensaje`) VALUES ('[]', '[nombre]','[email]','[asunto]','[mensaje]','[value-5]')
// Ejecutar consulta

$resultado = mysqli_query($conexion, $insertar );
if (!$resultado) {
    echo 'Error al registrarse';
} else {
    echo 'Ususario Registrado exitosamente';

}

mysqli_close($conexion);


?>