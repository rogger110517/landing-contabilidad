<?php get_header();?>
<main id="app">
<?php if(have_posts()): while(have_posts()): the_post();?>
<section class="hero-banner" style="background-image: url('https://www.sanjuandelurigancho.com/uploads/imgempresas/sjlpe-head-empresas.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-banner-title">
                        <h2 class="hero-title-page">Nuestros <br> servicios</h2>
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
                        <div class="card-container-relative">
                            <div class="card-container">
                                <img src="<?=get_template_directory_uri()?>/assets/img/Ingeniería-Civil.jpg" alt="" class="card-container-img">
                                <h2 class="card-container-text">Servicios contables</h2>
                            </div>
                            <div class="card-container-flotante">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-4 pt-4">
                        <div class="card-container-relative">
                            <div class="card-container">
                                <img src="https://www.senati.edu.pe/sites/default/files/styles/especialidades_500x299/public/2017/carrera/10/informatica-administrativa-500x299.jpg?itok=wR9KUJsf" alt="" class="card-container-img">
                                <h2 class="card-container-text">Servicios contables</h2>
                            </div>
                            <div class="card-container-flotante">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-4 pt-4">
                        <div class="card-container-relative">
                            <div class="card-container">
                                <img src="https://www.senati.edu.pe/sites/default/files/styles/especialidades_500x299/public/2017/carrera/10/informatica-administrativa-500x299.jpg?itok=wR9KUJsf" alt="" class="card-container-img">
                                <h2 class="card-container-text">Servicios contables</h2>
                            </div>
                            <div class="card-container-flotante">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-4 pt-4">
                        <div class="card-container-relative">
                            <div class="card-container">
                                <img src="https://www.senati.edu.pe/sites/default/files/styles/especialidades_500x299/public/2017/carrera/10/informatica-administrativa-500x299.jpg?itok=wR9KUJsf" alt="" class="card-container-img">
                                <h2 class="card-container-text">Servicios contables</h2>
                            </div>
                            <div class="card-container-flotante">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-4 pt-4">
                        <div class="card-container-relative">
                            <div class="card-container">
                                <img src="https://www.senati.edu.pe/sites/default/files/styles/especialidades_500x299/public/2017/carrera/10/informatica-administrativa-500x299.jpg?itok=wR9KUJsf" alt="" class="card-container-img">
                                <h2 class="card-container-text">Servicios contables</h2>
                            </div>
                            <div class="card-container-flotante">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-4 pt-4">
                        <div class="card-container-relative">
                            <div class="card-container">
                                <img src="https://www.senati.edu.pe/sites/default/files/styles/especialidades_500x299/public/2017/carrera/10/informatica-administrativa-500x299.jpg?itok=wR9KUJsf" alt="" class="card-container-img">
                                <h2 class="card-container-text">Servicios contables</h2>
                            </div>
                            <div class="card-container-flotante">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile;endif;?>
</main>
<?php get_footer();?>