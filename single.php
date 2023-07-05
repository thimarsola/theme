<?php get_header(); ?>

<!-- hero -->
<?php get_template_part( 'template-parts/pages/page', 'hero', array( 'title' => get_the_title() ) ); ?>
<!-- end of hero -->

<!-- article -->
<?php get_template_part( 'template-parts/single/page', 'article' ); ?>
<!-- end of article -->

<?php get_footer(); ?>
