<?php 
$infoStyle = array(
	'Vertical'	=>	'mega_info_box',
	'Horizental'	=>	'mega_info_box_2',
);
$infoOpt = array(
	'Image'	=>	'show_image',
	'Font Icon'	=>	'show_icon',
);
$btnVisibility = array(
		'Hide' =>  'none',
		'Show' =>  'initial',
	);
$infoBox_params = array(
				array(
					"type" 			=> "dropdown",
					"heading" 		=> __( 'Select Style', 'ib-vc' ),
					"param_name" 	=> "info_style",
					"description" 	=> __( 'Choose info style', 'ib-vc' ),
					"group" 		=> 'General',
					"value" 		=> $infoStyle,
				),
				array(
					"type" 			=> "dropdown",
					"heading" 		=> __( 'Select Image or Font icon', 'ib-vc' ),
					"param_name" 	=> "info_opt",
					"description" 	=> __( 'Select Image or Font icon', 'ib-vc' ),
					"group" 		=> 'General',
					"value" 		=> $infoOpt,
				),
				array(
	                "type" 			=> 	"attach_image",
					"heading" 		=> 	__( 'Image', 'ib-vc' ),
					"param_name" 	=> 	"image_id",
					"description" 	=> 	__( 'Select the image', 'ib-vc' ),
					"group" 		=> 	'General',
					"dependency" => array('element' => "info_opt", 'value' => 'show_image'),
	            ),
	            array(
					"type" 			=> "textfield",
					"heading" 		=> __( 'Alternate Text', 'ib-vc' ),
					"param_name" 	=> "image_alt",
					"description" 	=> __( 'It will be used as alt attribute of img tag', 'ib-vc' ),
					"group" 		=> 'General',
					"dependency" => array('element' => "info_opt", 'value' => 'show_image'),
				),
				array(
					"type" 			=> "textfield",
					"heading" 		=> __( 'Width', 'ib-vc' ),
					"param_name" 	=> "image_size",
					"description" 	=> __( 'Set the width in pixel e.g 80px', 'ib-vc' ),
					"group" 		=> 'General',
					"dependency" => array('element' => "info_opt", 'value' => 'show_image'),
				),
				array(
					"type" 			=> "iconpicker",
					"heading" 		=> __( 'Font icon', 'ib-vc' ),
					"param_name" 	=> "font_icon",
					"description" 	=> __( 'Select the font icon', 'ib-vc' ),
					"group" 		=> 'General',
					"dependency" => array('element' => "info_opt", 'value' => 'show_icon'),
				),
				array(
					"type" 			=> "textfield",
					"heading" 		=> __( 'Font size', 'ib-vc' ),
					"param_name" 	=> "icon_size",
					"description" 	=> __( 'Set icon font size in pixel e.g 30px', 'ib-vc' ),
					"group" 		=> 'General',
					"dependency" => array('element' => "info_opt", 'value' => 'show_icon'),
				),
				array(
					"type" 			=> "colorpicker",
					"heading" 		=> __( 'Font Color', 'ib-vc' ),
					"param_name" 	=> "icon_color",
					"description" 	=> __( 'Set icon color', 'ib-vc' ),
					"group" 		=> 'General',
					"dependency" => array('element' => "info_opt", 'value' => 'show_icon'),
				),
				array(
					"type" 			=> 	"css_editor",
					"heading" 		=> 	__( 'Set styles for Font icon', 'ib-vc' ),
					"param_name" 	=> 	"css",
					"dependency" => array('element' => "info_opt", 'value' => 'show_icon'),
					"group" 		=> 	'General',
				),

				/* Detail */

				array(
					"type" 			=> "textfield",
					"heading" 		=> __( 'Title', 'ib-vc' ),
					"param_name" 	=> "info_title",
					"description" 	=> __( 'Write title for heading', 'ib-vc' ),
					"group" 		=> 'Detail',
				),
				array(
					"type" 			=> "textfield",
					"heading" 		=> __( 'Title font size', 'ib-vc' ),
					"param_name" 	=> "title_size",
					"description" 	=> __( 'Set font size for title e.g 16px', 'ib-vc' ),
					"group" 		=> 'Detail',
				),
				array(
					"type" 			=> "textfield",
					"heading" 		=> __( 'Description', 'ib-vc' ),
					"param_name" 	=> "info_desc",
					"description" 	=> __( 'Write description for detail', 'ib-vc' ),
					"group" 		=> 'Detail',
				),
				array(
					"type" 			=> "textfield",
					"heading" 		=> __( 'Description font size', 'ib-vc' ),
					"param_name" 	=> "desc_size",
					"description" 	=> __( 'Set font size for description e.g 14px', 'ib-vc' ),
					"group" 		=> 'Detail',
				),

				/* Button */

		        array(
		            "type" 			=> 	"dropdown",
					"heading" 		=> 	__( 'Show/Hide button', 'ib-vc' ),
					"param_name" 	=> 	"btn_visibility",
					"description" 	=> 	__( 'Select Show or Hide Button ', 'ib-vc' ),
					"group" 		=> 	'Button',
					"value" 		=> $btnVisibility,
		        ),

				array(
		            "type" 			=> 	"textfield",
					"heading" 		=> 	__( 'Button Text', 'ib-vc' ),
					"param_name" 	=> 	"btn_text",
					"description" 	=> 	__( 'Button text name', 'ib-vc' ),
					"group" 		=> 	'Button',
		        ),

		        array(
		            "type" 			=> 	"textfield",
					"heading" 		=> 	__( 'Button Url', 'ib-vc' ),
					"param_name" 	=> 	"btn_url",
					"description" 	=> 	__( 'Write Button URL for link', 'ib-vc' ),
					"group" 		=> 	'Button',
		        ),

		        array(
		            "type" 			=> 	"colorpicker",
					"heading" 		=> 	__( 'Background color', 'ib-vc' ),
					"param_name" 	=> 	"btn_bg",
					"description" 	=> 	__( 'Set Button background color', 'ib-vc' ),
					"group" 		=> 	'Button',
		        ),
				
	);

 ?>