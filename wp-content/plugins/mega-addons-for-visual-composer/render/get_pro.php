<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_vc_get_pro extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'image_id' => '',
		), $atts ) );
		$content = wpb_js_remove_wpautop($content);
		ob_start(); ?>
			
		<?php
		return ob_get_clean();
	}
}


vc_map( array(
	"name" 			=> __( 'Buy Premium', 'ihover' ),
	"base" 			=> "vc_get_pro",
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('Buy Mega Addons to explore more features', 'ihover'),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/pro.png',
	'params' => array(
		array(
			"type" 			=> "textfeld",
			"heading" 		=> __( '', 'ich-vc' ). ' <a target="_blank" href="http://www.topdigitaltrends.net/mega-addons-visual-composer-wordpress-plugin/">BUY MEGA ADDONS PRO TO EXPLORE PREMIUM FEATURES</a>',
			"param_name" 	=> "hover_effectsss",
			"group" 		=> 'Pro Features',
		),
	),
) );