<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_mvc_ihe extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'image_id' => '',
			'image_alt' => '',
			'caption_bg' => '#FFF',
			'caption_url' => '',
			'caption_url_target' => '',
			'border_width' => '10px',
			'border_color' => '#fff',
			'hover_effect' => 'NoEffect',
		), $atts ) );
		if ($image_id != '') {
			$image_url = wp_get_attachment_url( $image_id );		
		}
		$content = wpb_js_remove_wpautop($content);
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
			      <span style="box-shadow: inset 0 0 0 <?php echo $border_width; ?> <?php echo $border_color; ?>, 0 1px 2px rgba(0, 0, 0, .3); opacity: 0.6;"></span>
			      	<img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
			      </div>
			      <div class="info" style="background-color: <?php echo $caption_bg; ?>;">
			      	<?php echo $content; ?>
			      </div>
			    </a>
			</div>
		<?php
		return ob_get_clean();
	}
}


vc_map( array(
	"name" 			=> __( 'Image Hover Effects', 'ihover' ),
	"base" 			=> "mvc_ihe",
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('Image Hover Effects', 'ihover'),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/ihe.png',
	'params' => array(
		array(
            "type" 			=> 	"attach_image",
			"heading" 		=> 	__( 'Image', 'ihover' ),
			"param_name" 	=> 	"image_id",
			"description" 	=> 	__( 'Select the image', 'ihover' ),
			"group" 		=> 	'Image',
        ),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Alternate Text', 'ihover' ),
			"param_name" 	=> "image_alt",
			"description" 	=> __( 'It will be used as alt attribute of img tag', 'ihover' ),
			"group" 		=> 'Image',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Link To', 'ihover' ),
			"param_name" 	=> "caption_url",
			"description" 	=> __( 'Enter URL to link caption', 'ihover' ),
			"group" 		=> 'Image',
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Link Target', 'ihover' ),
			"param_name" 	=> "caption_url_target",
			"description" 	=> __( 'Write _blank to open link in new window', 'ihover' ),
			"group" 		=> 'Image',
		),


		/* Caption */


		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Caption Background Color', 'ihover' ),
			"param_name" 	=> "caption_bg",
			"description" 	=> __( 'Background color for caption', 'ihover' ),
			"group" 		=> 'Caption',
		),
		array(
			"type" 			=> "textarea_html",
			"heading" 		=> __( 'Caption Text', 'ihover' ),
			"param_name" 	=> "content",
			"description" 	=> __( 'Provide Caption Here', 'ihover' ),
			"group" 		=> 'Caption',
			"value"			=> '<h2>Caption Text Here</h2>'
		),

		/* Border */

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Border Width', 'ihover' ),
			"param_name" 	=> "border_width",
			"description" 	=> __( 'Width of border, eg: 15px. Leaving blank will disable border', 'ihover' ),
			"group" 		=> 'Border',
		),
		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Border Color', 'ihover' ),
			"param_name" 	=> "border_color",
			"description" 	=> __( 'Select the color for border', 'ihover' ),
			"group" 		=> 'Border',
		),

			/* Hover Effects */

		array(
			"type" 			=> "dropdown",
			"heading" 		=> __( 'Hover Effect', 'ihover' ),
			"param_name" 	=> "hover_effect",
			"description" 	=> __( 'Choose hover effect', 'ihover' ). ' <a target="_blank" href="http://gudh.github.io/ihover/dist/index.html">Demo</a>',
			"group" 		=> 'Hover Effects',
			"value" 		=>  array(
				'NoEffect'	=>	'NoEffect',
				'circle effect2 left to right'      =>      'circle effect2 left_to_right',
				'circle effect2 right to left'      =>      'circle effect2 right_to_left',
				'circle effect2 top to bottom'      =>      'circle effect2 top_to_bottom',
				'circle effect2 bottom to top'      =>      'circle effect2 bottom_to_top',
				'circle effect3 left to right'      =>      'circle effect3 left_to_right',
				'circle effect3 right to left'      =>      'circle effect3 right_to_left',
				'circle effect3 bottom to top'      =>      'circle effect3 bottom_to_top',
				'circle effect3 top to bottom'      =>      'circle effect3 top_to_bottom',
				'circle effect4 left to right'      =>      'circle effect4 left_to_right',
				'circle effect4 right to left'      =>      'circle effect4 right_to_left',
				'circle effect4 top to bottom'      =>      'circle effect4 top_to_bottom',
				'circle effect4 bottom to top'      =>      'circle effect4 bottom_to_top',
				'circle effect5'      =>      'circle effect5',
				'circle effect6 scale up'      =>      'circle effect6 scale_up',
				'circle effect6 scale down'      =>      'circle effect6 scale_down',
				'circle effect6 scale down up'      =>      'circle effect6 scale_down_up',
				'circle effect7 left to right'      =>      'circle effect7 left_to_right',
				'circle effect7 right to left'      =>      'circle effect7 right_to_left',
				'circle effect7 top to bottom'      =>      'circle effect7 top_to_bottom',
				'circle effect7 bottom to top'      =>      'circle effect7 bottom_to_top',
				'circle effect8 left to right'      =>      'circle effect8 left_to_right',
				'circle effect8 right to left'      =>      'circle effect8 right_to_left',
				'circle effect8 top to bottom'      =>      'circle effect8 top_to_bottom',
				'circle effect8 bottom to top'      =>      'circle effect8 bottom_to_top',
				'circle effect9 left to right'      =>      'circle effect9 left_to_right',
				'circle effect9 right to left'      =>      'circle effect9 right_to_left',
				'circle effect9 top to bottom'      =>      'circle effect9 top_to_bottom',
				'circle effect9 bottom to top'      =>      'circle effect9 bottom_to_top',
				'circle effect10 top to bottom'      =>      'circle effect10 top_to_bottom',
				'circle effect10 bottom to top'      =>      'circle effect10 bottom_to_top',
				'square effect1 left and right'      =>      'square effect1 left_and_right',
				'square effect1 top to bottom'      =>      'square effect1 top_to_bottom',
				'square effect1 bottom to top'      =>      'square effect1 bottom_to_top',
				'square effect2'      =>      'square effect2',
				'square effect3 bottom to top'      =>      'square effect3 bottom_to_top',
				'square effect3 top to bottom'      =>      'square effect3 top_to_bottom',
				'square effect4'      =>      'square effect4',
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
			)
		),
	),
) );