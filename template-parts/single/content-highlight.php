<!-- card -->
<a
	class="link-primary-500 text-neutral-900"
	href="<?php echo get_the_permalink(); ?>"
	title="Leia esse artigo"
>
	<div class="sidebar__row__highlight__wrapper__card flex gap-5">
		<!-- image -->
		<div class="sidebar__row__highlight__wrapper__card__image w-20 h-20 rounded-sm overflow-hidden">
			<img
				src="<?php echo( get_the_post_thumbnail_url() ); ?>"
				alt="<?php echo( get_the_title() ); ?>"
				class="w-full h-full object-cover object-center"
				loading="lazy"
			>
		</div>
		<!-- end of image -->

		<!-- content -->
		<div class="sidebar__row__highlight__wrapper__card__content flex-1">
			<!-- header -->
			<div class="sidebar__row__highlight__wrapper__card__content__header">
				<h4 class="font-bold text-sm leading-tight">
					<?php echo get_the_title(); ?>
				</h4>

				<time class="mt-1 text-sm text-neutral-400 leading-none" datetime="
				<?php
				echo get_the_date( 'Y-m-d' );
				?>
				">
					<?php echo get_the_date( 'j \d\e F \d\e Y' ); ?>
				</time>
			</div>
			<!-- end of header -->
		</div>
		<!-- end of content -->
	</div>
</a>
<!-- end of card -->
