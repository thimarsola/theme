<?php get_header(); ?>

	<!-- error -->
	<section class="error bg-white">
		<div class="container">

			<!-- header -->
			<header class="error__header">
				<h1>Oops!</h1>
				<p>Não conseguimos encontrar a página que você está procurando.</p>
			</header>
			<!-- end of header -->

			<!-- content -->
			<div class="error__content text-center">
				<a href="<?php echo esc_url( get_home_url() ); ?>" title="<?php echo SITE['name']; ?>" class="btn-primary 
				mx-auto">Voltar para o início</a>
			</div>
			<!-- end of content -->

		</div>
	</section>
	<!-- end of error -->

<?php get_footer(); ?>
