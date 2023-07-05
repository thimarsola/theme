<!-- card -->
<article class="blog__row__card flex flex-col gap-8">
	<!-- image -->
	<div class="blog__row__card__image w-full h-60 overflow-hidden">
		<a href="<?php echo get_the_permalink(); ?>">
			<?php
			/**
			 * @param  array<int>  $args
			 */
			$id = $args['id'] ?? '';

			echo get_the_post_thumbnail(
				$id,
				'large',
				array( 'class' => 'w-full h-full object-cover object-center' )
			);
			?>
		</a>
	</div>
	<!-- end of image -->

	<!-- wrapper -->
	<div class="blog__row__card__wrapper">
		<!-- header -->
		<header class="blog__row__card__wrapper__header mb-8">
			<time class="text-sm text-neutral-400" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
				<?php echo ucfirst( get_the_date( 'F j, Y' ) ); ?>
			</time>

			<h3 class="mt-3 pl-6 font-medium text-xl text-neutral-900">
				<a
					class="link-primary-500"
					href="<?php echo get_the_permalink(); ?>">
					<?php echo get_the_title(); ?>
				</a>
			</h3>
		</header>
		<!-- end of header -->
	</div>
	<!-- end of wrapper -->
</article>
<!-- end of card -->
