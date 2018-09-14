<?php  
$timeline_father = array(
		array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Title', 'timeline_vc_father' ),
			"param_name" 	=> 	"title",
			"description" 	=> 	__( 'main title of timeline', 'timeline_vc_father' ),
			"group" 		=> 	'General',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Font Size', 'timeline_vc_father' ),
			"param_name" 	=> 	"size",
			"description" 	=> 	__( 'title font size in pixel e.g 17px', 'timeline_vc_father' ),
			"group" 		=> 	'General',
        ),
        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Title Color', 'timeline_vc_father' ),
			"param_name" 	=> 	"clr",
			"description" 	=> 	__( 'title color', 'timeline_vc_father' ),
			"group" 		=> 	'General',
        ),
        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Background Color', 'timeline_vc_father' ),
			"param_name" 	=> 	"bgclr",
			"description" 	=> 	__( 'title background color', 'timeline_vc_father' ),
			"group" 		=> 	'General',
        ),
        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Line Width', 'timeline_vc_father' ),
			"param_name" 	=> 	"width",
			"description" 	=> 	__( 'set timeline central line width in pixel default 4px', 'timeline_vc_father' ),
			"group" 		=> 	'General',
        ),
        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Background', 'timeline_vc_father' ),
			"param_name" 	=> 	"linebg",
			"description" 	=> 	__( 'central line background color', 'timeline_vc_father' ),
			"group" 		=> 	'General',
        ),
);

$timeline_son = array(

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Date', 'timeline_vc_son' ),
			"param_name" 	=> 	"date",
			"description" 	=> 	__( 'Write timeline date e.g Jan 15', 'timeline_vc_son' ),
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Color', 'timeline_vc_son' ),
			"param_name" 	=> 	"clr",
			"description" 	=> 	__( 'color of the date', 'timeline_vc_son' ),
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Font size', 'timeline_vc_son' ),
			"param_name" 	=> 	"size",
			"description" 	=> 	__( 'fone size of date in pixel e.g 17px', 'timeline_vc_son' ),
			"group" 		=> 	'General',
        ),

        array(
            "type" 			=> 	"textarea_html",
			"heading" 		=> 	__( 'Content Details', 'timeline_vc_son' ),
			"param_name" 	=> 	"content",
			"description" 	=> 	__( 'Add heading, details, pictures or video url', 'timeline_vc_son' ),
			"value"			=> '<h3><b>Title of section</b></h3><p>Details here</p> <a href="#0" class="cd-read-more" >Read more</a>',
			"group" 		=> 	'Content',
        ),

        array(
			"type" 			=> "dropdown",
			"heading" 		=> __( 'Select style', 'timeline_vc_son' ),
			"param_name" 	=> "centerstyle",
			"description" 	=> __( 'style for center', 'timeline_vc_son' ),
			"group" 		=> 'Timeline Center',
				"value" 		=> array(
					'Center With Font Icon'	=>	'fonticon',
					'Only Dot'	=>	'dot',
				)
			),

        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Background', 'timeline_vc_son' ),
			"param_name" 	=> 	"bgclr",
			"description" 	=> 	__( 'Center dot background color', 'timeline_vc_son' ),
			"group" 		=> 	'Timeline Center',
        ),

        array(
            "type" 			=> 	"iconpicker",
			"heading" 		=> 	__( 'Font Icon', 'timeline_vc_son' ),
			"param_name" 	=> 	"icon",
			"description" 	=> 	__( 'choose font awesome or leave blank', 'timeline_vc_son' ),
			"dependency" => array('element' => "centerstyle", 'value' => 'fonticon'),
			"group" 		=> 	'Timeline Center',
        ),

        array(
            "type" 			=> 	"textfield",
			"heading" 		=> 	__( 'Font size', 'timeline_vc_son' ),
			"param_name" 	=> 	"icon_size",
			"description" 	=> 	__( 'Icon font size e.g 17px', 'timeline_vc_son' ),
			"dependency" => array('element' => "centerstyle", 'value' => 'fonticon'),
			"group" 		=> 	'Timeline Center',
        ),

        array(
            "type" 			=> 	"colorpicker",
			"heading" 		=> 	__( 'Arrow Color', 'timeline_vc_son' ),
			"param_name" 	=> 	"arrowclr",
			"description" 	=> 	__( 'set timeline arrow color', 'timeline_vc_son' ),
			"group" 		=> 	'Design Option',
        ),
        
        array(
            "type" 			=> 	"css_editor",
			"heading" 		=> 	__( 'Styles', 'timeline_vc_son' ),
			"param_name" 	=> 	"css",
			"group" 		=> 	'Design Option',
        ),

    );
?>