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
            <div class="col-md-3">
                <form id="actualizar" method="get" action="<?php echo base_url(); ?>index.php/noticias/actualizar">
                    <input class="btn btn-primary btn-sm" type="submit" value="Actualizar Noticias">
                </form>
                <form id="agregarURL" class="input-group mb-3" method="post" action="<?php echo base_url(); ?>index.php/noticias/agregarFeed">
                    <input id="urlInput" name="url" class="form-control col-12" type="text" required="required" placeholder="www.url_del_feed.com" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                        <button id="urlBtn" class="btn btn-success" type="submit" value="Agregar Feed">Agregar Feed</button>
                    </div>
                </form>
                
                <input class="form-control mb-3" type="text" id="filtro" placeholder="Filtrar...">
                
                <div id="menu" class="list-group mb-3">
                    <button id="anioMenu" type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapseAnio" aria-expanded="false" aria-controls="collapseAnio">Año</button>
                    <div id="collapseAnio" class="collapse" aria-labelledby="anioMenu" data-parent="#menu">
                        <a href="#" class="list-group-item list-group-item-action">2021</a>
                    </div>

                    <button id="mesMenu" type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapseMes" aria-expanded="false" aria-controls="collapseMes">Mes</button>
                    <div id="collapseMes" class="collapse" aria-labelledby="mesMenu" data-parent="#menu">
                        <a href="#" class="list-group-item list-group-item-action">Enero</a>
                        <a href="#" class="list-group-item list-group-item-action">Febrero</a>
                        <a href="#" class="list-group-item list-group-item-action">Marzo</a>
                        <a href="#" class="list-group-item list-group-item-action">Abril</a>
                        <a href="#" class="list-group-item list-group-item-action">Mayo</a>
                        <a href="#" class="list-group-item list-group-item-action">Junio</a>
                        <a href="#" class="list-group-item list-group-item-action">Julio</a>
                        <a href="#" class="list-group-item list-group-item-action">Agosto</a>
                        <a href="#" class="list-group-item list-group-item-action">Septiembre</a>
                        <a href="#" class="list-group-item list-group-item-action">Octubre</a>
                        <a href="#" class="list-group-item list-group-item-action">Noviembre</a>
                        <a href="#" class="list-group-item list-group-item-action">Diciembre</a>
                    </div>

                    <button id="diaMenu" type="button" class="list-group-item list-group-item-action" data-toggle="collapse" data-target="#collapseDia" aria-expanded="false" aria-controls="collapseDia">Dia</button>
                    <div id="collapseDia" class="collapse" aria-labelledby="diaMenu" data-parent="#menu">
                        <a href="#" class="list-group-item list-group-item-action">Domingo</a>
                        <a href="#" class="list-group-item list-group-item-action">Lunes</a>
                        <a href="#" class="list-group-item list-group-item-action">Martes</a>
                        <a href="#" class="list-group-item list-group-item-action">Miércoles</a>
                        <a href="#" class="list-group-item list-group-item-action">Jueves</a>
                        <a href="#" class="list-group-item list-group-item-action">Viernes</a>
                        <a href="#" class="list-group-item list-group-item-action">Sábado</a>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <form id="listaNoticias" method="post" action="<?php echo base_url(); ?>index.php/noticias/verNoticia">
                    <table class="table table-bordered table-responsive tablesorter" id="lista">
                        <thead>
                            <tr>
                                <th>Fecha</th>
                                <th>Título</th>
                                <!-- <th>Descripción</th> -->
                                <th>URL</th>
                                <th>Categorías</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($noticias) {
                                if ($noticias->num_rows() > 0) {
                                    foreach ($noticias->result() as $noticia) {
                            ?>
                                        <tr>
                                            <td name="fecha"><?php echo $noticia->fecha; ?></td>
                                            <td name="titulo"><?php echo $noticia->titulo; ?></td>
                                            <!-- <td name="descripcion"><?php echo $noticia->descripcion; ?></td> -->
                                            <td name="url"><?php echo $noticia->url; ?></td>
                                            <td name="categorias"><?php echo $noticia->categorias; ?></td>
                                            <td><input id="<?php echo $noticia->id; ?>" class="btn btn-success btn-sm" type="button" value="Leer Más">
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