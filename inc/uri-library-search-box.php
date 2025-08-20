<?php 

/** URI LIBRARY SEARCH BOX
 * 
 * @package uri-library-search
 */

function uri_library_search_box() {
// Start the display 
ob_start();
?>
<div>
    <div class="home-search">
        <div class="fullwidth">
            <section class="cl-wrapper cl-hero-wrapper fullwidth">
                <div class="cl-hero fullwidth hero-library">
                    <div class="overlay">
                        <div class="block library-contrast">
                            <h2 class="resources">Find Resources</h2>
                            <div id="primo-search-container">
                                <form id="primo-search" class="on"
                                    action="http://uri-primo.hosted.exlibrisgroup.com/primo-explore/search">
                                    <div class="primo-container"><label for="primo-query"
                                            class="screen-reader-text">Search</label><input id="primo-query"
                                            name="query" type="text"
                                            placeholder="Search for books, articles &amp; more"><input
                                            name="search_scope" type="hidden" value="Books_More"><input name="fn"
                                            type="hidden" value="search"><input name="vid" type="hidden"
                                            value="01URI"><input name="offset" type="hidden" value="0"><input
                                            id="primo-submit" name="submit" type="submit" value="Search">


                                </form>
                            </div>
                            <div class="primo-meta-primo-search-type-cf">

                                <a href="https://uri-primo.hosted.exlibrisgroup.com/primo-explore/search?vid=01URI&amp;mode=advanced">Advanced
                                    Search</a> <a href="http://uri.libguides.com/az.php">Articles and Databases</a>
                                <a href="https://uri-primo.hosted.exlibrisgroup.com/primo-explore/search?vid=01URI&amp;tab=course_tab">Course
                                    Reserves</a> 
                                <a href="https://uri-primo.hosted.exlibrisgroup.com/primo-explore/jsearch?vid=01URI&amp;lang=en_US">e-Journals</a>
                                <a href="https://libkey.io/libraries/245/">Get PDF by DOI/PMID</a> 
                                <a href="https://uri-primo.hosted.exlibrisgroup.com/primo-explore/login?vid=01URI&amp;targetURL=https://uri-primo.hosted.exlibrisgroup.com/primo-explore/search?vid=01URI&amp;lang=en_US">My
                                    Library Account</a>
                            </div>
                        </div>
                        <!-- end primo search container -->
                    </div>
                </div>
                <div class="poster">
                </div>
</section>
        </div>
        
    </div>
    
</div>


<?php
return ob_get_clean();
}