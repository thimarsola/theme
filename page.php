<?php get_header(); ?>

<?php if ( is_page( 'Blog' ) ) : ?>
	<!-- highlight -->
	<?php get_template_part( 'template-parts/pages/blog/page', 'highlight' ); ?>
	<!-- end of highlight -->

	<!-- blog -->
	<?php get_template_part( 'template-parts/pages/blog/page', 'blog' ); ?>
	<!-- end of blog -->
<?php endif; ?>

<?php get_footer(); ?>
