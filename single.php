<div class="single/php">
    <?php get_header(); ?>
    <?php
while(have_posts()):
    the_post();
    the_title();
    the_post_thumbnail();
    the_content();
    the_tags();
    the_category();
    the_author();
    the_author_meta('description');
    the_date();
    the_time();
endwhile;

?>
<?php
$wpnew =array('post_type'=>'post',
'post_type'=>'publish'
);
$newsquery = new Wp_Query($wpnew);
while($newsquery->have_posts()){
    $newsquery->the_post();
}
?>

    <?php get_footer(); ?>