<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_image_swap extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'image_id' 				=> '',
			'image_id2' 			=> '',
			'caption_url' 			=> '',
			'caption_url_target' 	=> '',
			'border_width' 			=> '10px',
			'border_color' 			=> '#fff',
			'hover_effect' 			=> 'square effect2',
		), $atts ) );
		if ($image_id != '') {
			$image_url = wp_get_attachment_url( $image_id );		
		}
		if ($image_id2 != '') {
			$image_url2 = wp_get_attachment_url( $image_id2 );		
		}
		$content = wpb_js_remove_wpautop($content, true);
		ob_start(); ?>
		<div class="ih-item <?php echo $hover_effect; ?>"
			style="border: <?php echo $border_width; ?> solid <?php echo $border_color; ?>;">
			<?php if (isset($caption_url) && $caption_url != '') { ?>
				<a href="<?php echo $caption_url; ?>" target="<?php echo $caption_url_target; ?>">
			<?php } ?>
			<?php if (isset($caption_url) && $caption_url == NULL) { ?>
				<a>
			<?php } ?>
		      <div class="img">
		      	<img src="<?php echo $image_url; ?>">
		      </div>
		      <div class="info" style="opacity: 1 !important;">
		      	<img src="<?php echo $image_url2; ?>">
		      </div>
		    </a>
		</div>
		<?php
		return ob_get_clean();
	}
}


vc_map( array(
	"name" 			=> __( 'Image Swap', 'swap' ),
	"base" 			=> "image_swap",
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('Image over image hover effects', 'swap'),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/img-swap.png',
	'params' => array(
		array(
            "type" 			=> 	"attach_image",
			"heading" 		=> 	__( 'Image', 'swap' ),
			"param_name" 	=> 	"image_id",
			"description" 	=> 	__( 'Select the image', 'swap' ),
			"group" 		=> 	'Image',
        ),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Link To', 'swap' ),
			"param_name" 	=> "caption_url",
			"description" 	=> __( 'Enter URL to link caption', 'swap' ),
			"group" 		=> 'Image',
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Link Target', 'swap' ),
			"param_name" 	=> "caption_url_target",
			"description" 	=> __( 'Write _blank to open link in new window', 'swap' ),
			"group" 		=> 'Image',
		),


		/* Border */

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Border Width', 'swap' ),
			"param_name" 	=> "border_width",
			"description" 	=> __( 'Width of border, eg: 15px. Leaving blank will disable border', 'swap' ),
			"group" 		=> 'Border',
		),
		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Border Color', 'swap' ),
			"param_name" 	=> "border_color",
			"description" 	=> __( 'Select the color for border', 'swap' ),
			"group" 		=> 'Border',
		),

		/* Hover Effects */

		array(
            "type" 			=> 	"attach_image",
			"heading" 		=> 	__( 'Flip Image', 'swap' ),
			"param_name" 	=> 	"image_id2",
			"description" 	=> 	__( 'It will show on hover', 'swap' ),
			"group" 		=> 	'Hover Effects',
        ),

		array(
			"type" 			=> "dropdown",
			"heading" 		=> __( 'Hover Effect', 'swap' ),
			"param_name" 	=> "hover_effect",
			"description" 	=> __( 'Choose hover effect', 'swap' ),
			"group" 		=> 'Hover Effects',
			"value" 		=> array(
				'square effect2'      =>      'square effect2',
				'square effect5 left to right'      =>      'square effect5 left_to_right',
				'square effect5 right to left'      =>      'square effect5 right_to_left',
				'square effect6 from top and bottom'      =>      'square effect6 from_top_and_bottom',
				'square effect6 from left and right'      =>      'square effect6 from_left_and_right',
				'square effect6 top to bottom'      =>      'square effect6 top_to_bottom',
				'square effect6 bottom to top'      =>      'square effect6 bottom_to_top',
				'square effect7'      =>      'square effect7',
				'square effect8 scaleup'      =>      'square effect8 scale_up',
				'square effect8 scaledown'      =>      'square effect8 scale_down',
				'square effect9 bottom to top'      =>      'square effect9 bottom_to_top',
				'square effect9 left to right'      =>      'square effect9 left_to_right',
				'square effect9 right to left'      =>      'square effect9 right_to_left',
				'square effect9 top to bottom'      =>      'square effect9 top_to_bottom',
				'square effect10 left to right'      =>      'square effect10 left_to_right',
				'square effect10 right to left'      =>      'square effect10 right_to_left',
				'square effect10 top to bottom'      =>      'square effect10 top_to_bottom',
				'square effect10 bottom to top'      =>      'square effect10 bottom_to_top',
				'square effect11 left to right'      =>      'square effect11 left_to_right',
				'square effect11 right to left'      =>      'square effect11 right_to_left',
				'square effect11 top to bottom'      =>      'square effect11 top_to_bottom',
				'square effect11 bottom to top'      =>      'square effect11 bottom_to_top',
				'square effect12 left to right'      =>      'square effect12 left_to_right',
				'square effect12 right to left'      =>      'square effect12 right_to_left',
				'square effect12 top to bottom'      =>      'square effect12 top_to_bottom',
				'square effect12 bottom to top'      =>      'square effect12 bottom_to_top',
				'square effect13 left to right'      =>      'square effect13 left_to_right',
				'square effect13 right to left'      =>      'square effect13 right_to_left',
				'square effect13 top to bottom'      =>      'square effect13 top_to_bottom',
				'square effect13 bottom to top'      =>      'square effect13 bottom_to_top',
				'square effect14 left to right'      =>      'square effect14 left_to_right',
				'square effect14 right to left'      =>      'square effect14 right_to_left',
				'square effect14 top to bottom'      =>      'square effect14 top_to_bottom',
				'square effect14 bottom to top'      =>      'square effect14 bottom_to_top',
				'square effect15 left to right'      =>      'square effect15 left_to_right',
				'square effect15 right to left'      =>      'square effect15 right_to_left',
				'square effect15 top to bottom'      =>      'square effect15 top_to_bottom',
				'square effect15 bottom to top'      =>      'square effect15 bottom_to_top',
			)
		),
	),
) );

