<?php
/**
 * Title: News Feed - 2 Column Cards
 * Slug: uabwp-tw/news-feed-2-col
 * Description: Displays the latest posts as cards in a 2-column grid.
 * Categories: uabwp-tw, news
 * Keywords: news, posts, feed, grid, cards, query loop
 * Viewport Width: 1280
 * Block Types:
 * Post Types:
 * Inserter: true
 */
?>
<!-- wp:query {"queryId":3,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false},"metadata":{"categories":["news"],"patternName":"uabwp-tw/news-feed-2-col","name":"News Feed - 2 Column Cards"},"className":"news-feed-2-col container mx-auto px-12 mt-16","layout":{"type":"default"}} -->
<div class="wp-block-query news-feed-2-col container mx-auto px-12 mt-16">
    <!-- wp:post-template {"className":"grid grid-cols-1 md:grid-cols-2 gap-10","layout":{"type":"default"}} -->
    <!-- wp:group {"tagName":"article","className":"flex flex-col","layout":{"type":"default"}} -->
    <article class="wp-block-group flex flex-col">
        <!-- wp:group {"className":"h-80 md:aspect-video bg-gray-light mb-6","layout":{"type":"default"}} -->
        <div class="wp-block-group h-80 md:aspect-video bg-gray-light mb-6">
            <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"100%","className":"w-full h-full object-cover"} /-->
        </div>
        <!-- /wp:group -->
        <!-- wp:group {"className":"p-6 shadow-md flex-1","layout":{"type":"default"}} -->
        <div class="wp-block-group p-6 shadow-md flex-1">
            <!-- wp:post-title {"level":3,"isLink":true,"className":"text-2xl font-bold mb-2 font-kulturista capitalize"} /-->
            <!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","flexWrap":"nowrap"},"className":"text-sm font-bold mb-4 text-gray-600"} -->
            <div class="wp-block-group text-sm font-bold mb-4 text-gray-600">
                <!-- wp:post-date {"format":"M j, Y","style":{"typography":{}}} /-->
                <!-- wp:paragraph -->
                <p>·</p>
                <!-- /wp:paragraph -->
                <!-- wp:post-terms {"term":"category","className":"uppercase tracking-wider"} /-->
            </div>
            <!-- /wp:group -->
            <!-- wp:post-excerpt {"moreText":"Read More","showMoreOnNewLine":true,"className":"text-lg leading-7","moreLinkClassName":"text-uab-green font-bold mt-4 inline-block"} /-->
        </div>
        <!-- /wp:group -->
    </article>
    <!-- /wp:group -->
    <!-- /wp:post-template -->

    <!-- wp:group {"className":"mt-16","layout":{"type":"constrained"}} -->
    <div class="wp-block-group mt-16">
        <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <!-- wp:query-pagination-previous /-->

        <!-- wp:query-pagination-numbers /-->

        <!-- wp:query-pagination-next /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"align":"center","className":"md:col-span-2","placeholder":"Add text or blocks that will display when a query returns no results."} -->
    <p class="has-text-align-center md:col-span-2">Sorry, no posts were found.</p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->