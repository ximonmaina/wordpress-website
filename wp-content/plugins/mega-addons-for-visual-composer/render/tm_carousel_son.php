<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_tm_carousel_son extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'contain_url'		=>		'',
			'image_id'			=>		'',
			'img_width'			=>		'',
			'img_height'		=>		'',
			'img_radius'		=>		'0px',
			'title'				=>		'',
			'titlesize'			=>		'22px',
			'titleclr'			=>		'',
			'fontweight'		=>		'normal',
			'line_height'		=>		'1',
			'align'				=>		'center',
			'line_width'		=>		'50px',
			'line_style'		=>		'0px solid #fff',
			'btn_visibility'	=>		'hide',
			'line_visibility'	=> 		'hide',
			'btn_text'			=>		'',
			'btn_size'			=>		'15px',
			'btn_border'		=>		'5px',
			'btn_height'		=>		'20px',
			'btn_width'			=>		'60px',
			'btn_url'			=>		'',
			'btn_clr'			=>		'#fff',
			'btn_bg'			=>		'#000',
			'btn_border_style'	=>		'0px solid #fff',
		), $atts ) );
		if ($image_id != '') {
			$image_url = wp_get_attachment_url( $image_id );		
		}
		$content = wpb_js_remove_wpautop($content);
		// wp_enqueue_style( 'social-icons-css', plugins_url( '../css/socialicons.css' , __FILE__ ));
		ob_start(); ?>
		  <div>
		  	<?php if ($contain_url != '') { ?>
		  		<a href="<?php echo $contain_url; ?>">		
			<?php } ?>
			<?php if ($contain_url == NULL) { ?>
				<a>
			<?php } ?>
			<?php if ($image_url != '') { ?>
			  	<img src="<?php echo $image_url; ?>" class="ultimate-slide-img" style="width: <?php echo $img_width; ?>; height: <?php echo $img_height; ?>; border-radius: <?php echo $img_radius; ?>; margin-bottom: 15px;">
			<?php } ?>	
			</a>
		  	<span class="content-section" style="text-align: <?php echo $align ?>;">
			  	<h2 class="tdt-slider-heading" style="font-size: <?php echo $titlesize; ?>; color: <?php echo $titleclr; ?>; font-weight: <?php echo $fontweight; ?>; line-height: <?php echo $line_height; ?>;">
			  		<?php echo $title; ?>
			  	</h2>
			  	<?php if ($line_visibility == 'show') { ?>
				  	<span class="heading-line" style="display: block;">
				  		<span class="heading-line" style="width: <?php echo $line_width; ?>; border-bottom: <?php echo $line_style; ?>; display: inline-block;"></span>
				  	</span>
			  	<?php } ?>
			  	
			  	<?php echo $content; ?><br>

			  	<?php if ($btn_visibility == 'show') { ?>
			  	<span class="carousel_btn_span">
			  		<a href="<?php echo $btn_url; ?>" class="ultimate_carousel_btn" style="padding: <?php echo $btn_height/2 ?>px <?php echo $btn_width/2 ?>px;font-size: <?php echo $btn_size; ?>; border-radius: <?php echo $btn_border; ?>; color: <?php echo $btn_clr; ?>; background-color: <?php echo $btn_bg; ?>;">
				  		<?php echo $btn_text; ?>
				  	</a>
				</span>
			  	<?php } ?>
		  	</span>
		  </div>
		<?php

		return ob_get_clean();
	}
}


vc_map( array(
	"base" 			=> "tm_carousel_son",
	"name" 			=> __( 'Slider Settings', 'tm-carousel' ),
	"as_child" 		=> array('only' => 'tm_carousel_father'),
	"content_element" => true,
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('show as slider', ''),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/carousal-slider.png',
	'params' => array(
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Link To', 'slider' ),
			"param_name" 	=> 	"contain_url",
			"description"	=>	"Add Slide Url or leave blank, use it if you select theme [top image bottom content]",
			"group" 		=> 'General',
		),
		array(
			"type" 			=> 	"attach_image",
			"heading" 		=> 	__( 'Select Image', 'slider' ),
			"param_name" 	=> 	"image_id",
			"group" 		=> 'General',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Width', 'slider' ),
			"param_name" 	=> 	"img_width",
			"description"	=>	__( 'set in pixel or percentage or leave blank', 'slider' ),
			"group" 		=> 'General',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Height', 'slider' ),
			"param_name" 	=> 	"img_height",
			"description"	=>	__( 'set in pixel eg 100% or 500px or leave blank', 'slider' ),
			"group" 		=> 'General',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Image Radius', 'slider' ),
			"param_name" 	=> 	"img_radius",
			"description"	=>	__( 'border radius. set in pixel or percentage or leave blank', 'slider' ),
			"value"			=>	"0px",
			"group" 		=> 'General',
		),


		// Title Section
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Alignment', 'slider' ),
			"param_name" 	=> 	"align",
			"group" 		=> 'Heading',
			"value"			=>	array(
				"Center"		=>		'center',
				"Left"			=>		'left',
				"Right"			=>		'right',
			)
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Title', 'slider' ),
			"param_name" 	=> 	"title",
			"group" 		=> 'Heading',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Title Font Size', 'slider' ),
			"param_name" 	=> 	"titlesize",
			"description"	=>	"set in pixel eg, 22px",
			"value"			=>	"22px",
			"group" 		=> 'Heading',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Title Color', 'slider' ),
			"param_name" 	=> 	"titleclr",
			"group" 		=> 'Heading',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Font Weight', 'slider' ),
			"param_name" 	=> 	"fontweight",
			"description"	=>	"lighter, normal, bold, 100, 300, 500..",
			"value"			=>	"normal",
			"group" 		=> 'Heading',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Line Height', 'slider' ),
			"param_name" 	=> 	"line_height",
			"description"	=>	"default value is 1",
			"value"			=>	"1",
			"group" 		=> 'Heading',
		),

		// Heading Line
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Enable/Disable', 'slider' ),
			"param_name" 	=> 	"line_visibility",
			"group" 		=> 'Heading Line',
			"value"			=>	array(
				"Hide"			=>		'hide',
				"Show"			=>		'show',
			)
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Line Width', 'slider' ),
			"param_name" 	=> 	"line_width",
			"description"	=>	"set in pixel. line will show at bottom of heading",
			"dependency" => array('element' => "line_visibility", 'value' => 'show'),
			"value"			=>	"50px",
			"group" 		=> 'Heading Line',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Line Style', 'slider' ),
			"param_name" 	=> 	"line_style",
			"value"			=>	"0px solid #fff",
			"description"	=>	"[height style color]",
			"dependency" => array('element' => "line_visibility", 'value' => 'show'),
			"group" 		=> 'Heading Line',
		),

		// Button Setting
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Enable/Disable', 'slider' ),
			"param_name" 	=> 	"btn_visibility",
			"group" 		=> 'Button',
			"value"			=>	array(
				"Hide"			=>		'hide',
				"Show"			=>		'show',
			)
		),

		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Button Text', 'slider' ),
			"param_name" 	=> 	"btn_text",
			"dependency" => array('element' => "btn_visibility", 'value' => 'show'),
			"group" 		=> 'Button',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Button URL', 'slider' ),
			"param_name" 	=> 	"btn_url",
			"dependency" => array('element' => "btn_visibility", 'value' => 'show'),
			"group" 		=> 'Button',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Text Size', 'slider' ),
			"param_name" 	=> 	"btn_size",
			"value"			=>	"15px",
			"description"	=>	"set in pixel eg 15px",
			"dependency" => array('element' => "btn_visibility", 'value' => 'show'),
			"group" 		=> 'Button',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Button Height', 'slider' ),
			"param_name" 	=> 	"btn_height",
			"description"	=>	"set in pixel eg 20px,",
			"dependency" => array('element' => "btn_visibility", 'value' => 'show'),
			"value"			=> 	"20px",
			"group" 		=> 'Button',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Button Width', 'slider' ),
			"param_name" 	=> 	"btn_width",
			"description"	=>	"set in pixel eg 60px",
			"dependency" => array('element' => "btn_visibility", 'value' => 'show'),
			"value"			=> 	"60px",
			"group" 		=> 'Button',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Button Border Radius', 'slider' ),
			"param_name" 	=> 	"btn_border",
			"description"	=>	"set in pixel",
			"dependency" => array('element' => "btn_visibility", 'value' => 'show'),
			"value"			=> 	"5px",
			"group" 		=> 'Button',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Border Style', 'slider' ),
			"param_name" 	=> 	"btn_border_style",
			"description"	=>	"[height style color]",
			"dependency" => array('element' => "btn_visibility", 'value' => 'show'),
			"value"			=> 	"0px solid #fff",
			"group" 		=> 'Button',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Text Color', 'slider' ),
			"param_name" 	=> 	"btn_clr",
			"dependency" => array('element' => "btn_visibility", 'value' => 'show'),
			"group" 		=> 'Button',
		),
		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Background Color', 'slider' ),
			"param_name" 	=> 	"btn_bg",
			"dependency" => array('element' => "btn_visibility", 'value' => 'show'),
			"group" 		=> 'Button',
		),

		// Description Section

		array(
			"type" 			=> 	"textarea_html",
			"heading" 		=> 	__( 'Write Testimonial Text', 'slider' ),
			"param_name" 	=> 	"content",
			"value"			=>	"<h2 style='text-align: center;'>SUB HEADING</h2><p style='text-align: center;'>write any text and make custom design that you want to show.</p>",
			"group" 		=> 'Description',
		),
	),
) );
