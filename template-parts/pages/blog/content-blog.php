<?php
$paged = ( get_query_var( 'paged' ) ) ? absint( get_query_var( 'paged' ) ) : 1;

$args = array(
	'post_type'      => 'post',
	'post__not_in'   => get_option( 'sticky_posts' ),
	'posts_per_page' => 9,
	'order'          => 'DESC',
	'paged'          => $paged,
);

if ( is_archive() ) {
	$category_name         = single_cat_title( '', false );
	$args['category_name'] = $category_name;
}

$query = new WP_Query( $args );
?>
<section class="blog py-16 <?php echo( is_paged() || is_archive() ? null : 'bg-primary-50' ); ?>">
	<div class="container">
		<!-- header -->
		<header class="blog__header mb-10 text-center">
			<h2 class="font-medium text-4xl text-neutral-900">Conheça os nossos artigos</h2>
		</header>
		<!-- end of header -->

		<!-- row -->
		<div class="blog__row grid <?php echo( ! $query->have_posts() ? 'grid-cols-1' : 'grid-cols-3' ); ?> gap-8">
			<?php
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					get_template_part(
						'template-parts/pages/blog/content',
						'card-blog',
						array(
							'id' =>
								$query->post->ID,
						)
					);
				}
			} else {
				echo '<p class="text-center">Não existem artigos publicados no momento</p>';
			}
			?>
		</div>
		<!-- end of row -->

		<?php if ( $query->max_num_pages > 1.0 ) : ?>
			<!-- pagination -->
			<div class="blog__pagination mt-10">
				<nav class="pagination__nav">
					<h2 class="hidden">Menu de Paginação</h2>

					<?php
					$big = 999999999;

					echo paginate_links(
						array(
							'base'      => str_replace( (string) $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format'    => '?paged=%#%',
							'current'   => max( 1, get_query_var( 'paged' ) ),
							'total'     => $query->max_num_pages,
							'prev_text' => '<i class="ri-arrow-left-s-line"></i>',
							'next_text' => '<i class="ri-arrow-right-s-line"></i>',
							'type'      => 'list',
							'mid_size'  => 1,
						)
					);
					?>
				</nav>
			</div>
			<!-- end of pagination -->
			<?php
			wp_reset_postdata();
		endif;
		?>
	</div>
</section>
