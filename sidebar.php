<?php
$query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 3,
		'post__not_in'   => get_option( 'sticky_posts' ),
	)
);
?>
<aside class="sidebar">
	<!-- header -->
	<header class="sidebar__header hidden">
		<h2>Barra lateral</h2>
	</header>
	<!-- end of header -->

	<!-- row -->
	<div class="sidebar__row flex flex-col gap-14">
		<!-- highlight -->
		<div class="sidebar__row__highlight">
			<!-- header -->
			<header class="sidebar__row__highlight__header mb-6 pl-3">
				<h3 class="font-medium text-2xl text-neutral-900">Últimas publicações</h3>
			</header>
			<!-- end of header -->


			<!-- wrapper -->
			<div class="sidebar__row__highlight__wrapper grid grid-cols-1 gap-4">
				<?php
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						get_template_part( 'template-parts/single/content', 'highlight' );
					}
				} else {
					echo '<p class="text-sm">Não existem artigos publicados no momento</p>';
				}
				?>
			</div>
			<!-- end of wrapper -->
		</div>
		<!-- end of highlight -->

		<!-- categories -->
		<div class="sidebar__row__categories">
			<!-- header -->
			<header class="sidebar__row__categories__header mb-6 pl-3">
				<h3 class="font-medium text-2xl text-neutral-900">Categorias</h3>
			</header>
			<!-- end of header -->

			<!-- content -->
			<div class="sidebar__row__categories__content">
				<ul class="list-inside list-disc flex flex-col gap-2">
					<?php
					$categories = get_categories();
					foreach ( $categories as $category ) :
						?>
						<li>
							<a
								class="link-primary-500"
								href="<?php echo get_category_link( $category->term_id ); ?>"
							>
								<?php echo $category->name; ?>
							</a>
						</li>
					<?php endforeach; ?>
				</ul>
			</div>
			<!-- end of content -->
		</div>
		<!-- end of categories -->

		<!-- cta -->
		<div class="sidebar__row__cta p-6 pt-20 bg-neutral-100 rounded">
			<!-- header -->
			<header class="sidebar__row__cta__header mb-4">
				<p class="font-highlight text-sm text-neutral-900 uppercase">Precisando de ajuda?</p>
				<h3 class="mb-2 font-bold text-2xl text-neutral-900">Agende agora mesmo uma consulta para o seu Pet</h3>
				<div class="w-10 h-0_5 bg-primary-500"></div>
			</header>
			<!-- end of header -->

			<!-- wrapper -->
			<div class="sidebar__row__cta__wrapper text-justify">
				<p class="mb-6 text-sm">Entre em contato através do nosso WhatsApp e tire todas as suas dúvidas ou
					agende a sua consulta</p>

				<?php
				echo whatsapp_link(
					CONTACT['whatsapp_number'],
					CONTACT['whatsapp_message'],
					'Agende sua consulta',
					'btn-primary min-w-full rounded'
				);
				?>
			</div>
			<!-- end of wrapper -->
		</div>
		<!-- end of cta -->
	</div>
	<!-- end of row -->
</aside>
