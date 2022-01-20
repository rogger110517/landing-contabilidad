(function($){
  $(document).ready(function(){
    const stringUrl = window.location.href;
    const arrayFiltro = stringUrl.split("#");
    if(arrayFiltro.length>1){
      const filtro = arrayFiltro[arrayFiltro.length-1];
      console.log(filtro);
      $('.listButton__link').removeClass('bg-primary color-third');
      $('.listButton__link').addClass('bg-nineth color-second');
      
      $('#'+filtro).removeClass('bg-nineth color-second');
      $('#'+filtro).addClass('bg-primary color-third');

      $.ajax({
        url: pg.ajaxurl,
        method: 'POST',
        data:{
          'action': 'pgFiltroOrganizate',
          'categoria': filtro
        },
        beforeSend: function(){
          $('#resultado-organizate').html("<span class='color-primary d-inline-block pt-4 pt-md-5' style='font-size: 24px;'><i class='fas fa-spinner fa-spin fa-2x'></i></span>");
          // Cargando...
        },
        success: function(data){
          let html = "";
          data.forEach( item =>{
          html += `<div class="col-12 col-md-6 col-lg-4 mb-4">
                    <div class="d-inline-flex h-md-100 bg-third">
                      <div class="cardMain h-md-100">`;
          if(item.imagen){
            html += `<div class="cardMain__figure">
                      ${item.imagen}
                    </div>`;
          }else{
            html += `<div class="cardMain__figure">
                      <img src="https://${location.hostname}/wp-content/themes/wp-conoce-iquitos/assets/img/organiza-default.png" alt="" class="w-100">
                    </div>`;
          }
                html += `<div class="cardMain__description">
                          <div class="d-flex align-items-start justify-content-center mb-1">
                            <p class="cardMain__title">${item.titulo}</p>
                          </div>`;
                  if(item.ce){
                    html += `<div class="estrellas">
                              <ul class="d-flex justify-content-center align-items-center listEstrellas">`;
                    for (let i = 0; i < item.ce; i++) {
                      html += `<li class="listEstrellas__item active"><i class="fas fa-star"></i></li>`;
                    }
                    for (let i = 0; i < (5-item.ce); i++) {
                      html += `<li class="listEstrellas__item"><i class="fas fa-star"></i></li>`;
                    }
                    html +=  `</ul>
                            </div>`;
                  }
                  if (item.excerpt) {
                    html += `<p class="cardMain__txt mt-3">${item.excerpt}</p>`;
                  }
                  html += `<div class="btn-group mt-3">`;
                  if(item.direccion){
                    html += `<p class="listRrss__link mb-2 d-flex align-items-center">
                              <i class="fas fa-map-marker-alt mr-2"></i> ${item.direccion}
                            </p>`;
                  }
                  if(item.telefono){
                    html += `<p class="mb-2 d-flex align-items-center">
                              <a class="listRrss__link" href="tel:${item.telefono}"><i class="fas fa-phone-alt mr-2"></i> ${item.telefono}</a>
                            </p>`;
                  }
                  if (item.email) {
                    html += `<p class="mb-3 d-flex align-items-center">
                              <a class="listRrss__link" href="mailto:${item.email}"><i class="fas fa-envelope mr-2"></i> ${item.email}</a>
                            </p>`;
                  }

                  html += `<ul class="listRrss d-flex justify-content-center">`;

                  if(item.url_website){
                    html += `<li class="ml-3">
                              <a class="listRrss__link" href="${item.url_website}" target="_blank"><i class="fas fa-globe"></i></a>
                            </li>`;
                  }                
                  if(item.facebook){
                    html +=  `<li class="ml-3">
                                <a class="listRrss__link" href="${item.facebook}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                              </li>`;
                  }
                  if(item.instagram){
                    html += `<li class="ml-3">
                              <a class="listRrss__link" href="${item.instagram}" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>`;
                  }
                  if(item.twitter){
                    html += `<li class="ml-3">
                              <a class="listRrss__link" href="${item.twitter}" target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>`;
                  }
                  html +=
                          `</ul>
                          </div>                      
                        </div>
                      </div>
                    </div>
                  </div>`;
          });
          $('#resultado-organizate').html(html);
        },
        error: function(error){
          console.log(error);
        }
      });
    }
  })


  $('.listButton__link').click(function(){
    $(this).attr("id");
    
    $('.listButton__link').removeClass('bg-primary color-third');
    $('.listButton__link').addClass('bg-nineth color-second');

    $(this).removeClass('bg-nineth color-second');
    $(this).addClass('bg-primary color-third');

    $.ajax({
      url: pg.ajaxurl,
      method: 'POST',
      data:{
        'action': 'pgFiltroOrganizate',
        'categoria': $(this).attr("id")
      },
      beforeSend: function(){
        $('#resultado-organizate').html("<span class='color-primary d-inline-block pt-4 pt-md-5' style='font-size: 24px;'><i class='fas fa-spinner fa-spin fa-2x'></i></span>");
        // Cargando...
      },
      success: function(data){
        let html = "";
        data.forEach( item =>{
        html += `<div class="col-12 col-md-6 col-lg-4 mb-4">
                  <div class="d-inline-flex h-md-100 bg-third">
                    <div class="cardMain h-md-100">`;
        if(item.imagen){
          html += `<div class="cardMain__figure">
                    ${item.imagen}
                  </div>`;
        }else{
          html += `<div class="cardMain__figure">
                    <img src="https://${location.hostname}/wp-content/themes/wp-conoce-iquitos/assets/img/organiza-default.png" alt="" class="w-100">
                  </div>`;
        }           
              html += `<div class="cardMain__description">
                        <div class="d-flex align-items-start justify-content-center mb-1">
                          <p class="cardMain__title">${item.titulo}</p>
                        </div>`;
                if(item.ce){
                  html += `<div class="estrellas">
                            <ul class="d-flex justify-content-center align-items-center listEstrellas">`;
                  for (let i = 0; i < item.ce; i++) {
                    html += `<li class="listEstrellas__item active"><i class="fas fa-star"></i></li>`;
                  }
                  for (let i = 0; i < (5-item.ce); i++) {
                    html += `<li class="listEstrellas__item"><i class="fas fa-star"></i></li>`;
                  }
                  html +=  `</ul>
                          </div>`;
                }
                if (item.excerpt) {
                  html += `<p class="cardMain__txt mt-3">${item.excerpt}</p>`;
                }
                html += `<div class="btn-group mt-3">`;
                if(item.direccion){
                  html += `<p class="listRrss__link mb-2 d-flex align-items-center">
                            <i class="fas fa-map-marker-alt mr-2"></i> ${item.direccion}
                          </p>`;
                }
                if(item.telefono){
                  html += `<p class="mb-2 d-flex align-items-center">
                            <a class="listRrss__link" href="tel:${item.telefono}"><i class="fas fa-phone-alt mr-2"></i> ${item.telefono}</a>
                          </p>`;
                }
                if (item.email) {
                  html += `<p class="mb-3 d-flex align-items-center">
                            <a class="listRrss__link" href="mailto:${item.email}"><i class="fas fa-envelope mr-2"></i> ${item.email}</a>
                          </p>`;
                }

                html += `<ul class="listRrss d-flex justify-content-center">`;

                if(item.url_website){
                  html += `<li class="ml-3">
                            <a class="listRrss__link" href="${item.url_website}" target="_blank"><i class="fas fa-globe"></i></a>
                          </li>`;
                }                
                if(item.facebook){
                  html +=  `<li class="ml-3">
                              <a class="listRrss__link" href="${item.facebook}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>`;
                }
                if(item.instagram){
                  html += `<li class="ml-3">
                            <a class="listRrss__link" href="${item.instagram}" target="_blank"><i class="fab fa-instagram"></i></a>
                          </li>`;
                }
                if(item.twitter){
                  html += `<li class="ml-3">
                            <a class="listRrss__link" href="${item.twitter}" target="_blank"><i class="fab fa-twitter"></i></a>
                          </li>`;
                }
                html +=
                        `</ul>
                        </div>                      
                      </div>
                    </div>
                  </div>
                </div>`;
        });
        $('#resultado-organizate').html(html);
      },
      error: function(error){
        console.log(error);
      }
    });
  });
})(jQuery);
