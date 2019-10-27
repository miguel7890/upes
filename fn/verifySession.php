<?php

    session_start();
    if(empty($_SESSION['usuario_id'])){
        header('location:index.php');
    } else {
        include 'fn/conexion.php';
        $user_id = $_SESSION['usuario_id'];
        $sql = $conx->query("SELECT * FROM users WHERE usuario_id='$user_id'");
        $user = $sql->fetch_array();
        $n = explode(" ",$user['nombre']);
        $a = explode(" ",$user['apellido']);
        $user_nombre = $n[0]." ".$a[0];

        if($user['foto'] == ""){
            $user_foto = "img/default.jpg";
        } else {
            $user_foto = $user['foto'];
        }

        $rol = $_SESSION['rol'];
    }

?>