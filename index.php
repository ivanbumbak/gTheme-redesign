<?php

if (have_posts()) :
    while (have_posts()) : the_post(); ?>

    <h2>The title</h2>

    <?php endwhile;

else :
    echo '<p>No content found</p>';

endif;

?>