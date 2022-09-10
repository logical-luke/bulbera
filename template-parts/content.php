<?php

declare(strict_types=1);

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
		<?php
		if ( is_singular() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} else {
			the_title(
				'<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">',
				'</a></h2>'
			);
		}

		if ( 'post' === get_post_type() ) {
			?>
            <div class="entry-meta">
				<?php
				bulbera_posted_on();
				bulbera_posted_by();
				?>
            </div><!-- .entry-meta -->
		<?php } ?>
    </header><!-- .entry-header -->

	<?php bulbera_post_thumbnail(); ?>

    <div class="entry-content">
		<?php
		the_content(
			sprintf(
				wp_kses(
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bulbera' ),
					[
						'span' => [
							'class' => [],
						],
					]
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			[
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bulbera' ),
				'after'  => '</div>',
			]
		);
		?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
		<?php bulbera_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
