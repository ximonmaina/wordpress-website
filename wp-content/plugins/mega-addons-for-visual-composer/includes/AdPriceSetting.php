<?php
$priceVisibility = array(
		'Show' =>  'block',
		'Hide' =>  'none',
	);
$btnVisibility = array(
		'Show' =>  'block',
		'Hide' =>  'none',
	);
$offerVisibility = array(
		'Show' =>  'block',
		'Hide' =>  'none',
	);

	$AdPrice_params = array(
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
			"heading" 		=> 	__( 'Price margin from top', 'pt-vc' ),
			"param_name" 	=> 	"price_margin",
			"description" 	=> 	__( 'Set complete margin of price table from top to bottom in pixel e.g 30px. It is recomend for first price listing from left side.', 'pt-vc' ),
			"group" 		=> 	'Price Header',
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
			"heading" 		=> 	__( 'Currency and Amount', 'pt-vc' ),
			"param_name" 	=> 	"price_amount",
			"description" 	=> 	__( 'Write currency and amount e.g $299', 'pt-vc' ),
			"group" 		=> 	'Price Header',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Amount font size', 'pt-vc' ),
			"param_name" 	=> 	"price_fontsize",
			"description" 	=> 	__( 'Set font size of price amount e.g 35px', 'pt-vc' ),
			"group" 		=> 	'Price Header',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Price plan', 'pt-vc' ),
			"param_name" 	=> 	"price_plan",
			"description" 	=> 	__( 'Price plan e.g "month"', 'pt-vc' ),
			"group" 		=> 	'Price Header',
        ),

        /* Features */

        array(
			"type" 			=> "textarea_html",
			"heading" 		=> __( 'Caption Text', 'ich-vc' ),
			"param_name" 	=> "content",
			"description" 	=> __( 'Enter your pricing content. You can use a UL list as shown by default but anything would really work!', 'ich-vc' ),
			"group" 		=> 'Features',
			"value"			=> '<li>30GB Storage</li><li>512MB Ram</li><li>[font_awesome link="" icon="check" color="#000"]</li><li>10 databases</li><li>1,000 Emails</li><li>25GB Bandwidth</li>'
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
            "type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Show/Hide button', 'pt-vc' ),
			"param_name" 	=> 	"btn_visibility",
			"description" 	=> 	__( 'Select Show or Hide Button ', 'pt-vc' ),
			"group" 		=> 	'Button',
			"value" 		=> $btnVisibility,
        ),

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
			"description" 	=> 	__( 'Set Button URL for link', 'pt-vc' ),
			"group" 		=> 	'Button',
        ),

        /* colors */

        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Amount color', 'pt-vc' ),
			"param_name" 	=> 	"amount_clr",
			"description" 	=> 	__( 'Set color of price amount', 'pt-vc' ),
			"group" 		=> 	'Color',
        ),

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