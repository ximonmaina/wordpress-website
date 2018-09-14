<?php

	$flipbox_params = array(
			array(
				"type" 			=> "dropdown",
				"heading" 		=> __( 'Style Flip Box', 'flip-box-vc' ),
				"param_name" 	=> "style",
				"description" 	=> __( 'select style', 'flip-box-vc' ),
				"group" 		=> 'General',
				"value" 		=> array(
					'Horizental'	=>	'horizental',
					'Vertical'	=>	'vertical',
					'3D'	=>	'3d',
				)
			),
			array(
				"type" 			=> "textfield",
				"heading" 		=> __( 'Flip height', 'flip-box-vc' ),
				"param_name" 	=> "height",
				"description" 	=> __( 'Required. set flip box height e.g 200px', 'flip-box-vc' ),
				"group" 		=> 'General',
			),
			array(
				"type" 			=> "dropdown",
				"heading" 		=> __( 'Select Image or Font icon', 'flip-box-vc' ),
				"param_name" 	=> "info_opt",
				"description" 	=> __( 'Select Image or Font icon', 'flip-box-vc' ),
				"group" 		=> 'General',
				"value" 		=> array(
					'Image'	=>	'show_image',
					'Icon'	=>	'show_icon',
				)
			),
			array(
                "type" 			=> 	"attach_image",
				"heading" 		=> 	__( 'Image', 'flip-box-vc' ),
				"param_name" 	=> 	"image_id",
				"description" 	=> 	__( 'Select the image', 'flip-box-vc' ),
				"group" 		=> 	'General',
				"dependency" => array('element' => "info_opt", 'value' => 'show_image'),
            ),
            array(
				"type" 			=> "textfield",
				"heading" 		=> __( 'Image Radius', 'flip-box-vc' ),
				"param_name" 	=> "radius",
				"description" 	=> __( 'Set Image radius in pixel or % e.g 50%', 'flip-box-vc' ),
				"group" 		=> 'General',
				"dependency" => array('element' => "info_opt", 'value' => 'show_image'),
			),
			array(
				"type" 			=> "textfield",
				"heading" 		=> __( 'Width', 'flip-box-vc' ),
				"param_name" 	=> "image_size",
				"description" 	=> __( 'Set the width in pixel e.g 80px', 'flip-box-vc' ),
				"group" 		=> 'General',
				"dependency" => array('element' => "info_opt", 'value' => 'show_image'),
			),
			array(
				"type" 			=> "iconpicker",
				"heading" 		=> __( 'Font icon', 'flip-box-vc' ),
				"param_name" 	=> "font_icon",
				"description" 	=> __( 'Select the font icon', 'flip-box-vc' ),
				"group" 		=> 'General',
				"dependency" => array('element' => "info_opt", 'value' => 'show_icon'),
			),
			array(
				"type" 			=> "textfield",
				"heading" 		=> __( 'Font size', 'flip-box-vc' ),
				"param_name" 	=> "icon_size",
				"description" 	=> __( 'Set icon font size in pixel e.g 30px', 'flip-box-vc' ),
				"group" 		=> 'General',
				"dependency" => array('element' => "info_opt", 'value' => 'show_icon'),
			),
			array(
				"type" 			=> "colorpicker",
				"heading" 		=> __( 'Font Color', 'flip-box-vc' ),
				"param_name" 	=> "icon_color",
				"description" 	=> __( 'Set icon color', 'flip-box-vc' ),
				"group" 		=> 'General',
				"dependency" => array('element' => "info_opt", 'value' => 'show_icon'),
			),

			// Fron Content 
			
			array(
				"type" 			=> "textfield",
				"heading" 		=> __( 'Line height', 'flip-box-vc' ),
				"param_name" 	=> "lineheight",
				"description" 	=> __( 'set line height for front display e.g 1.5', 'flip-box-vc' ),
				"group" 		=> 'Front',
			),
			array(
				"type" 			=> "textfield",
				"heading" 		=> __( 'Title', 'flip-box-vc' ),
				"param_name" 	=> "title",
				"description" 	=> __( 'set title for front display', 'flip-box-vc' ),
				"group" 		=> 'Front',
			),
			array(
				"type" 			=> "textfield",
				"heading" 		=> __( 'Font Size', 'flip-box-vc' ),
				"param_name" 	=> "size",
				"description" 	=> __( 'set title font size for front display e.g 15px', 'flip-box-vc' ),
				"group" 		=> 'Front',
			),
			array(
				"type" 			=> "colorpicker",
				"heading" 		=> __( 'Title color', 'flip-box-vc' ),
				"param_name" 	=> "color",
				"description" 	=> __( 'set title color', 'flip-box-vc' ),
				"group" 		=> 'Front',
			),
			array(
				"type" 			=> "textfield",
				"heading" 		=> __( 'Description', 'flip-box-vc' ),
				"param_name" 	=> "desc",
				"description" 	=> __( 'set description for front display', 'flip-box-vc' ),
				"group" 		=> 'Front',
			),
			array(
				"type" 			=> "textfield",
				"heading" 		=> __( 'Font Size', 'flip-box-vc' ),
				"param_name" 	=> "descrsize",
				"description" 	=> __( 'set description font size for front display e.g 13px', 'flip-box-vc' ),
				"group" 		=> 'Front',
			),
			array(
				"type" 			=> "colorpicker",
				"heading" 		=> __( 'Title color', 'flip-box-vc' ),
				"param_name" 	=> "descrcolor",
				"description" 	=> __( 'set description color', 'flip-box-vc' ),
				"group" 		=> 'Front',
			),


			// Back Display 
			
			array(
				"type" 			=> "colorpicker",
				"heading" 		=> __( 'Background color', 'flip-box-vc' ),
				"param_name" 	=> "bgcolor",
				"description" 	=> __( 'set background color', 'flip-box-vc' ),
				"group" 		=> 'Flip Display',
			),

			array(
	            "type" 			=> 	"textarea_html",
				"heading" 		=> 	__( 'Description', 'flip-box-vc' ),
				"param_name" 	=> 	"content",
				"description" 	=> 	__( 'write detail about flip box', 'flip-box-vc' ),
				"group" 		=> 	'Flip Display',
				"value"			=> '<h3>Caption Text Here</h3><p>Change color, background color and text in button. Dont remove mega_hvr_btn class from button.</p> <a href="#" class="mega_hvr_btn" style="padding:6px 14px;color:#fff;background:#000;">Learn More</a>'
        	),
        	array(
				"type" 			=> "css_editor",
				"heading" 		=> __( 'Display Design', 'flip-box-vc' ),
				"param_name" 	=> "css",
				"group" 		=> 'Front Design',
			),
    );
?>