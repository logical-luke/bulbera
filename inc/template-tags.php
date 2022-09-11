<?php

declare(strict_types=1);

if (!function_exists('bulbera_posted_on')) {
    function bulbera_posted_on()
    {
        $time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
        if (get_the_time('U') !== get_the_modified_time('U')) {
            $time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
        }

        $time_string = sprintf(
            $time_string,
            esc_attr(get_the_date(DATE_W3C)),
            esc_html(get_the_date()),
            esc_attr(get_the_modified_date(DATE_W3C)),
            esc_html(get_the_modified_date())
        );

        $posted_on = sprintf(
            esc_html_x('Posted on %s', 'post date', 'bulbera'),
            '<a href="' . esc_url(get_permalink()) . '" rel="bookmark">' . $time_string . '</a>'
        );

        echo '<span class="posted-on">' . $posted_on . '</span>';
    }
}

if (!function_exists('bulbera_posted_by')) {
    function bulbera_posted_by()
    {
        $byline = sprintf(
            esc_html_x('by %s', 'post author', 'bulbera'),
            '<span class="author vcard"><a class="url fn n" href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a></span>'
        );

        echo '<span class="byline"> ' . $byline . '</span>';
    }
}

if (!function_exists('bulbera_entry_footer')) {
    function bulbera_entry_footer()
    {
        if ('post' === get_post_type()) {
            $categories_list = get_the_category_list(esc_html__(', ', 'bulbera'));
            if ($categories_list) {
                printf(
                    '<span class="cat-links">' . esc_html__('Posted in %1$s', 'bulbera') . '</span>',
                    $categories_list
                );
            }

            $tags_list = get_the_tag_list('', esc_html_x(', ', 'list item separator', 'bulbera'));
            if ($tags_list) {
                printf(
                    '<span class="tags-links">' . esc_html__('Tagged %1$s', 'bulbera') . '</span>',
                    $tags_list
                );
            }
        }

        if (!is_single() && !post_password_required() && (comments_open() || get_comments_number())) {
            echo '<span class="comments-link">';
            comments_popup_link(
                sprintf(
                    wp_kses(
                        __('Leave a Comment<span class="screen-reader-text"> on %s</span>', 'bulbera'),
                        [
                            'span' => [
                                'class' => [],
                            ],
                        ]
                    ),
                    wp_kses_post(get_the_title())
                )
            );
            echo '</span>';
        }

        edit_post_link(
            sprintf(
                wp_kses(
                    __('Edit <span class="screen-reader-text">%s</span>', 'bulbera'),
                    [
                        'span' => [
                            'class' => [],
                        ],
                    ]
                ),
                wp_kses_post(get_the_title())
            ),
            '<span class="edit-link">',
            '</span>'
        );
    }
}

if (!function_exists('bulbera_post_thumbnail')) {
    function bulbera_post_thumbnail()
    {
        if (post_password_required() || is_attachment() || !has_post_thumbnail()) {
            return;
        }

        if (is_singular()) {
            ?>

            <div class="post-thumbnail">
                <?php the_post_thumbnail(); ?>
            </div><!-- .post-thumbnail -->

        <?php } else { ?>

            <a class="post-thumbnail" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1">
                <?php
                the_post_thumbnail(
                    'post-thumbnail',
                    [
                        'alt' => the_title_attribute(
                            [
                                'echo' => false,
                            ]
                        ),
                    ]
                );
                ?>
            </a>

            <?php
        }
    }
}

if (!function_exists('wp_body_open')) {
    function wp_body_open()
    {
        do_action('wp_body_open');
    }
}
