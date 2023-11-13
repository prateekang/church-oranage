<div class="single/php">
    <?php get_header(); ?>

    <div class="content-item">
        <h1><?php the_title();?> 
    </div>
    <div class="content-category">
        <?php 
        while(have_posts()):
            the_post();
        the_date();
        endwhile;
        ?>,
</div>
    
    <div class="content-image">
        <img src="<?php echo get_template_directory_uri()?>/Image/church.webp">
    </div>
    
<div class="content-para">
    <p><?php the_content(); ?></p>
</div>
<div class="content-tags">
<?php the_tags();?>
    </div>
<hr class="content-line">
<div class="content-author">
    
<?php echo get_avatar('http://1.gravatar.com/avatar/d2543d0834e9fdac1e5132b1a335ad8d?s=96&d=mm&r=g ','64');?>
    <?php the_author_link(); ?><br>
    <?php the_author_meta('description');?>
    </div>
    <?php get_footer(); ?>