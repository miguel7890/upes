<?php
    include 'fn/verifySession.php';
    $title = "Dashboard - UPES";

    include 'includes/head.php';
    include 'includes/navBar.php';
?>
    
    <section class="content">
        <div class="container-fluid">
            <div class="row center-xs">
                <div class="col-xs-12 col-md-6">
                    <form action="">
                        <div class="row middle-xs">
                            <div class="col-xs-9 col-sm-10">
                                <input type="search" class="input_primary_large" name="search" id="search" placeholder="Buscar...">
                            </div>
                            <div class="col-xs-3 col-sm-2">
                                <button class=" btn_icon_primary_large"><i class="material-icons">search</i></button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <h3 class="titulo">CURSOS</h3>
                </div>
            </div>

            <div class="row middle-xs">
                <?php $title_course = "Introducción al desarrollo web 2019"; ?>                
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="box_default">
                        <div class="row middle-xs" id="leave_mouse" data-id="1" data-type="c">
                            <div class="col-xs-8">
                                <a href="course.php"><span class="color_tertiary">IDW00019</span></a>
                            </div>
                            <div class="col-xs-4 end-xs">
                                <button id="btn_more" data-id="1" data-type="a"><i class="material-icons">keyboard_arrow_down</i></button>
                            </div>
                            <div class="more_btn_hidden" id="more_options_<?php echo '1'; ?>">
                                <button class="color_white fill_all">Estadísticas</button>
                            </div>
                        </div>
                        <a href="course.php?idc=IDW00019"><h3 class="margin_none" title="<?php echo $title_course; ?>"><?php
                            $len = strlen($title_course);
                            if($len>32){echo substr($title_course,0,32)."...";}else{echo $title_course;};
                        ?></h3></a>
                        <a href="mailto:example@gmail.com"><p class="margin_none color_subtitle">Oliver Rivas Menjívar</p></a>
                        <p><span>0 </span> Tareas pendientes</p>
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-xs-offset-10  col-sm-offset-10">
                                <button class="btn_icon_danger"><i class="material-icons">cancel</i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <h1 class="titulo">LABORATORIOS</h1>
                </div>
            </div>

            <div class="row middle-xs">
                <?php $title_course = "Introducción al desarrollo web 2019"; ?>                
                <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="box_default">
                        <div class="row middle-xs" id="leave_mouse" data-id="2" data-type="c">
                            <div class="col-xs-8">
                                <a href="course.php"><span class="color_tertiary">IDW00019</span></a>
                            </div>
                            <div class="col-xs-4 end-xs">
                                <button id="btn_more" data-id="2" data-type="a"><i class="material-icons">keyboard_arrow_down</i></button>
                            </div>
                            <div class="more_btn_hidden" id="more_options_<?php echo '2'; ?>">
                                <button class="color_white fill_all">Estadísticas</button>
                                <button class="color_white fill_all">Estadísticas</button>
                                <button class="color_white fill_all">Estadísticas</button>
                            </div>
                        </div>
                        <a href="course.php?idc=IDW00019"><h3 class="margin_none" title="<?php echo $title_course; ?>"><?php
                            $len = strlen($title_course);
                            if($len>32){echo substr($title_course,0,32)."...";}else{echo $title_course;};
                        ?></h3></a>
                        <a href="mailto:example@gmail.com"><p class="margin_none color_subtitle">Oliver Rivas Menjívar</p></a>
                        <p><span>0 </span> Tareas pendientes</p>
                        <div class="row">
                            <div class="col-xs-2 col-sm-2 col-md-2 col-xs-offset-10  col-sm-offset-10">
                                <button class="btn_icon_danger"><i class="material-icons">cancel</i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <hr>

            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <h3 class="titulo">AGENDA</h3>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-4">
                            <div class="box_default">
                                <p class="margin_none color_subtitle">2019-10-31 10:00 PM</p>
                                <p class="margin_none color_tertiary">IDW000019</p>
                                <p>Primer examen parcial</p>
                                <div class="row">
                                    <div class="col-xs-2 col-sm-3 col-md-3 col-xs-offset-10  col-sm-offset-9">
                                        <button class="btn_icon_primary"><i class="material-icons">done</i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6">
                    <h3 class="titulo">ANUNCIOS</h3>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="box_default">
                                <p class="margin_none color_subtitle">CEL100 - 2019-10-31 10:00 PM</p>
                                <h3 class="margin_none"><b>Primer examen Pre-Parcial</b></h3>
                                <p class="margin_none">Estimad@s estudiantes, para el desarrollo de este Pre Parcial Ud dispone de 1/2 hora.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php
    include 'includes/footer.php';
    include 'includes/end.php';
?>