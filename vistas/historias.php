<?php

    include_once '../includes/user.php';

    session_start();


    if(isset($_SESSION['rol'])){
        switch ($_SESSION['rol']) {
            
            case 3:
                header('location: rol/resultados.php');
            break;


            default:
        }
    }

    if(isset($_POST['cedula'])){
        $cedula = $_POST['cedula'];
        $rol = 2;

        $user = new User();

        if($user->propExists($cedula)){
            $user->setUser($cedula,$rol);
            $rol    = $user->getRol();
            $nombre = $user->getName();
            
            $_SESSION['rol']  = $rol;
            $_SESSION['name'] = $nombre;

            switch ($_SESSION['rol']) {
            
                case 3:
                    header('location: rol/resultados.php');
                break;
    
    
                default:
            }
        }else{
            echo "gche pa'la mondah";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Historia</title>
</head>
<body>
    <a href="../vistas/login.php">Iniciar sesion</a>
    <a href="../vistas/historias.php">Historias</a>
    <a href="../index.php">Home</a>
    <hr>

    <form action="#" method="POST">
        <input type="text" name="cedula" placeholder="cedula"><br>
        <input type="submit" value="login">
    </form>

</body>
</html>