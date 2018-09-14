<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_accordion_father extends WPBakeryShortCodesContainer {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'bgclr2' 	=> '',
			'type'			=>		'default',
		), $atts ) );
		$content = wpb_js_remove_wpautop($content);
		wp_enqueue_style( 'accordion-css', plugins_url( '../css/accordion.css' , __FILE__ ));
		wp_enqueue_script( 'accordion-js', plugins_url( '../js/accordion.js' , __FILE__ ), array('jquery', 'jquery-ui-accordion'));
		ob_start(); ?>
		<div class="mega-accordion" data-type="<?php echo $type; ?>">
			<?php echo $content; ?>
		</div>

		<?php return ob_get_clean();
	}
}


vc_map( array(
	"base" 			=> "accordion_father",
	"name" 			=> __( 'Accordion', 'accordion' ),
	"as_parent" 	=> array('only' => 'accordion_son'),
	"content_element" => true,
	"js_view" 		=> 'VcColumnView',
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('vertically stacked list of items', ''),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/accordions.png',
	'params' => array(
			array(
				"type" 			=> 	"dropdown",
				"heading" 		=> 	__( 'Type', 'accordion' ),
				"param_name" 	=> 	"type",
				"description" 	=> 	__( 'select', 'accordion' ),
				"group" 		=> 'General',
				"value"			=> array(
					"Default"		=>	"default",
					"Collapsible"	=>	"collapsible",
				)
			),
		)
) );
