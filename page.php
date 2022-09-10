<?php

declare(strict_types=1);

get_header();
?>

    <main id="primary" class="site-main">

		<?php
		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content', 'page' );

			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
		}
		?>

    </main><!-- #main -->

<?php
get_sidebar();
get_footer();
