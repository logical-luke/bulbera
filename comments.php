<?php

declare(strict_types=1);

if (post_password_required()) {
    return;
}
?>

<div class="box">
    <div id="comments" class="comments-area form-group">

        <?php
        if (have_comments()) {
            ?>
            <h2 class="comments-title">
                <?php
                $bulbera_comment_count = get_comments_number();
                if ($bulbera_comment_count === '1') {
                    printf(
                        esc_html__('Discuss about &ldquo;%1$s&rdquo;', 'bulbera'),
                        '<span>' . wp_kses_post(get_the_title()) . '</span>'
                    );
                } else {
                    printf(
                        esc_html(
                            _nx(
                                '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;',
                                $bulbera_comment_count,
                                'comments title',
                                'bulbera'
                            )
                        ),
                        number_format_i18n($bulbera_comment_count),
                        '<span>' . wp_kses_post(get_the_title()) . '</span>'
                    );
                }
                ?>
            </h2><!-- .comments-title -->

            <?php the_comments_navigation(); ?>

            <ol class="comment-list">
                <?php
                wp_list_comments(
                    [
                        'style' => 'ol',
                        'short_ping' => true,
                    ]
                );
                ?>
            </ol><!-- .comment-list -->

            <?php
            the_comments_navigation();

            if (!comments_open()) {
                ?>
                <p class="no-comments"><?php esc_html_e('Comments are closed.', 'bulbera'); ?></p>
                <?php
            }
        }

        comment_form();
        ?>

    </div>
</div>
