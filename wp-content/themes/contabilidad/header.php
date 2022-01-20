<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head();?>
	<!-- Grilla (Bootstrap)-->
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/style.css">
	<!-- Fuentes (Google Fonts)-->
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-- Iconos (FontAwesome)-->
	<script src="https://kit.fontawesome.com/b90d86fc4b.js" crossorigin="anonymous"></script>
	<!-- Slider (Slick Slider)-->	
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
	<!-- Modal (Lity - LightboxCss)-->
	<link rel="stylesheet" type="text/css" href="https://sorgalla.com/lity/dist/lity.min.css">
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/lightbox.css">
	<!-- Estilos Genericos-->
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/index.css">
	<link rel="stylesheet" href="<?=get_template_directory_uri()?>/assets/css/cont.css">
    <title>Document</title>
</head>
<body>
    <header class="header" id="header">
        <div class="container-logo">
            <img src="https://www.sanjuandelurigancho.com/assets/images/logo/logo_sjlpe_light_2.png" class="img-logo" alt="">
        </div>
        <div class="container-navigation">
            <nav class="navigation">
				<?php wp_nav_menu(
					array(
						'theme_location' => 'header-menu',
						'menu_class' => 'list',
						'container' => '',
					)
				)
				?>
                <!-- <ul class="list">
                    <li><a href="inicio.html" class="list-item">Inicio</a></li>
                    <li><a href="nosotros.html" class="list-item">Nosotros</a></li>
                    <li><a href="" class="list-item">Nuestras propuestas</a></li>
                    <li><a href="nuestro-servicios.html" class="list-item">Nuestros servicios</a></li>
                    <li><a href="" class="list-item">Publicaciones</a></li>
                </ul> -->
            </nav>
        </div>
    </header>
