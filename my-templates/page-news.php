<?php
/*
    Template Name: Actualités
*/

    get_header();
?>
<!-- START CONTENT -->
<div class="col-lg-11 col-sm-10 no-padding news">
<div class="container">
<h2>actualités</h2>
                        <?php
$args = array(
    'post_type' => 'post',
    'showposts' => '10'
);
query_posts( $args );
		if ( have_posts() ) :
            		while ( have_posts() ) : the_post();
$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 300,300 ), false, '' );
?>
<div class="news_wrap">
	<div class="img-news" style="background-image: url('<?php echo $src[0] ?>');"></div>
	<div class="title-news">
		<h3><?php the_title(); ?></h3>
		<div class="date">
			<div class="day"><?php the_time('d'); ?></div>
			<div class="month"><?php the_date('m'); ?></div>
			<div class="year"><?php the_time('y'); ?></div>
		</div>
	</div>
	<div class="content-news">
		<?php the_content(); ?>
	</div>
	<div class="clear"></div>
</div>
             		 	
              			
 <?php

				wp_reset_postdata();
            		endwhile;
        	endif;

?>
</div>
</div>
<?php
    get_footer();
?>