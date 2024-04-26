<?php
// wordpress ha già recuperato i dati giusti in base all'indirizzo dal database

get_header(); ?>

<h1><?php the_archive_title(); ?></h1>
<div class="row g-4 row-cols-1 row-cols-md-2 row-cols-lg-3"><?php
    while (have_posts()) {
        the_post(); ?>
        <div class="col">
            <div class="card h-100">
                <img 
                    src="<?= get_the_post_thumbnail_url() ?: wp_get_attachment_url(68); ?>"
                    class="card-img-top"
                    alt="<?php the_title(); ?>"
                >
                <div class="card-body">
                    <h5 class="card-title"><?php the_title(); ?></h5>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read</a>
                </div>
            </div>
        </div><?php
    } ?>
</div><?php
echo paginate_links();

get_footer();