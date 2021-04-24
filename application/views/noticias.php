<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Noticias</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
    <!-- <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link href="<?php echo base_url(); ?>assets/css/theme.default.css" rel="stylesheet"> -->
    <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.tablesorter.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/filtro.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
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

                <div id="menuAnio" class="list-group mb-3">
                    <button id="anio-2021" type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse-2021" aria-expanded="false" aria-controls="collapse-2021">2021</button>
                    <div id="collapse-2021" class="collapse" aria-labelledby="anio-2021" data-parent="#menuAnio">
                        <div id="menuMes" class="list-group">
                            <button id="mes-2021-Enero" type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse-2021-Enero" aria-expanded="false" aria-controls="collapse-2021-Enero">Enero</button>
                            <div id="collapse-2021-Enero" class="collapse" aria-labelledby="mes-2021-Enero" data-parent="#menuMes">
                                <div id="menuDia" class="list-group">
                                    <button id="dia-2021-Enero-Lunes" type="button" class="list-group-item list-group-item-action">Lunes</button>
                                    <button id="dia-2021-Enero-Martes" type="button" class="list-group-item list-group-item-action">Martes</button>
                                    <button id="dia-2021-Enero-Miercoles" type="button" class="list-group-item list-group-item-action">Miercoles</button>
                                </div>
                            </div>
                            <button id="mes-2021-Febrero" type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse-2021-Febrero" aria-expanded="false" aria-controls="collapse-2021-Febrero">Febrero</button>
                            <div id="collapse-2021-Febrero" class="collapse" aria-labelledby="mes-2021-Febrero" data-parent="#menuMes">
                                <div id="menuDia" class="list-group">
                                    <button id="dia-2021-Febrero-Lunes" type="button" class="list-group-item list-group-item-action">Lunes</button>
                                    <button id="dia-2021-Febrero-Martes" type="button" class="list-group-item list-group-item-action">Martes</button>
                                    <button id="dia-2021-Febrero-Miercoles" type="button" class="list-group-item list-group-item-action">Miercoles</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <button id="anio-2020" type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse-2020" aria-expanded="false" aria-controls="collapse-2020">2020</button>
                    <div id="collapse-2020" class="collapse" aria-labelledby="anio-2020" data-parent="#menuAnio">
                        <div id="menuMes" class="list-group">
                            <button id="mes-2020-Enero" type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse-2020-Enero" aria-expanded="false" aria-controls="collapse-2020-Enero">Enero</button>
                            <div id="collapse-2020-Enero" class="collapse" aria-labelledby="mes-2020-Enero" data-parent="#menuMes">
                                <div id="menuDia" class="list-group">
                                    <button id="dia-2020-Enero-Lunes" type="button" class="list-group-item list-group-item-action">Lunes</button>
                                    <button id="dia-2020-Enero-Martes" type="button" class="list-group-item list-group-item-action">Martes</button>
                                    <button id="dia-2020-Enero-Miercoles" type="button" class="list-group-item list-group-item-action">Miercoles</button>
                                </div>
                            </div>
                            <button id="mes-2020-Marzo" type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapse-2020-Marzo" aria-expanded="false" aria-controls="collapse-2020-Marzo">Marzo</button>
                            <div id="collapse-2020-Marzo" class="collapse" aria-labelledby="mes-2020-Marzo" data-parent="#menuMes">
                                <div id="menuDia" class="list-group">
                                    <button id="dia-2020-Marzo-Lunes" type="button" class="list-group-item list-group-item-action">Lunes</button>
                                    <button id="dia-2020-Marzo-Martes" type="button" class="list-group-item list-group-item-action">Martes</button>
                                    <button id="dia-2020-Marzo-Miercoles" type="button" class="list-group-item list-group-item-action">Miercoles</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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