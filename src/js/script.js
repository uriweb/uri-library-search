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
		let q = 'https://uri.primo.exlibrisgroup.com/nde/search?query=';
		q += encodeURIComponent( query );
		q += '&tab=Everything&search_scope=MyInst_and_CI&vid=01URI_INST:01URI_INST_NDE&lang=en';
		if ( query ) {
			window.location.href = q;
		}
		return false;
	}
}( jQuery ) );

