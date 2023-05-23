<?php get_header(); ?>
<?php
  global $post;
  $slug = $post->post_name;
?>

<div id="page">

<section id="category">

  <h2>「<?php the_category(' '); ?>」カテゴリの記事一覧</h2>

  <?php
  $paged = get_query_var('paged') ? get_query_var('paged') : 1;
  $args = array(
  'post_status' => 'publish',
    'posts_per_page' => 4,
    'orderby'          => 'date',
    'order'            => 'desc',
    'post_status'      => 'publish',
    'paged' => $paged
  );
  $query = new WP_Query($args);
  ?>

  <?php
  if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
  ?>

  <div class="articles">
    <div class="article flex">
      <div class="leftbox">
        <p class="thumb">
          <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
          </a>
        </p>
      </div>
      <div class="rightbox">
        <p class="title"><?php the_title(); ?></p>
        <div class="row flex">
          <p class="date"><?php the_time('Y/m/d'); ?></p>
          <p class="category"><?php the_category(' '); ?></p>
        </div>
        <p class="desc"><?php echo mb_substr( get_the_excerpt(), 0, 100 ) . '...'; ?></p>
        <p class="btn_readmore">
          <a href="<?php the_permalink(); ?>">
          <img src="<?php bloginfo('template_url'); ?>/img/common/btn_readmore.svg" alt="記事を読む">
          </a>
        </p>
      </div>
    </div>
  </div>

<?php endwhile; endif; ?>
<?php
$args = array(
    'prev_text' => '前へ',
    'next_text' => '次へ',
    'end_size'     => 1,
    'mid_size'     => 1,
    'screen_reader_text' => ' ',
);
the_posts_pagination($args);
?>
</div>
</div>

</section>


</div>

<?php get_footer(); ?>
