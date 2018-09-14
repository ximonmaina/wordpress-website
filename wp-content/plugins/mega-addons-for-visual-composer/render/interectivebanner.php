<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_interective_banner extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'effects'		=>		'effect-lily',
			'image_id'		=>		'',
			'height'		=>		'',
			'url'			=>		'',
			'blank'			=>		'',
			'title'			=>		'Heading',
			'titlesize'		=>		'18px',
			'desc'			=>		'',
			'descsize'		=>		'15px',
			'clr'			=>		'#fff',
			'bgclr'			=>		'',
		), $atts ) );
		if ($image_id != '') {
			$image_url = wp_get_attachment_url( $image_id );		
		}
		$content = wpb_js_remove_wpautop($content, true);
		wp_enqueue_style( 'int-banner-css', plugins_url( '../css/int_banner.css' , __FILE__ ));
		ob_start(); ?>
		<!-- HTML DESIGN HERE -->
		<div class="grid vc-interactive-banner">
			<figure class="<?php echo $effects; ?>" style="background: <?php echo $bgclr; ?>; width: 100%;">
				<img src="<?php echo $image_url; ?>" style="height: <?php echo $height; ?>; width: 100%;" />
				<figcaption>
					<div>
						<h2 style="font-size: <?php echo $titlesize; ?>; color: <?php echo $clr; ?>; font-weight: 500;">
							<?php echo $title; ?>
						</h2>
						<p style="font-size: <?php echo $descsize; ?>; color: <?php echo $clr; ?>;">
							<?php echo $desc; ?>
						</p>
					</div>
					<?php if (isset($url) && $url != '') { ?>
						<a href="<?php echo $url; ?>" target="<?php echo $blank; ?>">
					<?php } ?>
					<?php if (isset($url) && $url == NULL) { ?>
						<a>
					<?php } ?>
					</a>
				</figcaption>			
			</figure>
		</div>
        <!-- HTML END DESIGN HERE -->
		<?php
		return ob_get_clean();
	}
}


vc_map( array(
	"name" 			=> __( 'Interactive Banner', 'int_banner' ),
	"base" 			=> "interective_banner",
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('great hover effects', ''),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/int-banner.png',
	'params' => array(
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Effects', 'int_banner' ),
			"param_name" 	=> 	"effects",
			"description" 	=> __( 'Choose hover effect', 'int_banner' ). ' <a target="_blank" href="http://addons.topdigitaltrends.net/interactive-banner/">Demo</a>',
			"group" 		=> 	'Image',
			"value"			=>	array(
				'LILY'			=>		'effect-lily',
				'SADIE'			=>		'effect-sadie',
				'HONEY'			=>		'effect-honey',
				'LAYLA'			=>		'effect-layla',
				// 'ZOE'			=>		'effect-zoe',
				'MARLEY'		=>		'effect-marley',
				'RUBY'			=>		'effect-ruby',
				'ROXY'			=>		'effect-roxy',
				'BUBBA'			=>		'effect-bubba',
				'ROMEO'			=>		'effect-romeo',
				'DEXTER'		=>		'effect-dexter',
				'SARAH'			=>		'effect-sarah',
				'CHICO'			=>		'effect-chico',
				'MILO'			=>		'effect-milo',
				'GOLIATH'		=>		'effect-goliath',
				'APOLLO'		=>		'effect-apollo',
				'MOSES'			=>		'effect-moses',
				'JAZZ'			=>		'effect-jazz',
				'LEXI'			=>		'effect-lexi',
			)
		),
		array(
            "type" 			=> 	"attach_image",
			"heading" 		=> 	__( 'Image', 'int_banner' ),
			"param_name" 	=> 	"image_id",
			"description" 	=> 	__( 'Select the image', 'int_banner' ),
			"group" 		=> 	'Image',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Image Height', 'int_banner' ),
			"param_name" 	=> 	"height",
			"description" 	=> 	__( 'set custom height in pixel eg, 230px or leave blank', 'int_banner' ),
			"group" 		=> 	"Image",
        ),
		array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Url', 'int_banner' ),
			"param_name" 	=> 	"url",
			"description" 	=> 	__( 'write url for moving to specific link', 'int_banner' ),
			"value"			=>	"URL",
			"group" 		=> 	"Image",
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Target', 'int_banner' ),
			"param_name" 	=> 	"blank",
			"description" 	=> 	__( 'write _blank for open link into new tab or leave blank', 'int_banner' ),
			"value"			=>	"",
			"group" 		=> 	"Image",
        ),
		array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Heading', 'int_banner' ),
			"param_name" 	=> 	"title",
			"description" 	=> 	__( 'write title', 'int_banner' ),
			"value"			=>	"Heading",
			"group" 		=> 	"Title",
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Heading Font Size', 'int_banner' ),
			"param_name" 	=> 	"titlesize",
			"description" 	=> 	__( 'set in pixel e.g 18px', 'int_banner' ),
			"value"			=>	"18px",
			"group" 		=> 	"Title",
        ),
        array(
            "type" 			=> 	"textarea",
			"heading" 		=> 	__( 'Description', 'int_banner' ),
			"param_name" 	=> 	"desc",
			"description" 	=> 	__( 'write description', 'int_banner' ),
			"value"			=>	"Description goes here",
			"group" 		=> 	"Title",
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Description Font Size', 'int_banner' ),
			"param_name" 	=> 	"descsize",
			"description" 	=> 	__( 'set in pixel e.g 15px', 'int_banner' ),
			"value"			=>	"15px",
			"group" 		=> 	"Title",
        ),
        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Content Color', 'int_banner' ),
			"param_name" 	=> 	"clr",
			"description" 	=> 	__( 'text color', 'int_banner' ),
			"value"			=>	"#fff",
			"group" 		=> 	"Color",
        ),
        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Background Color', 'int_banner' ),
			"param_name" 	=> 	"bgclr",
			"group" 		=> 	"Color",
        ),
	),
) );

