<?php get_header(); ?>
<?php
  global $post;
  $slug = $post->post_name;
?>

<div id="single">


<div class="inner">
    <div class="article">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<h2 class="title"><?php the_title(); ?></h2>
<div class="row flex">
  <p class="date"><?php the_time('Y/m/d'); ?></p>
  <p class="category"><?php the_category(' '); ?></p>
</div>
<p class="thumb"><?php //the_post_thumbnail(); ?></p>
<div class="text">
<?php the_content(); ?>
</div>

<?php endwhile; endif; ?>
</div>

<div class="post__pagination">
    <?php $nextpost = get_adjacent_post(false, '', false); if ($nextpost) : ?>
    <div class="post__pagination__left">
        <a href="<?php echo get_permalink($nextpost->ID); ?>">
            <span class="post__pagination__left__img"><?php echo get_the_post_thumbnail($nextpost->ID); ?></span>
            <span class="post__pagination__left__text">«<?php echo esc_attr($nextpost->post_title); ?></span>
        </a>
    </div>
    <?php endif; ?>
    <?php $prevpost = get_adjacent_post(false, '', true); if ($prevpost) : ?>
    <div class="post__pagination__right">
        <a href="<?php echo get_permalink($prevpost->ID); ?>">
            <span class="post__pagination__right__img"><?php echo get_the_post_thumbnail($prevpost->ID); ?></span>
            <span class="post__pagination__right__text"><?php echo esc_attr($prevpost->post_title); ?>»</span>
        </a>
    </div>
    <?php endif; ?>
</div>


</div>
</div>
<?php get_footer(); ?>
