$( document ).ready( function () {
    $( '.sub-menu-bar a' ).on( 'click', function ( e ) {
        e.preventDefault(); // Prevent the default link behavior

        // Remove the active class from all links
        $( '.sub-menu-bar a' ).removeClass( 'router-link-exact-active' );

        // Add the active class to the clicked link
        $( this ).addClass( 'router-link-exact-active' );

        // You may also want to update the bottom tabs based on this click event
        // Code to update the bottom tabs based on the clicked link can go here
    } );
} );
