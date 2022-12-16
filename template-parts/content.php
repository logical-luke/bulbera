<?php

declare(strict_types=1);

?>
<?php if (!is_page()) { ?>
<div class="card">
<?php } ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <div class="card-image">
            <a href="<?= get_permalink(); ?>">
                <?php the_post_thumbnail('main-page-thumbnail'); ?>
            </a>
        </div>
        <div class="card-content">
            <?php the_title('<h1 class="title">', '</h1>'); ?>

            <?php
            if (!is_page()) {
            ?>
                <p class="subtitle">
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y'); ?></time>
                </p>
            <?php
            }
            ?>
            <div class="content">
                <?php
                the_content(
                    sprintf(
                        wp_kses(
                            __('Continue reading<span class="screen-reader-text"> "%s"</span>', 'bulbera'),
                            [
                                'span' => [
                                    'class' => [],
                                ],
                            ]
                        ),
                        wp_kses_post(get_the_title())
                    )
                );

                wp_link_pages(
                    [
                        'before' => '<div class="page-links">' . esc_html__('Pages:', 'bulbera'),
                        'after' => '</div>',
                    ]
                );
                ?>
            </div>
        </div>
    </article>
<?php if (!is_page()) { ?>
</div>
<?php } ?>
