<?php 

class VC_MEGA 
{
	function __construct()
	{
		add_action( 'vc_before_init', array($this, 'vc_mega_addons' ));
		add_action( 'wp_enqueue_scripts', array($this, 'adding_front_scripts') );
		add_action( 'init', array( $this, 'check_if_vc_is_install' ) );
		add_filter( 'plugin_action_links', array($this, 'action_links'), 10, 5 );
		// remove_filter( 'the_content', 'wpautop' );
	}


	function adding_front_scripts () {
		wp_enqueue_style( 'image-hover-effects-css', plugins_url( 'css/ihover.css' , __FILE__ ));
		wp_enqueue_style( 'style-css', plugins_url( 'css/style.css' , __FILE__ ));
		wp_enqueue_style( 'font-awesome-latest', plugins_url( 'css/font-awesome/css/font-awesome.css' , __FILE__ ));
		wp_enqueue_script( 'front-js-na', plugins_url( 'js/script.js' , __FILE__ ), array('jquery', 'jquery-ui-core'));
	}

		
	function vc_mega_addons() {
		include 'render/infobanners.php';
		include 'render/hover.php';
		include 'render/price.php';
		include 'render/advanceprice.php';
		include 'render/infobox.php';
		include 'render/hoverbutton.php';
		include 'render/teamprofile.php';
		include 'render/photobook.php';
		include 'render/statcounter.php';
		include 'render/flipbox.php';
		include 'render/timeline_father.php';
		include 'render/timeline_son.php';
		include 'render/countdown.php';
		include 'render/creativelink.php';
		include 'render/texttyper.php';
		include 'render/social_father.php';
		include 'render/social_son.php';
		include 'render/modalPopup.php';
		include 'render/interectivebanner.php';
		include 'render/info_list_father.php';
		include 'render/info_list_son.php';
		include 'render/googletrends.php';
		include 'render/tooltip_icons.php';
		include 'render/testimonial.php';
		include 'render/tm_carousel_father.php';
		include 'render/tm_carousel_son.php';
		include 'render/headings.php';
		include 'render/highlight_box.php';
		include 'render/image_swap.php';
		include 'render/accordion_father.php';
		include 'render/accordion_son.php';
		include 'render/info_circle.php';
	}


	function check_if_vc_is_install(){
        if ( ! defined( 'WPB_VC_VERSION' ) ) {
            // Display notice that Visual Compser is required
            add_action('admin_notices', array( $this, 'showVcVersionNotice' ));
            return;
        }			
	}

	function showVcVersionNotice(){
	    ?>
	    <div class="notice notice-warning is-dismissible">
	        <p>Please install <a href="https://codecanyon.net/item/visual-composer-page-builder-for-wordpress/242431?ref=nasir179125">Visual Composer</a> to use Mega Addons.</p>
	    </div>
	    <?php
	}

	function action_links($actions, $plugin_file){
		static $plugin;

		if (!isset($plugin))
			$plugin = plugin_basename(__FILE__);
		if ('mega-addons-for-visual-composer/index.php' == $plugin_file && defined('WPB_VC_VERSION')) {

				$site_link = array('upgrade' => '<a href="https://codecanyon.net/item/mega-addons-for-wpbakery-page-builder-formerly-visual-composer/21480176?ref=nasir179125" style="font-size: 14px;color: #11967A;" target="_blank"><b>Upgrade To Premium</b></a>');
			
					$actions = array_merge($site_link, $actions);
				
			}
			
			return $actions;
    }

}

$N_object = new VC_MEGA;
 ?>