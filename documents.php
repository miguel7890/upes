<?php 
    $title = "Documentos - UPES";
    include 'includes/head.php';
    include 'includes/navBar.php';
?>

    <section class="content">
        <div class="container-fluid">
            <div class="row" style="margin:20px 0px;">
                <div class="col-xs-12">
                    <p class="margin_none color_secondary">IDW0000019</p>
                    <h1 class="margin_none">Introducción al desarrollo Web 2019</h1>
                    <p class="margin_none color_subtitle">Oliver Rivas Menjívar</p>
                </div>
            </div>

            <hr>

            <h2 class="titulo">DOCUMENTOS</h2>
            <div class="row">
<?php
            $icon = "folder.png";
?>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="box_default">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="img/<?php echo $icon; ?>" width="30px">
                                </div>
                                <div class="col-xs-10">
                                    <h3 class="margin_none" title="<?php echo "default.png"; ?>" style="max-height: 35px;overflow: hidden;">
                                        <?php 
                                            $t = "UNIDAD I";
                                            $txt = strlen($t);

                                            if ($txt >= 15) {
                                                echo substr($t, 0,16)."..."; 
                                            } else {
                                                echo $t; 
                                            };
                                        ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
            <?php

                $ic = "jpeg";

                $icon = "default.png";

                if ( $ic === "jpeg" || $ic === "jpg" ) {
                    $icon = "jpeg.png";
                }
                if( $ic === "png" ){
                    $icon = "png.png";
                }
                if ( $ic === "rar" ) {
                    $icon = "rar.png";
                }
                if ( $ic === "zip" ) {
                    $icon = "zip.png";
                }
                if ( $ic === "mp3" ) {
                    $icon = "mp3.png";
                }
                if ( $ic === "docx" || $ic === "doc" ) {
                    $icon = "doc.png";
                }
                if ( $ic === "xlsx" ) {
                    $icon = "excel.png";
                }
                if ( $ic === "pdf" ) {
                    $icon = "pdf.png";
                }

            ?>                
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="box_default">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="img/<?php echo $icon; ?>" width="30px">
                                </div>
                                <div class="col-xs-8">
                                    <h3 class="margin_none" title="<?php echo "default.png"; ?>" style="max-height: 35px;overflow: hidden;">
                                        <?php 
                                            $t = "Prueba de nombre de archivo.jpg";
                                            $txt = strlen($t);

                                            if ($txt >= 15) {
                                                echo substr($t, 0,16)."..."; 
                                            } else {
                                                echo $t; 
                                            };
                                        ?>
                                    </h3>
                                    <p class="margin_none">2.3 MB</p>
                                    <p class="margin_none">2019-10-31 10:00:00 AM</p>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-buttons">
                                        <a href="files/<?php echo $dir.'/'.$icon; ?>" download><button class="btn_icon_primary"><i class="material-icons">cloud_download</i></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="box_default">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="img/<?php echo $icon; ?>" width="30px">
                                </div>
                                <div class="col-xs-8">
                                    <h3 class="margin_none" title="<?php echo "default.png"; ?>" style="max-height: 35px;overflow: hidden;">
                                        <?php 
                                            $t = "Prueba de nombre de archivo.jpg";
                                            $txt = strlen($t);

                                            if ($txt >= 15) {
                                                echo substr($t, 0,16)."..."; 
                                            } else {
                                                echo $t; 
                                            };
                                        ?>
                                    </h3>
                                    <p class="margin_none">2.3 MB</p>
                                    <p class="margin_none">2019-10-31 10:00:00 AM</p>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-buttons">
                                        <a href="files/<?php echo $dir.'/'.$icon; ?>" download><button class="btn_icon_primary"><i class="material-icons">cloud_download</i></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="box_default">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="img/<?php echo $icon; ?>" width="30px">
                                </div>
                                <div class="col-xs-8">
                                    <h3 class="margin_none" title="<?php echo "default.png"; ?>" style="max-height: 35px;overflow: hidden;">
                                        <?php 
                                            $t = "Prueba de nombre de archivo.jpg";
                                            $txt = strlen($t);

                                            if ($txt >= 15) {
                                                echo substr($t, 0,16)."..."; 
                                            } else {
                                                echo $t; 
                                            };
                                        ?>
                                    </h3>
                                    <p class="margin_none">2.3 MB</p>
                                    <p class="margin_none">2019-10-31 10:00:00 AM</p>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-buttons">
                                        <a href="files/<?php echo $dir.'/'.$icon; ?>" download><button class="btn_icon_primary"><i class="material-icons">cloud_download</i></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="box_default">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="img/<?php echo $icon; ?>" width="30px">
                                </div>
                                <div class="col-xs-8">
                                    <h3 class="margin_none" title="<?php echo "default.png"; ?>" style="max-height: 35px;overflow: hidden;">
                                        <?php 
                                            $t = "Prueba de nombre de archivo.jpg";
                                            $txt = strlen($t);

                                            if ($txt >= 15) {
                                                echo substr($t, 0,16)."..."; 
                                            } else {
                                                echo $t; 
                                            };
                                        ?>
                                    </h3>
                                    <p class="margin_none">2.3 MB</p>
                                    <p class="margin_none">2019-10-31 10:00:00 AM</p>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-buttons">
                                        <a href="files/<?php echo $dir.'/'.$icon; ?>" download><button class="btn_icon_primary"><i class="material-icons">cloud_download</i></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-3">
                    <div class="box_default">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-2">
                                    <img src="img/<?php echo $icon; ?>" width="30px">
                                </div>
                                <div class="col-xs-8">
                                    <h3 class="margin_none" title="<?php echo "default.png"; ?>" style="max-height: 35px;overflow: hidden;">
                                        <?php 
                                            $t = "Prueba de nombre de archivo.jpg";
                                            $txt = strlen($t);

                                            if ($txt >= 15) {
                                                echo substr($t, 0,16)."..."; 
                                            } else {
                                                echo $t; 
                                            };
                                        ?>
                                    </h3>
                                    <p class="margin_none">2.3 MB</p>
                                    <p class="margin_none">2019-10-31 10:00:00 AM</p>
                                </div>
                                <div class="col-xs-2">
                                    <div class="box-buttons">
                                        <a href="files/<?php echo $dir.'/'.$icon; ?>" download><button class="btn_icon_primary"><i class="material-icons">cloud_download</i></button></a>
                                    </div>
                                </div>
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