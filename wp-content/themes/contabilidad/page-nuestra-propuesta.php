<?php get_header();?>
<main id="app">
<?php if(have_posts()): while(have_posts()): the_post();?>
<section class="hero-banner" style="background-image: url('https://www.sanjuandelurigancho.com/uploads/imgempresas/sjlpe-head-empresas.jpg');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="hero-banner-title">
                        <h2 class="hero-title-page">Nuestras propuestas</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nuestra-propuesta">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-1">

                    </div>
                    <div class="col-5">
                        <h2 class="nuestra-propuesta-title">Cobre más rápido</h2>
                        <p class="nuestra-propuesta-paragraph">Facturas electrónicas y seguimiento automatizado.<p>
                        <p class="nuestra-propuesta-paragraph">Crea y envía facturas profesionales y reciba pagos línea.</p>
                        <p class="nuestra-propuesta-paragraph">Envíe recordatorios a sus deudores con solo unos pocos clics. Simplemente establezca y automatice seguimientos para recibir los pagos más rápido.</p>   
                        <p class="nuestra-propuesta-paragraph"> Haz facturas de forma automática para órdenes de venta, órdenes de entrega o basadas en tiempo y material.</p>   
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nuestra-propuesta nuestra-propuesta-2">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <div style="height: 100%;">
                            <img src="assets/img/Ingeniería-Civil.jpg" alt="" class="nuestra-propuesta-img">
                        </div>
                    </div>
                    <div class="col-1">

                    </div>
                    <div class="col-5 d-flex justify-content-center align-items-center">
                        <div>
                            <h2 class="nuestra-propuesta-title">Cobre más rápido</h2>
                        <p class="nuestra-propuesta-paragraph">Facturas electrónicas y seguimiento automatizado.<p>
                        <p class="nuestra-propuesta-paragraph">Crea y envía facturas profesionales y reciba pagos línea.</p>
                        <p class="nuestra-propuesta-paragraph">Envíe recordatorios a sus deudores con solo unos pocos clics. Simplemente establezca y automatice seguimientos para recibir los pagos más rápido.</p>   
                        <p class="nuestra-propuesta-paragraph"> Haz facturas de forma automática para órdenes de venta, órdenes de entrega o basadas en tiempo y material.</p>  
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endwhile;endif;?>
</main>
<?php get_footer();?>