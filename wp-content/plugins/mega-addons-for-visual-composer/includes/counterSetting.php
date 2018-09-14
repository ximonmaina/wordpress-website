<?php 

$counter_params = array(
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Counter styles', 'counter-vc' ),
			"param_name" 	=> 	"counter_style",
			"description" 	=> 	__( 'Select counter styles', 'counter-vc' ),
			"group" 		=> 	'General',
			"value" 		=> array(
				"Top logo bottom content"		=> "style", 
				"Top logo bottom content 2" 	=> "style2",
				"Left logo right content" 	=> "style3",
				"Left content right logo" 	=> "style4",
				"Logo in center" 	=> "style5",
			)
		),

		array(
			"type" 			=> 	"css_editor",
			"heading" 		=> 	__( 'Set styles of complete box or leave blank accordingly', 'counter-vc' ),
			"param_name" 	=> 	"css",
			"group" 		=> 	'General',
		),


		// Image Section

		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Image/Icon', 'counter-vc' ),
			"param_name" 	=> 	"sec_style",
			"description" 	=> 	__( 'Select image or font icon', 'counter-vc' ),
			"group" 		=> 	'Image',
			"value" => array(
				"Image" => "image", 
				"Icon" => "icon", 
			)
		),
		array(
			"type" 			=> 	"attach_image",
			"heading" 		=> 	__( 'Image', 'counter-vc' ),
			"param_name" 	=> 	"image_id",
			"description" 	=> 	__( 'select image for logo', 'counter-vc' ),
			"group" 		=> 	'Image',
			"dependency" => array('element' => "sec_style", 'value' => 'image'),
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Width', 'counter-vc' ),
			"param_name" 	=> 	"image_width",
			"description" 	=> 	__( 'Set custom image width in pixel or leave blank e.g 100px', 'counter-vc' ),
			"group" 		=> 	'Image',
			"dependency" => array('element' => "sec_style", 'value' => 'image'),
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Height', 'counter-vc' ),
			"param_name" 	=> 	"image_height",
			"description" 	=> 	__( 'Set custom image height in pixel or leave blank e.g 100px', 'counter-vc' ),
			"group" 		=> 	'Image',
			"dependency" => array('element' => "sec_style", 'value' => 'image'),
		),

		array(
			"type" 			=> 	"iconpicker",
			"heading" 		=> 	__( 'Font Icon', 'counter-vc' ),
			"param_name" 	=> 	"count_icon",
			"description" 	=> 	__( 'Select font icon', 'counter-vc' ),
			"dependency" => array('element' => "sec_style", 'value' => 'icon'),
			"group" 		=> 	'Image',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Icon font size', 'counter-vc' ),
			"param_name" 	=> 	"icon_size",
			"description" 	=> 	__( 'set font size in pixel e.g 30px', 'counter-vc' ),
			"dependency" => array('element' => "sec_style", 'value' => 'icon'),
			"group" 		=> 	'Image',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Icon Color', 'counter-vc' ),
			"param_name" 	=> 	"icon_clr",
			"description" 	=> 	__( 'Select icon color', 'counter-vc' ),
			"dependency" => array('element' => "sec_style", 'value' => 'icon'),
			"group" 		=> 	'Image',
		),
		array(
			"type" 			=> 	"css_editor",
			"heading" 		=> 	__( 'Set styles of icon or leave blank accordingly', 'counter-vc' ),
			"param_name" 	=> 	"css2",
			"dependency" => array('element' => "sec_style", 'value' => 'icon'),
			"group" 		=> 	'Image',
		),


		// Content Section 
		
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Title', 'counter-vc' ),
			"param_name" 	=> 	"count_title",
			"description" 	=> 	__( 'write counter title for info', 'counter-vc' ),
			"group" 		=> 	'Title',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Font size', 'counter-vc' ),
			"param_name" 	=> 	"title_size",
			"description" 	=> 	__( 'set title font size in pixel e.g 30px', 'counter-vc' ),
			"group" 		=> 	'Title',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Font Weight', 'counter-vc' ),
			"param_name" 	=> 	"title_font",
			"description" 	=> 	__( 'set font thickness with difference of 100 in numbers e.g 500', 'counter-vc' ),
			"group" 		=> 	'Title',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Title Color', 'counter-vc' ),
			"param_name" 	=> 	"title_clr",
			"description" 	=> 	__( 'Select title color', 'counter-vc' ),
			"group" 		=> 	'Title',
		),


		// Counter Section 
		
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Stat Counts', 'counter-vc' ),
			"param_name" 	=> 	"stat_numb",
			"description" 	=> 	__( 'write in numbers e.g 4329', 'counter-vc' ),
			"group" 		=> 	'Stat Counter',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Font size', 'counter-vc' ),
			"param_name" 	=> 	"stat_size",
			"description" 	=> 	__( 'set counter font size in pixel e.g 20px', 'counter-vc' ),
			"group" 		=> 	'Stat Counter',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Font Weight', 'counter-vc' ),
			"param_name" 	=> 	"stat_font",
			"description" 	=> 	__( 'set counter font thickness with difference of 100 in numbers e.g 500', 'counter-vc' ),
			"group" 		=> 	'Stat Counter',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Title Color', 'counter-vc' ),
			"param_name" 	=> 	"stat_clr",
			"description" 	=> 	__( 'Select counter title color', 'counter-vc' ),
			"group" 		=> 	'Stat Counter',
		),

		// Setting Section 
		
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Decimal', 'counter-vc' ),
			"param_name" 	=> 	"count_decimal",
			"description" 	=> 	__( 'put numbers after decimal e.g 2 or leave blank', 'counter-vc' ),
			"group" 		=> 	'Setting',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Speed', 'counter-vc' ),
			"param_name" 	=> 	"count_speed",
			"description" 	=> 	__( 'set completion time from start to end in milli second 1s=1000 e.g 4000', 'counter-vc' ),
			"group" 		=> 	'Setting',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Start from', 'counter-vc' ),
			"param_name" 	=> 	"count_value",
			"description" 	=> 	__( 'set counter from starting point in number default 0', 'counter-vc' ),
			"group" 		=> 	'Setting',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Count interval', 'counter-vc' ),
			"param_name" 	=> 	"count_interv",
			"description" 	=> 	__( 'set counter interval e.g 100', 'counter-vc' ),
			"group" 		=> 	'Setting',
		),
	);


?>