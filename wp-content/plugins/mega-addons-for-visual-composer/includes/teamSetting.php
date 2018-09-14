<?php 
	$team_params = array(
		array(
            "type" 			=> 	"dropdown",
			"heading" 		=> 	__( 'Member Style', 'team-vc' ),
			"param_name" 	=> 	"member_visibility",
			"description" 	=> 	__( 'Select style of member profile', 'team-vc' ),
			"group" 		=> 	'General',
			"value" 		=> array(
				"Grow"		=> "grow", 
				"Float" 	=> "float",
				"Outset" 	=> "outset",
				"Smart" 	=> "smart",
			)
        ),
        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Profile color', 'team-vc' ),
			"param_name" 	=> 	"member_clr",
			"description" 	=> 	__( 'color effects for the team meber', 'team-vc' ),
			"group" 		=> 	'General',
        ),

    	array(
            "type" 			=> 	"attach_image",
			"heading" 		=> 	__( 'Image', 'team-vc' ),
			"param_name" 	=> 	"image_id",
			"description" 	=> 	__( 'Select the image', 'team-vc' ),
			"group" 		=> 	'General',
        ),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Alternate Text', 'team-vc' ),
			"param_name" 	=> "image_alt",
			"description" 	=> __( 'It will be used as alt attribute of img tag', 'team-vc' ),
			"group" 		=> 'General',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Member name', 'team-vc' ),
			"param_name" 	=> "memb_name",
			"description" 	=> __( 'Write member name', 'team-vc' ),
			"group" 		=> 'About',
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Profession', 'team-vc' ),
			"param_name" 	=> "memb_prof",
			"description" 	=> __( 'Write member profession', 'team-vc' ),
			"group" 		=> 'About',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'About', 'team-vc' ),
			"param_name" 	=> "memb_about",
			"description" 	=> __( 'Info about member in detail', 'team-vc' ),
			"group" 		=> 'About',
		),

		// Info

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Info text font size', 'team-vc' ),
			"param_name" 	=> "info_size",
			"description" 	=> __( 'Write font size along with units e.g 13px', 'team-vc' ),
			"group" 		=> 'Info',
		),
		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Text Color', 'team-vc' ),
			"param_name" 	=> "info_clr",
			"description" 	=> __( 'Set color of all info text', 'team-vc' ),
			"group" 		=> 'Info',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Email', 'team-vc' ),
			"param_name" 	=> "memb_email",
			"description" 	=> __( 'Write member email address or leave blank', 'team-vc' ),
			"group" 		=> 'Info',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Site Url', 'team-vc' ),
			"param_name" 	=> "memb_url",
			"description" 	=> __( 'Write member site url or leave blank', 'team-vc' ),
			"group" 		=> 'Info',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Contact number', 'team-vc' ),
			"param_name" 	=> "memb_numb",
			"description" 	=> __( 'Write member contact number or leave blank', 'team-vc' ),
			"group" 		=> 'Info',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Address', 'team-vc' ),
			"param_name" 	=> "memb_addr",
			"description" 	=> __( 'Write member address or leave blank', 'team-vc' ),
			"group" 		=> 'Info',
		),

		// Skills

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Skill 1', 'team-vc' ),
			"param_name" 	=> "memb_skill",
			"description" 	=> __( 'write your skill e.g Wordpress or leave blank', 'team-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'First percentage', 'team-vc' ),
			"param_name" 	=> "memb_perl",
			"description" 	=> __( 'first skill percentage e.g 87% or leave blank', 'team-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Skill 2', 'team-vc' ),
			"param_name" 	=> "memb_skill2",
			"description" 	=> __( 'write your skill e.g Wordpress or leave blank', 'team-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Second percentage', 'team-vc' ),
			"param_name" 	=> "memb_per2",
			"description" 	=> __( 'second skill percentage e.g 83% or leave blank', 'team-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Skill 3', 'team-vc' ),
			"param_name" 	=> "memb_skill3",
			"description" 	=> __( 'write your skill e.g Wordpress or leave blank', 'team-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Third percentage', 'team-vc' ),
			"param_name" 	=> "memb_per3",
			"description" 	=> __( 'third skill percentage e.g 83% or leave blank', 'team-vc' ),
			"group" 		=> 'Skill',
		),
		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Skill 4', 'team-vc' ),
			"param_name" 	=> "memb_skill4",
			"description" 	=> __( 'write your skill e.g Wordpress or leave blank', 'team-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Fourth percentage', 'team-vc' ),
			"param_name" 	=> "memb_per4",
			"description" 	=> __( 'fourth skill percentage e.g 83% or leave blank', 'team-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Skill 5', 'team-vc' ),
			"param_name" 	=> "memb_skill5",
			"description" 	=> __( 'write your skill e.g Wordpress or leave blank', 'team-vc' ),
			"group" 		=> 'Skill',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Fifth percentage', 'team-vc' ),
			"param_name" 	=> "memb_per5",
			"description" 	=> __( 'fifth skill percentage e.g 83% or leave blank', 'team-vc' ),
			"group" 		=> 'Skill',
		),

		/*** Social Icons ***/

		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Social icon', 'team-vc' ),
			"param_name" 	=> "social_icon",
			"description" 	=> __( 'choose icon for social upadate', 'team-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'First Social Url', 'team-vc' ),
			"param_name" 	=> "social_url",
			"description" 	=> __( 'first social url', 'team-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'First Social color', 'team-vc' ),
			"param_name" 	=> "social_clr",
			"description" 	=> __( 'first color of social icon', 'team-vc' ),
			"group" 		=> 'Social',
		),


		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Second social icon', 'team-vc' ),
			"param_name" 	=> "social_icon2",
			"description" 	=> __( 'choose icon for social', 'team-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Second Social Url', 'team-vc' ),
			"param_name" 	=> "social_url2",
			"description" 	=> __( 'Second social url', 'team-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Second Social color', 'team-vc' ),
			"param_name" 	=> "social_clr2",
			"description" 	=> __( 'Second color of social icon', 'team-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Third social icon', 'team-vc' ),
			"param_name" 	=> "social_icon3",
			"description" 	=> __( 'choose icon for social', 'team-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Third Social Url', 'team-vc' ),
			"param_name" 	=> "social_url3",
			"description" 	=> __( 'Third social url', 'team-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Third Social color', 'team-vc' ),
			"param_name" 	=> "social_clr3",
			"description" 	=> __( 'Third color of social icon', 'team-vc' ),
			"group" 		=> 'Social',
		),


		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Fourth social icon', 'team-vc' ),
			"param_name" 	=> "social_icon4",
			"description" 	=> __( 'choose icon for social', 'team-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Fourth Social Url', 'team-vc' ),
			"param_name" 	=> "social_url4",
			"description" 	=> __( 'Fourth social url', 'team-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Fourth Social color', 'team-vc' ),
			"param_name" 	=> "social_clr4",
			"description" 	=> __( 'Fourth color of social icon', 'team-vc' ),
			"group" 		=> 'Social',
		),


		array(
			"type" 			=> "iconpicker",
			"heading" 		=> __( 'Fifth social icon', 'team-vc' ),
			"param_name" 	=> "social_icon5",
			"description" 	=> __( 'choose icon for social', 'team-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "textfield",
			"heading" 		=> __( 'Fifth Social Url', 'team-vc' ),
			"param_name" 	=> "social_url5",
			"description" 	=> __( 'Fifth social url', 'team-vc' ),
			"group" 		=> 'Social',
		),

		array(
			"type" 			=> "colorpicker",
			"heading" 		=> __( 'Fifth Social color', 'team-vc' ),
			"param_name" 	=> "social_clr5",
			"description" 	=> __( 'Fifth color of social icon', 'team-vc' ),
			"group" 		=> 'Social',
		),
    );

?>