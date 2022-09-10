<?php

declare(strict_types=1);

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
		<?php the_title(
            sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h2>'
        ); ?>

		<?php if ( 'post' === get_post_type() ) { ?>
            <div class="entry-meta">
				<?php
				bulbera_posted_on();
				bulbera_posted_by();
				?>
            </div><!-- .entry-meta -->
		<?php } ?>
    </header><!-- .entry-header -->

	<?php bulbera_post_thumbnail(); ?>

    <div class="entry-summary">
		<?php the_excerpt(); ?>
    </div><!-- .entry-summary -->

    <footer class="entry-footer">
		<?php bulbera_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
