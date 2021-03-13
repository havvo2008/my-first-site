/**
 * Functionality specific to Abedul.
 *
 * Provides helper functions to enhance the theme experience, especially navigation.
 */

(function($) {
	
	menuToggle = $('.menu-toggle');
    siteNavigation = $('#masthead');
    _window = $(window);

if (881 > _window.width()) {
    var dropdownToggle = $('<button />', {'class': 'dropdown-toggle'})          /* if there is a small screen the dropdownToggle is a button with an icon inside */
        .append( $( '<span />', {'class': 'genericon genericon-expand',         /* and it is after the 'a' that is the child of a 'li' with submenues. */
                                 'aria-hidden': 'true'}));                      /* (The button and the 'a' are siblings of the submenu.) */  
    siteNavigation.find( 'li:has(ul) > a' ).after(dropdownToggle);                     
}

else {
    var dropdownToggle = $('<span />', {'class': 'genericon', 'aria-hidden': 'true'});  /* in big screens the dropdownToggle is only an icon */
    siteNavigation.find( 'li:has(ul) > a' ).append(dropdownToggle);                     /* and it is inside the 'a' that is the child of a 'li' with submenues. */
}

function switchClass (a, b, c) {
    if( a.hasClass(b) ) {
        a.removeClass(b);
        a.addClass(c);
    }
    else {
        a.removeClass(c);
        a.addClass(b);
    }
}

function onResizeARIA() {
        if ( 881 > _window.width() ) {
            menuToggle.attr( 'aria-expanded', 'false' );
            siteNavigation.attr( 'aria-expanded', 'false' );
            menuToggle.attr( 'aria-controls', 'nav-menu' );
        } else {
            menuToggle.removeAttr( 'aria-expanded' );
            siteNavigation.removeAttr( 'aria-expanded' );
            menuToggle.removeAttr( 'aria-controls' );
        }
    }

_window.on('load', onResizeARIA());


menuToggle.click(function(){
    switchClass($(this).children('#nav-icon'), 'genericon-menu', 'genericon-close-alt');
    $(this).toggleClass('toggled-on');
    siteNavigation.toggleClass('toggled-on');

    if($(this).hasClass('toggled-on')) {
        $(this).attr('aria-expanded', 'true');
        siteNavigation.attr('aria-expanded', 'true');        
    }
    else {
        $(this).attr('aria-expanded', 'false');
        siteNavigation.attr('aria-expanded', 'false');
    }
});


siteNavigation.find( '.dropdown-toggle' ).click( function(e) {
    var _this = $( this );
    var _i = _this.children('span');
    switchClass( _i, 'genericon-expand', 'genericon-collapse');
    e.preventDefault();
    _this.toggleClass( 'toggle-on' );
    _this.next( '.sub-menu' ).toggleClass( 'toggled-on' );
} );

siteNavigation.find( 'a' ).on( 'focus blur', function() {
            $( this ).parents( '.menu-item' ).toggleClass( 'focus' );
        } );

	
})( jQuery );

