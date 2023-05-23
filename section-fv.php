
<div class="fv">
  <div class="swiper-container">
  <div class="swiper-wrapper">
    <div class="swiper-slide">
      <div class="s-right2-wrap">
        <img src="<?php bloginfo('template_url'); ?>/img/index/fv.png" class="hidden-sp">
        <img src="<?php bloginfo('template_url'); ?>/img/index/fv_sp.png" class="hidden-pc hidden-tab">
        <div class="title s-right2-sub">
          <p>創業50年介護福祉施設の<br>
            「建物のかかりつけ医」が<br>
            お届けする食事提供サービス</p>
          </div>
      </div>
    </div>
    <div class="swiper-slide">
      <div class="s-right2-wrap">
        <img src="<?php bloginfo('template_url'); ?>/img/index/fv_02.png" class="hidden-sp">
        <img src="<?php bloginfo('template_url'); ?>/img/index/fv_02_sp.png" class="hidden-pc hidden-tab">
        <div class="title s-right2-sub">
          <p>美味しいを簡単に。<br>
            完全調理済み冷凍食材
            </p>
          </div>
      </div>
    </div>
  </div>
  <div class="swiper-pagination"></div>
  </div>
  </div>

  <script>
  var mySwiper = new Swiper ('.swiper-container', {
  loop: true,
  autoplay: {
      delay: 8000,
  },
  speed: 1500,
  pagination: {
      el: '.swiper-pagination',
      clickable: true //この行を追記する
  },

  navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
  },
})
  </script>
