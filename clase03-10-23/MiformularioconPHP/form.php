<?php
include "head.php";
    $nombre= $_GET["txtnombre"]; // usamos un arreglo para almacenar Nombre completo  
    $edad= $_GET["txtedad"]; // usamos un arreglo para almacenar Edad del usuario
    $email= $_GET["txtemail"]; // usamos un arreglo para almacenar email del usuario
    $password= $_GET["txtpassword"]; // usamos un arreglo para almacenar password

    if($nombre=="Quetzalcoatl Erandi Catzin Silva" & $edad=="22" &
    $email=="quetzalcoatlcatzin97@aragon.unam.mx" & $password==5487){
        echo "<p>Mi nombre es:" . $nombre."</p> ";
        echo "<p>Mi edad es:" . $edad."</p> ";
        echo "<p>Mi correo electronico es:" . $email."</p> ";
        echo "<p>Mi contraseña es:" . $password."</p> ";
        echo "<a href='index.php'>Al incio</a>"; 
    }else {
        echo "Algun dato esta incorrecto";
        echo "<br>";
        echo '<a href="index.php">aquí</a>';
        
    }
      
include "footeer.php";
?>