
<header class="content-item">
    <h1><?php the_title(); ?></h1>
</header>
<div class="content-excerpt">
    <p><?php the_excerpt(); ?></p>
</div>

<div class="content-category">
    <?php the_date();?>
    <?php the_category(','); ?>
</div>
<div style="background-color:black;margin-left:auto; margin-right:auto;height:900x;width:900px">
<?php the_post_thumbnail(); ?>
 </div>
<div class ="content-para">
    <?php the_content(); ?>
</div>
<div class="content-tags">
<?php the_tags();?>
    </div>
<hr class="content-line">
<div class="content-user">
    
    <?php echo get_avatar( get_the_author_meta( 'ID',90)); ?>
    <div class="user-name">
    <h2><?php the_author_link(); ?></h2>
    <p><?php the_author_meta('description');?></p>
    </div>
    </div>
    <?php get_footer(); ?>
