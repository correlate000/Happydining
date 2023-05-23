<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/swiper.min.css">
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/lity.css">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.typekit.net/ptq4nvf.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<!-- Swiper CSS -->
<link
  rel="stylesheet"
  href="https://unpkg.com/swiper@7/swiper-bundle.min.css"
/>

<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script>
  (function(d) {
    var config = {
      kitId: 'fbw5gjx',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
</script>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/style.css">

<?php wp_head(); ?>
<script>
function submitStop(e){

  if (!e) var e = window.event;
  if(e.keyCode == 13)
  return false;
}
window.onload = function (){
  var list = document.getElementsByTagName("input");
  for(var i=0; i<list.length; i++){
    if(list[i].type == 'email' || list[i].type == 'tel' || list[i].type == 'password'|| list[i].type == 'text'|| list[i].type == 'number'){
      list[i].onkeypress = function (event){
        return submitStop(event);
      };
    }
  }
}
</script>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="wrapper" class="hfeed">

<header id="header" role="banner">
  <div class="inner">
  <div class="row flex">
    <div id="logo" class="leftbox">
      <a href="<?php echo home_url(); ?>">
      <img src="<?php bloginfo('template_url'); ?>/img/common/logo.png" alt="福祉開発研究所ハッピーダイニング">
      </a>
    </div>

    <div class="rightbox hidden-tab hidden-sp">

    <div class="flex">

      <?php get_template_part('parts-detail');?>
      <?php get_template_part('parts-btn_cta');?>
      <?php get_template_part('parts-btn_sns');?>

    </div>
  </div>

  <div class="hidden-pc">
    <span class="nav_toggle">
  <i></i>
  <i></i>
  <i></i>
</span>
  </div>

  </div>
</div>

</header>


<div id="container">
  <div class="inner">

    <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
    <?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
    <div id="search"><?php get_search_form(); ?></div>
    <div class="btn hidden-pc">
            <div class="flex">
        <?php get_template_part('parts-btn_cta');?>
        <?php get_template_part('parts-btn_sns');?>
        <?php get_template_part('parts-detail');?>
    </div>
    </div>
    </nav>

    <script type="text/javascript">
    $('.nav_toggle').on('click', function () {
$('.nav_toggle, nav').toggleClass('show');
});
    </script>
