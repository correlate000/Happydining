<?php
$args_news = array(
'post_status' => 'publish',
'post_type' => 'top_menu',
'orderby'          => 'date',
'order'            => 'DESC',
'posts_per_page' => 2,
);
$query = new WP_Query($args_news);
?>

<ul>
  <?php
  if ($query->have_posts()) :
  while ($query->have_posts()) : $query->the_post();
  ?>
    <li class="flex">
      <p class="title_downloadlink">
        <?php the_title(); ?>
      </p>
      <p class="btn_downloadlink">
        <a href="<?php the_field('献立表ファイル') ;?>" target="_blank">
          <img src="<?php bloginfo('template_url'); ?>/img/common/btn_download.svg" alt="ダウンロード">
        </a>
      </p>
    </li>

<?php endwhile;endif;?>

</ul>
