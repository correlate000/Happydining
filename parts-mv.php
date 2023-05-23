<?php
global $post;
$slug = $post->post_name;
?>

<div class="mv">
  <img src="<?php bloginfo('template_url'); ?>/img/page/mv_<?php echo $slug;?>.png" alt="<?php the_title(); ?>" class="hidden-sp">
  <img src="<?php bloginfo('template_url'); ?>/img/page/mv_<?php echo $slug;?>_sp.png" alt="<?php the_title(); ?>" class="hidden-pc hidden-tab">


  <?php if ( is_page('happy-dining') ):?>
    <div class="titlebox">
      <h2 class="title line2">ハッピーダイニング<br class="hidden-sp">with</h2>
    <h3 class="en">Happy Dining with</h3>
    </div>

  <?php elseif ( is_page('service') ):?>
    <div class="titlebox">
      <h2 class="title line2">サービス内容<br>ハッピーダイニング</h2>
    <h3 class="en">Service of Happy Dining</h3>
    </div>

  <?php elseif ( is_page('softmeal') ):?>
    <div class="titlebox">
      <h2 class="title"><?php the_title(); ?></h2>
      <h3 class="en">Soft Meal</h3>
    </div>

  <?php elseif ( is_page('customer-reviews') ):?>
    <div class="titlebox">
      <h2 class="title"><?php the_title(); ?></h2>
      <h3 class="en">Customer Reviews</h3>
    </div>

  <?php elseif ( is_page('blog') ):?>
    <div class="titlebox">
      <h2 class="title"><?php the_title(); ?></h2>
      <h3 class="en"><?php echo $slug;?></h3>
    </div>

  <?php elseif ( is_page('seasonal-events') ):?>


  <?php else: ?>

    <div class="titlebox">
      <h2 class="title"><?php the_title(); ?></h2>
      <h3 class="en"><?php echo $slug;?></h3>
    </div>

  <?php endif; ?>

</div>
