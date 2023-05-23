<?php
  global $post;
  $slug = $post->post_name;
?>

<div id="<?php echo $slug;?>">
<section id="s01">
<div class="inner">
<h3>Happy Dining report</h3>
<h2>ハッピーダイニング通信</h2>
<p class="desc">ご入居さまが、<br class="hidden-pc hidden-tab">安心して暮らすための豆知識や健康情報<br>
話題のニュースなどを<br class="hidden-pc hidden-tab">自由に呟いております。</p>
</div>
</section>

<section id="blog-content">
<div class="inner">

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
        <p class="desc hidden-sp"><?php echo mb_substr( get_the_excerpt(), 0, 100 ) . '...'; ?></p>
        <p class="btn_readmore hidden-sp">
          <a href="<?php the_permalink(); ?>">
          <img src="<?php bloginfo('template_url'); ?>/img/common/btn_readmore.svg" alt="記事を読む">
          </a>
        </p>
      </div>
      <p class="desc hidden-pc hidden-tab"><?php echo mb_substr( get_the_excerpt(), 0, 44 ) . '...'; ?></p>
      <p class="btn_readmore hidden-pc hidden-tab">
        <a href="<?php the_permalink(); ?>">
        <img src="<?php bloginfo('template_url'); ?>/img/common/btn_readmore.svg" alt="記事を読む">
        </a>
      </p>
    </div>

  </div>
<?php endwhile; endif; ?>

<div class=" navigation pagination">
  <div class="nav-links">
    <?php if ($query->max_num_pages > 1) : ?>
    <?php
      $limitnum = 999999999;
      echo '<div class="p-blog__pager">';
      echo paginate_links(array(
        'base'         => str_replace($limitnum, '%#%', esc_url(get_pagenum_link($limitnum))),
        'format'       => '',
        'current'      => max(1, get_query_var('paged')),
        'total'        => $query->max_num_pages,
        'prev_text' => '前へ',
        'next_text' => '次へ',
        'type'         => 'list',
      'end_size'     => 1,
      'mid_size'     => 1
      ));
      echo '</div>';
    ?>
    <?php endif; ?>
</div>
</div>
</div>
</section>
</div>


</div>
