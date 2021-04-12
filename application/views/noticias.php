<!DOCTYPE html>  
<html>  
<head>  
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Noticias</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/theme.default.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.tablesorter.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/filtro.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/script.js"></script>
</head>  
<body>  
    <section class="content">
        <form id="agregarURL" method="post" action="<?php echo base_url(); ?>index.php/noticias/agregarFeed">
            <input id="urlInput" name="url" class="form-control" type="text" required="required" placeholder="www.url_del_feed.com">
            <input id="urlBtn" class="btn btn-success btn-sm" type="submit" value="Agregar Feed">  
        </form><br>
        <form id="listaNoticias" method="post" action="<?php echo base_url(); ?>index.php/noticias/verNoticia">
            <img id="banner" src="<?php echo base_url(); ?>assets/img/banner.jpg"><br>    
            <input class="form-control" type="text" id="filtro" placeholder="Filtrar...">
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
                    if($noticias){
                        if($noticias->num_rows() > 0){
                            foreach ($noticias->result() as $noticia){
                    ?>
                        <tr>
                            <td name="fecha"><?php echo $noticia->fecha;?></td>
                            <td name="titulo"><?php echo $noticia->titulo;?></td>
                            <!-- <td name="descripcion"><?php echo $noticia->descripcion;?></td> -->
                            <td name="url"><?php echo $noticia->url;?></td>
                            <td name="categorias"><?php echo $noticia->categorias;?></td>
                            <td><input id="<?php echo $noticia->id;?>" class="btn btn-success btn-sm" type="button" value="Leer Más">
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
        <form id="actualizar" method="get" action="<?php echo base_url(); ?>index.php/noticias/actualizar">
            <input class="btn btn-primary btn-sm" type="submit" value="Actualizar Noticias">
        </form>
    </section> 
</body>  
</html>