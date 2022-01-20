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
    <section class="card">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-4 pt-4">
                        <!-- Aquí agregar la nueva tarjeta -->
                            <div class="card-content">

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
                    <div class="col-12 text-center">
                        <div>
                            <h2 class="mb-4 container-information-title">NOSOTROS</h2>
                            <p  class="mb-4 pb-2 container-information-paragraph">La práctica empresarial debe llevar una contabilidad en orden, no solo es una obligación que exige el Estado, sino una necesidad vital de las compañías para poder crecer. Bajo esta idea más el concepto de la asesoría externa, nuestro estudio contable le brinda la posibilidad de dirigir su negocio con un asesoramiento apropiado a las exigencias contables y tributarias que demandan la actual cultura empresarial.</p>
                            <a href="" class="container-information-button">Mas información <span>></span></a>
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
        .card-content {
            width: 100%;
            height: 300px;
            background-color: red;
        }
    </style>
<?php endwhile;endif;?>
</main>
<?php get_footer();?>