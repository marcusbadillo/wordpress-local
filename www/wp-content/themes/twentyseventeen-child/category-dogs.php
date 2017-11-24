<?php get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


<?php if ( have_posts() ) {
    while ( have_posts() ) {

        the_post(); ?>
        <a href="index.php?p=<?php the_ID(); ?>">
          <h2><?php the_title(); ?></h2>
        </a>
        <?php the_content(); ?>

    <?php }
}

 ?>

</main>
</div>
</div>
<?php get_footer(); ?>
