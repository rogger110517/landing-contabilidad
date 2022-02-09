<?php get_header();?>
<main id="app">
<?php if(have_posts()): while(have_posts()): the_post();
$imgBanner = get_the_post_thumbnail_url();
?>
    <section class="hero-banner" style="background-image: url('<?php echo $imgBanner ?>');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    
                    <div class="hero-banner-title">
                        <h2 class="hero-title-page"><?php the_title(); ?></h2>
                        <div class="pt-3">
                            <a href="" class="hero-banner-contact">Contactános</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-information-2">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <div>
                            <h2 class="mb-4 container-information-title">OFRECEMOS AMPLIOS SERVICIOS</h2>
                            <p  class="mb-4 pb-2 container-information-paragraph">Somos un estudio contable en Lima, ofrecemos asesoría y contabilidad externa orientado a todo tipo de empresas: unipersonales, mype, sociedades, asociaciones sin fines de lucro y fundaciones, brindado diferentes tipos de soluciones</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="card_container">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 pt-4">
                        <!-- Aquí agregar la nueva tarjeta -->
                            <div class="carta">

                                <div class="carta-fondo">
                                    <img src="https://cdn.euroinnova.edu.es/img/subidasEditor/128-1611231850.webp" alt="">
                                </div>
                                <div class="carta-titulo">
                                    <h2>Titulo del card</h2>
                                </div>
                                <div class="carta-contenido">
                                    <div class="carta-presentacion">
                                        <img src="https://www.astribsa.pe/admin/_uploads/imagenes/06072019213919-icon-contabilidad.png" alt="" width="60px" height="auto">
                                        <h3>Contabilidad</h3>
                                    </div>

                                    <div class="carta-texto">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi reprehenderit assumenda quibusdam aperiam consequuntur modi nostrum, nesciunt eum temporibus sit amet impedit fuga.</p>
                                    </div>
                                    
                                </div>

                            </div>
                        <!-- Aquí agregar la nueva tarjeta -->
                    </div>
                    <div class="col-4 pt-4">
                        <!-- Aquí agregar la nueva tarjeta -->
                            <div class="carta">

                                <div class="carta-fondo">
                                    <img src="https://cdn.euroinnova.edu.es/img/subidasEditor/128-1611231850.webp" alt="">
                                </div>
                                <div class="carta-titulo">
                                    <h2>Titulo del card</h2>
                                </div>
                                <div class="carta-contenido">
                                    <div class="carta-presentacion">
                                        <img src="https://www.astribsa.pe/admin/_uploads/imagenes/06072019213919-icon-contabilidad.png" alt="" width="60px" height="auto">
                                        <h3>Contabilidad</h3>
                                    </div>

                                    <div class="carta-texto">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi reprehenderit assumenda quibusdam aperiam consequuntur modi nostrum, nesciunt eum temporibus sit amet impedit fuga.</p>
                                    </div>
                                    
                                </div>

                            </div>
                        <!-- Aquí agregar la nueva tarjeta -->
                    </div>
                    <div class="col-4 pt-4">
                        <!-- Aquí agregar la nueva tarjeta -->
                            <div class="carta">

                                <div class="carta-fondo">
                                    <img src="https://cdn.euroinnova.edu.es/img/subidasEditor/128-1611231850.webp" alt="">
                                </div>
                                <div class="carta-titulo">
                                    <h2>Titulo del card</h2>
                                </div>
                                <div class="carta-contenido">
                                    <div class="carta-presentacion">
                                        <img src="https://www.astribsa.pe/admin/_uploads/imagenes/06072019213919-icon-contabilidad.png" alt="" width="60px" height="auto">
                                        <h3>Contabilidad</h3>
                                    </div>

                                    <div class="carta-texto">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi reprehenderit assumenda quibusdam aperiam consequuntur modi nostrum, nesciunt eum temporibus sit amet impedit fuga.</p>
                                    </div>
                                    
                                </div>

                            </div>
                        <!-- Aquí agregar la nueva tarjeta -->
                    </div>
                    <div class="col-4 pt-4">
                        <!-- Aquí agregar la nueva tarjeta -->
                            <div class="carta">

                                <div class="carta-fondo">
                                    <img src="https://cdn.euroinnova.edu.es/img/subidasEditor/128-1611231850.webp" alt="">
                                </div>
                                <div class="carta-titulo">
                                    <h2>Titulo del card</h2>
                                </div>
                                <div class="carta-contenido">
                                    <div class="carta-presentacion">
                                        <img src="https://www.astribsa.pe/admin/_uploads/imagenes/06072019213919-icon-contabilidad.png" alt="" width="60px" height="auto">
                                        <h3>Contabilidad</h3>
                                    </div>

                                    <div class="carta-texto">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi reprehenderit assumenda quibusdam aperiam consequuntur modi nostrum, nesciunt eum temporibus sit amet impedit fuga.</p>
                                    </div>
                                    
                                </div>

                            </div>
                        <!-- Aquí agregar la nueva tarjeta -->
                    </div>
                    <div class="col-4 pt-4">
                        <!-- Aquí agregar la nueva tarjeta -->
                            <div class="carta">

                                <div class="carta-fondo">
                                    <img src="https://cdn.euroinnova.edu.es/img/subidasEditor/128-1611231850.webp" alt="">
                                </div>
                                <div class="carta-titulo">
                                    <h2>Titulo del card</h2>
                                </div>
                                <div class="carta-contenido">
                                    <div class="carta-presentacion">
                                        <img src="https://www.astribsa.pe/admin/_uploads/imagenes/06072019213919-icon-contabilidad.png" alt="" width="60px" height="auto">
                                        <h3>Contabilidad</h3>
                                    </div>

                                    <div class="carta-texto">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi reprehenderit assumenda quibusdam aperiam consequuntur modi nostrum, nesciunt eum temporibus sit amet impedit fuga.</p>
                                    </div>
                                    
                                </div>

                            </div>
                        <!-- Aquí agregar la nueva tarjeta -->
                    </div>
                    <div class="col-4 pt-4">
                        <!-- Aquí agregar la nueva tarjeta -->
                            <div class="carta">

                                <div class="carta-fondo">
                                    <img src="https://cdn.euroinnova.edu.es/img/subidasEditor/128-1611231850.webp" alt="">
                                </div>
                                <div class="carta-titulo">
                                    <h2>Titulo del card</h2>
                                </div>
                                <div class="carta-contenido">
                                    <div class="carta-presentacion">
                                        <img src="https://www.astribsa.pe/admin/_uploads/imagenes/06072019213919-icon-contabilidad.png" alt="" width="60px" height="auto">
                                        <h3>Contabilidad</h3>
                                    </div>

                                    <div class="carta-texto">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi reprehenderit assumenda quibusdam aperiam consequuntur modi nostrum, nesciunt eum temporibus sit amet impedit fuga.</p>
                                    </div>
                                    
                                </div>

                            </div>
                        <!-- Aquí agregar la nueva tarjeta -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-information">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 text-center">
                       <!-- Aqui va el quiene somos -->
                    </div>
                    <div class="col-6">
                        <!-- Aquí va la imagen -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-information-3">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <div>
                            <h2 class="mb-4 container-information-title">NUESTRAS PROPUESTAS</h2>
                            <p  class="mb-4 pb-2 container-information-paragraph">Somos un estudio contable en Lima, ofrecemos asesoría y contabilidad externa orientado a todo tipo de empresas: unipersonales, mype, sociedades, asociaciones sin fines de lucro y fundaciones, brindado diferentes tipos de soluciones</p>
                            <a href="" class="container-information-button">Mas información <span>></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contact">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 pb-4 mb-4">
                        <div class="text-center">
                            <h2 class="contact_title">Contacto</h2>
                        </div>
                    </div>
                    <div class="col-7">
                        <div>
                            <img class="contact_img" src="<?=get_template_directory_uri()?>/assets/img/contact-form.png" alt="">
                        </div>
                    </div>
                    <div class="col-5">
                        <div class="contact_content">
                            <?php echo do_shortcode('[contact-form-7 id="22" title="Formulario de contacto 1"]') ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        .carta{
            position: relative;
            width: 100%;
            height: 220px;
            background: rgba(0,106,179,0.7);
            color: white;
            text-align: center;
            box-shadow: -1px 0px 6px 2px rgb(0 0 0 / 15%);
            border-radius: 10px;
        }


        .carta .carta-fondo{
            z-index: -1000;
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            width: 100%;
            border-radius: 20px;
            height: 100%;
        }
        .carta .carta-titulo {
            height: 220px;
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            transition: all ease 0.35s;
        }
        .carta:hover .carta-titulo {
            opacity: 0;
            transition: all ease 0.35s;
        }
        .carta .carta-fondo > img{
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }

        .carta .carta-contenido {
            height: 220px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            padding: 10px;
            opacity: 0;
            transition: all ease 0.35s;
        }
        .carta:hover .carta-contenido {
            opacity: 1;
            transition: all ease 0.35s;
        }
        .carta-presentacion h3 {
            font-size: 24px;
        }
        .carta-texto p {
            font-size: 15px;
        }
        /* .carta h3{
            text-align: center;
            line-height: 230px;
            font-size:25px;
        }

        .carta .texto{
            height:0px;
            overflow: hidden;
            padding: 0px 25px;
        }

        .carta:hover h3{
            display:none;
        } */

        /* .carta:hover{
            background:#3498DB;
        } */

        /* .carta:hover .texto{
            position: relative;
            transform:translatey(65%);
            transition: transform 1s;
            height: 100px;
            border: red 2px solid;
            text-align:justify;
            color: white;
        }

        .carta:hover{
            background:black;
        } */

    </style>
<?php endwhile;endif;?>
</main>
<?php get_footer();?>