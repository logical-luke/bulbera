<?php

declare(strict_types=1);

get_header();
?>

    <main id="primary" class="site-main">

		<?php if ( have_posts() ) { ?>

            <header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
            </header><!-- .page-header -->

			<?php
			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );
			}

			the_posts_navigation();
		} else {
			get_template_part( 'template-parts/content', 'none' );
		}
		?>

    </main><!-- #main -->

<?php
get_footer();
