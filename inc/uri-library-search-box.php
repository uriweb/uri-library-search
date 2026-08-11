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
                        <h2>What can we help you find?</h2>
                    </div><!--end library-header -->
                    <div class="library-search-box">
                        <form id="library-primo-search" class="on"
                            action="https://uri.primo.exlibrisgroup.com/nde/search">
                            <div class="library-primo-container"><label for="primo-query"
                                    class="screen-reader-text">Search</label><input id="primo-query"
                                    name="query" type="text"
                                    placeholder="Search for books, articles, and more"><input
                                    name="search_scope" type="hidden" value="MyInst_and_CI"><input name="fn"
                                    type="hidden" value="search"><input name="vid" type="hidden"
                                    value="01URI"><input name="offset" type="hidden" value="0"><button class="submit-button"
                                    id="primo-submit" name="submit" type="submit" aria-label="Library Search"><span class="dashicons dashicons-search"></span></button>
                            </div><!-- end library-primo-container-->


                        </form>
                    </div><!--end library-search-box -->
                    <div class="library-search-options">
                        <div class="search-options-row">
                            <div class="search-options-column">
                                <div class="library-search-item"><a href="https://uri.primo.exlibrisgroup.com/nde/home?vid=01URI_INST:01URI_INST_NDE&lang=en&mode=advanced">Advanced
                                        Search</a></div>
                            </div><!-- end column-->

                            <div class="search-options-column">
                                <div class="library-search-item"> <a href="http://uri.libguides.com/az.php">Articles and Databases</a></div>
                            </div><!-- end column-->

                            <div class="search-options-column">
                                <div class="library-search-item"><a href="https://uri.primo.exlibrisgroup.com/nde/home?vid=01URI_INST:reserves&lang=en">Course
                                        Reserves</a></div>
                            </div><!-- end column-->
                        </div><!-- end row -->

                        <div class="search-options-row">
                            <div class="search-options-column">
                                <div class="library-search-item"><a href="https://uri.primo.exlibrisgroup.com/nde/account?vid=01URI_INST:01URI_INST_NDE&lang=en">My
                                        Library Account</a></div>
                            </div><!-- end column-->

                            <div class="search-options-column">
                                <div class="library-search-item"><a href="https://libkey.io/libraries/245/">Get PDF by DOI/PMID</a></div>
                            </div><!-- end column-->

                            <div class="search-options-column">
                                <div class="library-search-item"><a href="https://uri.primo.exlibrisgroup.com/nde/jsearch?vid=01URI_INST:01URI_INST_NDE&lang=en">Journals</a></div>
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
