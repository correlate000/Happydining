<?php get_header(); ?>

<?php
  global $post;
  $slug = $post->post_name;
?>

<div id="page" class="<?php echo $slug;?>">



  <?php if ( is_page('seasonal-events') ):?>
  <?php else: ?>
    <section id="mv">
    <?php get_template_part('parts-mv');?>
    </section>
  <?php endif; ?>


	<?php if ( is_page('service') ):?>
	<?php get_template_part('page/service');?>

<?php elseif ( is_page('happy-dining') ):?>
  <?php get_template_part('page/happy-dining');?>

<?php elseif ( is_page('flow') ):?>
  <?php get_template_part('page/flow');?>

<?php elseif ( is_page('softmeal') ):?>
  <?php get_template_part('page/softmeal');?>

<?php elseif ( is_page('seasonal-events') ):?>
  <?php get_template_part('page/seasonal-events');?>

<?php elseif ( is_page('bento') ):?>
  <?php get_template_part('page/bento');?>

<?php elseif ( is_page('customer-reviews') ):?>
  <?php get_template_part('page/customer-reviews');?>

<?php elseif ( is_page('blog') ):?>
  <?php get_template_part('page/blog');?>

<?php elseif ( is_page('contact') ):?>
  <?php get_template_part('page/contact');?>


<?php else: ?>




<main id="content" role="main">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<header class="header">
<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
</header>
<div class="entry-content" itemprop="mainContentOfPage">
<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</div>
</article>
<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
<?php endwhile; endif; ?>
</main>

<?php endif; ?>

<?php get_footer(); ?>
