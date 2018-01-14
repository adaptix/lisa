<?php get_header(); ?>

<main><!-- Content begins here. -->


<!-- Area that contains 'blog-posts' begins here. -->

	<?php
		if ( have_posts() ) : while ( have_posts() ) : the_post();

		get_template_part( 'blog-posts', get_post_format() );

		endwhile; endif;
	?>

<!-- Area that contains 'blog-posts' ends here. -->


</main><!-- Content ends here. -->

<?php get_footer(); ?>
