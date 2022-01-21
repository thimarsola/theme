<?php get_header(); ?>

<!-- error -->
<section class="error bg-blue-500">
    <div class="container">

        <!-- header -->
        <header class="error__header">
            <h1>Oops!</h1>
            <p><small>Não conseguimos encontrar a página que você está procurando.</small></p>
        </header>
        <!-- end of header -->

        <!-- content -->
        <div class="error__content">
            <a href="<?= get_home_url(); ?>" title="<?= SITE["name"]; ?>" class="btn btn-primary-500">Voltar para o início</a>
        </div>
        <!-- end of content -->

    </div>
</section>
<!-- end of error -->

<?php get_footer(); ?>