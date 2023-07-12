</main>
<!-- end of main -->

<!-- footer -->
<footer class="footer">
	<!-- header -->
	<div class="footer__header hidden">
		<h2>Rodapé</h2>
	</div>
	<!-- end of header -->
	<!-- content -->
	<?php get_template_part( 'template-parts/footer/content' ); ?>
	<!-- end of content -->

	<!-- copyright -->
	<?php get_template_part( 'template-parts/footer/content', 'copyright' ); ?>
	<!-- end of copyright -->

	<!-- developer -->
	<?php get_template_part( 'template-parts/footer/content', 'developer' ); ?>
	<!-- end of developer -->
</footer>
<!-- end of footer -->

<?php wp_footer(); ?>

</body>

</html>
