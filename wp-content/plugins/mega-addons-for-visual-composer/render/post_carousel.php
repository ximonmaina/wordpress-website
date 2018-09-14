<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

class WPBakeryShortCode_vc_posts_carousel extends WPBakeryShortCode {

	protected function content( $atts, $content = null ) {

		extract( shortcode_atts( array(
			'style'				=>		'mega-post-carousel1',
			'settings'			=>		'',
			'arrow'				=>		'true',
			'dot'				=>		'true',
			'autoplay'			=>		'true',
			'slide_visible'		=>		'1',
			'slide_scroll'		=>		'1',
			'comment'			=>		'block',
			'catg'				=>		'visible',
			'imgheight'			=>		'200px',
			'txtsize'			=>		'18px',
			'descsize'			=>		'14px',
			'txtclr'			=>		'#000',
			'dateclr'			=>		'#000',
			'descclr'			=>		'#888',
		), $atts ) );
		if (isset($image_id) &&  $image_id != '') {
			$image_url = wp_get_attachment_url( $image_id );		
		}
		// var_dump($settings);
		$content = wpb_js_remove_wpautop($content);
		wp_enqueue_style( 'slick-carousel-css', plugins_url( '../css/slick-carousal.css' , __FILE__ ));
		wp_enqueue_style( 'post-carousel-css', plugins_url( '../css/post-carousel.css' , __FILE__ ));
		wp_enqueue_script( 'slick-js', plugins_url( '../js/slick.js' , __FILE__ ), array('jquery'));
		wp_enqueue_script( 'custom-js', plugins_url( '../js/custom-tm.js' , __FILE__ ), array('jquery'));

		$args = array(
			'posts_per_page' => -1,
		);
		$seperate_settings = explode('|', $settings);

		foreach ($seperate_settings as $setting) {
			$key_val = explode(':', $setting);
			if ($key_val[0] == 'size') {
				$args['posts_per_page'] = $key_val[1];
			} else {
				$args[$key_val[0]] = $key_val[1];
			}
		}

		// The Query
		$the_query = new WP_Query( $args );

		// The Loop
		if ( $the_query->have_posts() ) { ?>
			<section class="slider tm-slider vc-post-styling" data-slick='{"arrows": <?php echo $arrow; ?>, "dots": <?php echo $dot; ?>, "autoplay": <?php echo $autoplay; ?>, "slidesToShow": <?php echo $slide_visible; ?>, "slidesToScroll": <?php echo $slide_scroll; ?>}'>
			<?php while ( $the_query->have_posts() ) { ?>
				<div>
				<?php $the_query->the_post(); ?>

					<?php if ($style == 'mega-post-carousel1') { ?>
						<div class="mega-post-carousel1">
							<div class="mega-post-image">
								<?php the_post_thumbnail('large', array('class' => 'your-class-name')); ?>

								<span class="mega-comment-box" style="display: <?php echo $comment; ?>">
									<span class="mega-post-comment">
										<a href=""><?php $cu = wp_count_comments(get_the_id() ); echo $cu -> total_comments; ?> </a>
									</span>					
								</span>
							</div>

							<div class="mega-post-category" style="display: <?php echo $catg; ?>">
							<?php $categories = get_the_category();
								$separator = ' ';
								$output = '';
								if ( ! empty( $categories ) ) {
								    foreach( $categories as $category ) {
								        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
								    }
								    echo trim( $output, $separator );
								} ?>
							</div>

							<h3 class="mega-post-title">
								<a style="font-size: <?php echo $txtsize; ?>; color: <?php echo $txtclr ?>" href="<?php the_permalink(); ?>"><?php echo get_the_title() ?></a>
							</h3>

							<span class="mega-post-meta" style="color: <?php echo $dateclr; ?>;">
								<i class="fa fa-user"></i>
								<a href="" style="color: <?php echo $dateclr; ?>;">
									<?php echo the_author() ?>
								</a>
							</span>
							<span class="mega-post-date" style="color: <?php echo $dateclr; ?>;">
								<i class="fa fa-clock-o"></i>
								<?php echo get_the_date() ?>
							</span>

							<div class="clearfix"></div>
							<div class="mega-post-para">
								<p style="font-size: <?php echo $descsize; ?>; color: <?php echo $descclr ?>">
									<?php $content = get_the_content(); echo mb_strimwidth($content, 0, 120, '...');?>
								</p>
							</div>
						</div>
					<?php } ?>

					<?php if ($style == 'mega-post-carousel2') { ?>
						<div class="mega-post-carousel2">
							<div class="mega-post-image">
								<?php the_post_thumbnail('large', array('class' => 'your-class-name')); ?>
							</div>
							<div class="mega-post-content">
								<h3 class="mega-post-title">
									<a style="font-size: <?php echo $txtsize; ?>; color: <?php echo $txtclr ?>" href="<?php the_permalink(); ?>"><?php echo get_the_title() ?></a>
								</h3>
								<div class="mega-post-para">
									<p style="font-size: <?php echo $descsize; ?>; color: <?php echo $descclr ?>">
										<?php $content = get_the_content(); echo mb_strimwidth($content, 0, 80, '...');?>
									</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
					<?php } ?>

					<?php if ($style == 'mega-post-carousel3') { ?>
						<div class="mega-post-carousel3">
							<div class="mega-post-image">
								<?php the_post_thumbnail('medium_large', array('class' => 'your-class-name')); ?>
							</div>

							<div class="mega-desc-box">
								<div style="display: table; margin: auto;">
									<div class="mega-post-category" style="display: <?php echo $catg; ?>">
										<?php $categories = get_the_category();
											$separator = ' , ';
											$output = '';
											if ( ! empty( $categories ) ) {
											    foreach( $categories as $category ) {
											        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
											    }
											    echo trim( $output, $separator );
											} ?>
									</div>
								</div>
								<h3 class="mega-post-title">
									<a style="font-size: <?php echo $txtsize; ?>; color: <?php echo $txtclr ?>" href="<?php the_permalink(); ?>"><?php echo get_the_title() ?></a>
								</h3>
								<div class="clearfix"></div>
								<div class="mega-post-para">
									<p style="font-size: <?php echo $descsize; ?>; color: <?php echo $descclr ?>">
										<?php $content = get_the_content(); echo mb_strimwidth($content, 0, 120, '...');?>
									</p>
								</div>			
								<span class="mega-post-meta" style="color: <?php echo $dateclr; ?>;">
									<i class="fa fa-user"></i>
									<a href="" style="color: <?php echo $dateclr; ?>;">
										<?php echo the_author() ?>
									</a>
								</span>
								<span class="mega-comment-box" style="display: <?php echo $comment; ?>">
									<span class="mega-post-comment">
										<i class="fa fa-comment"></i> <a href=""><?php $cu = wp_count_comments(get_the_id() ); echo $cu -> total_comments; ?> </a>
									</span>					
								</span>
								<div class="clearfix"></div>
							</div>
						</div>
					<?php } ?>

					<?php if ($style == 'mega-post-carousel4') { ?>
						<div class="mega-post-carousel4">
							<div class="mega-post-image">
								<?php the_post_thumbnail('medium_large', array('class' => 'your-class-name')); ?>
							</div>

							<div class="mega-post-category" style="display: <?php echo $catg; ?>">
								<?php $categories = get_the_category();
									$separator = ' ';
									$output = '';
									if ( ! empty( $categories ) ) {
									    foreach( $categories as $category ) {
									        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
									    }
									    echo trim( $output, $separator );
									} ?>
							</div>
							<span class="mega-post-date" style="color: <?php echo $dateclr; ?>;">
								<i class="fa fa-clock-o"></i>
								<?php echo get_the_date() ?>
							</span>
							<h3 class="mega-post-title">
								<a style="font-size: <?php echo $txtsize; ?>; color: <?php echo $txtclr ?>" href="<?php the_permalink(); ?>"><?php echo get_the_title() ?></a>
							</h3>
							<div class="clearfix"></div>
							<div class="mega-post-para">
								<p style="font-size: <?php echo $descsize; ?>; color: <?php echo $descclr ?>">
									<?php $content = get_the_content(); echo mb_strimwidth($content, 0, 120, '...');?>
								</p>
							</div>
							<span class="mega-post-meta" style="color: <?php echo $dateclr; ?>;">
								<i class="fa fa-user"></i>
								<a href="" style="color: <?php echo $dateclr; ?>;">
									<?php echo the_author() ?>
								</a>
							</span>
							<span class="mega-comment-box" style="display: <?php echo $comment; ?>">
								<span class="mega-post-comment">
									<i class="fa fa-comment"></i> <a href=""><?php $cu = wp_count_comments(get_the_id() ); echo $cu -> total_comments; ?> </a>
								</span>					
							</span>
							<div class="clearfix"></div>
						</div>
					<?php } ?>
				</div>
			<?php } ?>
			</section>
			<?php wp_reset_postdata();
		} else {
			// no posts found
		}
		ob_start(); ?>
			
		<?php

		return ob_get_clean();
	}
}


vc_map( array(
	"base" 			=> "vc_posts_carousel",
	"name" 			=> __( 'Post Carousel', 'postslider' ),
	"category" 		=> __('Mega Addons'),
	"description" 	=> __('show posts as slider', ''),
	"icon" => plugin_dir_url( __FILE__ ).'../icons/post-carousel.png',
	'params' => array(
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Choose Style', 'postslider' ),
			"param_name" 	=> 	"style",
			"group" 		=> 'General',
			"value" 		=> 	array(
				"Style 1" 		=> 		"mega-post-carousel1",
				"Style 2" 		=> 		"mega-post-carousel2",
				"Style 3" 		=> 		"mega-post-carousel3",
				"Style 4" 		=> 		"mega-post-carousel4",
			)
		),

		array(
			"type" 			=> 	"loop",
			"heading" 		=> 	__( 'Link To', 'postslider' ),
			"param_name" 	=> 	"settings",
			"description"	=>	"Add Slide Url or leave blank, use it if you select theme [top image bottom content]",
			"group" 		=> 'General',
		),
		 
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Comments', 'postslider' ),
			"param_name" 	=> 	"comment",
			"description"	=>	__('show/hide comment icon', 'postslider'),
			"group" 		=> 'Settings',
			"value" 		=> 	array(
				"Show" 		=> 		"block",
				"Hide" 	=> 		"none",
			)
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Category', 'postslider' ),
			"param_name" 	=> 	"catg",
			"description"	=>	__('show/hide category name', 'postslider'),
			"group" 		=> 'Settings',
			"value" 		=> 	array(
				"Show" 		=> 		"visible",
				"Hide" 	=> 		"none",
			)
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Arrows', 'postslider' ),
			"param_name" 	=> 	"arrow",
			"description"	=>	__('Show/Hide on left & right', 'postslider'),
			"group" 		=> 'Settings',
				"value" 		=> 	array(
					"Show" 			=> 		"true",
					"Hide" 			=> 		"false",
				)
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Dots', 'postslider' ),
			"param_name" 	=> 	"dot",
			"description"	=>	__('Show/Hide show at bottom', 'postslider'),
			"group" 		=> 'Settings',
				"value" 		=> 	array(
					"Show" 			=> 		"true",
					"Hide" 			=> 		"false",
				)
		),
		array(
			"type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Autoplay', 'postslider' ),
			"param_name" 	=> 	"autoplay",
			"description"	=>	__('move auto or slide on click', 'postslider'),
			"group" 		=> 'Settings',
			"value" 		=> 	array(
				"True" 		=> 		"true",
				"False" 	=> 		"false",
			)
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Slider Speed', 'postslider' ),
			"param_name" 	=> 	"speed",
			"description"	=>	__('write in ms eg, 1500 [1s = 1000]', 'postslider'),
			"value"			=>	"1500",
			"group" 		=> 'Settings',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Slide To Show', 'postslider' ),
			"param_name" 	=> 	"slide_visible",
			"description"	=>	__('set visible number of slides. default is 1', 'postslider'),
			"value"			=>	"1",
			"group" 		=> 'Settings',
		),
		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Slide To Scroll', 'postslider' ),
			"param_name" 	=> 	"slide_scroll",
			"description"	=>	__('allow user to multiple slide on click or drag. default is 1', 'postslider'),
			"value"			=>	"1",
			"group" 		=> 'Settings',
		),

		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Title (Font Size)', 'postslider' ),
			"param_name" 	=> 	"txtsize",
			"description"	=>	"font size of post title, default 18px",
			"value"			=>	"18px",
			"group" 		=> 'Design',
		),

		array(
			"type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Description (Font Size)', 'postslider' ),
			"param_name" 	=> 	"descsize",
			"description"	=>	"font size of post content, default 14px",
			"value"			=>	"14px",
			"group" 		=> 'Design',
		),

		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Title Color', 'postslider' ),
			"param_name" 	=> 	"txtclr",
			"description"	=>	"color of post title",
			"value"			=>	"#000",
			"group" 		=> 'Color',
		),

		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Author/Date Color', 'postslider' ),
			"param_name" 	=> 	"dateclr",
			"description"	=>	"color of author/date",
			"value"			=>	"#000",
			"group" 		=> 'Color',
		),

		array(
			"type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Description Color', 'postslider' ),
			"param_name" 	=> 	"descclr",
			"description"	=>	"color of post content",
			"value"			=>	"#888",
			"group" 		=>  'Color',
		),
	),
) );
