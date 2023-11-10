<?php get_header(); ?>
<?php
/*start the loop */
while(have_posts()):
    the_post();
    the_title();

endwhile;
?>
<?php get_footer(); ?>