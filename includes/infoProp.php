<?php
    include_once 'user.php';

    $user = new User();

    if(isset($_POST['cc'])){
        $cc = $_POST['cc'];

        $valor = $user->getProp($cc);

        foreach($valor as $prop){
            echo "<p>".$prop['cc']."</p>";
        }

    }


?>