(function($) {
    "use strict";

    // backtop functions
    $( '.backtotop' ).on( 'click', function () {
      $( 'html, body' ).animate( { scrollTop: 0 }, 800 );
      return false;
    });

    $( window ).on( 'scroll', function () {
      if ( $( this ).scrollTop() > 100 ) {
        $( '.backtotop' ).fadeIn( 1000, function() {
          $( 'span' , this ).fadeIn( 100 );
        });
      } else {
        $( '.backtotop' ).fadeOut( 1000, function() {
          $( 'span' , this ).fadeOut( 100 );
        });
      }
    });
    // end function backtop
    // menu top
    $('.mobile-menu .menu-item-has-children, .vertical-mega-mobile-menu .menu-item-has-children').prepend('<i class="fa fa-angle-down"></i>');

    $('.mobile-menu .menu-item-has-children > i, .vertical-mega-mobile-menu .menu-item-has-children > i').click(function(event) {
      $(this).parent().toggleClass('active');
    });

    $('#menu-toggle, .mobile-menu-container .close-menu').click(function(event) {
       $('.site').toggleClass('mobile-menu-active');
    });

    $('#mega-menu-toggle, .vertical-mega-mobile-menu .close-menu').click(function(event) {
       $('.site').toggleClass('vertical-mega-mobile-menu-active');
    });

    $('.site .overlay').click(function(event) {
        $('.site').removeClass('vertical-mega-mobile-menu-active');
    });

    $('.site .overlay').click(function(event) {
        $('.site').removeClass('mobile-menu-active');
    });

    // menu sidebar 
    var MenuChildren = $( '.sidebar .menu-item-has-children' );
    MenuChildren.children( 'a' ).after( '<div class="touch"><i class="fa fa-angle-down"></i></div>' );
    MenuChildren.on( 'click', '.touch', function(e) {
        e.stopPropagation();
        $( this ).parent( '.menu-item ' ).toggleClass( 'active' );
        // $( ".menu-item.active > .sub-menu " ).toggle( "slow" );
    });
    
    // add product
    // Increase
    jQuery(document).on('click', '.qty-plus', function(e) {
      e.preventDefault();
      var quantityInput = jQuery(this).parents('.quantity').find('input.qty'),
        newValue = parseInt(quantityInput.val(), 10) + 1,
        maxValue = quantityInput.data('max') ? parseInt(quantityInput.data('min'), 10) : 9999999999;

      if ( newValue <= maxValue ) {
        quantityInput.val(newValue);
        quantityInput.change();
      }
    });

    // Decrease
    jQuery(document).on('click', '.qty-minus', function(e) {
      e.preventDefault();
      var quantityInput = jQuery(this).parents('.quantity').find('input.qty'),
        newValue = parseInt(quantityInput.val(), 10) - 1,
        minValue = quantityInput.data('min') ? parseInt(quantityInput.data('min'), 10) : 1;

      if ( newValue >= minValue ) {
        quantityInput.val(newValue);
        quantityInput.change();
      }
    });

    // tooltip product
    if ( rt_main.tooltip_on_off ) {
        $('.site-main').tooltip({
            track: true,
            items: '[data-tooltip]',
            content: function() {
                var tooltip_json = $(this).data( 'tooltip' );
                var title = $(this).parent( '.product_item' ).find('.rt_woocommerce-loop-product__title a').text();
                var price = $(this).parent( '.product_item' ).find('.price').html();
                var html = '';

                if ( rt_main.tooltip_image ) {
                    html += '<div class="tooltip_image"><img src="' + tooltip_json.image + '" alt=""></div>';
                }

                if ( rt_main.tooltip_title ) {
                    html +=  '<div class="tooltip_title">' + title + '</div>';
                }

                if ( rt_main.tooltip_price ) {
                    html += '<div class="tooltip_price">' + price + '</div>';
                }

                return html;
            }
        });
    }

$('.xzoom-thumbs').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
    
$('.related .list-unstyled').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
 jQuery('.home-product .woocommerce').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});

   // $('.home-product ul').owlCarousel({
   //      items: 4,
   //      margin: 20,
   //      loop: true,
   //      center: false,
   //      autoplay:true,
   //      autoplayTimeout:30000,
   //      autoplaySpeed: 3000,
   //      navText: [
   //      '<i class="fa fa-angle-left"></i>',
   //      '<i class="fa fa-angle-right"></i>'
   //      ],
   //      dots: false,
   //      lazyLoad: true,
   //      lazyContent: true,
   //      responsive: {
   //        320: {
   //          items: 2
   //        },
   //        480: {
   //          items: 3
   //        },
   //        768: {
   //          items: 4
   //        },
   //        1200: {
   //          items: 4
   //        }
   //             },
   //           // URLhashListener: URLhashListener == "true" ? true : false,
   //   });

   //    $('.aowl-carousel').owlCarousel({
   //      items: 3,
   //       autoplay:true,
   //       autoplayTimeout:30000,
   //      margin: 20,
   //      loop: true,
   //      center: false,
   //      autoplaySpeed: 3000,
   //      navText: [
   //      '<i class="fa fa-angle-left"></i>',
   //      '<i class="fa fa-angle-right"></i>'
   //      ],
   //      dots: false,
   //      lazyLoad: true,
   //      lazyContent: true,
   //      responsive: {
   //        320: {
   //          items: 2
   //        },
   //        480: {
   //          items: 3
   //        },
   //        768: {
   //          items: 3
   //        },
   //        1200: {
   //          items: 3
   //        }
   //             },
   //           // URLhashListener: URLhashListener == "true" ? true : false,
   //   });
   //      $('.xzoom-thumbs').owlCarousel({
   //      items: 3,
   //       autoplay:true,
   //       autoplayTimeout:30000,
   //      margin: 20,
   //      loop: true,
   //      center: false,
   //      autoplaySpeed: 3000,
   //      navText: [
   //      '<i class="fa fa-angle-left"></i>',
   //      '<i class="fa fa-angle-right"></i>'
   //      ],
   //      dots: false,
   //      lazyLoad: true,
   //      lazyContent: true,
   //      responsive: {
   //        320: {
   //          items: 2
   //        },
   //        480: {
   //          items: 3
   //        },
   //        768: {
   //          items: 3
   //        },
   //        1200: {
   //          items: 3
   //        }
   //             },
   //           // URLhashListener: URLhashListener == "true" ? true : false,
   //   });

// jQuery('.product_cate_tab .woocommerce').owlCarousel({
//     loop:true,
//     margin:20,
//     nav:true,
//     responsive:{
//         0:{
//             items:1
//         },
//         600:{
//             items:3
//         },
//         1000:{
//             items:5
//         }
//     }
// })


 $('.owl-carouselsssss .product-style').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});  

 $('.new-home .list-news').slick({
  dots: false,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});  

$(document).ready(function(){
  
  $('ul.tabs li').click(function(){
    var tab_id = $(this).attr('data-tab');

    $('ul.tabs li').removeClass('current');
    $('.tab-content').removeClass('current');

    $(this).addClass('current');
    $("#"+tab_id).addClass('current');
  })

})
    jQuery('#grid').click(function() {
        jQuery(this).addClass('active');
        jQuery('#list').removeClass('active');
        // jQuery('#rt_grid_cart').removeClass('rt_add_to_cart_list');
        // jQuery('#rt_grid_cart').addClass('rt_add_to_cart');
        jQuery('ul.rt-view').fadeOut(300, function() {
            jQuery(this).addClass('grid').removeClass('list').fadeIn(300);
        });
        return false;
    });

    jQuery('#list').click(function() {
        jQuery(this).addClass('active');
        jQuery('#grid').removeClass('active');
        // jQuery('#rt_grid_cart').removeClass('rt_add_to_cart');
        // jQuery('#rt_grid_cart').addClass('rt_add_to_cart_list');
        jQuery('ul.rt-view').fadeOut(300, function() {
            jQuery(this).removeClass('grid').addClass('list').fadeIn(300);
        });
        return false;
    });
    
})(jQuery);

