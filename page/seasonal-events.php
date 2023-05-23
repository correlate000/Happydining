<?php
  global $post;
  $slug = $post->post_name;
?>

<div id="<?php echo $slug;?>">

<section id="s02">
<div class="inner">
  <h3>Seasonal Events</h3>
  <h2>行事食</h2>
  <div class="seasonal-events">
    <p class="title">月に１回以上、行事食を組み込んでおります。</p>
    <p class="desc">月１回以上、行事食をご用意。<br>
    通常の昼食と同価格でご提供いたします。<br>
    ご利用者様にお食事をより楽しんでいただけるよう、<br>
    様々な行事食をご用意いたします。</p>
  </div>
</div>

</section>



<section id="s06">
<div class="inner">
  <div class="lists flex">
    <?php
    $args_news = array(
      'post_status' => 'publish',
      'post_type' => 'seasonal_events',
      'orderby'          => 'date',
      'order'            => 'DESC',
      'posts_per_page' => -1,
    );
    $query = new WP_Query($args_news);
    ?>
    <?php
    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();
      ?>

    <div class="list">
      <p class="title"><?php the_title(); ?></p>
      <p class="thumb">
        <a href="<?php the_field('pdf表示画像') ;?>" target="_blank">
        <img src="<?php the_field('pdf表示画像') ;?>" alt="<?php the_title(); ?>">
        </a>
      </p>
      <p class="btn_downloadlink">
        <a href="<?php the_field('pdf表示画像') ;?>" target="_blank">
          <?php get_template_part('parts-btn_download');?>
        </a>
      </p>
    </div>

  <?php endwhile;endif;?>


  </div>

</div>
</section>

</div>


</div>
