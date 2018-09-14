<?php
// info banner
$styleVisibility = array(
		'Left image right content' =>  'left',
		'Left content right image' =>  'right',
		'Top image bottom content' =>  'top_to_bottom',
	);

	$infobanner_params = array(
		array(
            "type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Style', 'info-banner-vc' ),
			"param_name" 	=> 	"style_visibility",
			"description" 	=> 	__( 'select styles for info banner', 'info-banner-vc' ),
			"group" 		=> 	'General',
			"value" 		=> $styleVisibility,
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Container padding from top', 'info-banner-vc' ),
			"param_name" 	=> 	"box_padding",
			"description" 	=> 	__( 'set padding for whole container from top e.g 10px', 'info-banner-vc' ),
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Container padding from bottom', 'info-banner-vc' ),
			"param_name" 	=> 	"box_padding2",
			"description" 	=> 	__( 'set padding for whole container from bottom side e.g 10px', 'info-banner-vc' ),
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Container padding for left & right', 'info-banner-vc' ),
			"param_name" 	=> 	"box_padding3",
			"description" 	=> 	__( 'set padding for whole container from left & right side e.g 10px', 'info-banner-vc' ),
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Picture box width', 'info-banner-vc' ),
			"param_name" 	=> 	"pic_width",
			"description" 	=> 	__( 'Set the width of picture box in percentage e.g 30%', 'info-banner-vc' ),
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Content box width', 'info-banner-vc' ),
			"param_name" 	=> 	"content_width",
			"description" 	=> 	__( 'Set the width of content box in percentage e.g 70%', 'info-banner-vc' ),
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"textfieldsa",
			"heading" 		=> 	__( 'Set background image or background color', 'info-banner-vc' ),
			"param_name" 	=> 	"style_bg",
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"attach_image",
			"heading" 		=> 	__( 'Background image', 'info-banner-vc' ),
			"param_name" 	=> 	"image_id",
			"description" 	=> 	__( 'Select complete background image for info box', 'info-banner-vc' ),
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Background color', 'info-banner-vc' ),
			"param_name" 	=> 	"bg_clr",
			"description" 	=> 	__( 'Select color for complete background info box e.g #fff', 'info-banner-vc' ),
			"group" 		=> 	'General',
        ),

        // Content Area 

        array(
            "type" 			=> 	"attach_image",
			"heading" 		=> 	__( 'Banner image', 'info-banner-vc' ),
			"param_name" 	=> 	"image_id2",
			"description" 	=> 	__( 'Select image for banner logo', 'info-banner-vc' ),
			"group" 		=> 	'Image',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Image width', 'info-banner-vc' ),
			"param_name" 	=> 	"pic_size",
			"description" 	=> 	__( 'set image width e.g 100px or leave blank for default', 'info-banner-vc' ),
			"group" 		=> 	'Image',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Image height', 'info-banner-vc' ),
			"param_name" 	=> 	"pic_height",
			"description" 	=> 	__( 'set image height e.g 100px or leave blank for default', 'info-banner-vc' ),
			"group" 		=> 	'Image',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Padding Top', 'info-banner-vc' ),
			"param_name" 	=> 	"pic_ptop",
			"description" 	=> 	__( 'set padding from top for picture e.g 10px or leave blank', 'info-banner-vc' ),
			"group" 		=> 	'Image',
        ),

        array(
            "type" 			=> 	"textarea_html",
			"heading" 		=> 	__( 'Description', 'info-banner-vc' ),
			"param_name" 	=> 	"content",
			"description" 	=> 	__( 'write detail about info banner', 'info-banner-vc' ),
			"group" 		=> 	'Content',
			"value"			=> '<h2>Caption Text Here</h2><h4>Now Available <i>$99</i></h4><br><p>caption detail here</p>'
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Top Padding', 'info-banner-vc' ),
			"param_name" 	=> 	"content_ptop",
			"description" 	=> 	__( 'set padding for content from top e.g 10px', 'info-banner-vc' ),
			"group" 		=> 	'Content',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Padding left', 'info-banner-vc' ),
			"param_name" 	=> 	"content_pleft",
			"description" 	=> 	__( 'set padding for content from left e.g 10px', 'info-banner-vc' ),
			"group" 		=> 	'Content',
        ),


        /** Ribbon Setting **/

        array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Ribbon text', 'info-banner-vc' ),
			"param_name" 	=> "ribbon_text",
			"description" 	=> __( 'write ribbon text for special offer or leave blank', 'info-banner-vc' ),
			"group" 		=> 'Ribbon',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Text color', 'info-banner-vc' ),
			"param_name" 	=> "ribbon_clr",
			"description" 	=> __( 'Ribbon text color', 'info-banner-vc' ),
			"group" 		=> 'Ribbon',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Background color', 'info-banner-vc' ),
			"param_name" 	=> "ribbon_bg",
			"description" 	=> __( 'Ribbon background color', 'info-banner-vc' ),
			"group" 		=> 'Ribbon',
		),


        /** Button Setting **/
        		array(
					"type" 			=> "textfield",
					"heading" 		=> __( 'Padding from top & bottom', 'info-banner-vc' ),
					"param_name" 	=> "btn_ptop",
					"description" 	=> __( 'set padding and it will increase height of button e.g 10px', 'info-banner-vc' ),
					"group" 		=> 'Button Text',
				),

				array(
					"type" 			=> "textfield",
					"heading" 		=> __( 'Padding from left & right', 'info-banner-vc' ),
					"param_name" 	=> "btn_pleft",
					"description" 	=> __( 'set padding and it will increase width of button e.g 10px', 'info-banner-vc' ),
					"group" 		=> 'Button Text',
				),

				array(
					"type" 			=> "textfield",
					"heading" 		=> __( 'Button text', 'info-banner-vc' ),
					"param_name" 	=> "btn_text",
					"description" 	=> __( 'Write button text', 'info-banner-vc' ),
					"group" 		=> 'Button Text',
				),
				array(
					"type" 			=> "textfield",
					"heading" 		=> __( 'Text font size', 'info-banner-vc' ),
					"param_name" 	=> "btn_size",
					"description" 	=> __( 'Set font size in pixel e.g 18px', 'info-banner-vc' ),
					"group" 		=> 'Button Text',
				),
				array(
					"type" 			=> "textfield",
					"heading" 		=> __( 'Border Radius', 'info-banner-vc' ),
					"param_name" 	=> "btn_radius",
					"description" 	=> __( 'button border will turn into radius by increasing pixel e.g 5px or leave blank', 'info-banner-vc' ),
					"group" 		=> 'Button Text',
				),
				array(
					"type" 			=> "textfield",
					"heading" 		=> __( 'Button URL', 'info-banner-vc' ),
					"param_name" 	=> "btn_url",
					"description" 	=> __( 'Write button url as link', 'info-banner-vc' ),
					"group" 		=> 'Button Text',
				),
				array(
					"type" 			=> "textfield",
					"heading" 		=> __( 'Open in new windows', 'info-banner-vc' ),
					"param_name" 	=> "btn_next",
					"description" 	=> __( 'Write _blank for open link in new windows or leave blank for none', 'info-banner-vc' ),
					"group" 		=> 'Button Text',
				),

				array(
					"type" 			=> "iconpicker",
					"heading" 		=> __( 'Select icon', 'info-banner-vc' ),
					"param_name" 	=> "btn_icon",
					"description" 	=> __( 'it will be show within text', 'info-banner-vc' ),
					"group" 		=> 'Button Text',
				),

				/** color **/

				array(
					"type" 			=> "colorpicker",
					"heading" 		=> __( 'Border color', 'info-banner-vc' ),
					"param_name" 	=> "border_clr",
					"description" 	=> __( 'Set color of border e.g #269CE9', 'info-banner-vc' ),
					"group" 		=> 'Button color',
				),

				array(
					"type" 			=> "textfield",
					"heading" 		=> __( 'Border width', 'info-banner-vc' ),
					"param_name" 	=> "border_width",
					"description" 	=> __( 'Set width of border in pixel e.g 1px', 'info-banner-vc' ),
					"group" 		=> 'Button color',
				),

				array(
					"type" 			=> "colorpicker",
					"heading" 		=> __( 'Text color', 'info-banner-vc' ),
					"param_name" 	=> "btn_clr",
					"description" 	=> __( 'Set color of text e.g #ffff', 'info-banner-vc' ),
					"group" 		=> 'Button color',
				),

				array(
					"type" 			=> "colorpicker",
					"heading" 		=> __( 'Background color', 'info-banner-vc' ),
					"param_name" 	=> "btn_bg",
					"description" 	=> __( 'Set background color of text e.g #000', 'info-banner-vc' ),
					"group" 		=> 'Button color',
				),

				array(
					"type" 			=> "colorpicker",
					"heading" 		=> __( 'Hover Text color', 'info-banner-vc' ),
					"param_name" 	=> "btn_hvrclr",
					"description" 	=> __( 'Set color of text on hover e.g #ffff', 'info-banner-vc' ),
					"group" 		=> 'Button color',
				),

				array(
					"type" 			=> "colorpicker",
					"heading" 		=> __( 'Background color', 'info-banner-vc' ),
					"param_name" 	=> "btn_hvrbg",
					"description" 	=> __( 'Set color of background on hover e.g #269CE9', 'info-banner-vc' ),
					"group" 		=> 'Button color',
				),
    );
?>