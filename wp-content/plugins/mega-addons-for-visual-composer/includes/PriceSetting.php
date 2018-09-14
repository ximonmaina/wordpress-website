<?php
$priceVisibility = array(
		'Show' =>  'block',
		'Hide' =>  'none',
	);
$offerVisibility = array(
		'Show' =>  'block',
		'Hide' =>  'none',
	);

	$price_params = array(
		array(
            "type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Show/Hide Offer', 'pt-vc' ),
			"param_name" 	=> 	"offer_visibility",
			"description" 	=> 	__( 'Select Show or Hide offer ', 'pt-vc' ),
			"group" 		=> 	'Offer',
			"value" 		=> $offerVisibility,
        ),
		array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Offer text', 'pt-vc' ),
			"param_name" 	=> 	"offer_text",
			"description" 	=> 	__( 'Write text for showing best offer in Ribbon e.g BEST', 'pt-vc' ),
			"group" 		=> 	'Offer',
        ),
        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Offer Background color', 'pt-vc' ),
			"param_name" 	=> 	"offer_bg",
			"description" 	=> 	__( 'background color of offer', 'pt-vc' ),
			"group" 		=> 	'Offer',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Top Header Title', 'pt-vc' ),
			"param_name" 	=> 	"price_title",
			"description" 	=> 	__( 'It will be used as price package name', 'pt-vc' ),
			"group" 		=> 	'Price Header',
        ),
        array(
            "type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Show/Hide price amount', 'pt-vc' ),
			"param_name" 	=> 	"price_visibility",
			"description" 	=> 	__( 'Select Show or Hide amount and currency ', 'pt-vc' ),
			"group" 		=> 	'Price Header',
			"value" 		=> $priceVisibility,
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Currency sign', 'pt-vc' ),
			"param_name" 	=> 	"price_currency",
			"description" 	=> 	__( 'Write currency sign e.g "$"', 'pt-vc' ),
			"group" 		=> 	'Price Header',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Amount', 'pt-vc' ),
			"param_name" 	=> 	"price_amount",
			"description" 	=> 	__( 'Write amount in number e.g 299', 'pt-vc' ),
			"group" 		=> 	'Price Header',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Price plan', 'pt-vc' ),
			"param_name" 	=> 	"price_plan",
			"description" 	=> 	__( 'Price plan e.g "per month"', 'pt-vc' ),
			"group" 		=> 	'Price Header',
        ),

        /* Features */

        array(
			"type" 			=> "textarea_html",
			"heading" 		=> __( 'Caption Text', 'ich-vc' ),
			"param_name" 	=> "content",
			"description" 	=> __( 'Enter your pricing content. You can use a UL list as shown by default but anything would really work!', 'ich-vc' ),
			"group" 		=> 'Features',
			"value"			=> '<li>30GB Storage</li><li>512MB Ram</li><li>10 databases</li><li>1,000 Emails</li><li>25GB Bandwidth</li>'
		),
		 array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Text color', 'pt-vc' ),
			"param_name" 	=> 	"text_clr",
			"description" 	=> 	__( 'Text color of price list', 'pt-vc' ),
			"group" 		=> 	'Features',
        ),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Font size', 'ich-vc' ),
			"param_name" 	=> "feature_size",
			"description" 	=> __( 'Font size of price list item e.g 13px', 'ich-vc' ),
			"group" 		=> 'Features',
		),

        /* Button */

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Button Text', 'pt-vc' ),
			"param_name" 	=> 	"btn_text",
			"description" 	=> 	__( 'Button text name', 'pt-vc' ),
			"group" 		=> 	'Button',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Button Url', 'pt-vc' ),
			"param_name" 	=> 	"btn_url",
			"description" 	=> 	__( 'Write Button URL for link', 'pt-vc' ),
			"group" 		=> 	'Button',
        ),

        /* colors */

        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Price background color', 'pt-vc' ),
			"param_name" 	=> 	"price_bg",
			"description" 	=> 	__( 'Set complete background color', 'pt-vc' ),
			"group" 		=> 	'Color',
        ),

        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Header Background color', 'pt-vc' ),
			"param_name" 	=> 	"top_bg",
			"description" 	=> 	__( 'Top Header and button background color', 'pt-vc' ),
			"group" 		=> 	'Color',
        ),

    );


 ?>