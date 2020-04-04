<?php
    include_once 'user.php';

    $newProp = new User();

    if(isset($_POST['cc'])){

        $name   =  $_POST['name'];
        $prof   =  $_POST['prof'];
        $cc     =  $_POST['cc'];
        $email  =  $_POST['email'];
        $adress =  $_POST['adress'];
        $rol    = 3;

        $newProp->addProp($cc,$name,$adress,$email,$prof,$rol);
    }

?>