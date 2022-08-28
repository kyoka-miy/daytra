
$(function(){
  jQuery('#js-toggle').on('click', function(){
    jQuery('.header-nav').toggleClass('active');
    jQuery('.burger-line').toggleClass('active');
    jQuery('.header-overlay').toggleClass('active');
  });

  jQuery('#js-nav-link, #js-overlay').on('click', function(){
    jQuery('.header-nav').removeClass('active');
    jQuery('.burger-line').removeClass('active');
    jQuery('.header-overlay').removeClass('active');
  });

// results
new Swiper( '.swiper-container', {
  speed: 400,
  spaceBetween: 40,
  width:274,
  loop: true,
  loopedSlides: 6,

  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true,
  },

  breakpoints: {
    768: {
      spaceBetween: 24,
      width: 400,
    }
  }
});

  //smoothscroll
  jQuery('a[href^="#"]').click(function(){
    let speed=300;
    // hrefで指定されたidを取得
    let id = jQuery(this).attr("href");
    // idの値が#のみだったらターゲットをhtmlタグにしてトップへ戻るようにする
    let target = jQuery("#" == id ? "html" : id);
    // ページのトップを基準にターゲットの位置を取得
    let position = jQuery(target).offset().top - $('#js-header').outerHeight();

    jQuery("html, body").animate(
        {
            scrollTop: position
        },
        speed
    );
    return false;
  });
  //アコーディオン
  jQuery('.qa-box__q').on('click', function(){
    jQuery(this).next().slideToggle();
    jQuery(this).children('.qa-box__icon').toggleClass('is-open');
  });

  // トップボタン
  jQuery(window).on('scroll', function(){
    if( 200 < jQuery(this).scrollTop()){
    jQuery('.to-top').addClass('is-show');
    }else{
    jQuery('.to-top').removeClass('is-show');
    }
  });
// form
  let $form = $('#js-form');

  $form.submit(function(e) { 
    $.ajax({ 
     url: $form.attr('action'), 
    data: $form.serialize(), 
    type: "POST", 
    dataType: "xml", 
      statusCode: { 
        0: function() { 
        //送信に成功したときの処理 
        $form.slideUp()
        $('#js-success').slideDown()
        }, 
        200: function() { 
        //送信に失敗したときの処理 
        $form.slideUp()
        $('#js-error').slideDown()      
        }
      }
    });
    return false; 
  }); 

  let $submit = $('#js-submit');
  $('#js-form input').on('change', function(){
    if(
      $('#js-form input[name="entry.674068540"]').val()!== "" &&
      $('#js-form input[name="entry.150476219"]').val()!== "" &&
      $('#js-form input[name="entry.1879344427"]').prop('checked') === true
    ){
     $submit.prop('disabled',false)    
    }else{
    $submit.prop('disabled',true)
    }
  });
  
});
