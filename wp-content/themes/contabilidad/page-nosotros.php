<?php get_header();?>
<main id="app">
<?php if(have_posts()): while(have_posts()): the_post();?>
    <section class="hero-banner" style="background-image: url('https://www.sanjuandelurigancho.com/uploads/imgempresas/sjlpe-head-empresas.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-banner-title">
                        <h2 class="hero-title-page">Nosotros</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container" style="max-width: 100%; padding: 0px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-6">
                        <div class="row">
                            <div class="col-12 background-mision">
                                <div class="container-mision">
                                    <h2 class="text-center title">Misión</h2>
                                    <p class="paragraph">Contribuir con las organizaciones empresariales en la implementación y manutención de un sistema de calidad para la generación de valor a sus procesos de negocios a través de una asesoría y consultoría integral con un alto nivel de conocimiento y experiencia profesional.</p>
                                </div>
                             </div>
                            <div class="col-12 background-vision">
                                <div class="container-vision">
                                    <h2 class="text-center title">Visión</h2>
                                     <p class="paragraph">Ser la empresa líder a nivel nacional en asesoría y consultoría empresarial, brindando servicios de calidad y confianza, con la garantía de la experiencia y la profesionalidad de nuestro equipo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 p-0">
                        <img class="img-container-valores" src="<?=get_template_directory_uri()?>/assets/img/Ingeniería-Civil.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="pt-4">
        <div class="container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="button-valores text-center">
                            <a href="" class="button-texto">Valores</a>
                        </div>
                    </div>
                </div>
                <div class="row pt-4 mb-4">
                    <div class="col-3 text-start">
                        <div class="title-valores">
                            <h2 class="name-valores">Honestidad</h2>
                            <span class="item-valores">01</span>
                        </div>
                        <div class="">
                            <p>Ser persona sinceras y veraces en su forma de ser</p>
                        </div>
                    </div>
                    <div class="col-3 text-start">
                        <div class="title-valores">
                            <h2 class="name-valores">Respeto</h2>
                            <span class="item-valores">02</span>
                        </div>
                        <div class="">
                            <p>Ser persona sinceras y veraces en su forma de ser</p>
                        </div>
                    </div>
                    <div class="col-3 text-start">
                        <div class="title-valores">
                            <h2 class="name-valores">Amabilidad</h2>
                            <span class="item-valores">03</span>
                        </div>
                        <div class="">
                            <p>Ser persona sinceras y veraces en su forma de ser</p>
                        </div>
                    </div>
                    <div class="col-3 text-start">
                        <div class="title-valores">
                            <h2 class="name-valores">Disciplina</h2>
                            <span class="item-valores">04</span>
                        </div>
                        <div class="">
                            <p>Ser persona sinceras y veraces en su forma de ser</p>
                        </div>
                    </div>
                    <div class="col-3 text-start">
                        <div class="title-valores">
                            <h2 class="name-valores">Honestidad</h2>
                            <span class="item-valores">05</span>
                        </div>
                        <div class="">
                            <p>Ser persona sinceras y veraces en su forma de ser</p>
                        </div>
                    </div>
                    <div class="col-3 text-start">
                        <div class="title-valores">
                            <h2 class="name-valores">Respeto</h2>
                            <span class="item-valores">06</span>
                        </div>
                        <div class="">
                            <p>Ser persona sinceras y veraces en su forma de ser</p>
                        </div>
                    </div>
                    <div class="col-3 text-start">
                        <div class="title-valores">
                            <h2 class="name-valores">Amabilidad</h2>
                            <span class="item-valores">07</span>
                        </div>
                        <div class="">
                            <p>Ser persona sinceras y veraces en su forma de ser</p>
                        </div>
                    </div>
                    <div class="col-3 text-start">
                        <div class="title-valores">
                            <h2 class="name-valores">Disciplina</h2>
                            <span class="item-valores">08</span>
                        </div>
                        <div class="">
                            <p>Ser persona sinceras y veraces en su forma de ser</p>
                        </div>
                    </div>
                </div>
                <div class="row">

                </div>
            </div>
        </div>
    </section>
<?php endwhile;endif;?>
</main>
<?php get_footer();?>