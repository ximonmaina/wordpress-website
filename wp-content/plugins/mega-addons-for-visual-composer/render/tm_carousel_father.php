<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_tm_carousel_father extends WPBakeryShortCodesContainer {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'padding'		=>		'30px',
			'theme'			=>		'default-tdt',
			'mbl_height'	=>		'',
			'effect'		=>		'false',
			'arrow'			=>		'false',
			'dot'			=>		'true',
			'autoplay'		=>		'true',
			'speed'			=>		'1500',
			'slide_visible'	=>		'1',
			'slide_scroll'	=>		'1',
			'id'			=>		'',
			'dotclr'		=>		'transparent',
			'borderclr'		=>		'transparent',
			'arrowclr'		=>		'#000',
			'arrowsize'		=>		'20px',
		), $atts ) );
		$content = wpb_js_remove_wpautop($content);
		wp_enqueue_style( 'slick-carousel-css', plugins_url( '../css/slick-carousal.css' , __FILE__ ));
		wp_enqueue_script( 'slick-js', plugins_url( '../js/slick.js' , __FILE__ ), array('jquery'));
		wp_enqueue_script( 'custom-js', plugins_url( '../js/custom-tm.js' , __FILE__ ), array('jquery'));
		ob_start(); ?>
		<section class="tm-slider slider <?php echo $theme; ?>" id="tdt-slider<?php echo $id ?>" style="width: <?php echo $width; ?>;" data-slick='{"arrows": <?php echo $arrow; ?>, "autoplaySpeed": <?php echo $speed; ?>, "dots": <?php echo $dot; ?>, "autoplay": <?php echo $autoplay; ?>, "slidesToShow": <?php echo $slide_visible; ?>, "slidesToScroll": <?php echo $slide_scroll; ?>, "fade": <?php echo $effect; ?>}'>
		    <?php echo $content; ?>
		</section>

		<style>
		#tdt-slider<?php echo $id ?> .slick-dots li button:before{
			color: <?php echo $dotclr ?>;
			border: 2px solid <?php echo $borderclr ?>;
		}
		#tdt-slider<?php echo $id ?> .slick-next:before {
			color: <?php echo $arrowclr ?> !important;
			font-size: <?php echo $arrowsize; ?> !important;
		}
		#tdt-slider<?php echo $id ?> .slick-prev:before {
			color: <?php echo $arrowclr ?> !important;
			font-size: <?php echo $arrowsize; ?> !important;
		}
		#tdt-slider<?php echo $id ?> .slick-dots li.slick-active button:before {
			opacity: 1 !important;
		}
		#tdt-slider<?php echo $id ?>.content-over-slider .slick-slide .content-section {
			top: <?php echo $padding ?>;
		}
		@media only screen and (max-width: 480px) {
			#tdt-slider<?php echo $id ?>.content-over-slider .slick-slide .content-section {
				top: 35px !important;
			}
			#tdt-slider<?php echo $id ?>.content-over-slider .ultimate-slide-img {
				height: <?php echo $mbl_height; ?> !important;
			}
		}
		</style>
		<?php return ob_get_clean();
	}
}


vc_map( array(
	"base" 			=> "tm_carousel_father",
	"name" 			=> __( 'Carousal Slider', 'tm-carousel' ),
	"as_parent" 	=> array('only' => 'tm_carousel_son'),
	"content_element" => true,
	"js_view" 		=> 'VcColumnView',
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('show as slider', ''),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/carousal-slider.png',
	'params' => array(
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Unique ID', 'slider' ),
			"param_name" 	=> 	"id",
			"description"	=>	__('Recomended: It must be unique', 'slider'),
			"group" 		=> 'Settings',
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Select Theme', 'slider' ),
			"param_name" 	=> 	"theme",
			"description"	=>	__('Use as carousal top image bottom content or as slider image over content', 'slider'),
			"group" 		=> 'Settings',
				"value" 		=> 	array(
					"Top Image Bottom Content" 		=> 		"default-tdt",
					"Image Over Content" 			=> 		"content-over-slider",
				)
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Carousel Height (For Mobile)', 'slider' ),
			"param_name" 	=> 	"mbl_height",
			"description"	=>	__( 'set in pixel eg, 250px or leave blank', 'slider' ),
			"dependency" => array('element' => "theme", 'value' => 'content-over-slider'),
			"group" 		=> 'Settings',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Padding Top', 'slider' ),
			"param_name" 	=> 	"padding",
			"description"	=>	__('set in pixel eg 100px. padding will apply from top for the content', 'slider'),
			"dependency" => array('element' => "theme", 'value' => 'content-over-slider'),
			"value"			=>	"30px",
			"group" 		=> 'Settings',
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Slide Effect', 'slider' ),
			"param_name" 	=> 	"effect",
			"description"	=>	__('choose slider effect', 'slider'),
			"group" 		=> 'Settings',
				"value" 		=> 	array(
					"Slide [Right To Left]" 		=> 		"false",
					"Fade" 			=> 		"true",
				)
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Arrows', 'slider' ),
			"param_name" 	=> 	"arrow",
			"description"	=>	__('Show/Hide on left & right', 'slider'),
			"group" 		=> 'Settings',
				"value" 		=> 	array(
					"Hide" 			=> 		"false",
					"Show" 			=> 		"true",
				)
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Dots', 'slider' ),
			"param_name" 	=> 	"dot",
			"description"	=>	__('Show/Hide show at bottom', 'slider'),
			"group" 		=> 'Settings',
				"value" 		=> 	array(
					"Show" 			=> 		"true",
					"Hide" 			=> 		"false",
				)
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Autoplay', 'slider' ),
			"param_name" 	=> 	"autoplay",
			"description"	=>	__('move auto or slide on click', 'slider'),
			"group" 		=> 'Settings',
			"value" 		=> 	array(
				"True" 		=> 		"true",
				"False" 	=> 		"false",
			)
		),
		/*array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Width', 'slider' ),
			"param_name" 	=> 	"width",
			"description"	=>	__('container width in percentage eg, 100%', 'slider'),
			"value"			=>	"100%",
			"group" 		=> 'Settings',
		),*/
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Slider Speed', 'slider' ),
			"param_name" 	=> 	"speed",
			"description"	=>	__('write in ms eg, 1500 [1s = 1000]', 'slider'),
			"value"			=>	"1500",
			"group" 		=> 'Settings',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Slide To Show', 'slider' ),
			"param_name" 	=> 	"slide_visible",
			"description"	=>	__('set visible number of slides. default is 1', 'slider'),
			"value"			=>	"1",
			"group" 		=> 'Settings',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Slide To Scroll', 'slider' ),
			"param_name" 	=> 	"slide_scroll",
			"description"	=>	__('allow user to multiple slide on click or drag. default is 1', 'slider'),
			"value"			=>	"1",
			"group" 		=> 'Settings',
		),

		// Dot Section Setting 
		
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Dot/Border', 'slider' ),
			"param_name" 	=> 	"style",
			"group" 		=> 'Dot',
			"dependency" => array('element' => "dot", 'value' => 'true'),
			"value"			=>	array(
				"Dot"		=>		"dot",
				"Border"	=>		"border",
			)
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Dot Color', 'slider' ),
			"param_name" 	=> 	"dotclr",
			"dependency" => array('element' => "style", 'value' => 'dot'),
			"value"			=>	"#000",
			"group" 		=> 'Dot',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Border Color', 'slider' ),
			"param_name" 	=> 	"borderclr",
			"dependency" => array('element' => "style", 'value' => 'border'),
			"value"			=>	"#000",
			"group" 		=> 'Dot',
		),

		// Dot Section Setting
		 
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Arrow Color', 'slider' ),
			"param_name" 	=> 	"arrowclr",
			"dependency" 	=> array('element' => "arrow", 'value' => 'true'),
			"value"			=>	"#000",
			"group" 		=> 'Arrow',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Arrow Font Size', 'slider' ),
			"param_name" 	=> 	"arrowsize",
			"description"	=>	"set in pixel eg, 20px",
			"dependency" 	=> array('element' => "arrow", 'value' => 'true'),
			"value"			=>	"20px",
			"group" 		=> 'Arrow',
		),

	)
) );
