<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_highlight_box extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'id'			=>		'',
			'style'			=>		'btn-5a',
			'height'		=>		'140px',
			'lineheight'	=>		'2',
			'url'			=>		'#0',
			'icon'			=>		'',
			'iconsize'		=>		'31px',
			'textsize'		=>		'31px',
			'text'			=>		'',
			'text2'			=>		'',
			'clr'			=>		'#000',
			'bgclr'			=>		'#9e54bd',
			'hoverbg'		=>		'',
		), $atts ) );
		$content = wpb_js_remove_wpautop($content, true);
		wp_enqueue_style( 'highlight-box', plugins_url( '../css/highlight-box.css' , __FILE__ ));
		ob_start(); ?>
			<div id="highlight_box<?php echo $id; ?>" style="display: table; width: 100%;height: 100%;">
				<?php if ($style != 'fade2') { ?>
					<a href="<?php echo $url; ?>" class="mega_highlight_box btn-5 <?php echo $style; ?>" style="height: <?php echo $height; ?>; color: <?php echo $clr; ?>; background: <?php echo $bgclr; ?>;">
						<i class="<?php echo $icon; ?> span-before" aria-hidden="true" style="font-size: <?php echo $iconsize; ?>; line-height: <?php echo $height; ?>; color: <?php echo $clr; ?>;"></i>
						<div>
							<span class="text" style="font-size: <?php echo $textsize; ?>;"><?php echo $text; ?> <br> <?php echo $text2; ?></span>
						</div>
						<span class="span-after"></span>
					</a>
				<?php } ?>

				<?php if ($style == 'fade2') { ?>
					<a href="<?php echo $url; ?>" class="mega_highlight_box btn-5 <?php echo $style; ?>" style="height: <?php echo $height; ?>; color: <?php echo $clr; ?>; background: <?php echo $bgclr; ?>; text-align: center;">
						<div>
							<span class="text" style="font-size: <?php echo $textsize; ?>; line-height: <?php echo $lineheight-.5; ?>;">
								<?php echo $text; ?>
							</span>
						</div>
						<i class="<?php echo $icon; ?>" aria-hidden="true" style="line-height: <?php echo $lineheight-1; ?>; font-size: <?php echo $iconsize; ?>; color: <?php echo $clr; ?>;"></i>
					</a>
				<?php } ?>
			</div>

			<style>
				#highlight_box<?php echo $id; ?> a:hover{
					background: <?php echo $hoverbg; ?> !important;
				}
				#highlight_box<?php echo $id; ?> .fade i{
					display: none;
				}
			</style>
		<?php
		return ob_get_clean();
	}
}


vc_map( array(
	"name" 			=> __( 'Highlight Box', 'highlight' ),
	"base" 			=> "highlight_box",
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('Beautiful designed buttons for highlight', 'highlight'),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/creatives.png',
	'params' => array(
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Unique ID', 'highlight' ),
			"param_name" 	=> "id",
			"description" 	=> 	__( 'Required: It must be unique for each'),
			"group" 		=> "General",
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Style', 'highlight' ),
			"param_name" 	=> 	"style",
			"description" 	=> 	__( 'highlight style'),
			"group" 		=> 	'General',
			"value"			=>	array(
				"Slide Top"					=>		"btn-5a",
				"Slide Left"				=>		"btn-5b",
				"Slide Right"				=>		"btn-5c",
				"Slide Bottom"				=>		"btn-5d",
				"Fade without Icon"			=>		"fade",
				"Fade with Icon"			=>		"fade2",
				)
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Box Height', 'highlight' ),
			"param_name" 	=> "height",
			"description" 	=> 	__( 'set in pixel eg, 140px'),
			"value"			=>	"140px",
			"group" 		=> "General",
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'line height', 'highlight' ),
			"param_name" 	=> "lineheight",
			"description" 	=> 	__( 'between text and Icon'),
			"dependency" => array('element' => "style", 'value' => 'fade2'),
			"value"			=>	"2",
			"group" 		=> "General",
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Box URL', 'highlight' ),
			"param_name" 	=> "url",
			"value"			=>	"#",
			"group" 		=> "General",
		),
		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Choose Icon', 'highlight' ),
			"param_name" 	=> "icon",
			"group" 		=> "Icon",
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Font Size', 'highlight' ),
			"param_name" 	=> "iconsize",
			"description" 	=> 	__( 'set in pixel eg, 30px'),
			"value"			=>	"30px",
			"group" 		=> "Icon",
		),


		// Text Section
		 
		
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Text Font Size', 'highlight' ),
			"param_name" 	=> "textsize",
			"description" 	=> 	__( 'set in pixel eg, 35px'),
			"value"			=>	"35px",
			"group" 		=> "Text",
		),

		array(
			"type" 			=> "textarea",
			"heading" 		=> __( 'Text', 'highlight' ),
			"param_name" 	=> "text",
			"description" 	=> 	__( 'display heighlight box text'),
			"group" 		=> "Text",
		),

		array(
			"type" 			=> "textarea",
			"heading" 		=> __( 'Text 2', 'highlight' ),
			"param_name" 	=> "text2",
			"description" 	=> 	__( 'It will show in 2nd line or leave blank'),
			"group" 		=> "Text",
		),


		// Color Section
		 

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Text Color', 'highlight' ),
			"param_name" 	=> "clr",
			"group" 		=> "Color",
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Background Color', 'highlight' ),
			"param_name" 	=> "bgclr",
			"group" 		=> "Color",
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Hover Background Color', 'highlight' ),
			"param_name" 	=> "hoverbg",
			"group" 		=> "Color",
		),
	),
) );

