function addBlacklistClass() {
    $( 'a' ).each( function() {
        if ( this.href.indexOf('/wp-admin/') !== -1 ||
            this.href.indexOf('/wp-login.php') !== -1 ) {
            $( this ).addClass( 'wp-link' );
        }
    });
}

$( function() {

    addBlacklistClass();

    var settings = {
        anchors: 'a',
        blacklist: '.wp-link',
        onStart: {
            duration: 280, // ms
            render: function ( $container ) {
                $( "h1" ).addClass( 'fadeOutDown' ).removeClass( 'fadeInDown' );
                $( "h2" ).addClass( 'fadeOutLeft' ).removeClass( 'fadeInLeft' );
                $( "h3" ).addClass( 'fadeOutRight' ).removeClass( 'fadeInRight' );

                $container.addClass( 'slide-out' );


            }
        },
        onAfter: function($container ) {
            addBlacklistClass();

            var $hash = $( window.location.hash );

            if ( $hash.length !== 0 ) {

                var offsetTop = $hash.offset().top;

                $( 'body, html' ).animate( {
                    scrollTop: ( offsetTop - 60 ),
                }, {
                    duration: 280
                } );
            }
            $container.removeClass( 'slide-out' );

        }
    };

    $( '#page' ).smoothState( settings );
} );