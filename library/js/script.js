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
})