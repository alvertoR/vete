<?php
    session_start();

    if(!isset($_SESSION['rol'])){
        header('location: ../login.php');
    }else{

        if($_SESSION['rol'] != 1){
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
    <title>Administrador</title>
</head>
<body>
    <h1>Admin <?php echo $nombre; ?></h1>
    <a href="../logout.php">Cerrar sesion</a>
</body>
</html>