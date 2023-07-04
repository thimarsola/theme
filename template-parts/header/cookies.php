<div class="cookies p-4 z-30">
	<!-- wrapper -->
	<div class="cookies__wrapper p-5 bg-white rounded-lg shadow-2xl">
		<div>
			<!-- header -->
			<header class="cookies__wrapper__header mb-3 flex flex-col gap-2">
				<!-- cookie -->
				<img src="<?php echo get_image( 'logo-' . sanitize_title( SITE['name'] ) . '.svg' ); ?>" alt="Cookies <?php echo ( SITE['name'] ); ?>" loading="lazy">
				<!-- end of cookie -->

				<h2 class="font-bold text-lg text-neutral-900">Este website sua cookies</h2>
			</header>
			<!-- end of header -->

			<!-- data -->
			<div class="cookies__wrapper__data text-xs text-justify">
				<p>A <?php echo ( SITE['name'] ); ?> usa cookies para assegurar que proporcionamos a melhor experiência
					enquanto visita o nosso website. Os cookies ajudam-nos a melhorar a performance do nosso website
					e a sua experiência através de conteúdo personalizado, funcionalidades nas redes sociais e
					análise de tráfego. Estes cookies podem também incluir cookies de terceiros, os quais podem
					rastrear o uso do nosso website e nos fornecer informações para melhorarmos a experiência dos
					usuários. Conheça a nossa <a class="link-primary-500 underline" href="
					<?php
					echo esc_attr(
						esc_url(
							get_privacy_policy_url()
						)
					);
					?>
						">Política de Privacidade</a>
				</p>
			</div>
			<!-- end of data -->
		</div>

		<!-- button -->
		<div class="cookies__wrapper__button">
			<button class="cookies__wrapper__button__accept btn-primary rounded" aria-label="Aceitar cookies">
				Continuar
			</button>
		</div>
		<!-- end of button -->
	</div>
	<!-- end of wrapper -->
</div>
