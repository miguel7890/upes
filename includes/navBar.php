<?php
    if(!empty($_POST['rolUser'])){
        $rol_change = $_POST['rolUser'];
        $_SESSION['preview'] = $rol_change;

        $url = $_SERVER['REQUEST_URI'];

        switch ($rol_change) {
            case 1:
                if($url != "admin.php"){
                    header('location:admin.php');
                }                
                break;
            default:
                if($url != "admin.php"){
                    header('location:dashboard.php');
                }
                break;
        }
    }

    $preview = $_SESSION['preview'];

    switch ($preview) {
        case 1:
            $msg_rol = "Administrador";
            break;
        case 2:
            $msg_rol = "Coordinador";
            break;
        case 3:
            $msg_rol = "Docente";
            break;
        case 4:
            $msg_rol = "Estudiante";
            break;
    }
?>
<section class="navBar">
    <div class="container-fluid">
        <div class="row middle-xs">
            <div class="col-xs-5 col-sm-4 col-md-6">
                <a href="http://www.upes.edu.sv/" target="blank_"><div class="inline_block">
                    <img class="logo_img hidden-xs" src="img/upes.png" alt="logo">
                    <h2 class="logo_text hidden-xs hidden-sm"><span style="float:left;">UPES - </span></h2>
                    <h4 class="logo_text hidden-sm hidden-md"><span style="float:left;">UPES - </span></h4>
                    <span class="color_white hora_nav" id="hour"></span>
                </div></a>
            </div>
            <div class="col-xs-7 col-sm-8 col-md-6">
                <div class="row center-xs end-sm middle-xs">
                <?php
                    if($rol == 1):
                ?>
                    <div class="col-xs-2 col-sm-1 col-md-1 center-xs">
                        <form action="<?php $_SERVER['REQUEST_URI']; ?>" method="POST" onchange="submit()">
                            <select name="rolUser" id="rolUser">
                                <option value="<?php echo $_SESSION['preview']; ?>"><?php echo $_SESSION['preview']; ?></option>
                                <option value="">---</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                            </select>
                        </form>
                    </div>
                <?php
                    endif;
                ?>
                    <div class="col-xs-2 col-sm-1 col-md-1 center-xs">
                        <a href="<?php if($rol==1){echo 'admin.php';}else{echo 'dashboard.php';} ?>"><button><i class="material-icons color_white">dashboard</i></button></a>
                    </div>
                    <div class="col-xs-2 col-sm-1 col-md-1 center-xs">
                        <a href="stadistics.php"><button><i class="material-icons color_white">bar_chart</i></button></a>
                    </div>
                    <div class="col-xs-2 col-sm-1 col-md-1 center-xs hor_separator">
                        <button><i class="material-icons color_white">chat</i></button>
                    </div>
                    <div class="hidden-xs hidden-sm col-md-2 center-xs">
                        <a href="profile.php"><p class="margin_none color_white"><?php echo $user_nombre; ?></p></a>
                    </div>
                    <div class="col-xs-3 col-sm-2 col-md-1 center-xs">
                        <a href="fn/out.php"><div class="img_profile">
                            <img src="<?php echo $user_foto; ?>">
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>