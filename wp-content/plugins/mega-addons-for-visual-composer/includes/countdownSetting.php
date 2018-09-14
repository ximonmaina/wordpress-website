<?php  
$countdown_params = array(
		array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Unique ID', 'count-down-vc' ),
			"param_name" 	=> 	"id",
			"description" 	=> 	__( 'Required: It should be different from other countdown time. Any Name or numbers', 'count-down-vc' ),
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Width', 'count-down-vc' ),
			"param_name" 	=> 	"width",
			"description" 	=> 	__( 'set width in pixel for each week, hours, minutes and seconds e.g 100px', 'count-down-vc' ),
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Height', 'count-down-vc' ),
			"param_name" 	=> 	"height",
			"description" 	=> 	__( 'set height in pixel for each week, hours, minutes and seconds e.g 100px', 'count-down-vc' ),
			"group" 		=> 	'General',
        ),

		array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Timer Font size', 'count-down-vc' ),
			"param_name" 	=> 	"size",
			"description" 	=> 	__( 'Timer font size in pixel e.g 18px', 'count-down-vc' ),
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Period Font size', 'count-down-vc' ),
			"param_name" 	=> 	"periodsize",
			"description" 	=> 	__( 'period font size in pixel e.g 18px', 'count-down-vc' ),
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Line Height', 'count-down-vc' ),
			"param_name" 	=> 	"lineheight",
			"description" 	=> 	__( 'set line height between  e.g 1', 'count-down-vc' ),
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Padding From Top', 'count-down-vc' ),
			"param_name" 	=> 	"padding",
			"description" 	=> 	__( 'padding from top help to move time in center default 15px', 'count-down-vc' ),
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Margin', 'count-down-vc' ),
			"param_name" 	=> 	"margin",
			"description" 	=> 	__( 'set margin for each timer space between them from left and right side e.g 10px', 'count-down-vc' ),
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Timer Text Color', 'count-down-vc' ),
			"param_name" 	=> 	"textcolor",
			"group" 		=> 	'Color',
        ),

        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Period Text Color', 'count-down-vc' ),
			"param_name" 	=> 	"periodcolor",
			"group" 		=> 	'Color',
        ),

        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Background Color', 'count-down-vc' ),
			"param_name" 	=> 	"bgcolor",
			"description" 	=> 	__( 'count down background color', 'count-down-vc' ),
			"group" 		=> 	'Color',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Border Width', 'count-down-vc' ),
			"param_name" 	=> 	"borderwidth",
			"description" 	=> 	__( 'set border width in pixel or leave blank e.g 10px', 'count-down-vc' ),
			"group" 		=> 	'Color',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Border Radius', 'count-down-vc' ),
			"param_name" 	=> 	"radius",
			"description" 	=> 	__( 'border radius in pixel or percentage e.g 5px or 50%', 'count-down-vc' ),
			"group" 		=> 	'Color',
        ),

        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Border Color', 'count-down-vc' ),
			"param_name" 	=> 	"borderclr",
			"description" 	=> 	__( 'set border color', 'count-down-vc' ),
			"group" 		=> 	'Color',
        ),

        array(
			"type" 			=> "dropdown",
			"heading" 		=> __( 'Border Style', 'count-down-vc' ),
			"param_name" 	=> "borderstyle",
			"description" 	=> __( 'set border style', 'count-down-vc' ),
			"group" 		=> 'Color',
				"value" 		=> array(
					'Solid'	=>	'solid',
					'Dotted'	=>	'dotted',
					'none'	=>	'none',
					'Dashed'	=>	'dashed',
					'Hidden'	=>	'hidden',
					'Double'	=>	'double',
					'Groove'	=>	'groove',
					'Ridge'	=>	'ridge',
					'Outset'	=>	'outset',
					'Initial'	=>	'initial',
				)
		),

		array(
			"type" 			=> "dropdown",
			"heading" 		=> __( 'Select Style', 'count-down-vc' ),
			"param_name" 	=> "style",
			"description" 	=> __( 'Visible countdown style in', 'count-down-vc' ),
			"group" 		=> 'Countdown',
				"value" 		=> array(
					'Year'	=>	'YOWDHMS',
					'Month'	=>	'odHMS',
					'Week'	=>	'wdHMS',
					'Days'	=>	'DHMS',
					'Hours'	=>	'HMS',
				)
		),

		array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Year', 'count-down-vc' ),
			"param_name" 	=> 	"year",
			"description" 	=> 	__( 'just number start from 1 [ e.g 1 for current year, 2 for next year.. ]', 'count-down-vc' ),
			"group" 		=> 	'Countdown',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Month', 'count-down-vc' ),
			"param_name" 	=> 	"month",
			"description" 	=> 	__( 'just number between 1 to 12 for specific month [ e.g 3 ]', 'count-down-vc' ),
			"group" 		=> 	'Countdown',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Date', 'count-down-vc' ),
			"param_name" 	=> 	"date",
			"description" 	=> 	__( 'just number between 1 to 30 for specific date', 'count-down-vc' ),
			"group" 		=> 	'Countdown',
        ),

    );
?>