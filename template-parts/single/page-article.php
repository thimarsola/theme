<section class="article py-20">
	<div class="container">
		<!-- row -->
		<div class="article__row grid grid-cols-12 gap-8">
			<!-- wrapper -->
			<div class="article__row__wrapper col-span-8">
				<!-- image -->
				<div class="article__row__wrapper__image w-full h-96 mb-8">
					<img
						src="<?php echo( get_the_post_thumbnail_url() ); ?>"
						alt="<?php echo( get_the_title() ); ?>"
						class="w-full h-full object-cover object-center"
						loading="lazy"
					>
				</div>
				<!-- end of image -->

				<!-- header -->
				<header class="article__row__wrapper__header mb-8">
					<time class="mb-2 text-sm text-neutral-400" datetime="<?php echo get_the_date( 'Y-m-d' ); ?>">
						<?php echo ucfirst( get_the_date( 'F j, Y' ) ); ?>
					</time>
					<h2 class="mb-3 font-medium text-3xl text-secondary-950"><?php echo get_the_title(); ?></h2>
				</header>
				<!-- end of header -->

				<!-- content -->
				<div class="article__row__wrapper__content text-justify">
					<?php the_content(); ?>
				</div>
				<!-- end of content -->

				<!-- share -->
				<div
					class="article__row__wrapper__share py-6 mt-8 flex flex-wrap items-center gap-6">
					<p>Compartilhe:</p>

					<ul class="flex items-center gap-5">
						<!-- facebook -->
						<li>
							<a
								rel="nofollow noreferrer noopener"
								class="link-primary-500 text-neutral-500"
								href="https://www.facebook.com/sharer.php?u=<?php echo urlencode( get_the_permalink() ) . esc_html( '&t=' ) . urlencode( get_the_title() ); ?>"
								target="_blank"
								title="Compartilhe esse artigo no Facebook"
							>
								<i class="ri-facebook-fill text-2xl leading-none"></i>
							</a>
						</li>
						<!-- end of facebook -->
						<!-- twitter -->
						<li>
							<a
								class="link-primary-500 text-neutral-500"
								rel="nofollow noreferrer noopener"
								href="https://twitter.com/share?text=<?php echo urlencode( get_the_title() ) . esc_html( '&url=&url=' ) . urlencode( get_the_permalink() ); ?>"
								target="_blank"
								title="Compartilhe esse artigo no Twitter"
							>
								<i class="ri-twitter-fill text-2xl leading-none"></i>
							</a>
						</li>
						<!-- end of twitter -->
						<!-- linkedin -->
						<li>
							<a
								rel="nofollow noreferrer noopener"
								class="link-primary-500 text-neutral-500"
								href="https://www.linkedin.com/shareArticle?mini=true
								<?php
								echo esc_html( '&' );
								?>
								url=
								<?php
								echo urlencode( get_the_permalink() ) . esc_html( '&title=' ) . urlencode( get_the_title() );
								?>
									"
								target="_blank"
								title="Compartilhe esse artigo no Linkedin"
							>
								<i class="ri-linkedin-fill text-2xl leading-none"></i>
							</a>
						</li>
						<!-- end of linkedin -->
						<!-- whatsapp -->
						<li>
							<a
								rel="nofollow noreferrer noopener"
								class="link-primary-500 text-neutral-500"
								href="https://api.whatsapp.com/send?text=<?php echo urlencode( 'Olá gostaria de compartilhar esse artigo escrito pelo ' . SITE['name'] . '! ' ) . urlencode( get_the_permalink() ); ?>"
								target="_blank"
								title="Compartilhe esse artigo no WhatsApp"
							>
								<i class="ri-whatsapp-line text-2xl leading-none"></i>
							</a>
						</li>
						<!-- end of whatsapp -->
					</ul>
				</div>
				<!-- end of share -->
			</div>
			<!-- end of wrapper -->

			<!-- sidebar -->
			<div class="article__row__sidebar col-span-4">
				<?php get_sidebar(); ?>
			</div>
			<!-- end of sidebar -->
		</div>
		<!-- end of row -->
	</div>
</section>
