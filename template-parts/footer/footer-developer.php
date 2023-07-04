<div class="footer__developer bg-primary-500 py-3 text-white text-sm leading-none">
	<div class="container">
		<!-- row -->
		<div class="footer__developer__row flex justify-between items-center flex-wrap gap-1">

			<!-- agency -->
			<div class="footer__developer__row__agency text-center">
				<p>Desenvolvido por
					<a
						rel="nofollow noreferrer noopener" href="<?php echo DEV['url']; ?>"
						target="_blank"
						class="link-primary-300 font-medium"
						title="Agência Especializada em Marketing Digital"
					>
						<?php echo DEV['name']; ?>
					</a>
				</p>
			</div>
			<!-- end of agency -->

			<!-- validator -->
			<?php if ( ! is_404() ) : ?>
				<div class="footer__developer__row__validator">
					<a
						rel="nofollow noreferrer noopener"
						class="link-primary-300 leading-none text-center"
						href="https://validator.w3.org/nu/?doc=<?php echo get_current_page_url(); ?>"
						target="_blank"
						title="Tecnologia W3C"
					>
						<i class="ri-html5-fill align-middle text-base"></i>
						<span class="font-medium align-middle">W3C Validator</span>
					</a>
				</div>
				<!-- end of validator -->
			<?php endif; ?>
		</div>
		<!-- end of row -->
	</div>
</div>
