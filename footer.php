</div>
</div>
<div class="footermenu hidden-pc hidden-tab">
  <div class="flex">

  <?php get_template_part('parts-btn_cta');?>
  <?php get_template_part('parts-btn_tel');?>
</div>
</div>
<footer id="footer" role="contentinfo">
<div id="copyright">
&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?><br class="hidden-pc hidden-tab"> ALL RIGHTS RESERVED.
</div>
</footer>

<?php if ( is_page('contact') ):?>
<?php elseif ( is_page('thanks') ):?>
<?php else: ?>
  <!-- HTMLでバナーをマークアップ -->
  <div id="floating-banner" style="display: none; position: fixed; bottom: 10px; right: 10px;">
    <a href="https://food.swrc.co.jp/contact">
      <img src="https://food.swrc.co.jp/wp-content/uploads/2024/10/floatingbanner.png" alt="">
      </a>
  </div>

<?php endif; ?>
<!-- jQueryを読み込む -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var banner = $('#floating-banner');

    if (scroll >= $(window).height() / 2) {
        // 画面の半分の位置でバナーをふわっと表示
        banner.css({'opacity': '1', 'visibility': 'visible'}); // 透明度と表示状態を変更
    } else {
        // 画面の半分より上にスクロールしたらふわっと非表示
        banner.css({'opacity': '0', 'visibility': 'hidden'}); // 透明度と表示状態を変更
    }
});
</script>


</div>
<?php wp_footer(); ?>
</body>
</html>
