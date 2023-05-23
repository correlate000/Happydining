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
</div>
<?php wp_footer(); ?>
</body>
</html>
