<?php

declare(strict_types=1);

get_header();
?>
    <div class="tile is-ancestor center">
        <div class="tile is-vertical is-8">
            <div class="tile">
                <div class="tile is-parent">
                    <article class="tile is-child notification is-info">
                        <p class="title">Why should you automate?</p>
                        <p class="subtitle">Coming Soon</p>
                        <figure class="image is-4by3">
                            <img src="<?= get_template_directory_uri() . '/images/placeholders/automate.png' ?>">
                        </figure>
                    </article>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification is-info">
                        <p class="title">To be revealed...</p>
                        <p class="subtitle">I can't wait to share details about this post!</p>
                        <figure class="image is-4by3">
                            <img src="<?= get_template_directory_uri() . '/images/placeholders/to-be-revealed.png' ?>">
                        </figure>
                    </article>
                </div>
            </div>
            <div class="tile is-parent">
                <article class="tile is-child notification is-info">
                    <p class="title">Got feedback? I'd love to hear from you</p>
                    <p class="subtitle">Send me an email at <a href="mailto:luke@logical-luke.com">luke@logical-luke.com</a></p>
                </article>
            </div>
        </div>
    </div>
<?php
get_footer();
