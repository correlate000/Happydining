<?php
  global $post;
  $slug = $post->post_name;
?>

<div id="<?php echo $slug;?>">

<section id="s01">
<div class="inner">
<h3>About soft meal</h3>
<h2>ソフト食について</h2>
<p class="desc">電子レンジやスチーマーで加熱するだけの<br class="hidden-pc hidden-tab">簡単調理で美味しさを実現</p>
<div class="figure">
  <img src="<?php bloginfo('template_url'); ?>/img/page/<?php echo $slug;?>_s01_figure_01.png" class="hidden-sp">
  <img src="<?php bloginfo('template_url'); ?>/img/page/<?php echo $slug;?>_s01_figure_01_sp.png" class="hidden-pc hidden-tab">
</div>

</div>
</section>

<section id="s03">
  <div class="inner">
    <?php
    $args_news = array(
      'post_status' => 'publish',
      'post_type' => 'menu_ordersheet',
      'orderby'          => 'date',
      'order'            => 'ASC',
      'post__in' => array(1674),
      'posts_per_page' => 1,
    );
    $query = new WP_Query($args_news);
    ?>
    <?php
    if ($query->have_posts()) :
      while ($query->have_posts()) : $query->the_post();
      ?>

      <div class="figure item03">

        <img src="<?php bloginfo('template_url'); ?>/img/page/<?php echo $slug;?>_s03_figure_02.png" alt="ご利用の流れ" class="hidden-sp">
        <img src="<?php bloginfo('template_url'); ?>/img/page/<?php echo $slug;?>_s03_figure_02_sp.png" alt="ご利用の流れ" class="hidden-pc hidden-tab">

        <div class="downloadlink">
          <ul class="ordersheet">
            <li class="flex">
              <p class="title_downloadlink ordersheet">レシピ（カット＆盛り付け見本）</p>
              <p class="btn_downloadlink">
                <a href="<?php the_field('ソフト食レシピurl') ;?>" target="_blank">
                  <?php get_template_part('parts-btn_download');?>
                </a>
              </p>
            </li>
          </ul>
        </div>
      </div>
    <?php endwhile;endif;?>

  </div>
</section>

<section id="s06">
<div class="inner">
  <h3>Other products</h3>
  <h2>その他の商品</h2>

  <p class="title">行事食</p>
  <div class="lists flex">
    <div class="list">
      <p class="title">おせち</p>
      <p class="desc">彩り鮮やかなお節をご用意</p>
      <p class="thumb">
        <img src="<?php bloginfo('template_url'); ?>/img/page/<?php echo $slug;?>_s06_figure_01.png" alt="おせち　彩り鮮やかなお節をご用意">
      </p>
    </div>
    <div class="list">
      <p class="title">やわらか押し寿司セット</p>
      <p class="desc">お祝い事におすすめです</p>
      <p class="thumb">
        <img src="<?php bloginfo('template_url'); ?>/img/page/<?php echo $slug;?>_s06_figure_02.png" alt="やわらか押し寿司セット お祝い事におすすめです">
      </p>
    </div>

    <p class="title">単品【メイン・小鉢】</p>
    <div class="lists flex">
      <div class="list">
        <p class="title">単品【メイン・小鉢】</p>
        <p class="desc">1品目1日分単位から購入可能<br>(例)鯛ムース</p>
        <p class="thumb">
          <img src="<?php bloginfo('template_url'); ?>/img/page/<?php echo $slug;?>_s06_figure_03.png" alt="おせち　彩り鮮やかなお節をご用意">
        </p>
      </div>
      <div class="list">
        <p class="thumb blank">
          <img src="<?php bloginfo('template_url'); ?>/img/page/<?php echo $slug;?>_s06_figure_04.png" alt="やわらか押し寿司セット お祝い事におすすめです">
        </p>
      </div>

      <p class="hosoku">その他にも多数<br class="hidden-pc hidden-tab">商品を取り揃えております。<br>
詳細・価格につきましては<br class="hidden-pc hidden-tab">お問い合わせください。</p>


  </div>

</div>
</section>





</div>


</div>
