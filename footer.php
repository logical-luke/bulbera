<?php

declare(strict_types=1);

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'bulbera' ) ); ?>">
				<?php
				printf( esc_html__( 'Proudly powered by %s', 'bulbera' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'bulbera' ), 'bulbera', '<a href="http://www.logical-luke.com">logical-luke</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
