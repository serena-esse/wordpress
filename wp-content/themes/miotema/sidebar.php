<?php

$posts_for_aside = new WP_Query([
    'post_per_page' => 4,
    'orderby'  => 'rand',
]); ?>

<ul><?php
    while($posts_for_aside->have_posts()) {
        $posts_for_aside->the_post();
        create_sidebar_cards();
    }
    wp_reset_postdata(); ?>
</ul>