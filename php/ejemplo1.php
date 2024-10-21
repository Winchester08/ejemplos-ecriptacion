<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    background-color: #cecece;

}
</style>
<body>
    <h2>Ejemplo 1 PHP </h2>
    <hr>
    <p class='ejemplos'>
        <div class='interno'>
<?php
print 'Ejemplos de Encriptacion con PHP usando hash256';
$datos = 'Ro';
$codigo = hash('sha256', $datos);

print 'Los datos ingresados fueron.. <b>'.$datos.'</b><br>';
print 'El nuevo código es: <b>'.$codigo.'</b><br>';
?>
<form action='ejemplo2.php' method='post'>
    <p>
    <label for=''>Ingresa Nombre</label>
    <input type='text' name='nombre'>
    </p>
    
    <p>
    <label for=''>Ingresa Clave de Registro</label>
    <input type='text' name='clave'>
    </p>
    <button type='submit'>Enviar Datos</button>
</form>
</div>
</p>
</body>
</html>
