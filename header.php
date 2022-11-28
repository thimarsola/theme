<!doctype html>
<html lang="<?= SITE["lang"]; ?>" itemscope itemtype="https://schema.org/Article">

<head>
    <meta charset="utf-8">

    <!--CANONICAL-->
    <base href="<?= get_home_url(); ?>">
    <link rel="alternate" href="<?= (is_home() || is_404() || is_search() ? get_home_url() : get_page_link()); ?>" hreflang="x-default">

    <title><?= (is_home() || is_404() || is_search() ? SITE['name'] : (is_category() ? single_cat_title() . " - " . SITE["name"] : get_the_title() . " - " . SITE["name"])); ?></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= description(); ?>">
    <meta name="publisher" content="<?= DEV['name']; ?>">

    <!-- REGION -->
    <meta name="geo.region" content="<?= REGION["region"]; ?>">
    <meta name="geo.placename" content="<?= REGION["placename"]; ?>">
    <meta name="geo.position" content="<?= REGION["position"]; ?>">
    <meta name="ICBM" content="<?= REGION["icbm"]; ?>">

    <!-- ROBOTS -->
    <meta name="robots" content="index, follow">
    <meta name="googlebot" content="index, follow">
    <meta name="rating" content="General">
    <meta name="revisit-after" content="7 days">

    <meta name="author" content="<?= SITE["name"]; ?> - <?= SITE["domain"]; ?>">
    <link rel="shortcut icon" href="<?= image('favicon.svg', 'svg'); ?>" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?= image('favicon.svg', 'svg'); ?>">
    <meta name="theme-color" content="#ffffff">

    <!-- OPEN GRAPH -->
    <meta property="og:locale" content="<?= SITE["locale"]; ?>">
    <meta property="og:region" content="Brasil">
    <meta property="og:title" content="<?= SITE["name"] ?>">
    <meta property="og:image" content="<?= (!is_single() ? get_template_directory_uri() . '/assets/images/' . SITE["image"] : get_the_post_thumbnail_url(get_the_ID(), 'share')); ?>">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="700">
    <meta property="og:image:height" content="500">
    <meta property="og:type" content="article">
    <meta property="og:url" content="<?= (is_home() || is_404() || is_search() ? get_home_url() : get_page_link()); ?>">
    <meta property="og:description" content="<?= description(); ?>">
    <meta property="og:site_name" content="<?= SITE["name"] ?>">

    <!-- SCHEMA.ORG -->
    <meta itemprop="name" content="<?= SITE["name"] ?>">
    <meta itemprop="description" content="<?= description(); ?>">
    <meta itemprop="image" content="<?= (!is_single() ? get_template_directory_uri() . '/assets/images/' . SITE["image"] : get_the_post_thumbnail_url(get_the_ID(), 'share')); ?>">
    <meta itemprop="url" content="<?= (is_home() || is_404() || is_search() ? get_home_url() : get_page_link()); ?>">
    <meta itemprop="author" content="<?= DEV['name']; ?>">
    <meta itemprop="headline" content="<?= (is_home() || is_404() || is_search() ? SITE['name'] : (is_category() ? single_cat_title() . " - " . SITE["name"] : get_the_title() . " - " . SITE["name"])); ?>">

    <!-- TWITTER -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:domain" content="<?= SITE['domain']; ?>">
    <meta name="twitter:title" content="<?= SITE["name"] ?>">
    <meta name="twitter:description" content="<?= description(); ?>">
    <meta name="twitter:image" content="<?= (!is_single() ? get_template_directory_uri() . '/assets/images/' . SITE["image"] : get_the_post_thumbnail_url(get_the_ID(), 'share')); ?>">
    <meta name="twitter:url" content="<?= (is_home() || is_404() || is_search() ? get_home_url() : get_page_link()); ?>">

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- standard -->
    <?php wp_head(); ?>

    <?php if (SITE['gtm'] != null) : ?>

        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', '<?= SITE['gtm']; ?>');
        </script>
        <!-- End Google Tag Manager -->

    <?php endif; ?>
</head>

<body id="home">
    <?php if (SITE['gtm'] != null) : ?>
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=<?= SITE['gtm']; ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->
    <?php endif; ?>

    <h1 class="hidden">
        <?php
        if (is_home() || is_404()) {
            echo SITE['name'];
        } elseif (is_single()) {
            echo SITE['name'] . " - " . get_the_title();
        } elseif (is_category()) {
            echo single_cat_title() . " - " . SITE["name"];
        } else {
            echo get_the_title();
        }
        ?>
    </h1>

    <?php if (!is_404()) : ?>

        <!-- header -->
        <?php get_template_part('template-parts/header/header', 'header'); ?>
        <!-- end of header -->

        <!-- whatsapp -->
        <?php get_template_part('template-parts/header/header', 'whatsapp'); ?>
        <!-- end of whatsapp -->

        <!-- main -->
        <main>
        <?php endif ?>