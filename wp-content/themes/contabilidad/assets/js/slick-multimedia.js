$('#lightbox .multimedia-items').slick({
  infinite: false,
  slidesToShow: 4,
  slidesToScroll: 4,
  arrows: true,
  prevArrow: "<img class='a-left control-c prev slick-prev' src='https://serviciosdigitalesperu.com/iquitos/wp-content/themes/wp-conoce-iquitos/assets/img/arrow-left.png'>",
  nextArrow:"<img class='a-right control-c next slick-next' src='https://serviciosdigitalesperu.com/iquitos/wp-content/themes/wp-conoce-iquitos/assets/img/arrow-right.png'>",
  responsive: [
    {
      breakpoint: 991,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
      }
    },
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
      }
    },    
  ]
});