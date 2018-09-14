<?php  
$slider_father = array(
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Slider width', 'slider-vc' ),
			"param_name" 	=> 	"width",
			"description" 	=> 	__( 'set the width of slider in pixel or percentage e.g 1500px 0r 100%', 'slider-vc' ),
			"group" 		=> 	'General',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Pause', 'slider-vc' ),
			"param_name" 	=> 	"pause",
			"description" 	=> 	__( 'slider interval time in ms e.g 4000', 'slider-vc' ),
			"group" 		=> 	'General',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Slider Speed', 'slider-vc' ),
			"param_name" 	=> 	"speed",
			"description" 	=> 	__( 'set the speed of slider in ms e.g 500', 'slider-vc' ),
			"group" 		=> 	'General',
        ),
);

$slider_son = array(

        array(
            "type" 			=> 	"attach_image",
			"heading" 		=> 	__( 'Slider Image', 'slider-vc' ),
			"param_name" 	=> 	"image_id",
			"description" 	=> 	__( 'Select the image', 'slider-vc' ),
			"group" 		=> 	'General',
        ),
        array(
            "type" 			=> 	"textarea_html",
			"heading" 		=> 	__( 'Content', 'slider-vc' ),
			"param_name" 	=> 	"content",
			"description" 	=> 	__( 'write the slider title or leave blank', 'slider-vc' ),
			"group" 		=> 	'General',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Slider Height', 'slider-vc' ),
			"param_name" 	=> 	"height",
			"description" 	=> 	__( 'set the height of slider in pixel e.g 450px', 'slider-vc' ),
			"group" 		=> 	'General',
        ),
        array(
            "type" 			=> 	"css_editor",
			"heading" 		=> 	__( 'Styles', 'slider-vc' ),
			"param_name" 	=> 	"styles",
			"description" 	=> 	__( 'write the slider title or leave blank', 'slider-vc' ),
			"group" 		=> 	'Styles',
        ),

    );
?>