<!doctype html>
<html lang="<?php echo SITE['lang']; ?>" itemscope itemtype="https://schema.org/Article">

<head>
	<meta charset="utf-8">
	<link rel="canonical" href="<?php echo esc_url( get_current_page_url() ); ?>">
	<base href="<?php echo get_home_url(); ?>">
	<link rel="alternate" href="<?php echo esc_url( get_current_page_url() ); ?>" hreflang="x-default">

	<title><?php echo get_title_head(); ?></title>

	<meta name="keywords" content="<?php echo get_keywords(); ?>">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="<?php echo get_description(); ?>">
	<meta name="publisher" content="<?php echo DEV['name']; ?>">

	<!-- REGION -->
	<meta name="geo.region" content="<?php echo REGION['region']; ?>">
	<meta name="geo.placename" content="<?php echo REGION['placename']; ?>">
	<meta name="geo.position" content="<?php echo REGION['lat'] . ';' . REGION['long']; ?>">
	<meta name="ICBM" content="<?php echo REGION['lat'] . ', ' . REGION['long']; ?>">

	<!-- ROBOTS -->
	<meta name="robots" content="index, follow">
	<meta name="googlebot" content="index, follow">
	<meta name="rating" content="General">
	<meta name="revisit-after" content="7 days">

	<meta name="author" content="<?php echo SITE['name']; ?> - <?php echo SITE['domain']; ?>">
	<link rel="shortcut icon" href="<?php echo get_image( 'favicon.svg', 'svg' ); ?>" type="image/x-icon">
	<link rel="apple-touch-icon" href="<?php echo get_image( 'favicon.svg', 'svg' ); ?>">
	<meta name="theme-color" content="#ffffff">

	<!-- OPEN GRAPH -->
	<meta property="og:locale" content="<?php echo SITE['locale']; ?>">
	<meta property="og:region" content="Brasil">
	<meta property="og:title" content="<?php echo SITE['name']; ?>">
	<meta property="og:image" content="
	<?php
	echo( ! is_single() ? get_image( SITE['image'] ) :
		get_the_post_thumbnail_url( get_the_ID(), 'share' ) );
	?>
		">
	<meta property="og:image:type" content="image/png">
	<meta property="og:image:width" content="700">
	<meta property="og:image:height" content="500">
	<meta property="og:type" content="article">
	<meta property="og:url" content="<?php echo esc_url( get_current_page_url() ); ?>">
	<meta property="og:description" content="<?php echo get_description(); ?>">
	<meta property="og:site_name" content="<?php echo SITE['name']; ?>">

	<!-- SCHEMA.ORG -->
	<meta itemprop="name" content="<?php echo SITE['name']; ?>">
	<meta itemprop="description" content="<?php echo get_description(); ?>">
	<meta itemprop="image" content="
<?php
	echo( ! is_single() ? get_image( SITE['image'] ) :
		get_the_post_thumbnail_url( get_the_ID(), 'share' ) );
	?>
	">
	<meta itemprop="url" content="<?php echo esc_url( get_current_page_url() ); ?>">
	<meta itemprop="author" content="<?php echo DEV['name']; ?>">
	<meta itemprop="headline" content="<?php echo get_title_head(); ?>">

	<!-- TWITTER -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:domain" content="<?php echo SITE['domain']; ?>">
	<meta name="twitter:title" content="<?php echo SITE['name']; ?>">
	<meta name="twitter:description" content="<?php echo get_description(); ?>">
	<meta name="twitter:image" content="
<?php
	echo( ! is_single() ? get_image( SITE['image'] ) :
		get_the_post_thumbnail_url( get_the_ID(), 'share' ) );
	?>
	">
	<meta name="twitter:url" content="<?php echo esc_url( get_current_page_url() ); ?>">

	<!-- font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@400;500;600;700&family=Kodchasan:wght@400;500;600;700&display=swap"
		rel="stylesheet">

	<!-- standard -->
	<?php
	wp_head();
	if ( ! empty( SITE['gtm'] ) ) :
		?>

		<!-- Google Tag Manager -->
		<script>
						(function(w, d, s, l, i) {
								w[l] = w[l] || [];
								w[l].push({
										'gtm.start': new Date().getTime(),
										event: 'gtm.js',
								});
								var f = d.getElementsByTagName(s)[0],
										j = d.createElement(s),
										dl = l != 'dataLayer' ? '&l=' + l : '';
								j.async = true;
								j.src =
										'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
								f.parentNode.insertBefore(j, f);
						})(window, document, 'script', 'dataLayer', '<?php echo SITE['gtm']; ?>');
		</script>
		<!-- End Google Tag Manager -->

	<?php endif; ?>
</head>

<body id="home">
<?php if ( ! empty( SITE['gtm'] ) ) : ?>
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo SITE['gtm']; ?>" height="0" width="0"
				style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->
<?php endif; ?>

<h1 class="hidden"><?php echo get_title_head(); ?></h1>

<?php if ( ! is_404() ) : ?>

<!-- header -->
	<?php get_template_part( 'template-parts/header/header', 'header' ); ?>
<!-- end of header -->

<!-- whatsapp -->
	<?php get_template_part( 'template-parts/header/header', 'whatsapp' ); ?>
<!-- end of whatsapp -->

<!-- cookies -->
	<?php get_template_part( 'template-parts/header/cookies' ); ?>

<!-- end of cookies -->

<!-- main -->
<main>
	<?php endif ?>
