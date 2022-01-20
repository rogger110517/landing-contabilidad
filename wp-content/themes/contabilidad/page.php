<?php get_header();?>
<main id="app">
<?php if(have_posts()): while(have_posts()): the_post();?>

	<!-- Page -->
	<section class="container-fluid container-id">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center">
          <?php if(get_the_title()):?>
            <h3 class="title-id color-fourth"><?=get_the_title()?></h3>
          <?php endif;?>
        </div>
				<?php if(get_the_content()):?>
					<div class="col-12">
						<div class="wp-content-id mt-5">
							<?=get_the_content()?>
						</div>
					</div>
				<?php endif;?>
				<?php if(get_the_post_thumbnail_url()):?>
					<div class="col-12 text-center mt-5">
						<img src="<?=get_the_post_thumbnail_url()?>" alt="<?=get_the_title()?>" class="w-80">
					</div>
				<?php endif;?>
      </div>
    </div>
  </section>
	<!-- End Page -->
	
	<!-- Hero -->
	<section class="container-fluid container-id hero" id="hero" style="background-image: url(https://serviciosdigitalesperu.com/bmgroup/wp-content/uploads/2020/12/hero-home.png)"> <!-- Imagen de Ejemplo-->
		<div class="container h-md-100">
			<div class="row h-md-100 align-items-center">
				<div class="col-12 col-md-10 col-lg-8 col-xl-6">
					<p class="hero__title color-third">Titulo Hero</p>
					<p class="hero__subtitle color-third mt-4">Subtitulo Hero</p>
					<div class="btn-group mt-4">
						<a href="javascript:void(0)" class="btn bg-fifth hv:bg-primary color-third transition-d-300">Btn Call To Action</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Hero -->

	<!-- Slider con LightBox-->
  <section class="container-fluid container-id conoceMas">
    <div class="container" id="lightbox">
			<div class="row">
				<div class="col-12 text-center">
					<p class="title-id color-fourth">Slider con LightBox</p>
				</div>
			</div>
      <div class="row justify-content-center mt-5">
        <div class="col-12">
          <div class="slider multimedia-items">
            <?php $j=0;?>
            <?php for($a=0;$a<8;$a++){?>
              <?php $j++;?>
              <div class="mx-4">
                <img src="http://serviciosdigitalesperu.com/bmgroup/wp-content/uploads/2021/01/muestreo-big-bags-1.jpeg" alt="" class="w-100 cursor-pointer conoceMas__img" onclick="openModal();currentSlide(<?=$j?>)">
              </div>
            <?php }?>
          </div>
        </div>
      </div>

      <!-- The Modal/Lightbox -->
      <div id="myModal" class="modal">
        <span class="close cursor" onclick="closeModal()">&times;</span>
        <div class="modal-content">
          <?php $l = 0;?>
          <?php for($b=0;$b<8;$b++){?>
            <?php $l++;?>
            <div class="mySlides">
              <div class="numbertext"><?=$l?></div>
              <img src="http://serviciosdigitalesperu.com/bmgroup/wp-content/uploads/2021/01/muestreo-big-bags-1.jpeg" style="max-width:100%;display: block;margin: auto;">
            </div>
          <?php }?>
          <a class="prev--l" onclick="plusSlides(-1)">&#10094;</a>
          <a class="next--l" onclick="plusSlides(1)">&#10095;</a>          
          <div class="caption-container">
            <p id="caption"></p>
          </div>
        </div>
      </div>
    </div>
  </section>
	<!-- End Slider -->


	<!-- Cards -->
  <section class="container-fluid container-id bg-tenth">
    <div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h3 class="title-id color-fourth">Cards</h3>
				</div>
			</div>
      <div class="row mt-4">
        <div class="col-12">
          <div class="row justify-content-center">
            <?php for($c=0;$c<3;$c++){?>
              <div class="col-12 col-md-5 col-lg-3 mb-3 mb-lg-0">                
								<div class="cardMain card-servicio pb-3 bg-third">
									<div class="cardMain__figure figure-servicio">
										<img src="https://serviciosdigitalesperu.com/bmgroup/wp-content/uploads/2020/12/servicios.png" alt="">
									</div>
									<div class="cardMain__description description-servicio">
										<div class="text-center mt-2">
											<p class="cardMain__title title-servicio">Titulo Card</p>
										</div>
										<div class="mt-1">
											<p class="cardMain__txt txt-servicio">Texto Descriptivo del Card Lorem ipsus etc etc</p>
										</div>
									</div>
								</div>                
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </section>						
	<!-- End Card -->

<?php endwhile;endif;?>
</main>
<?php get_footer();?>