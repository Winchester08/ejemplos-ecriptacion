<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
    font-size: 18px;
    font-family: Arial, Helvetica, sans-serif;
    color: steelblue
    }

.interno{
    padding: 20px;
    margin: 10px;
    background-color: #f4f4f4;
    
}
</style>
<body>
    <h2>Ejemplo 2 PHP </h2>
    <hr>
    <p class="ejemplos">
        <div class="interno">
<?php
print "Ejemplo #2 de Encriptacion con PHP utilizando sha256";
$datos = "Seguridad Informática";
$codigo = hash('sha256', $datos);

print "Los datos ingresados fueron.. <b>".$datos."</b><br>";
print "El nuevo código es: <b>".$codigo."</b><br>";
?>
<hr>
<h2>Recibidiendo los Datos</h2>
<?php
$nombre = $_POST['nombre'];
$contrasena = $_POST['clave'];
//encriptando contraseña
$esconde = hash('crc32', $contrasena);
print("Estos datos vienen sin encriptar ". $nombre. " y ". $contrasena. "<br>");
print "Los datos enviados fueron: ". $nombre. " y ". $esconde;
?>
</div>
</p>

Utilizando Password Hash
<hr>
<?php
$nuevo_pass=password_hash($contrasena, PASSWORD_BCRYPT);
// verificamos la contraseña que en este caso sera 123456
print "Contraseña. ".$contrasena."<br>";
print "Nueva contraseña y verificacion. ".$nuevo_pass."<br>";
if (password_verify($contrasena, $nuevo_pass)){
    print("Contraseña válida, ingresando al sistema");
}
else{
    print("Contraseña no válida");
}
?>
</body>
</html>
