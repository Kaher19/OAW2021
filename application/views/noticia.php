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
        <h3><?php echo $noticia->titulo;?></h3><br>
        <p><?php echo $noticia->fecha;?></p>
        <p><?php echo $noticia->descripcion;?></p>
        <p><?php echo $noticia->url;?></p>
        <p><?php echo $noticia->categorias;?></p>
        <form method="get" action="<?php echo base_url(); ?>index.php/noticias/index">  
            <input class="btn btn-dark btn-sm" type="submit" value="Volver al Inicio">  
        </form>
    </section> 
</body>  
</html>