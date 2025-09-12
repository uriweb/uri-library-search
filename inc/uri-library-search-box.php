<?php

/** URI LIBRARY SEARCH BOX
 * 
 * @package uri-library-search
 */

function uri_library_search_box()
{
    // Start the display 
    ob_start();
?>

    <div class="library-hero-container">
        <div class="library-hero-image">
            <div class="library-search-container">
                <div class="library-search-content">
                    <div class="library-header">
                        <h2>What Can We Help You Find?</h2>
                    </div><!--end library-header -->
                    <div class="library-search-box">
                        <form id="library-primo-search" class="on"
                            action="https://uri-primo.hosted.exlibrisgroup.com/primo-explore/search">
                            <div class="library-primo-container"><label for="primo-query"
                                    class="screen-reader-text">Search</label><input id="primo-query"
                                    name="query" type="text"
                                    placeholder="Search for books, articles &amp; more"><input
                                    name="search_scope" type="hidden" value="Books_More"><input name="fn"
                                    type="hidden" value="search"><input name="vid" type="hidden"
                                    value="01URI"><input name="offset" type="hidden" value="0"><button class="submit-button"
                                    id="primo-submit" name="submit" type="submit" aria-label="search"><span class="dashicons dashicons-search"></span></button>
                            </div><!-- end library-primo-container-->


                        </form>
                    </div><!--end library-search-box -->
                    <div class="library-search-options">
                        <div class="search-options-row">
                            <div class="search-options-column">
                                <div class="library-search-item"><a href="https://uri-primo.hosted.exlibrisgroup.com/primo-explore/search?vid=01URI&amp;mode=advanced">Advanced
                                        Search</a></div>
                            </div><!-- end column-->

                            <div class="search-options-column">
                                <div class="library-search-item"> <a href="http://uri.libguides.com/az.php">Articles and Databases</a></div>
                            </div><!-- end column-->

                            <div class="search-options-column">
                                <div class="library-search-item"><a href="https://uri-primo.hosted.exlibrisgroup.com/primo-explore/search?vid=01URI&amp;tab=course_tab">Course
                                        Reserves</a></div>
                            </div><!-- end column-->
                        </div><!-- end row -->

                        <div class="search-options-row">
                            <div class="search-options-column">
                                <div class="library-search-item"><a href="https://uri-primo.hosted.exlibrisgroup.com/primo-explore/login?vid=01URI&amp;targetURL=https://uri-primo.hosted.exlibrisgroup.com/primo-explore/search?vid=01URI&amp;lang=en_US">My
                                        Library Account</a></div>
                            </div><!-- end column-->

                            <div class="search-options-column">
                                <div class="library-search-item"><a href="https://libkey.io/libraries/245/">Get PDF by DOI/PMID</a></div>
                            </div><!-- end column-->

                            <div class="search-options-column">
                                <div class="library-search-item"><a href="https://uri-primo.hosted.exlibrisgroup.com/primo-explore/jsearch?vid=01URI&amp;lang=en_US">e-Journals</a></div>
                            </div><!-- end column-->
                        </div> <!-- end row -->
                    </div><!--end library-search-options> -->

                </div> <!-- end library-search-content -->
            </div><!--end library-search-container -->
        </div><!-- end library-hero-image -->
    </div><!-- End library-hero-container -->


<?php
    return ob_get_clean();
}
