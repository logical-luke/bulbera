<?php

declare(strict_types=1);

get_header();
?>
    <section class="error-404 not-found">
        <div class="card">
            <div class="card-image">
                <a href="<?= get_permalink(); ?>">
                    <?php the_post_thumbnail('main-page-thumbnail'); ?>
                </a>
            </div>
            <div class="card-content">
                <h1 class="page-title"><?php esc_html_e('Oops! That page can&rsquo;t be found.', 'bulbera'); ?></h1>

                <div class="content">
                    <p>
                        <?php esc_html_e(
                            'It looks like nothing was found at this location. Maybe try one of the links below or a search?',
                            'bulbera' );
                        ?>
                    </p>

                    <?php
                    get_search_form();
                    ?>

                    <p>
                    <?php
                    the_widget( 'WP_Widget_Recent_Posts' );
                    ?>
                    </p>
                    <div class="widget widget_categories">
                        <h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'bulbera' ); ?></h2>
                        <ul>
                            <?php
                            wp_list_categories(
                                [
                                    'orderby'    => 'count',
                                    'order'      => 'DESC',
                                    'show_count' => 1,
                                    'title_li'   => '',
                                    'number'     => 10,
                                ]
                            );
                            ?>
                        </ul>
                    </div><!-- .widget -->

                    <?php

                    the_widget( 'WP_Widget_Tag_Cloud' );
                    ?>

                </div>
            </div>
        </div>
    </section>
<?php
get_footer();
