<?php

$args = array(
	'post_type'           => 'post',
	'post__in'            => get_option( 'sticky_posts' ),
	'posts_per_page'      => 3,
	'ignore_sticky_posts' => 1,
);

$query = new WP_Query( $args );

if ( ! is_paged() ) :
	?>
	<section class="highlight py-16">
		<div class="container">
			<!-- header -->
			<header class="highlight__header mb-8">
				<h2 class="font-medium text-4xl text-neutral-900">Publicações em Destaque</h2>
			</header>
			<!-- end of header -->

			<!-- row -->
			<div
				class="highlight__row grid <?php echo( ! $query->have_posts() ? 'grid-cols-1' : 'grid-cols-3' ); ?> gap-8">
				<?php
				if ( $query->have_posts() ) {
					while ( $query->have_posts() ) {
						$query->the_post();
						get_template_part(
							'template-parts/pages/blog/content',
							'highlight',
							array(
								'id' =>
									$query->post->ID,
							)
						);
					}
				} else {
					echo '<p class="text-center">Não existem artigos publicados no momento</p>';
				}
				wp_reset_postdata();
				?>
			</div>
			<!-- end of row -->
		</div>
	</section>
<?php endif; ?>
