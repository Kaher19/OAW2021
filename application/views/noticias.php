<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Noticias</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/filtro.js"></script>
</head>

<body>
    <section class="content container-fluid">
        <img class="row" id="banner" src="<?php echo base_url(); ?>assets/img/banner.jpg"><br>
        <div class="row">
            <div class="col-md-2">
                <form id="actualizar" method="get" action="<?php echo base_url(); ?>index.php/noticias/actualizar">
                    <button class="btn btn-primary btn-sm" type="submit">
                        <a>Actualizar Noticias</a>
                        <img id="iconoActualizar" src="<?php echo base_url(); ?>assets/img/actualizar.svg" alt="">
                    </button>
                </form><br>

                <div id="menuDate" class="list-group mb-2">
                    <button id="anios" type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse-anios" aria-expanded="false" aria-controls="collapse-anios">
                        <a>Elegir Fecha</a>
                        <img class="dropdown-icon" src="<?php echo base_url(); ?>assets/img/dropdown.svg" alt="">
                    </button>
                    <div id="collapse-anios" class="collapse" aria-labelledby="anio" data-parent="#menuDate">
                        <div id="menuAnio" class="list-group">
                            <?php
                            for($i=2021; $i>=2019; $i--){
                            ?>
                                <button id="anio-<?php echo $i;?>" type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse-<?php echo $i; ?>" aria-expanded="false" aria-controls="collapse-<?php echo $i; ?>">
                                    <a class="anioBtn"><?php echo $i;?></a>
                                    <img class="dropdown-icon" src="<?php echo base_url(); ?>assets/img/dropdown.svg" alt="">
                                </button>
                                <div id="collapse-<?php echo $i;?>" class="collapse" aria-labelledby="anio-<?php echo $i;?>" data-parent="#menuAnio">
                                    <div id="menuMes-<?php echo $i;?>" class="list-group">
                                        <?php
                                        for($j=1; $j<=12; $j++){
                                            $j<10? $mes="0$j" : $mes = "$j";
                                        ?>
                                            <button id="mes-<?php echo "$i-$j";?> type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target='#collapse-<?php echo "$i-$j"?>' aria-expanded="false" aria-controls='collapse-<?php echo "$i-$j"?>'>
                                                <a class="mesBtn"><?php echo $mes;?></a>
                                                <img class="dropdown-icon" src="<?php echo base_url(); ?>assets/img/dropdown.svg" alt="">
                                            </button>
                                            <div id='collapse-<?php echo "$i-$j"?>' class="collapse" aria-labelledby='mes-<?php echo "$i-$j"?>' data-parent='#menuMes-<?php echo $i;?>'>
                                                <div id="menuDia" class="list-group">
                                                    <?php
                                                    for($k=1; $k<=31; $k++){
                                                        $k<10? $dia="0$k" : $dia = "$k";
                                                    ?>
                                                        <button onclick='filterByDate(<?php echo $i.", ".$mes.", ".$dia;?>)' id='dia-<?php echo "$i-$j-$k";?>' type="button" class="list-group-item list-group-item-action">
                                                            <a class="diaBtn"><?php echo $dia;?></a>
                                                        </button>
                                                    <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div><br><br>
                <form id="agregarURL" class="input-group mb-3" method="post" action="<?php echo base_url(); ?>index.php/noticias/agregarFeed">
                    <input id="urlInput" name="url" class="form-control col-12" type="text" required="required" placeholder="www.url_del_feed.com" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button id="urlBtn" class="btn btn-success" type="submit" value="Agregar Feed">
                            <a>Agregar Feed</a>
                            <img id="iconoActualizar" src="<?php echo base_url(); ?>assets/img/agregarFeed.svg" alt="">
                        </button>
                    </div>
                </form>
            </div>
            <div class="col-md-10">
                <form id="listaNoticias" method="post" action="<?php echo base_url(); ?>index.php/noticias/verNoticia">
                    <table class="table table-bordered table-responsive tablesorter" id="lista">
                        <thead>
                            <tr><input class="form-control mb-3" type="text" id="filtro" placeholder="Filtrar..."></tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($noticias) {
                                if ($noticias->num_rows() > 0) {
                                    foreach ($noticias->result() as $noticia) {
                            ?>
                                        <tr>
                                            <td>
                                                <h5><?php echo $noticia->titulo; ?></h5>
                                                <p class="descripciones"><?php echo $noticia->descripcion; ?></p><br>
                                                <i class="urls"><?php echo $noticia->url; ?></i><br><br><br><br>
                                                <u class="fechas"><?php echo $noticia->fecha; ?></u>
                                                <b class="categorias"><?php echo $noticia->categorias; ?></b>
                                                <input id="<?php echo $noticia->id; ?>" class="btn btn-success btn-sm" type="hidden" value="Leer Más">
                                            </td>
                                        </tr>
                            <?php
                                    }
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                    <input type="hidden" name="id" id="id">
                </form>
            </div>
        </div>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>