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
                       <!-- hacer aqui angelo -->
                       <div class="somos">
                            <h1>QUIENES <span>SOMOS</span></h1>

                            <div class="somos-contenido">

                                <div class="somos-caja">
                                    <img src="https://www.nicepng.com/png/full/882-8820253_business-owners-iconadmin2018-05-01t16-briefcase-icon-transparent.png" alt="">
                                    <div class="somos-texto">
                                        <h2>Visión</h2>
                                        <p>Consolidarnos como una empresa líder en el sector de Asesoría Contable, Financiera y Tributaria con una trayectoria reconocida por nuestra capacidad.</p>
                                    </div>
                                </div>

                                <div class="somos-caja">
                                    <img src="https://cdn.icon-icons.com/icons2/1392/PNG/512/consultant_96680.png" alt="">
                                    <div class="somos-texto">
                                        <h2>Misión</h2>
                                        <p>Ofrecer a nuestros clientes u servicio eficaz, eficiente, responsable y de calidad buscando un alto grado de satisfacción.</p>
                                    </div>
                                </div>

                                <div class="somos-caja">
                                    <img src="https://cdn.icon-icons.com/icons2/2485/PNG/512/value_icon_150042.png" alt="">
                                    <div class="somos-texto">
                                        <h2>Valores</h2>
                                        <p>Profesionalismo que nos identifican como miembros de una profesión con el compromiso para servir a los intereses de los clientes.</p>
                                    </div>
                                </div>
                            </div>

                       </div>
                    </div>
                    <div class="col-6">
                        <!-- Aquí va la imagen -->
                        <div class="imagen">
                            <img src="http://www.slcontadoresperu.com/images/home-4-946x689.jpg" alt="">
                        </div>
                        
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
        

        /* Quienes somos */

        .col-6{
             border:red 2px solid;
            height:600px;
            
        }

        .text-center{
            background: #383838;
        }

        .somos{
            /* border : red 2px solid; */
            
            padding: 0px 35px;
            width:100%;
            height:100%;
            display:flex;
            flex-direction:column;
            justify-content:center;
            gap:32px
        }

        .somos h1{
            color: #eb5d32;
            font-size:40px;
            text-align:left;
        }

        .somos h1 span{
            padding-left:20px;
            font-weight:350;
        }

        .somos .somos-contenido{
            /* border:red 2px solid; */
            display:flex;
            flex-direction:column;
            gap:30px;
        }

        .somos .somos-contenido .somos-caja{
            display:flex;
            gap:30px;
        }

        .somos .somos-contenido .somos-caja img{
            /* border: red 2px solid; */
            width:15%;
            height:70%;
            object-fit:contain;
        }

        .somos .somos-contenido .somos-caja .somos-texto h2{
            /* border:red 2px solid; */
            text-align:left;
            font-size:25px;
            color:white;
            padding-bottom:20px;
        }

        .somos .somos-contenido .somos-caja .somos-texto p{
            text-align:justify;
            color: rgba(255, 255, 255, 0.5);
        }

        

        

        /* imagen */
        .iamgen{
            position: relative;
        }

        .imagen img{
            position: absolute;
            object-fit:cover;
            right:0px;
            left:0px;
            width:100%;
            height:100%
        }

        
    </style>
<?php endwhile;endif;?>
</main>
<?php get_footer();?>