<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    
</head>
<body>
    

    <form action="controller/User/Form_User.php" method="POST">
        <p>Complete los Datos para ingresar</p>
        <input type="text" name="user" placeholder="Usuario">
        <input type="password" name="pass" placeholder="Clave">
        <input type="submit" value="Enviar">
    </form>

    
</body>
</html>