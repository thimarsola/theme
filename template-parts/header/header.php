<header class="header py-4 bg-neutral-800 z-50">
	<div class="container">
		<!-- row -->
		<div class="header__row flex justify-between items-center relative">
			<!-- wrapper -->
			<div class="header__row__wrapper">
				<!-- brand -->
				<div class="header__row__wrapper__brand">
					<a href="<?php echo ( is_home() ? '#home' : get_home_url() ); ?>" title="<?php echo SITE['name']; ?>">
						<img src="<?php echo get_image( 'logo' . sanitize_title( SITE['name'] ) . '.svg' ); ?>" alt="Logo <?php echo SITE['name']; ?>" loading="lazy">
					</a>
				</div>
				<!-- end of brand -->

				<!-- toggle -->
				<div class="header__row__wrapper__toggle p-4 bg-primary-500 rounded-md cursor-pointer shadow-2xl hidden">
					<!-- wrapper -->
					<button class="header__row__wrapper__toggle__wrapper h-full flex items-center justify-center flex-wrap flex-col gap-2" aria-expanded="false" aria-label="Menu de navegação">
						<span class="w-10 h-1 bg-white rounded-full"></span>
						<span class="w-10 h-1 bg-white rounded-full"></span>
						<span class="w-10 h-1 bg-white rounded-full"></span>
					</button>
					<!-- end of wrapper -->

				</div>
				<!-- end of toggle -->
			</div>
			<!-- end of wrapper -->

			<!-- content -->
			<div class="header__row__content flex items-center">
				<!-- nav -->
				<div class="header__row__content__nav">
					<nav class="header__row__content__nav__navbar">
						<h2 class="hidden">Menu de navegação</h2>
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'menu',
								'menu_class'      => 'header__row__content__nav__navbar__content__menu flex flex-row gap-10 text-base text-white uppercase',
								'menu_id'         => 'menu',
								'container_class' => 'header__row__content__nav__navbar__content',
							)
						);
						?>
					</nav>
				</div>
				<!-- end of nav -->
			</div>
			<!-- end of content -->
		</div>
		<!-- end of row -->
	</div>
</header>
