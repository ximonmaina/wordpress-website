<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_mvc_infobox extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'info_style' 			=> 		'mega_info_box',
			'info_opt' 				=> 		'show_image',
			'image_id' 				=> 		'',
			'image_size' 			=> 		'',
			'image_radius' 			=> 		'0px',
			'font_icon' 			=> 		'',
			'icon_size' 			=> 		'25px',
			'icon_color' 			=> 		'',
			'icon_height'			=>		'80px',
			'icon_bg'				=>		'',
			'icon_radius'			=>		'0px',
			'border_width'			=>		'0px',
			'border_style'			=>		'solid',
			'border_clr'			=>		'',
			'css' 		 			=> 		'',
			'info_title' 			=> 		'',
			'title_size' 			=> 		'',
			'info_desc' 			=> 		'',
			'line_height' 			=> 		'',
			'info_size' 			=> 		'',
			'btn_visibility' 		=> 		'none',
			'btn_text' 				=> 		'',
			'btn_url' 				=> 		'',
			'btn_bg' 				=> 		'',
		), $atts ) );
		$css_class = apply_filters( VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, vc_shortcode_custom_css_class( $css, ' ' ), $this->settings['base'], $atts );
		if ($image_id != '') {
			$image_url = wp_get_attachment_url( $image_id );		
		}
		wp_enqueue_style( 'info-box-css', plugins_url( '../css/infobox.css' , __FILE__ ));
		$content = wpb_js_remove_wpautop($content, true);
		ob_start(); ?>
		
		<div class="<?php echo $info_style; ?>">
			<div class="mega-info-header">
				<?php if ($info_opt == 'show_image') { ?>
					<img class="mega-info-img" src="<?php echo $image_url; ?>" style="width: <?php echo $image_size; ?>; border-radius: <?php echo $image_radius; ?>;">			
				<?php } ?>
				<?php if ($info_opt == 'show_icon') { ?>
					<i class="<?php echo $font_icon; ?>" aria-hidden="true" style="border: <?php echo $border_width; ?> <?php echo $border_style; ?> <?php echo $border_clr; ?>; border-radius: <?php echo $icon_radius; ?>; background: <?php echo $icon_bg; ?>; width: <?php echo $icon_height; ?>; height: <?php echo $icon_height; ?>; line-height: <?php echo $icon_height-$border_width*2; ?>px; font-size: <?php echo $icon_size; ?>; color: <?php echo $icon_color; ?>;"></i>
				<?php } ?>
			</div>
			<div class="mega-info-footer">
				<h3 class="mega-info-title" style="font-size: <?php echo $title_size; ?>; line-height: <?php echo $line_height; ?>;">
					<?php echo $info_title; ?>
				</h3>
				<p class="mega-info-desc" style="font-size: <?php echo $desc_size; ?>;">
					<?php echo $info_desc; ?>
				</p>
				<a class="mega-info-btn" href="<?php echo $btn_url; ?>" style="background: <?php echo $btn_bg; ?>; display: <?php echo $btn_visibility; ?>;">
					<?php echo $btn_text; ?>
				</a>
			</div>
		</div>

		<?php
		return ob_get_clean();
	}
}


vc_map( array(
	"name" 			=> __( 'Info Box', 'infobox' ),
	"base" 			=> "mvc_infobox",
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('Add icon box with custom font icon', 'infobox'),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/infobox.png',
	'params' => array(
		array(
			"type" 			=> "dropdown",
			"heading" 		=> __( 'Select Style', 'infobox' ),
			"param_name" 	=> "info_style",
			"description" 	=> __( 'Choose info style', 'infobox' ),
			"group" 		=> 'General',
			"value" 		=> array(
				'Vertical'	=>	'mega_info_box',
				'Horizental'	=>	'mega_info_box_2',
			)
		),
		array(
			"type" 			=> "dropdown",
			"heading" 		=> __( 'Select Image or Font icon', 'infobox' ),
			"param_name" 	=> "info_opt",
			"description" 	=> __( 'Select Image or Font icon', 'infobox' ),
			"group" 		=> 'General',
			"value" 		=> array(
				'Image'	=>	'show_image',
				'Font Icon'	=>	'show_icon',
			)
		),
		array(
            "type" 			=> 	"attach_image",
			"heading" 		=> 	__( 'Image', 'infobox' ),
			"param_name" 	=> 	"image_id",
			"description" 	=> 	__( 'Select the image', 'infobox' ),
			"group" 		=> 	'General',
			"dependency" => array('element' => "info_opt", 'value' => 'show_image'),
        ),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Width', 'infobox' ),
			"param_name" 	=> "image_size",
			"description" 	=> __( 'Set the width in pixel e.g 80px', 'infobox' ),
			"group" 		=> 'General',
			"dependency" => array('element' => "info_opt", 'value' => 'show_image'),
		),
		array(
			"type" 			=> "dropdown",
			"heading" 		=> __( 'Image Radius', 'infobox' ),
			"param_name" 	=> "image_radius",
			"description" 	=> __( 'set the image border radius', 'infobox' ),
			"group" 		=> 'General',
			"dependency" => array('element' => "info_opt", 'value' => 'show_image'),
			"value"			=>	array(
					"None"		=>		"0px",
					"5px"		=>		"5px",
					"10px"		=>		"10px",
					"15px"		=>		"15px",
					"20px"		=>		"20px",
					"25px"		=>		"25px",
					"50%"		=>		"50%",
				)
		),
		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Font icon', 'infobox' ),
			"param_name" 	=> "font_icon",
			"description" 	=> __( 'Select the font icon', 'infobox' ),
			"group" 		=> 'General',
			"dependency" => array('element' => "info_opt", 'value' => 'show_icon'),
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Font size', 'infobox' ),
			"param_name" 	=> "icon_size",
			"description" 	=> __( 'Set icon font size in pixel e.g 30px', 'infobox' ),
			"group" 		=> 'General',
			"value"			=>	"25px",
			"dependency" => array('element' => "info_opt", 'value' => 'show_icon'),
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Font Height/Width', 'infobox' ),
			"param_name" 	=> "icon_height",
			"description" 	=> __( 'height & width for icon, set in pixel', 'infobox' ),
			"group" 		=> 'General',
			"value"			=>	"80px",
			"dependency" => array('element' => "info_opt", 'value' => 'show_icon'),
		),
		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Font Color', 'infobox' ),
			"param_name" 	=> "icon_color",
			"description" 	=> __( 'Set icon color', 'infobox' ),
			"group" 		=> 'General',
			"dependency" => array('element' => "info_opt", 'value' => 'show_icon'),
		),
		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Backgroud', 'infobox' ),
			"param_name" 	=> "icon_bg",
			"group" 		=> 'General',
			"dependency" => array('element' => "info_opt", 'value' => 'show_icon'),
		),
		array(
			"type" 			=> "dropdown",
			"heading" 		=> __( 'Border Radius', 'infobox' ),
			"param_name" 	=> "icon_radius",
			"description" 	=> __( 'set the border radius around icon', 'infobox' ),
			"group" 		=> 'Border',
			"dependency" => array('element' => "info_opt", 'value' => 'show_icon'),
			"value"			=>	array(
					"None"		=>		"0px",
					"5px"		=>		"5px",
					"10px"		=>		"10px",
					"15px"		=>		"15px",
					"20px"		=>		"20px",
					"25px"		=>		"25px",
					"50%"		=>		"50%",
				)
		),
		array(
			"type" 			=> "dropdown",
			"heading" 		=> __( 'Border Width', 'infobox' ),
			"param_name" 	=> "border_width",
			"description" 	=> __( 'select the border width', 'infobox' ),
			"group" 		=> 'Border',
			"dependency" => array('element' => "info_opt", 'value' => 'show_icon'),
			"value"			=>	array(
					"0px"		=>		"0px",
					"1px"		=>		"1px",
					"2px"		=>		"2px",
					"3px"		=>		"3px",
					"5px"		=>		"5px",
					"7px"		=>		"7px",
					"10px"		=>		"10px",
					"15px"		=>		"15px",
				)
		),
		array(
			"type" 			=> "dropdown",
			"heading" 		=> __( 'Border Style', 'infobox' ),
			"param_name" 	=> "border_style",
			"group" 		=> 'Border',
			"dependency" => array('element' => "info_opt", 'value' => 'show_icon'),
			"value"			=>	array(
					"Solid"		=>		"solid",
					"Dotted"	=>		"dotted",
					"Rige"		=>		"rige",
					"Dashed"	=>		"dashed",
					"Double"	=>		"double",
					"Groove"	=>		"groove",
					"Inset"		=>		"inset",
				)
		),
		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Border Color', 'infobox' ),
			"param_name" 	=> "border_clr",
			"description" 	=> __( 'set the border color', 'infobox' ),
			"group" 		=> 'Border',
			"dependency" => array('element' => "info_opt", 'value' => 'show_icon'),
		),

		/* Detail */

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Line Height', 'infobox' ),
			"param_name" 	=> "line_height",
			"description" 	=> __( 'Set line height for text', 'infobox' ),
			"value"			=>	"0",
			"group" 		=> 'Detail',
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Title', 'infobox' ),
			"param_name" 	=> "info_title",
			"description" 	=> __( 'Write title for heading', 'infobox' ),
			"group" 		=> 'Detail',
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Title font size', 'infobox' ),
			"param_name" 	=> "title_size",
			"description" 	=> __( 'Set font size for title e.g 16px', 'infobox' ),
			"group" 		=> 'Detail',
		),
		array(
			"type" 			=> "textarea",
			"heading" 		=> __( 'Description', 'infobox' ),
			"param_name" 	=> "info_desc",
			"description" 	=> __( 'Write description for detail', 'infobox' ),
			"group" 		=> 'Detail',
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Description font size', 'infobox' ),
			"param_name" 	=> "desc_size",
			"description" 	=> __( 'Set font size for description e.g 14px', 'infobox' ),
			"group" 		=> 'Detail',
		),

		/* Button */

        array(
            "type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Show/Hide button', 'infobox' ),
			"param_name" 	=> 	"btn_visibility",
			"description" 	=> 	__( 'Select Show or Hide Button ', 'infobox' ),
			"group" 		=> 	'Button',
			"value" 		=> array(
				'Hide' =>  'none',
				'Show' =>  'initial',
			)
        ),

		array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Button Text', 'infobox' ),
			"param_name" 	=> 	"btn_text",
			"description" 	=> 	__( 'Button text name', 'infobox' ),
			"dependency" => array('element' => "btn_visibility", 'value' => 'initial'),
			"group" 		=> 	'Button',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Button Url', 'infobox' ),
			"param_name" 	=> 	"btn_url",
			"description" 	=> 	__( 'Write Button URL for link', 'infobox' ),
			"dependency" => array('element' => "btn_visibility", 'value' => 'initial'),
			"group" 		=> 	'Button',
        ),

        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Background color', 'infobox' ),
			"param_name" 	=> 	"btn_bg",
			"description" 	=> 	__( 'Set Button background color', 'infobox' ),
			"dependency" => array('element' => "btn_visibility", 'value' => 'initial'),
			"group" 		=> 	'Button',
        ),
	),
) );

