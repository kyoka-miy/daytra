jQuery(function(){
    jQuery('.header-burger').on('click', function(){
    jQuery('.header-burger').toggleClass('is-open');
    jQuery('.header-drawer-menu').toggleClass('is-open');
    
  });

    const swiper = new Swiper(".f-swiper", {
        speed: 400,
        spaceBetween: 0,
        effect: "fade",
        loop: true,
        autoplay: {
            delay: 4000,
            // 変わるまでの秒数
            disableOnInteraction: false,
        },
        // ページネーションが必要なら追加
        pagination: {
          el: ".swiper-pagination",
          clickable: true
        },
        // ナビボタンが必要なら追加
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev"
        },
        breakpoints: {
            768: {
                spaceBetween: 0,
                height: 447
            }
        }
      });
    
    var theWrapper = document.getElementById('js-staff-swiperWrapper');
    const swiper2 = new Swiper(".s-swiper", {
        freeMode: true,
        speed: 15000,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 0,
            // 変わるまでの秒数
        },
        on: {
          slideChangeTransitionStart: function(){
          theWrapper.style.transitionTimingFunction = 'linear';
          }
        },
        breakpoints: {
            768: {
                spaceBetween: 20,
                slidesPerView: 4,
            },
            375: {
                slidesPerView: 1.84,
                spaceBetween: 10,
          }
        }
      });

    jQuery('.header-right-item-link').on('click', function(){
        // どれかがクリックされたら全てからアクティブクラスを削除
        // クリックされたものにだけクラス付与
        jQuery('.header-right-item-link').removeClass('is-active');
        jQuery(this).addClass('is-active');
    })
    jQuery(window).on('scroll', function(){
        if( 400 < jQuery(this).scrollTop()){
          jQuery('.to-top').addClass('is-show');
        }else{
          jQuery('.to-top').removeClass('is-show');
        }
    })
    
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

  // let $form = $('#js-contact-form')
  // $form.submit(function(e) { 
  //   $.ajax({ 
  //    url: $form.attr('action'), 
  //    data: $form.serialize(), 
  //    type: "POST", 
  //    dataType: "xml", 
  //    statusCode: { 
  //       0: function() { 
  //         //送信に成功したときの処理 
  //         $form.slideUp()
  //         $('#js-success').slideDown()
  //       }, 
  //       200: function() { 
  //         //送信に失敗したときの処理 
  //         $form.slideUp()
  //         $('#js-error').slideDown()
  //       }
  //     } 
  //   });
  //   return false; 
  // }); 
});

// $(function() {
//   $('.header-right-item-link').each(function(){
//       var $href = $(this).attr('href');
//       if(location.href.match($href)) {
//           $(this).addClass('is-active');
//       } else {
//           $(this).removeClass('is-active');
//       }
//   });
// });

// $(document).ready(function() {
//   if(location.pathname != "/") {
//       $('.header-right-item-link' + location.pathname.split("/")[1] + '"]').addClass('is-active');
//   } else $('.header-right-item-link:eq(0)').addClass('is-active');
// });
