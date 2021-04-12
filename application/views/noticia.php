<!DOCTYPE html>  
<html>  
<head>  
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Noticia</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <link href="<?php echo base_url(); ?>assets/img/favicon.png" rel="icon">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/styles.css" rel="stylesheet">
</head>  
<body>  
    <section>
        <div id="infoNoticia">
            <img id="banner" src="<?php echo base_url(); ?>assets/img/banner.jpg"><br> 
            <h2><?php echo $noticia->titulo;?></h2><br>
            <i id="fecha"><?php echo $noticia->fecha;?></i><br><br>
            <div id="divDescrip">
                <p id="descrip"><?php echo $noticia->descripcion;?></p><br>
            </div>
            <u id="urlNoticia"><?php echo $noticia->url;?></u><br><br>
            <i id="categorias"><u><?php echo $noticia->categorias;?></u></i><br><br><br>
            <form method="get" action="<?php echo base_url(); ?>index.php/noticias/index">  
                <input class="btn btn-primary btn-sm" type="submit" value="Volver al Inicio">  
            </form>
        </div>
    </section> 
</body>  
</html>