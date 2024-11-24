<?php

while(have_posts()) {
    the_post(); ?>
<h2><?php the_titel();?></h2>
<?php the_content(); ?>
<hr>
    <?php
}

?>