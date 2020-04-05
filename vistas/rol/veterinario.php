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
    <script src="../../js/ajax.js"></script>
    <script src="../../js/registro.js"></script>
    <script src="../../js/busqueda.js"></script>
</head>
<body>
    <h1>Veterinario <?php echo $nombre?></h1>
    <a href="../logout.php">Cerrar sesion</a>

    <a href="" id="registrar">Registrar propietario</a>
    <a href="" id="buscar">Buscar propietario</a>

    <div id="registro">
        <from id="new" action="" method="POST">
            <input type="text" name="name" id="name" placeholder="Nombre"><br>
            <input type="text" name="cc" id="cc" placeholder="Cédula"><br>
            <input type="text" name="prof" id="prof" placeholder="Profesión"><br>
            <input type="text" name="adress" id="adress" placeholder="Dirección"><br>
            <input type="email" name="email" id="email" placeholder="Algo@ejemplo.com"><br>
            <input type="button" id="bSend" value="Send">
        </from>
    </div>
    <div id="busca">
        <form id="newBusca" action="" method="GET">
            <input type="text" name="cc1" id="cc1" placeholder="Cédula" ><br>
            <input type="button" id="bShearch" value="Shearch">
        </form>
        <div id="mostrar">

        </div>
    </div>
    
    
    
</body>
</html>