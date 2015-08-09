<?php
/*
Template Name: Portfolio
*/

get_header();
while ( have_posts() ) : the_post();
$background = types_render_field("bg-fond", array("raw"=>"true"));
?>
<!-- START CONTENT -->
        <div class="col-lg-11 col-sm-10 no-padding portfolio">
	     <div class="header-projects" data-parallax="scroll" data-image-src="<?php echo $background; ?>">
        	<div class="container"><h2><?php the_title(); ?></h2></div>
    	    </div>
            <div class="container">
                <div id="categories-wrap" class="categories">
                   <input id="fiction" class="checkbox-p" name="cat" type="checkbox" />
                   <input id="journalisme" class="checkbox-p" name="cat" type="checkbox" />
                   <input id="communication" class="checkbox-p" name="cat" type="checkbox" />
                   <input id="musique" class="checkbox-p" name="cat" type="checkbox" />
                    <label for="fiction" class="category">fiction</label>
                    <label for="journalisme" class="category">journalisme</label>
                    <label for="communication" class="category">communication</label>
                    <label for="musique" class="category">musique</label>
                </div>

                <div class="projects frame">
<?php

$query = new WP_Query( array( 'post_type' => 'projet', 'paged' => 'paged') );
 
if ( $query->have_posts() ) :  while ( $query->have_posts() ) : $query->the_post(); 

$titre= get_the_title();
$imagebg = types_render_field("image-de-fond", array("raw"=>"true"));
$desc = types_render_field("petit-texte", array("raw"=>"true"));
$catslug = get_the_category();
?>
		<div class="project <?php if(!empty($catslug)){foreach($catslug as $category_s){ echo $category_s->slug.' '; } } ?>">
                        <div class="cover" <?php if(!empty($imagebg)){ echo 'style="background-image: url( '.$imagebg.' );"'; } ?>></div>
                        <div class="caption-project">
                            <h3><?php echo $titre; ?></h3>
                            <p><?php echo $desc; ?></p>
                            <hr />
                            <a href="<?php echo get_the_permalink(); ?>">J'ai envie d'en savoir plus !</a>
                        </div>
                    </div>
<?php endwhile; wp_reset_postdata(); endif;?>

		</div>
		<div class="scrollbar">
                    <div class="handle"></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
        <!-- END CONTENT -->

<?php
endwhile;

get_footer();
?>