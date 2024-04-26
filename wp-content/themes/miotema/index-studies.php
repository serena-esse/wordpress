<?php
while (have_posts()) {
    // qui si lavora con i dati di un post
    the_post(); ?>
    <li>
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); // fa l'echo implicito ?></h2>
            </a>
    </li><?php

    // qui ora si possono usare le funzioni che recuperano i dati del post
    // echo '<h2>' . the_title('', '', false) . '</h2>'; // l'echo implicito di the_title si puo' disabilitare con il terzo argomento
    // echo '<h2>' . get_the_title() . '</h2>'; // non fa l'eco

    // the_content();

    // echo get_the_content(null, null, 2);
}