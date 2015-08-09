<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
        <title>Backstage Prod</title>
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive.css">
        <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	
	<?php wp_head(); ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jQuery.scrollSpeed.js"></script>
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/parallax.min.js"></script>
	<?php if(is_page('laboratoire')){ ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/sly.min.js"></script>
	<script>
		jQuery(function ($) {

    		$('.frame').sly({
     		   horizontal: 1,
      		  slidee: $('.projects'),

     		  itemNav: 'centered',
      		  itemSelector: $('.project'),
      		  smart: 1,
     		  activateOn: 'click',

       		 scrollBy: 1,

        	mouseDragging: 1,
        	swingSpeed: 0.2,

        	scrollBar: $('.scrollbar'),
        	dragHandle: 1,

        	speed: 600,
        	startAt: 0
    		});

		});
	</script>
	<?php } ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/script.js"></script>
	
	
    </head>
    <body <?php body_class(); ?>>
        <!-- START NAVBAR -->
        <div class="col-lg-1 col-md-2 col-sm-2 navigation">
            <nav>
                <div class="hamburger">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <p class="label-menu">Menu</p>
                <ul class="menu">
				<?php 
					$menuParameters = array(
  					'container'       => false,
  					'echo'            => true,
  					'items_wrap'      => '%3$s',
  					'depth'           => 0,
					);
					echo strip_tags(wp_nav_menu( $menuParameters ), '<a>'); 
				?>
                </ul>
            </nav>
            <!-- START LOGO -->
            <div class="logo-small">
                <svg version="1.1" id="Calque_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                     viewBox="0 0 200 200" style="enable-background:new 0 0 200 200;" xml:space="preserve">
                    <path class="st0 rectangle" d="M103.1,14.6L43.5,74.2l59.6,59.6l59.6-59.6L103.1,14.6z M48.6,73.7l54.6-54.6l54.6,54.6l-54.6,54.6L48.6,73.7z"
                          />
                    <path class="st1 rectangle" d="M61,32.1v84.3h84.3V32.1H61z M64.2,112.5l0-77.2h77.2v77.2H64.2z"/>
                    <path class="st2 rectangle" d="M48.2,51l31.7,78.1L158,97.5l-31.7-78.1L48.2,51z M81.4,124.3l-29-71.5l71.5-29l29,71.5L81.4,124.3z"/>
                    <path class="st3 rectangle" d="M47.9,96.6l77.6,32.9l32.9-77.6L80.7,19L47.9,96.6z M123.2,125L52.2,94.9l30.1-71.1l71.1,30.1L123.2,125z"/>                        
                    <rect class="hidden-md hidden-sm hidden-xs" x="48.4" y="140.4" class="st0" width="108.7" height="1.4"/>
                    <rect class="hidden-md hidden-sm hidden-xs" x="48.4" y="161.2" class="st0" width="108.7" height="1.4"/>
                    <rect class="hidden-md hidden-sm hidden-xs" x="133.2" y="172.2" class="st0" width="11.7" height="1.4"/>
                    <rect class="hidden-md hidden-sm hidden-xs" x="61.1" y="172.2" class="st0" width="11.7" height="1.4"/>
                    <g class="hidden-md hidden-sm hidden-xs">
                        <g>
                            <path class="st2" d="M60.6,154.2c0,3.9-4.5,3.9-4.5,3.9h-4.5v-13.4h4.5c0,0,4.5,0,4.5,3.9c0,2.8-2.2,2.8-2.2,2.8
                                                 C60.6,151.5,60.6,154.2,60.6,154.2z M53.8,150.3h2.2c0,0,2.2,0,2.2-1.7c0-1.7-2.2-1.7-2.2-1.7h-2.2V150.3z M58.3,154.2
                                                 c0-1.7-2.2-1.7-2.2-1.7h-2.2v3.4h2.2C56.1,155.9,58.3,155.9,58.3,154.2z"/>
                            <path class="st2" d="M69.9,156.5h-4.6l-0.7,1.7h-2.4l5.4-13.5l5.4,13.5h-2.4L69.9,156.5z M69,154.2l-1.4-3.5l-1.4,3.5H69z"/>
                            <path class="st2" d="M83.7,154.6l1.6,1.6c-1.2,1.2-2.9,2-4.7,2c-3.7,0-6.7-3-6.7-6.7c0-3.7,3-6.7,6.7-6.7c1.9,0,3.5,0.8,4.7,2
                                                 l-1.6,1.6c-0.8-0.8-1.9-1.3-3.2-1.3c-2.5,0-4.5,2-4.5,4.5c0,2.5,2,4.5,4.5,4.5C81.8,155.9,82.9,155.4,83.7,154.6z"/>
                            <path class="st2" d="M93,151.6l5.6,6.6h-2.9l-4.2-4.9l-1.3,1.4v3.5H88v-13.5h2.2v6.6l5.9-6.6h3L93,151.6z"/>
                            <path class="st2" d="M100.5,154.2h2.3c0,1.1,1,1.7,2,1.7c1,0,2-0.6,2-1.7c0-1.1-1.1-1.7-2-1.7c-0.1,0-1,0-2-0.4
                                                 c-1.4-0.7-2.2-1.9-2.2-3.5c0-2.4,2-3.9,4.2-3.9c2.3,0,4.2,1.6,4.2,3.9h-2.2c0-1.1-0.9-1.7-2-1.7c-1.1,0-2,0.6-2,1.7
                                                 c0,1.1,1,1.7,2,1.7c0.1,0,1,0,2,0.4c1.4,0.7,2.2,1.9,2.2,3.5c0,2.4-2,3.9-4.2,3.9C102.4,158.1,100.6,156.6,100.5,154.2z"/>
                            <path class="st2" d="M119.5,147h-3.4v11.2h-2.2V147h-3.4v-2.2h9V147z"/>
                            <path class="st2" d="M126.9,156.5h-4.6l-0.7,1.7h-2.4l5.4-13.5l5.4,13.5h-2.4L126.9,156.5z M126,154.2l-1.4-3.5l-1.4,3.5H126z"/>
                            <path class="st2" d="M142.7,150.3v7.8h-2.2v-0.9c-1,0.6-2.1,0.9-3.4,0.9c-3.7,0-6.7-3-6.7-6.7c0-3.7,3-6.7,6.7-6.7
                                                 c1.9,0,3.5,0.8,4.7,2l-1.6,1.6c-0.8-0.8-1.9-1.3-3.2-1.3c-2.5,0-4.5,2-4.5,4.5c0,2.5,2,4.5,4.5,4.5c1.3,0,2.5-0.6,3.4-1.5v-1.8
                                                 h-3.9v-2.2H142.7z"/>
                            <path class="st2" d="M147.6,147v3.4h6.7v2.2h-6.7v3.4h6.7v2.2h-9v-13.5h9v2.2H147.6z"/>
                            <path class="st2" d="M87.7,170.3c0,3.9-4.5,3.9-4.5,3.9H81v5.6h-2.2v-13.5h4.5C83.2,166.3,87.7,166.3,87.7,170.3z M85.5,170.3
                                                 c0-1.7-2.2-1.7-2.2-1.7H81v3.4h2.2C83.2,172,85.5,172,85.5,170.3z"/>
                            <path class="st2" d="M94.5,174.2h-1.8v5.6h-2.2v-13.5h4.5c0,0,4.5,0,4.5,3.9c0,2.2-1.4,3.1-2.6,3.6l2.7,6h-2.5L94.5,174.2z
                                                 M92.7,172h2.2c0,0,2.2,0,2.2-1.7c0-1.7-2.2-1.7-2.2-1.7h-2.2V172z"/>
                            <path class="st2" d="M114.4,173.1c0,3.7-3,6.7-6.7,6.7c-3.7,0-6.7-3-6.7-6.7c0-3.7,3-6.7,6.7-6.7
                                                 C111.4,166.3,114.4,169.4,114.4,173.1z M112.2,173.1c0-2.5-2-4.5-4.5-4.5c-2.5,0-4.5,2-4.5,4.5c0,2.5,2,4.5,4.5,4.5
                                                 C110.2,177.5,112.2,175.5,112.2,173.1z"/>
                            <path class="st2" d="M127.2,173.1c0,6.7-7.8,6.7-7.8,6.7h-2.3v-13.4h2.3C119.4,166.4,127.2,166.4,127.2,173.1z M125,173.1
                                                 c0-4.5-5.6-4.5-5.6-4.5v9C119.4,177.5,125,177.5,125,173.1z"/>
                        </g>
                    </g>
                    <g>
                        <g>
                            <g>
                                <polygon class="st0" points="92,81.4 91,80.5 91,82.1 92.4,82.7 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="95.7,85.2 94.4,84.6 95,86 96.5,86 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="90,81.7 90,79.5 88.5,77.9 87.3,80.5 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="100.5,87.1 99.4,87.1 100.3,88 101.4,87.5 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="104.9,89 103,88.2 101.2,88.9 103.1,90.8 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="99.1,88.4 97.7,87 95.4,87 96.4,89.5 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="90,76.8 89.5,75.4 88.9,76.8 90,77.9 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="88.3,76 89.1,74.1 88.3,72.1 86.3,74.1 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="105.6,87 104.3,87.6 105.6,88.1 106.7,87 			"/>
                            </g>
                            <g>
                                <path class="st0" d="M93.3,70c-0.5,0-1.1,0-1.5,0L91,71.8v4.8l1.6,3.9l4.1,4.1l3.5,1.5h5.1l4.3-1.8l3.4-3.3l1.9-4.3V72l-2.1-4.9
                                                     l-2.6-2.7L105,62h-1.6C102.3,67,98.2,70,93.3,70z"/>
                            </g>
                            <g>
                                <polygon class="st0" points="113.1,64.2 115,65.1 115,62 112.2,62 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="93,84 91,83.2 91,86 93.9,86 			"/>
                            </g>
                            <g>
                                <path class="st0" d="M103.1,52.7c-0.7,0-1.3,0-2,0.1c0.8,0.9,1.5,2,2,3.2l0,0l3.1,3.1l4-1.8l1.6,3.8h4.2v4.6l4,1.7l-1.6,3.9l3,3
                                                     l-3.1,3.1l1.6,4l-3.9,1.6V87h-4.4l-1.7,4.1l-3.9-1.6l-3,3l-3.1-3.1L95.9,91l-1.6-4H90v-4.2l-3.9-1.7l1.7-3.9l-3-3l3.1-3.1
                                                     l-1.5-3.7c-1-0.9-1.8-1.9-2.4-3.1c-1.5,2.9-2.4,6.3-2.4,9.8c0,11.8,9.6,21.4,21.4,21.4c11.8,0,21.4-9.6,21.4-21.4
                                                     C124.5,62.3,114.9,52.7,103.1,52.7z"/>
                            </g>
                            <g>
                                <polygon class="st0" points="90,71.6 90,70.3 89,71.4 89.5,72.8 			"/>
                            </g>
                            <g>
                                <path class="st0" d="M89.6,69.4c-0.6-0.2-1.1-0.5-1.6-0.8l0.7,1.7L89.6,69.4z"/>
                            </g>
                            <g>
                                <polygon class="st0" points="114,66.9 114.8,67.6 114.8,66.4 113.7,65.9 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="116,66.9 116,68.8 117.5,70.3 118.5,68 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="110.5,63.2 111.5,63.5 110.9,62 109.4,62 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="116,71.7 116.4,72.8 117,71.3 116,70.3 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="110.3,87 108.4,87 106.8,88.7 109.2,89.7 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="106.9,59.6 108.4,61 110.5,61 109.5,58.5 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="105.7,61 107,61 105.9,60 104.5,60.6 			"/>
                            </g>
                            <g>
                                <path class="st0" d="M103.8,59.7c0,0.1,0,0.2,0,0.2l1.4-0.6l-1.6-1.6C103.7,58.5,103.8,59.1,103.8,59.7z"/>
                            </g>
                            <g>
                                <polygon class="st0" points="115,83.4 113,84.2 112.1,86 115,86 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="114,81.5 113.6,82.6 114.8,82.1 114.8,80.7 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="118,72.2 117.1,74.3 117.8,76.1 119.8,74.1 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="110.4,85.2 109.6,85.9 110.8,85.9 111.3,84.8 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="116,76.8 116,77.9 116.9,77 116.4,75.9 			"/>
                            </g>
                            <g>
                                <polygon class="st0" points="117.3,78.2 116,79.5 116,81.6 118.3,80.7 			"/>
                            </g>
                        </g>
                    </g>

                </svg>
            </div>
            <!-- END LOGO -->
        </div>
        <!-- END NAVBAR -->

        <!-- START RESET -->
        <div class="col-lg-1 col-md-2 hidden-sm hidden-xs"></div>
        <!-- END RESET -->