<?php 
$memberVisibility = array(
		'Grow' =>  'grow',
		'Float' =>  'float',
		'Outset' =>  'outset',
		'Smart' =>  'smart',
	);

	$member_params = array(
		array(
            "type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Member Style', 'member-vc' ),
			"param_name" 	=> 	"member_visibility",
			"description" 	=> 	__( 'Select style of member profile', 'member-vc' ),
			"group" 		=> 	'General',
			"value" 		=> $memberVisibility,
        ),

        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Profile color', 'member-vc' ),
			"param_name" 	=> 	"member_clr",
			"description" 	=> 	__( 'color effects for the team meber', 'member-vc' ),
			"group" 		=> 	'General',
        ),

        array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'URL Link', 'member-vc' ),
			"param_name" 	=> "url",
			"description" 	=> __( 'It will move to next page on click', 'member-vc' ),
			"group" 		=> 'General',
		),

    	array(
            "type" 			=> 	"attach_image",
			"heading" 		=> 	__( 'Image', 'member-vc' ),
			"param_name" 	=> 	"image_id",
			"description" 	=> 	__( 'Select the image', 'member-vc' ),
			"group" 		=> 	'General',
        ),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Alternate Text', 'member-vc' ),
			"param_name" 	=> "image_alt",
			"description" 	=> __( 'It will be used as alt attribute of img tag', 'member-vc' ),
			"group" 		=> 'General',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Member name', 'member-vc' ),
			"param_name" 	=> "memb_name",
			"description" 	=> __( 'Write member name', 'member-vc' ),
			"group" 		=> 'About',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Profession', 'member-vc' ),
			"param_name" 	=> "memb_prof",
			"description" 	=> __( 'Write member profession', 'member-vc' ),
			"group" 		=> 'About',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'About', 'member-vc' ),
			"param_name" 	=> "memb_about",
			"description" 	=> __( 'Info about member in detail', 'member-vc' ),
			"group" 		=> 'About',
		),

		/*** Info ****/

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Info text font size', 'member-vc' ),
			"param_name" 	=> "info_size",
			"description" 	=> __( 'Write font size along with units e.g 13px', 'member-vc' ),
			"group" 		=> 'Info',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Text Color', 'member-vc' ),
			"param_name" 	=> "info_clr",
			"description" 	=> __( 'Set color of all info text', 'member-vc' ),
			"group" 		=> 'Info',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Email', 'member-vc' ),
			"param_name" 	=> "memb_email",
			"description" 	=> __( 'Write member email address or leave blank', 'member-vc' ),
			"group" 		=> 'Info',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Site Url', 'member-vc' ),
			"param_name" 	=> "memb_url",
			"description" 	=> __( 'Write member site url or leave blank', 'member-vc' ),
			"group" 		=> 'Info',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Contact number', 'member-vc' ),
			"param_name" 	=> "memb_numb",
			"description" 	=> __( 'Write member contact number or leave blank', 'member-vc' ),
			"group" 		=> 'Info',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Address', 'member-vc' ),
			"param_name" 	=> "memb_addr",
			"description" 	=> __( 'Write member address or leave blank', 'member-vc' ),
			"group" 		=> 'Info',
		),

		/*** Skills ****/

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Skill 1', 'member-vc' ),
			"param_name" 	=> "memb_skill",
			"description" 	=> __( 'write your skill e.g Wordpress or leave blank', 'member-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'First percentage', 'member-vc' ),
			"param_name" 	=> "memb_perl",
			"description" 	=> __( 'first skill percentage e.g 87% or leave blank', 'member-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Skill 2', 'member-vc' ),
			"param_name" 	=> "memb_skill2",
			"description" 	=> __( 'write your skill e.g Wordpress or leave blank', 'member-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Second percentage', 'member-vc' ),
			"param_name" 	=> "memb_per2",
			"description" 	=> __( 'second skill percentage e.g 83% or leave blank', 'member-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Skill 3', 'member-vc' ),
			"param_name" 	=> "memb_skill3",
			"description" 	=> __( 'write your skill e.g Wordpress or leave blank', 'member-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Third percentage', 'member-vc' ),
			"param_name" 	=> "memb_per3",
			"description" 	=> __( 'third skill percentage e.g 83% or leave blank', 'member-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Skill 4', 'member-vc' ),
			"param_name" 	=> "memb_skill4",
			"description" 	=> __( 'write your skill e.g Wordpress or leave blank', 'member-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Fourth percentage', 'member-vc' ),
			"param_name" 	=> "memb_per4",
			"description" 	=> __( 'fourth skill percentage e.g 83% or leave blank', 'member-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Skill 5', 'member-vc' ),
			"param_name" 	=> "memb_skill5",
			"description" 	=> __( 'write your skill e.g Wordpress or leave blank', 'member-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Fifth percentage', 'member-vc' ),
			"param_name" 	=> "memb_per5",
			"description" 	=> __( 'fifth skill percentage e.g 83% or leave blank', 'member-vc' ),
			"group" 		=> 'Skill',
		),

		/*** Social Icons ***/

		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Social icon', 'member-vc' ),
			"param_name" 	=> "social_icon",
			"description" 	=> __( 'choose icon for social upadate', 'member-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'First Social Url', 'member-vc' ),
			"param_name" 	=> "social_url",
			"description" 	=> __( 'first social url', 'member-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'First Social Backgroud', 'member-vc' ),
			"param_name" 	=> "social_clr",
			"description" 	=> __( 'background color of social icon', 'member-vc' ),
			"group" 		=> 'Social',
		),


		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Second social icon', 'member-vc' ),
			"param_name" 	=> "social_icon2",
			"description" 	=> __( 'choose icon for social', 'member-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Second Social Url', 'member-vc' ),
			"param_name" 	=> "social_url2",
			"description" 	=> __( 'Second social url', 'member-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Second Social Backgroud', 'member-vc' ),
			"param_name" 	=> "social_clr2",
			"description" 	=> __( 'background color of social icon', 'member-vc' ),
			"group" 		=> 'Social',
		),


		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Third social icon', 'member-vc' ),
			"param_name" 	=> "social_icon3",
			"description" 	=> __( 'choose icon for social', 'member-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Third Social Url', 'member-vc' ),
			"param_name" 	=> "social_url3",
			"description" 	=> __( 'Third social url', 'member-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Third Social Backgroud', 'member-vc' ),
			"param_name" 	=> "social_clr3",
			"description" 	=> __( 'background color of social icon', 'member-vc' ),
			"group" 		=> 'Social',
		),


		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Fourth social icon', 'member-vc' ),
			"param_name" 	=> "social_icon4",
			"description" 	=> __( 'choose icon for social', 'member-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Fourth Social Url', 'member-vc' ),
			"param_name" 	=> "social_url4",
			"description" 	=> __( 'Fourth social url', 'member-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Fourth Social Backgroud', 'member-vc' ),
			"param_name" 	=> "social_clr4",
			"description" 	=> __( 'background color of social icon', 'member-vc' ),
			"group" 		=> 'Social',
		),


		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Fifth social icon', 'member-vc' ),
			"param_name" 	=> "social_icon5",
			"description" 	=> __( 'choose icon for social', 'member-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Fifth Social Url', 'member-vc' ),
			"param_name" 	=> "social_url5",
			"description" 	=> __( 'Fifth social url', 'member-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Fifth Social Backgroud', 'member-vc' ),
			"param_name" 	=> "social_clr5",
			"description" 	=> __( 'background color of social icon', 'member-vc' ),
			"group" 		=> 'Social',
		),


		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Sixth social icon', 'member-vc' ),
			"param_name" 	=> "social_icon6",
			"description" 	=> __( 'choose icon for social', 'member-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Sixth Social Url', 'member-vc' ),
			"param_name" 	=> "social_url6",
			"description" 	=> __( 'Sixth social url', 'member-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Sixth Social Backgroud', 'member-vc' ),
			"param_name" 	=> "social_clr6",
			"description" 	=> __( 'background color of social icon', 'member-vc' ),
			"group" 		=> 'Social',
		),
    );

?>