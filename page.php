<?php
		get_header();
		
		// Start the loop.
		while ( have_posts() ) : the_post();
		$imagebg = types_render_field("bg-fond", array("raw"=>"true"));
		$otitle = types_render_field("other-title", array("raw"=>"true"));
?>
<!-- START CONTENT -->
<div class="col-lg-11 col-sm-10 no-padding">
<div class="header-page" data-parallax="scroll" data-image-src="<?php echo $imagebg; ?>">
        <h2 class="title-page"><?php if(!empty($otitle)){ echo $otitle; }else{ the_content(); } ?></h2>
    </div>
    <div class="container content-page">
	<?php the_content(); ?>
    </div>
</div>
<!-- END CONTENT -->
<?php

		// End the loop.
		endwhile;
get_footer();
?>