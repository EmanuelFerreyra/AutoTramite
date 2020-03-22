<?php
$userName = $_GET['nombre'];
$userPass = $_GET['clave'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    
    <header>
        <h1><?php print $userName;?></h1>
    </header>
    
    <div>
        <h3><?php print $userPass; ?></h3>
    </div>
</body>
</html>