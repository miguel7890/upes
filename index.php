<?php
    session_start();
    include 'fn/conexion.php';
    include 'fn/users.php';

    $user = new user();

    if(!empty($_SESSION)){
        header('location:dashboard.php');
    }

        $nombre=""; $apellido=""; $carnet=""; $usuario=""; $correo=""; $slack="";  $foto="";

    if(!empty($_POST)){
        if($_POST['type'] == 1){
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $carnet = $_POST['carnet'];
            $usuario = $_POST['usuario'];
            $correo = $_POST['correo'];
            $pass = $_POST['pass'];
            $rpass = $_POST['rpass'];
            $slack = $_POST['slack'];
            $foto = $_FILES['foto'];

            $user->register($nombre,$apellido,$carnet,$usuario,$correo,$pass,$rpass,$slack,$foto);
        } else {
            $usuario = $_POST['usuario'];
            $pass = $_POST['pass'];
            $user->login($usuario,$pass);
            $err = $user->getErrors();
            if( count($err) > 0 ){
                echo '<script>alert("'.$err[0].'");</script>';
            }
        }
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UPES - Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/flexboxgrid.min.css">
    <link rel="stylesheet" href="css/primary.css">
</head>
<body class="bg_login">
    
    <section class="navBar" id="nav">

        <div class="container-fluid">
            <div class="row middle-xs">
                <div class="col-xs-12 col-sm-6 col-md-8 center-xs start-sm start-md">
                    <div class="col-xs-12 col-sm-6 col-md-6 center-xs start-sm">
                        <div class="inline_block">
                            <img class="logo_img" src="img/upes.png" alt="logo">
                            <h2 class="logo_text"><span class="hidden-xs" style="float:left;">UPES </span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 center-xs end-sm">
                    <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST">
                        <div class="row middle-xs">
                            <div class="col-xs-5 col-sm-5 col-md-5 center-xs">
                                <input type="text" class="input_primary" name="usuario" placeholder="Usuario">
                            </div>
                            <div class="col-xs-5 col-sm-5 col-md-5 center-xs">
                                <input type="password" class="input_primary" name="pass" placeholder="Contraseña">
                            </div>
                            <div class="col-xs-2 col-sm-2 col-md-2 center-xs">
                                <button class="btn_icon_primary"><i class="material-icons">send</i></button>
                            </div>
                            <input type="hidden" name="type" value="0">
                        </div>  
                    </form>
                </div>
            </div>
        </div>

    </section>

    <section class="content container-fluid" id="content">

        <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-4 col-md-offset-1">
                <div class="row center-xs">
                    <div class="col-xs-12 center-xs down_separator">
                        <h1 class="big_hora margin_none" id="hour"></h1>
                    </div>
                </div>

<?php if(!empty($_GET['type'])=="register"){ ?>
                <div class="row center-xs">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h3 class="color_primary">INSCRIPCIÓN</h3>
                            <?php 
                                if(!empty($_POST)){
                                    echo '<div class="box_alert start-xs">
                                    <ul>';
                                    $err = $user->getErrors();
                                    for ($i=0; $i < count($err); $i++) { 
                                        echo '<li>'.$err[$i].'</li>';
                                    }
                                    echo '</ul>
                                    </div>';
                                }                                
                            ?>
                        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="POST"  enctype="multipart/form-data">
                            <div>
                                <input type="text" class="input_primary" name="nombre" placeholder="Nombres" value="<?php echo $nombre; ?>">
                            </div>
                            <div>
                                <input type="text" class="input_primary" name="apellido" placeholder="Apellidos" value="<?php echo $apellido; ?>">
                            </div>
                            <div>
                                <input type="text" class="input_primary" name="carnet" placeholder="Carnet" maxlength="8" value="<?php echo $carnet; ?>">
                            </div>
                            <div>
                                <input type="email" class="input_primary" name="correo" placeholder="Correo" value="<?php echo $correo; ?>">
                            </div>
                            <div>
                                <input type="text" class="input_primary" name="usuario" placeholder="Usuario" value="<?php echo $usuario; ?>">
                            </div>
                            <div>
                                <input type="password" class="input_primary" name="pass" placeholder="Contraseña">
                            </div>
                            <div>
                                <input type="password" class="input_primary" name="rpass" placeholder="Repetir contraseña">
                            </div>
                            <div>
                                <input type="text" class="input_primary" name="slack" placeholder="Cuenta Slack" value="<?php echo $slack; ?>">
                            </div>
                            <div>
                                <input type="file" class="input_primary" name="foto" placeholder="Foto">
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <a href="./" class="btn_link_secondary">Cancelar</a>
                                </div>
                                <div class="col-xs-6">
                                    <button class="btn_text_primary" type="submit">Inscribirse</button>
                                </div>
                            </div>
                            <input type="hidden" name="type" value="1">
                        </form>
                    </div>
                </div>
<?php } else { ?>
                <div class="row middle-xs">
                    <div class="col-xs-6 center-xs hor_separator">
                        <a href="?type=register"><button class="btn_text_secondary">Registrarse</button></a>
                    </div>
                    <div class="col-xs-6 center-xs">
                        <a><button class="btn_text_secondary">Recuperar contraseña</button></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <div class="box_default">
                            <h3 class="margin_none color_primary">Titulo del evento</h3>
                            <p class="justify-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Natus aperiam nam odio non ipsa qui dolores. Vero quas, eveniet numquam tenetur ad dicta est quo? Reiciendis repellat illo dolores reprehenderit.</p>
                        </div>
                    </div>  
                </div>
<?php }; ?>
            </div>
        </div>

    </section>
    <script src="lib/moment.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>