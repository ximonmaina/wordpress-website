<?php

$photbook_params = array(
	array(
		"type" 			=> 	"attach_images",
		"heading" 		=> 	__( 'Images', 'photo-book-vc' ),
		"param_name" 	=> 	"image_ids",
		"description" 	=> 	__( 'Select the images that will be used as book pages', 'photo-book-vc' ),
		"group" 		=> 	'Pages',
	),

	array(
		"type" 			=> 	"textfield",
		"heading" 		=> 	__( 'Speed', 'photo-book-vc' ),
		"param_name" 	=> 	"speed",
		"description" 	=> 	__( 'Speed of the transition between pages in milliseconds eg 1000', 'photo-book-vc' ),
		"group" 		=> 	'Settings',
	),

	array(
		"type" 			=> 	"dropdown",
		"heading" 		=> 	__( 'Reading Direction', 'photo-book-vc' ),
		"param_name" 	=> 	"direction",
		"description" 	=> 	__( 'Direction of the overall page organization', 'photo-book-vc' ),
		"group" 		=> 	'Settings',
		"value" 		=> array(
				"Right to Left"		=> "RTL", 
				"Left to Right" 	=> "LTR",
		)
	),

	array(
		"type" 			=> 	"textfield",
		"heading" 		=> 	__( 'Page Padding', 'photo-book-vc' ),
		"param_name" 	=> 	"padding",
		"description" 	=> 	__( 'Padding added to each page wrapper', 'photo-book-vc' ),
		"group" 		=> 	'Settings',
	),

	array(
		"type" 			=> 	"textfield",
		"heading" 		=> 	__( 'Zoom Depth', 'photo-book-vc' ),
		"param_name" 	=> 	"zoom_depth",
		"description" 	=> 	__( 'The default value is 1, meaning the zoomed image should be at 100% of its natural width and height', 'photo-book-vc' ),
		"group" 		=> 	'Settings',
	),

	array(
		"type" 			=> 	"textfield",
		"heading" 		=> 	__( 'AutoPlay delay', 'photo-book-vc' ),
		"param_name" 	=> 	"auto_delay",
		"description" 	=> 	__( 'The time in milliseconds between each automatic page flip transition', 'photo-book-vc' ),
		"group" 		=> 	'Settings',
	),

	// options
	
	array(
		"type" 			=> 	"checkbox",
		"heading" 		=> 	__( 'Page Numbers', 'photo-book-vc' ),
		"param_name" 	=> 	"page_numbers",
		"description" 	=> 	__( 'Display page numbers on each page', 'photo-book-vc' ),
		"group" 		=> 	'Options',
		"value" 		=> array(
				"Show"		=> "show",
		)
	),

	array(
		"type" 			=> 	"checkbox",
		"heading" 		=> 	__( 'Closed Book', 'photo-book-vc' ),
		"param_name" 	=> 	"closed_book",
		"description" 	=> 	__( 'Gives the book the appearance of being closed', 'photo-book-vc' ),
		"group" 		=> 	'Options',
		"value" 		=> array(
				"Enable"		=> "enable",
		)
	),

	array(
		"type" 			=> 	"checkbox",
		"heading" 		=> 	__( 'Zoom on Hover', 'photo-book-vc' ),
		"param_name" 	=> 	"zoom",
		"description" 	=> 	__( 'Zoom in the page when hover the cursor', 'photo-book-vc' ),
		"group" 		=> 	'Options',
		"value" 		=> array(
				"Enable"		=> "enable",
		)
	),

	array(
		"type" 			=> 	"checkbox",
		"heading" 		=> 	__( 'AutoPlay', 'photo-book-vc' ),
		"param_name" 	=> 	"autoplay",
		"description" 	=> 	__( 'Enables automatic navigation. Depends on AutoPlay delay in Settings', 'photo-book-vc' ),
		"group" 		=> 	'Options',
		"value" 		=> array(
				"Enable"		=> "enable",
		)
	),

	array(
		"type" 			=> 	"checkbox",
		"heading" 		=> 	__( 'Turn Page by clicking Image', 'photo-book-vc' ),
		"param_name" 	=> 	"turn_by_click",
		"description" 	=> 	__( 'Enables manual page turning by click on page. Zooming will not work when its enabled', 'photo-book-vc' ),
		"group" 		=> 	'Options',
		"value" 		=> array(
				"Enable"		=> "enable",
		)
	),

	array(
		"type" 			=> 	"checkbox",
		"heading" 		=> 	__( 'Keyboard Controls', 'photo-book-vc' ),
		"param_name" 	=> 	"keyboard",
		"description" 	=> 	__( 'Enables page navigation using arrows of Keyboard', 'photo-book-vc' ),
		"group" 		=> 	'Options',
		"value" 		=> array(
				"Enable"		=> "enable",
		)
	),

	array(
		"type" 			=> 	"checkbox",
		"heading" 		=> 	__( 'Navigation Tabs', 'photo-book-vc' ),
		"param_name" 	=> 	"tabs",
		"description" 	=> 	__( 'Adds tabs along the top of the booklet', 'photo-book-vc' ),
		"group" 		=> 	'Options',
		"value" 		=> array(
				"Show"		=> "show",
		)
	),

	array(
		"type" 			=> 	"checkbox",
		"heading" 		=> 	__( 'Arrows', 'photo-book-vc' ),
		"param_name" 	=> 	"arrows",
		"description" 	=> 	__( 'Adds arrows on both sides of the booklet', 'photo-book-vc' ),
		"group" 		=> 	'Options',
		"value" 		=> array(
				"Show"		=> "show",
		)
	),
);

?>