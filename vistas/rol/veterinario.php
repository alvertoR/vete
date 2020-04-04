<?php
    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: ../login.php');
    }else{

        if($_SESSION['rol'] != 2){
            header('location: ../login.php');
        }
    }

    $nombre = $_SESSION['name'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Veterinario</title>
</head>
<body>
    <h1>Veterinario <?php echo $nombre?></h1>
    <a href="../logout.php">Cerrar sesion</a>

    <a href="" id="registrar">Registrar propietario</a>
    <a href="" id="buscar">Buscar propietario</a>

    <div id="registro">

    </div>
    <div id="busca">

    </div>
    <script src="../../js/ajax.js"></script>
</body>
</html>