<?php get_header(); ?>

<?php get_template_part('section-fv'); ?>
<?php get_template_part('parts-bnr'); ?>


<section id="recruit">
  <h3>Recruit</h3>
  <h2>求人情報</h2>
<p>
  <a href="https://jp.indeed.com/viewjob?jk=18356b99b8e06bed&from=mobRdr&prevUrl=http%3A%2F%2Fjp.indeed.com%2Fm%2Fjobs%3Fq%3D%25E6%25A0%25AA%25E5%25BC%258F%25E4%25BC%259A%25E7%25A4%25BE%25E7%25A6%258F%25E7%25A5%2589%25E9%2596%258B%25E7%2599%25BA%25E7%25A0%2594%25E7%25A9%25B6%25E6%2589%2580%26vjk%3D18356b99b8e06bed%26l%3D%25E6%259D%25B1%25E4%25BA%25AC%25E9%2583%25BD%2B%25E5%258D%2583%25E4%25BB%25A3%25E7%2594%25B0%25E5%258C%25BA&utm_source=%2Fm%2F&utm_medium=redir&utm_campaign=dt" target="_blank">
    <img src="<?php bloginfo('template_url'); ?>/img/index/btn_recruit.svg" alt="">
  </a>
</p>
</section>

<section id="HappyDining">
<?php get_template_part('section-HappyDining'); ?>
</section>

<section id="s01">
  <div class="inner">
    <h3>Would you like to review it?</h3>
    <h2>お食事提供の在り方を見直してみませんか？</h2>
    <div class="figure">
      <img src="<?php bloginfo('template_url'); ?>/img/page/service_s01_figure_01.svg" class="hidden-sp" alt="">
      <img src="<?php bloginfo('template_url'); ?>/img/page/service_s01_figure_01_sp.svg" class="hidden-pc hidden-tab" alt="">
    </div>
    <p class="desc">ハッピーダイニングの<br class="hidden-pc hidden-tab"><span class="em">完全調理済冷凍食材</span>が<br class="hidden-pc hidden-tab">そんなお悩みを解決します。<br><br class="hidden-pc hidden-tab">
      「美味しく、簡単に、健康的なお食事を」</p>
    </div>
  </section>


<section id="WhatisHappyDining">
<?php get_template_part('section-WhatisHappyDining'); ?>
</section>

<section id="s04">
  <div class="inner">
    <h3>Introductory simulation</h3>
    <h2>導入シミュレーション</h2>
    <p><span>労働コスト</span>を大幅に削減<br>仕込み・買い出しは不要。献立ごとに納品されるので、検品の手間もなし。</p>
    <img src="<?php bloginfo('template_url'); ?>/img/page/service_s04_figure_01.png" class="hidden-sp">
    <img src="<?php bloginfo('template_url'); ?>/img/page/service_s04_figure_01_sp.png" class="hidden-pc hidden-tab">
  </div>
</section>

<section id="Menu_Ordersheet">
<?php get_template_part('section-Menu_Ordersheet'); ?>
</section>


<?php get_footer(); ?>
