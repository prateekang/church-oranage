<div class="container">
    <div class="row">
    
 <header class="content-item">
     <h1><?php the_title(); ?></h1>
</header>

<div class="col-sm-12">
<div class="content-excerpt">
    <h2><?php the_excerpt(); ?></h2>
</div>

<div class="content-category">
    <?php the_date();?>
    <?php the_category(','); ?>
</div>

<div class="content-image">
<?php the_post_thumbnail(); ?>
 </div>

<div class ="content-para">
 <p>   <?php the_content(); ?></p>
</div>


<div class="content-tags">
<?php the_tags();?>
</div>
<hr class="content-line">
<div class="content-user">
<div class="user-bio">
<?php echo get_avatar( get_the_author_meta( 'ID',90)); ?>
</div>
<div class="user-detail">
        <h2><?php the_author_link(); ?></h2>
    <p><?php the_author_meta('description');?></p>
</div>
</div>
    </div>

</div>
<hr class="content-line">
<div clas="nav-color">
    <h2>
<?php previous_post_link();
next_post_link();
?></h2>
<hr class="content-line">

<?php add_shortcode( 'bartag', 'wpdocs_bartag_func' );
function wpdocs_bartag_func( $atts ) {
	$atts = shortcode_atts( array(
		'foo' => 'no foo',
		'baz' => 'default baz'
	), $atts, 'bartag' );

	return "foo = {$atts['foo']}";
}
?>
</div>
</div>
</div>




    <?php get_footer();?>

