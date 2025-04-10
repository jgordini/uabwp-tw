<?php
/**
 * Title: News Feed - Image Left
 * Slug: uabwp-tw/news-feed-left
 * Description: Displays the latest posts in a list with image on the left and text on the right.
 * Categories: uabwp-tw, news
 * Keywords: news, posts, feed, list, side by side, query loop
 * Viewport Width: 1280
 * Block Types: 
 * Post Types: 
 * Inserter: true
 */
?>
<!-- wp:query {"queryId":5,"query":{"perPage":5,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"ignore","inherit":false},"metadata":{"categories":["news"],"patternName":"uabwp-tw/news-feed-left","name":"News Feed - Image Left"},"className":"news-feed-left container mx-auto px-6 md:px-12 py-16 md:py-24 not-prose","layout":{"type":"default"}} -->
<div class="wp-block-query news-feed-left container mx-auto px-6 md:px-12 py-16 md:py-24 not-prose">

    <!-- wp:post-template {"className":"space-y-16","layout":{"type":"default"}} -->
    <!-- wp:group {"tagName":"article","className":"grid grid-cols-1 sm:grid-cols-10 gap-6 sm:gap-x-8 md:gap-x-12 md:items-center","layout":{"type":"default"}} -->
    <article class="wp-block-group grid grid-cols-1 sm:grid-cols-10 gap-6 sm:gap-x-8 md:gap-x-12 md:items-center">
        <!-- wp:group {"className":"order-first sm:col-span-5","layout":{"type":"default"}} -->
        <div class="wp-block-group order-first sm:col-span-5">
            <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"100%","scale":"cover","className":"aspect-[16/9] overflow-hidden rounded-lg border border-gray-200"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:group {"className":"sm:col-span-5","layout":{"type":"default"}} -->
        <div class="wp-block-group sm:col-span-5">

            <!-- wp:post-title {"level":3,"isLink":true,"className":"text-xl md:text-2xl lg:text-3xl font-bold mb-4 font-kulturista hover:underline"} /-->

            <!-- wp:post-excerpt {"moreText":"","showMoreOnNewLine":false,"className":"text-gray-600 mb-4"} /-->

            <!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","flexWrap":"nowrap"},"className":"flex items-center space-x-4 text-sm text-gray-600 mb-4"} -->
            <div class="wp-block-group flex items-center space-x-4 text-sm text-gray-600 mb-4">
                <!-- wp:post-author {"showAvatar":false} /-->
                <!-- wp:paragraph -->
                <p>•</p>
                <!-- /wp:paragraph -->
                <!-- wp:post-date {"format":"M j, Y"} /-->
                <!-- wp:paragraph -->
                <p>•</p>
                <!-- /wp:paragraph -->
                <!-- wp:post-terms {"term":"category","className":"uppercase tracking-wider"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:group {"className":"flex items-center gap-2","layout":{"type":"flex"}} -->
            <div class="wp-block-group flex items-center gap-2">
                <!-- wp:read-more {"content":"Read more","className":"font-semibold text-uab-green hover:underline flex items-center"} /-->
                <!-- wp:paragraph {"className":"ml-1 text-uab-green"} -->
                <p class="ml-1 text-uab-green">→</p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </article>
    <!-- /wp:group -->
    <!-- /wp:post-template -->

    <!-- wp:group {"className":"mt-16","layout":{"type":"constrained"}} -->
    <div class="wp-block-group mt-16">
        <!-- wp:query-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"},"className":"gap-2"} -->
        <!-- wp:query-pagination-previous {"className":"px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-100"} /-->

        <!-- wp:query-pagination-numbers {"className":"px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-100"} /-->

        <!-- wp:query-pagination-next {"className":"px-4 py-2 border border-gray-300 rounded-md hover:bg-gray-100"} /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:group -->

    <!-- wp:query-no-results -->
    <!-- wp:paragraph {"align":"center","placeholder":"Add text or blocks that will display when a query returns no results."} -->
    <p class="has-text-align-center">Sorry, no posts were found.</p>
    <!-- /wp:paragraph -->
    <!-- /wp:query-no-results -->
</div>
<!-- /wp:query -->