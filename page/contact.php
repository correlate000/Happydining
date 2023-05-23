<?php
  global $post;
  $slug = $post->post_name;
?>

<div id="<?php echo $slug;?>">

<section id="s01">
<div class="inner">
<h3>Contact</h3>
<h2>お問い合わせ</h2>
<p class="desc">サンプルのご依頼・弊社製品につきましては、<br class="hidden-sp">下記お電話番号、またはフォームにてお問い合わせください。</p>
<div class="btn_contact">
<a href="tel:0120918255">
  <img src="<?php bloginfo('template_url'); ?>/img/common/btn_contact.svg" alt="ご利用の流れ">
</a>
</div>
</section>

<section id="contactform">
  <div class="inner">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
  <?php the_content(); ?>
<?php endwhile; endif; ?>
</div>
</section>


</div>


</div>
