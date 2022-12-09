/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function() {
	const toggleShowList = ( event ) => {
		const mobileMenu = document.getElementById( 'mobile-menu' );
		event.preventDefault();
		const isHidden = mobileMenu.style.display === 'none' || mobileMenu.style.display === '';
		if ( isHidden ) {
			mobileMenu.style.display = 'block';
		} else {
			// Hide element
			mobileMenu.style.display = 'none';
		}
	};

	const menuIcon = document.getElementById( 'mobile-icon' );

	menuIcon.addEventListener( 'click', toggleShowList );
}() );
