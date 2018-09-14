jQuery(document).ready(function($) {
    var icons = {
        "header": "fa fa-plus",
        "activeHeader": "fa fa-minus"
    }

    $( ".mega-accordion" ).each(function(index, el) {
        var type = ($(this).data('type') == 'default') ? true : false;
        $(this).accordion({
            icons: icons,
            collapsible: true,
        });
    });

});