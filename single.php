<?php get_header(); ?>
<div class="single/php">
    <?php while(have_posts()):
    the_post();
    
get_template_part('template/template-content/single-content');
endwhile;
    ?>
