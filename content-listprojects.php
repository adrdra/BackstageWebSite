<?php
$titre= get_the_title();
$imagebg = types_render_field("img-de-fond", array("raw"=>"true"));
$desc = types_render_field("petit-texte", array("raw"=>"true"));
$catslug = get_the_category();
?>
		<div class="project <?php echo $catslug; ?>">
                        <div class="cover" <?php if(!empty($imagebg)){ echo 'style="background-image: url( '.$imagebg.' );"'; } ?>);"></div>
                        <div class="caption-project">
                            <h3><?php echo $titre; ?></h3>
                            <p><?php echo $desc; ?></p>
                            <hr />
                            <a href="<?php echo get_the_permalink(); ?>">J'ai envie d'en savoir plus !</a>
                        </div>
                    </div>