<?php get_header();?>
<main id="app">
<?php if(have_posts()): while(have_posts()): the_post();
$imgBanner = get_the_post_thumbnail_url();
?>
    <section class="hero-banner" style="background-image: url('<?php echo $imgBanner ?>');">
        <div class="container">
            <div class="row">
                <div class="col-6" >
                    <!-- Aquí va en el home bienvenido empresario -- Angelo -->

                    <div class="bienvenidos">
                        <h4>Profesionales A Tu Servicio</h4>
                        <div class="bienvenidos-contenido">
                            <h1>Bienvenido Empresario Del Perú</h1>
                            <p>Alan Moreano - Contador Fundador</p>
                            <div class="bienvenidos-raya"></div>
                            <a href="">Haz una Consulta <i class="fab fa-whatsapp"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-6">

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
                      
                    </div>
                    <div class="col-4 pt-4">
                      
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
                      
                    </div>
                    <div class="col-4 pt-4">
                      
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
                      
                    </div>
                    <div class="col-4 pt-4">
                      
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
                      
                    </div>
                    <div class="col-4 pt-4">
                      
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
                      
                    </div>
                    <div class="col-4 pt-4">
                        
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
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container-information">
        <div class="">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6 text-center somos-background">
                     
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
                                    <img src="https://www.nicepng.com/png/full/882-8820253_business-owners-iconadmin2018-05-01t16-briefcase-icon-transparent.png" alt="">
                                    <div class="somos-texto">
                                        <h2>Misión</h2>
                                        <p>Ofrecer a nuestros clientes u servicio eficaz, eficiente, responsable y de calidad buscando un alto grado de satisfacción.</p>
                                    </div>
                                </div>

                                <div class="somos-caja">
                                    <img src="https://www.nicepng.com/png/full/882-8820253_business-owners-iconadmin2018-05-01t16-briefcase-icon-transparent.png" alt="">
                                    <div class="somos-texto">
                                        <h2>Valores</h2>
                                        <p>Profesionalismo que nos identifican como miembros de una profesión con el compromiso para servir a los intereses de los clientes.</p>
                                    </div>
                                </div>
                            </div>

                       </div>
                    </div>
                    <div class="col-6">
                        
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
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        
                        <div class="propuestas">
                            <div class="propuestas-imagen">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/e/e4/Font_Awesome_5_regular_chart-bar.svg" alt="">
                            </div>
                            <div class="propuestas-contenido">
                                <h1>Constitución de empresas</h1>
                                <p>Nuestra empresa de asesoría contable le ayudará a formalizar su 
                                    negocio. Tanto dándole el asesoramiento legal que necesite como 
                                    en la búsqueda y reservación del nombre, la elaboración del 
                                    pacto social, la presentación de los documentos ante SUNARP, 
                                    gestión del RUC, etc.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="propuestas">
                            <div class="propuestas-imagen">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/5/56/Font_Awesome_5_solid_chart-pie.svg" alt="">
                            </div>
                            <div class="propuestas-contenido">
                                <h1>Constitución de empresas</h1>
                                <p>Nuestra empresa de asesoría contable le ayudará a formalizar su 
                                    negocio. Tanto dándole el asesoramiento legal que necesite como 
                                    en la búsqueda y reservación del nombre, la elaboración del 
                                    pacto social, la presentación de los documentos ante SUNARP, 
                                    gestión del RUC, etc.</p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="propuestas">
                            <div class="propuestas-imagen">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/a/ab/Font_Awesome_5_regular_money-bill-alt.svg" alt="">
                            </div>
                            <div class="propuestas-contenido">
                                <h1>Constitución de empresas</h1>
                                <p>Nuestra empresa de asesoría contable le ayudará a formalizar su 
                                    negocio. Tanto dándole el asesoramiento legal que necesite como 
                                    en la búsqueda y reservación del nombre, la elaboración del 
                                    pacto social, la presentación de los documentos ante SUNARP, 
                                    gestión del RUC, etc.</p>
                            </div>
                            
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="propuestas">
                            <div class="propuestas-imagen">
                                <img src="https://cdn2.iconfinder.com/data/icons/font-awesome/1792/archive-512.png" alt="">
                            </div>
                            <div class="propuestas-contenido">
                                <h1>Constitución de empresas</h1>
                                <p>Nuestra empresa de asesoría contable le ayudará a formalizar su 
                                    negocio. Tanto dándole el asesoramiento legal que necesite como 
                                    en la búsqueda y reservación del nombre, la elaboración del 
                                    pacto social, la presentación de los documentos ante SUNARP, 
                                    gestión del RUC, etc.</p>
                            </div>
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
                        <!-- Agregar el formulario el contenido -- Angelo -->
                        <div class="contacto">
                    
                            <div class="contacto-contenido">
                                <h3>Converse Con Un Asesor Empresarial</h3>
                                <p>Nos especializamos en brindar soluciones efectivas y prácticas en la gestión de su negocio, brindando un Servicio Integral en temas Financieros, Contables, Administrativos, Tributarios, Laboral y Constitución de empresas.
                                    Contacte con un asesor empresarial ahora.</p>
                            </div>

                            <div class="contacto-direccion">
                                <h4>Nos pueden encontrar en:</h4>
                                <p><i class="fas fa-mobile-alt"></i>+51 942 991 111</p>
                                <p><i class="far fa-envelope-open"></i>consulta@aiasesorescontables.com</p>
                            </div>
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
             /* border:red 2px solid;
            height:600px; */
            
        }
        .somos{
            /* border : red 2px solid; */
            
            padding: 70px 35px;
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
            color: #ffffff;
        }

        
        .somos-background {
            background: rgba(0,106,179,0.7);
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
            width: 100%;
        }

        .somos .somos-contenido .somos-caja img{
            /* border: red 2px solid; */
            width:15%;
            height:70%;
            object-fit:contain;
            height: auto;
        }
        .somos .somos-contenido .somos-caja .somos-texto {
            width: 85%;
        }
        .somos .somos-contenido .somos-caja .somos-texto h2{
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


        /* Propuestas */
        .propuestas{
            /* border: red 2px solid; */
            padding: 50px;
        }

        .propuestas .propuestas-imagen{
            /* border: red 2px solid; */
            display:flex;
            justify-content:center;
            align-items:center;
            width:120px;
            height:120px;
            text-align:center;
            border: 2px solid #000000;
            border-radius:50%;
            margin:auto;
            margin-bottom:30px;
        }

        .propuestas .propuestas-imagen img{
            height:60%;
            width:60%;
        }

        .propuestas .propuestas-contenido{
            color:white;
            text-align:center;
        }

        .propuestas .propuestas-contenido h1{
            font-size:26px;
            padding-bottom:18px;
            color: #000000;
        }

        .propuestas .propuestas-contenido p{
            font-size:17px;
            color: #000000;
        }


        /* Bienvenidos */
        .bienvenidos{
            /* border: red 2px solid; */
            color:#fff;
        }

        .bienvenidos > h4{
            font-size:20px;
            color: #CACB04;
            font-weight:700;
            padding-bottom:50px;
            border:red 2px solid;
        }

        .bienvenidos .bienvenidos-contenido > h1{
            font-size:80px;
            font-weight:800;
            padding-bottom:20px;
        }

        .bienvenidos .bienvenidos-contenido p{
            font-size:18px;
            padding-bottom:40px;
        }

        .bienvenidos .bienvenidos-contenido .bienvenidos-raya{
            width:60px;
            height:5px;
            background:#0C6000;
            margin-bottom:40px;
        }

        .bienvenidos .bienvenidos-contenido a{
            display:inline-block;
            width:230px;
            background:#25D366;
            font-size:20px;
            color:white;
            text-align:center;
            padding: 20px 0px;
            border-radius:8px;
            transition:all 1s;
        }

        .bienvenidos .bienvenidos-contenido a i{
            padding-left:10px;
            font-size:22px;
        }

        .bienvenidos .bienvenidos-contenido a:hover{
            background: #0c6000;
            
        }


        /* Contacto */
        .contacto{
            padding: 60px 0px;
            border: red 2px solid;
            color:#fff;
        }

        .contacto .contacto-contenido > h3{
            font-size: 26px;
            font-weight:700;
            padding-bottom: 25px;
        }
    
        .contacto .contacto-contenido > p{
            font-size: 18px;
            padding-bottom: 25px;
        }

        .contacto .contacto-direccion > h4{
            font-size: 18px;
            font-weight:700;
            padding-bottom: 10px;
        }

        .contacto .contacto-direccion > p{
            font-size:18px;
            padding-top:15px;
        }

        .contacto .contacto-direccion > p i{
            padding-right:10px;
            
        }

    </style>
<?php endwhile;endif;?>
</main>
<?php get_footer();?>