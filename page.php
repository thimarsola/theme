<?php get_header(); ?>

<?php if (is_page('Política de privacidade')) : ?>
    <!-- policy -->
    <?php get_template_part('template-parts/pages/page', 'policy'); ?>
    <!-- end of policy -->
<?php endif; ?>

<?php get_footer(); ?>