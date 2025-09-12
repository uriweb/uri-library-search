/**
 * SCRIPTS
 *
 * @package
 */

( function( $ ) {
	/* Do something on page load */

	jQuery( '#library-primo-search input[name=query]' ).focus();
	$( '#library-primo-search' ).on( 'submit', prepQuery );
	function prepQuery() {
		const query = $( 'input[name=query]', $( '#library-primo-search' ) ).val();
		let q = 'https://uri-primo.hosted.exlibrisgroup.com/primo-explore/search?query=any,contains,';
		q += query;
		q += '&tab=default_tab&search_scope=Books_More&vid=01URI&offset=0&fn=search';
		if ( query ) {
			window.location.href = q;
		}
		return false;
	}
}( jQuery ) );

