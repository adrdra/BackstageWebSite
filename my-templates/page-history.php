<?php
/*
Template Name: Histoire
*/

get_header();
while ( have_posts() ) : the_post();
$imagebg = types_render_field("bg-fond", array("raw"=>"true"));
$txtFamily= types_render_field("txt-famille", array("raw"=>"true"));
?>
<!-- START CONTENT -->
<div class="col-lg-11 col-sm-12 no-padding histoire">
    <div class="header-histoire" data-parallax="scroll" data-image-src="<?php echo $imagebg; ?>">
        <h4 class="title-h">h</h4>
    </div>
    <div class="container">
        <h3>1-Génèse</h3>
        <h4 class="title-h">i</h4>
        <div class="bg-histoire" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bg-i.jpg">
            <div class="col-lg-6"></div>
            <div class="col-lg-6">

                <p>Saint Avertin. Une après midi insipide de 2009. Un module de skate parc. Un grand maigre et un grand gros ont une idée. Ils vont créer une association pour faire pleins de projets chouettes.</p>

            </div>
        </div>
        <h4 class="title-h">s</h4>
        <h3 class="right txt-right">2-Exploit</h3>
        <div class="clear"></div>
        <div class="bg-histoire" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bg-exploits.jpg">
            <h4 class="title-h abs">t</h4>
            <div class="col-lg-6">

                <p>Trois kilos de pommes de terre à éplucher pour le repas du midi. Une dizaine de tentes au milieu des poules. 1 880 minutes de rushs d’une expérience humaine et artistique fondatrice. Scratch, la série.</p>

            </div>
            <div class="col-lg-6"></div>
        </div>
        <h3>3-Prix</h3>
        <div class="bg-histoire" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bg-prix.jpg">
            <h4 class="title-h">o</h4>
            <div class="col-lg-6"></div>
            <div class="col-lg-6">

                <p>Douze degrés sur le pont, beaucoup moins dans l’eau. Matteo saute et propulse Ritter au Grand prix du Festival de Troyes présidé par Julie Depardieu.</p>

            </div>
        </div>
        <h4 class="title-h">i</h4>
        <h3 class="right txt-right">4-Alliance</h3>
        <div class="clear"></div>
        <div class="bg-histoire alliance" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bg-alliance.jpg">
            <h4 class="title-h abs">r</h4>
            <div class="col-lg-6">

                <p>Rencontre avec un passionné. Beaucoup trop d’idées pour les laisser se fâner. Naissance du bébé webzine Nouvel Ecran.</p>

            </div>
            <div class="col-lg-6"></div>
        </div>

	<h3>5-Titre ?</h3>
        <div class="clear"></div>
        <div class="bg-histoire alliance" data-parallax="scroll" data-image-src="<?php echo get_template_directory_uri(); ?>/img/bg-alliance.jpg">
            <h4 class="title-h">e</h4>
            <div class="col-lg-6">

                <p>Ici y'aura le texte pour la nouvelle catégorie.</p>

            </div>
            <div class="col-lg-6"></div>
        </div>
        <div class="row">
                    <div class="col-lg-3 no-padding"></div>
                    <div class="col-lg-6"><h2>famille</h2></div>
                    <div class="col-lg-3 no-padding"></div>
		    
        </div>
	<div class="row txt-family">
		<?php echo $txtFamily; ?>
	</div>
	<div class="row">
<?php
	$query = new WP_Query( array( 'post_type' => 'equipe') );
 
if ( $query->have_posts() ) :  while ( $query->have_posts() ) : $query->the_post(); 

$nom = types_render_field("nom", array("raw"=>"true"));
$prenom = types_render_field("prenom", array("raw"=>"true"));
$photo= types_render_field("photo", array("raw"=>"true"));
$poste = types_render_field("poste-occupe", array("raw"=>"true"));
?>
	    <div class="col-lg-3"><div class="carre"><img src="<?php echo $photo; ?>"><div class="caption-equipe"><p><?php echo $prenom.' '.$nom; ?></p><hr><p><?php echo $poste; ?></p></div></div></div> 
<?php 
endwhile;
endif;
wp_reset_postdata();
?>
	</div>
        <div class="clear"></div>
    </div>
</div>
<!-- END CONTENT -->
<?php
endwhile;
get_footer();
?>