<?php get_header(); ?>

<!-- hero -->
<?php get_template_part( 'template-parts/pages/page', 'hero', array( 'title' => single_cat_title( '', false ) ) ); ?>
<!-- end of hero -->

<!-- blog -->
<?php get_template_part( 'template-parts/pages/blog/page', 'blog' ); ?>
<!-- end of blog -->

<?php get_footer(); ?>
