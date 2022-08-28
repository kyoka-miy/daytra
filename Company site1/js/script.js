const swiper = new Swiper('.swiper-container', {
    // Optional parameters
    //一枚目に戻る
    loop: true,
  
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable:true
    },
  
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
  });

new WOW().init();
// ドロワー
jQuery('.drawer-icon').on('click', function(e){
  e.preventDefault();

  jQuery('.drawer-icon').toggleClass('is-active');
  jQuery('.drawer-content').toggleClass('is-active');
  jQuery('.drawer-background').toggleClass('is-active');
  // クラスを付けたり消したりする
  return false;
});

// ページ内スムースすくろーる
// 先頭が#のもの
jQuery('a[href^="#"]').on('click', function(){
  var header = jQuery('.header').innerHeight();
  // headerの高さを取得
  var id = jQuery(this).attr("href");
  // thisのhref#の中を取得
  var position = 0;
  // topボタン
  // topボタンには#のみが入っている
  if(id != '#'){
    position = jQuery(id).offset().top - header;
    // offsetで上からの長さを取得
  }

  jQuery('html, body').animate({
    scrollTop: position
    // 上からの長さpositionまでスクロールする
  },
  300);
  // かける時間
});
// トップボタン
jQuery(window).on('scroll', function(){
  if( 100 < jQuery(this).scrollTop()){
    jQuery('.to-top').addClass('is-show');
  }else{
    jQuery('.to-top').removeClass('is-show');
  }
})
// ヘッダーのクリックイベント
jQuery('.header__nav li a').on('click', function(){
  // どれかがクリックされたら全てからアクティブクラスを削除
  // クリックされたものにだけクラス付与
  jQuery('.header__nav li a').removeClass('is-active');
  jQuery(this).addClass('is-active');
});
// アコーディオン
jQuery('.qa-box__q').on('click', function(){
  jQuery(this).next().slideToggle();
  // 兄弟要素
  jQuery(this).children('.qa-box__icon').toggleClass('is-open');
  // +とーを変える
});

// モーダル閉じるボタン
//data属性
jQuery('.js-close-button').on('click', function(e){
// aタグ本来の動きは無効化
  e.preventDefault();
  var target = jQuery(this).data('target');
  jQuery(target).hide();
});
jQuery('.js-open-button').on('click', function(e){
  e.preventDefault();
  var target = jQuery(this).data('target');
  jQuery(target).show();
});