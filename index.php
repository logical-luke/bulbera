<?php

declare(strict_types=1);

get_header();
?>
<?php
if (have_posts()) {
    ?>
    <h2 class="title is-2 center">From Blog</h2>
    <div class="columns">
        <?php
        while (have_posts()) {
            the_post();
            ?>
            <div class="column">
                <div class="card">
                    <div class="card-image">
                        <figure class="image is-16by9">
                            <a href="<?= get_permalink(); ?>">
                                <?php the_post_thumbnail('main-page-thumbnail'); ?>
                            </a>
                        </figure>
                    </div>

                    <div class="card-content">
                        <p class="title">
                            <a href="<?= get_permalink(); ?>"><?php the_title(); ?></a>
                        </p>

                        <p class="subtitle">
                            <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('F jS, Y'); ?></time>
                        </p>

                        <div class="content">
                            <?php the_excerpt(); ?>
                        </div>
                    </div>
                    <!--                            <footer class="card-footer">-->
                    <!--                                <a href="#" class="card-footer-item">Save</a>-->
                    <!--                                <a href="#" class="card-footer-item">Edit</a>-->
                    <!--                                <a href="#" class="card-footer-item">Delete</a>-->
                    <!--                            </footer>-->
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <?php
} else {
    ?>
    <div class="card">
        <div class="card-image">
            <figure class="image is-16by9">
                <img width="640" height="380"
                     src="<?= get_template_directory_uri() . '/images/placeholders/to-be-revealed.png' ?>">
            </figure>
        </div>

        <div class="card-content">
            <p class="title">
                I can't wait to share details about this post.
            </p>

            <p class="subtitle">
                Coming soon!
            </p>

            <div class="content">
                There will be an exciting first post on my blog 🎉.
            </div>
        </div>
    </div>
    <?php
}
?>
<?php
get_footer();
