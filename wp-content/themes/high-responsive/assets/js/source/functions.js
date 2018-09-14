/* global screenReaderText */
/**
 * Theme functions file.
 *
 * Contains handlers for navigation and widget area.
 */

( function( $ ) {
    //FitVids Initialize
    if ( jQuery.isFunction( jQuery.fn.fitVids ) ) {
        jQuery('.hentry, .widget').fitVids();
    }

    // Add header video class after the video is loaded.
    $( document ).on( 'wp-custom-header-video-loaded', function() {
        $( 'body' ).addClass( 'has-header-video' );
    });

    //Equal Height Initialize
    $( function() {
        $( document ).ready( function() {
            $('.featured-content-wrapper .entry-container, .portfolio-content-wrapper .entry-container').matchHeight();
        });
    });

    /**
     * Functionality for scroll to top button
     */
    $( function() {
        $(window).scroll( function () {
            if ( $( this ).scrollTop() > 100 ) {
                $( '#scrollup' ).fadeIn('slow');
                $( '#scrollup' ).show();
            } else {
                $('#scrollup').fadeOut('slow');
                $("#scrollup").hide();
            }
        });

        $( '#scrollup' ).on( 'click', function () {
            $( 'body, html' ).animate({
                scrollTop: 0
            }, 500 );
            return false;
        });
    });

    /*
     * Test if inline SVGs are supported.
     * @link https://github.com/Modernizr/Modernizr/
     */
    function supportsInlineSVG() {
        var div = document.createElement( 'div' );
        div.innerHTML = '<svg/>';
        return 'http://www.w3.org/2000/svg' === ( 'undefined' !== typeof SVGRect && div.firstChild && div.firstChild.namespaceURI );
    }

    $( function() {
        $( document ).ready( function() {
            if ( true === supportsInlineSVG() ) {
                document.documentElement.className = document.documentElement.className.replace( /(\s*)no-svg(\s*)/, '$1svg$2' );
            }
        });
    });


    var body, masthead, menuToggle, siteNavigation, socialNavigation, siteHeaderMenu, resizeTimer;

    function initMainNavigation( container ) {

        // Add dropdown toggle that displays child menu items.
        var dropdownToggle = $( '<button />', { 'class': 'dropdown-toggle', 'aria-expanded': false })
            .append( screenReaderText.icon )
            .append( $( '<span />', { 'class': 'screen-reader-text', text: screenReaderText.expand }) );

        container.find( '.menu-item-has-children > a, .page_item_has_children > a' ).after( dropdownToggle );

        // Set the active submenu dropdown toggle button initial state.
        container.find( '.current-menu-ancestor > button' )
            .addClass( 'toggled-on' )
            .attr( 'aria-expanded', 'true' )
            .find( '.screen-reader-text' )
            .text( screenReaderText.collapse );
        // Set the active submenu initial state.
        container.find( '.current-menu-ancestor > .sub-menu' ).addClass( 'toggled-on' );

        // Add menu items with submenus to aria-haspopup="true".
        container.find( '.menu-item-has-children' ).attr( 'aria-haspopup', 'true' );

        container.find( '.dropdown-toggle' ).click( function( e ) {
            var _this            = $( this ),
                screenReaderSpan = _this.find( '.screen-reader-text' );

            e.preventDefault();
            _this.toggleClass( 'toggled-on' );
            _this.next( '.children, .sub-menu' ).toggleClass( 'toggled-on' );

            // jscs:disable
            _this.attr( 'aria-expanded', _this.attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
            // jscs:enable
            screenReaderSpan.text( screenReaderSpan.text() === screenReaderText.expand ? screenReaderText.collapse : screenReaderText.expand );
        } );
    }
    initMainNavigation( $( '.main-navigation' ) );

    masthead         = $( '#masthead' );
    menuToggle       = masthead.find( '#primary-menu-toggle' );
    siteHeaderMenu   = masthead.find( '#site-header-menu' );
    siteNavigation   = masthead.find( '#site-navigation' );
    socialNavigation = masthead.find( '#search-social-container' );
    initMainNavigation( siteNavigation );

    // Enable menuToggle.
    ( function() {

        // Return early if menuToggle is missing.
        if ( ! menuToggle.length ) {
            return;
        }

        // Add an initial values for the attribute.
        menuToggle.add( siteNavigation ).add( socialNavigation ).attr( 'aria-expanded', 'false' );

        menuToggle.on( 'click.highresponsive', function() {
            $( this ).add( siteHeaderMenu ).toggleClass( 'toggled-on' );

            // jscs:disable
            $( this ).add( siteNavigation ).add( socialNavigation ).attr( 'aria-expanded', $( this ).add( siteNavigation ).add( socialNavigation ).attr( 'aria-expanded' ) === 'false' ? 'true' : 'false' );
            // jscs:enable
        } );
    } )();

    // Fix sub-menus for touch devices and better focus for hidden submenu items for accessibility.
    ( function() {
        if ( ! siteNavigation.length || ! siteNavigation.children().length ) {
            return;
        }

        // Toggle `focus` class to allow submenu access on tablets.
        function toggleFocusClassTouchScreen() {
            if ( window.innerWidth >= 1024 ) {
                $( document.body ).on( 'touchstart.highresponsive', function( e ) {
                    if ( ! $( e.target ).closest( '.main-navigation li' ).length ) {
                        $( '.main-navigation li' ).removeClass( 'focus' );
                    }
                } );
                siteNavigation.find( '.menu-item-has-children > a' ).on( 'touchstart.highresponsive', function( e ) {
                    var el = $( this ).parent( 'li' );

                    if ( ! el.hasClass( 'focus' ) ) {
                        e.preventDefault();
                        el.toggleClass( 'focus' );
                        el.siblings( '.focus' ).removeClass( 'focus' );
                    }
                } );
            } else {
                siteNavigation.find( '.menu-item-has-children > a' ).unbind( 'touchstart.highresponsive' );
            }
        }

        if ( 'ontouchstart' in window ) {
            $( window ).on( 'resize.highresponsive', toggleFocusClassTouchScreen );
            toggleFocusClassTouchScreen();
        }

        siteNavigation.find( 'a' ).on( 'focus.highresponsive blur.highresponsive', function() {
            $( this ).parents( '.menu-item' ).toggleClass( 'focus' );
        } );
    } )();

    // Add the default ARIA attributes for the menu toggle and the navigations.
    function onResizeARIA() {
        if ( window.innerWidth < 1024 ) {
            if ( menuToggle.hasClass( 'toggled-on' ) ) {
                menuToggle.attr( 'aria-expanded', 'true' );
            } else {
                menuToggle.attr( 'aria-expanded', 'false' );
            }
            if ( siteHeaderMenu.hasClass( 'toggled-on' ) ) {
                siteNavigation.attr( 'aria-expanded', 'true' );
                socialNavigation.attr( 'aria-expanded', 'true' );
            } else {
                siteNavigation.attr( 'aria-expanded', 'false' );
                socialNavigation.attr( 'aria-expanded', 'false' );
            }

            menuToggle.attr( 'aria-controls', 'site-navigation social-navigation' );
        } else {
            menuToggle.removeAttr( 'aria-expanded' );
            siteNavigation.removeAttr( 'aria-expanded' );
            socialNavigation.removeAttr( 'aria-expanded' );
            menuToggle.removeAttr( 'aria-controls' );
        }
    }

    //Search Toggle
    var jQueryheader_search = $( '#search-toggle' );
    jQueryheader_search.click( function() {
        var jQuerythis_el_search = $(this),
            jQueryform_search = jQuerythis_el_search.siblings( '#search-social-container' );

        if ( jQueryform_search.hasClass( 'displaynone' ) ) {
            jQueryform_search.removeClass( 'displaynone' ).addClass( 'displayblock' ).animate( { opacity : 1 }, 300 );
        } else {
            jQueryform_search.removeClass( 'displayblock' ).addClass( 'displaynone' ).animate( { opacity : 0 }, 300 );
        }
    });

    //Header Top Search Toggle
    var jQueryheader_search = $( '#search-toggle-top' );
    jQueryheader_search.click( function() {
        var jQuerythis_el_search = $(this),
            jQueryform_search = jQuerythis_el_search.siblings( '#search-top-container' );

        if ( jQueryform_search.hasClass( 'displaynone' ) ) {
            jQueryform_search.removeClass( 'displaynone' ).addClass( 'displayblock' ).animate( { opacity : 1 }, 300 );
        } else {
            jQueryform_search.removeClass( 'displayblock' ).addClass( 'displaynone' ).animate( { opacity : 0 }, 300 );
        }
    });    

} )( jQuery );
