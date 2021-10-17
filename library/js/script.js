// //へっだー高さ
// jQuery(function ($) {
//   var height = jQuery('.l-header').height()
//   jQuery('body').css('margin-top', height)
// })

//オプションの定義（初期化の式より先に記述）
let options = {
  loop: true,
  autoplay: {
    delay: 4000,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    type: 'bullets',
    clickable: true,
  },
}

//初期化
let mySwiper = new Swiper('.swiper', options)

//ハンバーガー
jQuery(function ($) {
  jQuery('.hamburger').click(function () {
    jQuery(this).toggleClass('active')

    jQuery('html').removeClass('scroll-prevent')

    if (jQuery(this).hasClass('active')) {
      jQuery('.globalMenuSp').addClass('active')
      jQuery('html').addClass('scroll-prevent')
    } else {
      jQuery('.globalMenuSp').removeClass('active')
    }
  })
  jQuery('.mod-table-toggle .mod-table__head').on('click',function(){
    jQuery(this).toggleClass('open');
    jQuery(this).next('.mod-table__detail').slideToggle();
  });
});

// const topBtn = jQuery('#pagetop');
//   topBtn.hide();

//   // ボタンの表示設定
//   jQuery(window).scroll(function () {
//     if ($(this).scrollTop() > 70) {
//       // 指定px以上のスクロールでボタンを表示
//       topBtn.fadeIn();
//     } else {
//       // 画面が指定pxより上ならボタンを非表示
//       topBtn.fadeOut();
//     }
//   });
// // ボタンをクリックしたらスクロールして上に戻る
//   topBtn.click(function () {
//     ('body,html').animate({
//       scrollTop: 0
//     }, 300, 'swing');
//     return false;
//   });

jQuery(window).on("scroll", function($) {
  if (jQuery(this).scrollTop() > 100) {
    jQuery('#pagetop').show();
  } else {
    jQuery('#pagetop').hide();
  }
});

jQuery('#pagetop').click(function () {
  jQuery('body,html').animate({
    scrollTop: 0
  }, 500);
  return false;
});