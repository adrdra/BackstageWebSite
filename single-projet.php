<?php
/*
	Template Name : Modèle pour fiche formation
*/

get_header();

if(have_posts()): while(have_posts()): the_post();
$titre= get_the_title();
$imagebg = types_render_field("image-de-fond", array("raw"=>"true"));
$desc = types_render_field("petit-texte", array("raw"=>"true"));
?>

<!-- START CONTENT -->
        <div class="col-lg-11 col-sm-10 no-padding doc-height single-project">
            <div class="col-lg-12 col-sm-12 no-padding height bg-project" <?php if(!empty($imagebg)){ echo 'style="background-image: url( '.$imagebg.' );"'; } ?>>
                <div class="container">
		    <a href="#" id="back">← retour</a>
                    <h2><?php echo $titre; ?></h2>
		    <span>Scrollez pour en savoir plus</span>
		    <div class="arrow-petit"></div>
		    <div class="arrow"></div>
                </div>
            </div>

            <div class="col-lg-6 col-sm-12 project-desc right">
                <?php the_content(); ?>
            </div>
            <div class="clear"></div>
        </div>
        <!-- END CONTENT -->
<?php endwhile; endif;
get_footer();
?>