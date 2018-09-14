<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_vc_testimonial extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'style'				=>		'theme1',
			'rating'			=>		'none',
			'link'				=>		'',
			'image_id'			=>		'',
			'width'				=>		'100px',
			'radius'			=>		'50%',
			'name'				=>		'#000',
			'namesize'			=>		'14px',
			'nameclr'			=>		'',
			'prof'				=>		'',
			'profsize'			=>		'14px',
			'profclr'			=>		'#000',
			'bgclr'				=>		'',
		), $atts ) );
		if ($image_id != '') {
			$image_url = wp_get_attachment_url( $image_id );		
		}
		wp_enqueue_style( 'testimonial-css', plugins_url( '../css/testimonial.css' , __FILE__ ));
		$content = wpb_js_remove_wpautop($content, true);
		ob_start(); ?>
		<?php if ($style == 'theme1') { ?>
			<div class="mega-testimonial">
				<div class="tm-quotes" style="background: <?php echo $bgclr; ?>; padding: 15px 10px; font-style: italic; border-radius: 4px;">
					<?php echo $content; ?>
					<span class="tm-arrow" style="border-top: 8px solid <?php echo $bgclr; ?>;"></span>
				</div>
				<div class="tm-details">
					<div class="tm-profile">
						<img src="<?php echo $image_url; ?>" style="width: <?php echo $width; ?>; border-radius: <?php echo $radius; ?>">
					</div>
					<div class="tm-prof">
						<div class="tm-name">
							<span style="font-size: <?php echo $namesize; ?>; color: <?php echo $nameclr; ?>; font-weight: bold;"><?php echo $name; ?></span>,
							<span><i><a href="<?php echo $link; ?>" style="color: <?php echo $profclr; ?>; font-size: <?php echo $profsize; ?>; font-style: italic; text-decoration: none;"><?php echo $prof; ?></a></i></span>
							<p style="padding-top: 5px; display: <?php echo $rating; ?>">
								<img src="<?php echo plugin_dir_url( __FILE__ ); ?>../images/<?php echo $rating; ?>.png">
							</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>			
		<?php } ?>

		<?php if ($style == 'theme2') { ?>
			<div class="mega-testimonial-2">
				<div class="tm-details">
					<div class="tm-prof">
						<div class="tm-name">
							<span style="font-size: <?php echo $namesize; ?>; color: <?php echo $nameclr; ?>; font-weight: bold;"><?php echo $name; ?></span>,
							<p>
								<a href="<?php echo $link; ?>" style="color: <?php echo $profclr; ?>; font-size: <?php echo $profsize; ?>; font-style: italic; text-decoration: none;"><?php echo $prof; ?></a>
							</p>
						</div>
					</div>
					<div class="tm-profile">
						<img src="<?php echo plugin_dir_url( __FILE__ ); ?>../images/<?php echo $rating; ?>.png">
						<img src="<?php echo $image_url; ?>" style="width: <?php echo $width; ?>; border-radius: <?php echo $radius; ?>">
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="tm-quotes2" style="background: <?php echo $bgclr; ?>;">
					<?php echo $content; ?>
					<span class="tm-arrow2" style="border-bottom: 8px solid <?php echo $bgclr; ?>;"></span>
				</div>
			</div>
		<?php } ?>

		<?php if ($style == 'theme3') { ?>
			<div class="mega-testimonial-3">
				<img src="<?php echo $image_url; ?>" style="width: <?php echo $width; ?>; border-radius: <?php echo $radius; ?>; box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.3);-webkit-box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.3); -moz-box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.3); -o-box-shadow: 0 0 7px 0 rgba(0, 0, 0, 0.3); border: 1px solid #fff;">
					<i class="fa fa-quote-left" style="text-align: center; display: block; font-size: 20px;padding: 10px 0 4px 0;color: #000;"></i>
				<div class="tm-profile3">
					<p style="text-align: center; font-style: italic;">
						<?php echo $content; ?>
					</p>
				</div>
				<div class="tm-prof3" style="text-align: center; margin: 15px 0 5px 0;">
					<p style="font-size: <?php echo $namesize; ?>; color: <?php echo $nameclr; ?>; font-weight: bold; text-align: center;"><?php echo $name; ?></p>
					<p style="text-align: center;">
						<a href="<?php echo $link; ?>" style="color: <?php echo $profclr; ?>; font-size: <?php echo $profsize; ?>; font-style: italic; text-decoration: none; ">
							<?php echo $prof; ?>
						</a>
					</p>
				</div>
				<img src="<?php echo plugin_dir_url( __FILE__ ); ?>../images/<?php echo $rating; ?>.png">
			</div>
		<?php } ?>

		<?php if ($style == 'theme4') { ?>
			<div class="mega-testimonial-4">
				<div class="tm-profile4">
					<img src="<?php echo $image_url; ?>" style="width: <?php echo $width; ?>; border-radius: <?php echo $radius; ?>;">
				</div>
				<div class="tm-right-box" style="padding-left: <?php echo $width+20; ?>px">
					<p class="tm-quotes" style="font-style: italic;">
						<?php echo $content; ?>
					</p><br>
					<div class="tm-prof4">
						<span style="font-size: <?php echo $namesize; ?>; color: <?php echo $nameclr; ?>; font-weight: bold; text-align: center;"><?php echo $name; ?></span>
						<span><img src="<?php echo plugin_dir_url( __FILE__ ); ?>../images/<?php echo $rating; ?>.png"></span>
						<p><a href="<?php echo $link; ?>" style="color: <?php echo $profclr; ?>; font-size: <?php echo $profsize; ?>; font-style: italic; text-decoration: none; ">
							<?php echo $prof; ?>
						</a></p>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		<?php } ?>

		<?php if ($style == 'theme5') { ?>
			<div class="mega-testimonial-5">
				<div class="tm-quotes-5" style="font-style: italic; background: <?php echo $bgclr; ?>;">
					<?php echo $content; ?>
					<span class="icon-after" style="border-right: 8px solid <?php echo $bgclr; ?>;"></span>
				</div>
				<div class="tm-profile-5">
					<img src="<?php echo $image_url; ?>" style="width: <?php echo $width; ?>; border-radius: <?php echo $radius; ?>;">
					<div class="tm-prof4">
						<span style="font-size: <?php echo $namesize; ?>; color: <?php echo $nameclr; ?>; font-weight: bold; text-align: center;"><?php echo $name; ?></span>
						<p><a href="<?php echo $link; ?>" style="color: <?php echo $profclr; ?>; font-size: <?php echo $profsize; ?>; font-style: italic; text-decoration: none; ">
							<?php echo $prof; ?>
						</a></p>
						<span><img style="border-radius: 0px;" src="<?php echo plugin_dir_url( __FILE__ ); ?>../images/<?php echo $rating; ?>.png"></span>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		<?php } ?>

		<?php if ($style == 'theme6') { ?>
			<div class="mega-testimonial-6">
				<div class="tm-quotes-6" style="font-style: italic;">
					<?php echo $content; ?>
				</div>
				<div class="tm-profile-6">
					<img class="tm-pic" src="<?php echo $image_url; ?>" style="width: <?php echo $width; ?>; border-radius: <?php echo $radius; ?>;">
					<div class="tm-prof6" style="text-align: center; padding-top: 6px;">
						<span style="font-size: <?php echo $namesize; ?>; color: <?php echo $nameclr; ?>; font-weight: bold; text-align: center;"><?php echo $name; ?></span>
						<p style="text-align: center;">
							<a href="<?php echo $link; ?>" style="color: <?php echo $profclr; ?>; font-size: <?php echo $profsize; ?>; font-style: italic; text-decoration: none; ">
								<?php echo $prof; ?>
							</a>
						</p>
						<span><img src="<?php echo plugin_dir_url( __FILE__ ); ?>../images/<?php echo $rating; ?>.png"></span>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		<?php } ?>

		<?php if ($style == 'theme7') { ?>
			<div class="mega-testimonial-7">
				<div class="tm-picture">
					<img src="<?php echo $image_url; ?>" style="width: <?php echo $width; ?>; border-radius: <?php echo $radius; ?>;">
				</div>
				<div class="tm-prof-7">
					<span style="font-size: <?php echo $namesize; ?>; color: <?php echo $nameclr; ?>; font-weight: bold; text-align: center;"><?php echo $name; ?></span>
					<p>
						<a href="<?php echo $link; ?>" style="color: <?php echo $profclr; ?>; font-size: <?php echo $profsize; ?>; font-style: italic; text-decoration: none; ">
							<?php echo $prof; ?>
						</a>
					</p>
					<p style="padding-top: 5px;"><img src="<?php echo plugin_dir_url( __FILE__ ); ?>../images/<?php echo $rating; ?>.png"></p>
				</div>
				<div class="clearfix"></div>
				<div class="tm-quotes-7" style="font-style: italic;">
					<?php echo $content; ?>
				</div>
			</div>
		<?php } ?>
		
		<?php
		return ob_get_clean();
	}
}


vc_map( array(
	"name" 			=> __( 'Testimonial', 'testimonial' ),
	"base" 			=> "vc_testimonial",
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('show client comments as testimonial', ''),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/testimonial.png',
	'params' => array(
		array(
            "type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Style', 'testimonial' ),
			"param_name" 	=> 	"style",
			"group" 		=> 	'Settings',
			"value"			=>	array(
				"Theme 1"	=>	"theme1",
				"Theme 2"	=>	"theme2",
				"Theme 3"	=>	"theme3",
				"Theme 4"	=>	"theme4",
				"Theme 5"	=>	"theme5",
				"Theme 6"	=>	"theme6",
				"Theme 7"	=>	"theme7",
			)
        ),
        array(
            "type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Rating', 'testimonial' ),
			"param_name" 	=> 	"rating",
			"group" 		=> 	'Settings',
			"value"			=>	array(
				"Disable"	=>	"none",
				"5 Star"	=>	"5_stars",
				"4 Star"	=>	"4_stars",
				"3 Star"	=>	"3_stars",
			)
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Link To', 'testimonial' ),
			"param_name" 	=> 	"link",
			"description" 	=> 	__( 'write url for open link', 'testimonial' ),
			"group" 		=> 	'Settings',
        ),
		array(
            "type" 			=> 	"attach_image",
			"heading" 		=> 	__( 'Image', 'testimonial' ),
			"param_name" 	=> 	"image_id",
			"description" 	=> 	__( 'Select the image', 'testimonial' ),
			"group" 		=> 	'Image',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Image Width', 'testimonial' ),
			"param_name" 	=> 	"width",
			"description" 	=> 	__( 'image width in pixel e.g 100px', 'testimonial' ),
			"group" 		=> 	'Image',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Radius', 'testimonial' ),
			"param_name" 	=> 	"radius",
			"description" 	=> 	__( 'image border radius in pixel or percentage e,g 50%', 'testimonial' ),
			"value"			=>	"50%",
			"group" 		=> 	'Image',
        ),

        // Client Section

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Client Name', 'testimonial' ),
			"param_name" 	=> 	"name",
			"value"			=>	"Demon",
			"group" 		=> 	'Client',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Name Font Size', 'testimonial' ),
			"param_name" 	=> 	"namesize",
			"value"			=>	"14px",
			"description" 	=> 	__( 'set in pixel e,g 14px', 'testimonial' ),
			"group" 		=> 	'Client',
        ),
        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Color of Name', 'testimonial' ),
			"param_name" 	=> 	"nameclr",
			"value"			=>	"#000",
			"group" 		=> 	'Client',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Client Profession', 'testimonial' ),
			"param_name" 	=> 	"prof",
			"value"			=>	"Profession",
			"group" 		=> 	'Client',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Profession Font Size', 'testimonial' ),
			"param_name" 	=> 	"profsize",
			"value"			=>	"14px",
			"description" 	=> 	__( 'set in pixel e,g 14px', 'testimonial' ),
			"group" 		=> 	'Client',
        ),
        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Color of Profession', 'testimonial' ),
			"param_name" 	=> 	"profclr",
			"value"			=>	"#000",
			"group" 		=> 	'Client',
        ),
        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Comments Background', 'testimonial' ),
			"param_name" 	=> 	"bgclr",
			"group" 		=> 	'Comments',
        ),
        array(
            "type" 			=> 	"textarea_html",
			"heading" 		=> 	__( 'Client Comments', 'testimonial' ),
			"param_name" 	=> 	"content",
			"group" 		=> 	'Comments',
			"value"			=>	"write client comments here as feedback",
        ),
	),
) );

