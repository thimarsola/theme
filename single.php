<?php get_header(); ?>

<!-- hero -->
<?php get_template_part( 'template-parts/pages/content', 'hero', array( 'title' => get_the_title() ) ); ?>
<!-- end of hero -->

<!-- article -->
<?php get_template_part( 'template-parts/single/content', 'article' ); ?>
<!-- end of article -->

<!-- cta -->
<?php get_template_part( 'template-parts/home/content', 'cta' ); ?>
<!-- end of cta -->

<?php get_footer(); ?>
