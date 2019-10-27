<?php

    $conx = new mysqli('localhost','root','','virtuallearning');

    if(!$conx){
        echo 'No se pudo conectar con la base de datos';
    }

?>