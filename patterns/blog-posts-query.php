<?php
/**
 * Title: Blog Posts Query
 * Slug: ascendoor-fse/blog-posts-query
 * Categories: ascendoor-fse
 */
?>

<!-- wp:query {"queryId":12,"query":{"perPage":3,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"layout":{"type":"default"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:columns {"verticalAlignment":"center","style":{"color":{"gradient":"linear-gradient(135deg,rgb(255,255,255) 68%,rgb(242,242,242) 100%)"},"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"},"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"}}}} -->
<div class="wp-block-columns are-vertically-aligned-center has-background" style="background:linear-gradient(135deg,rgb(255,255,255) 68%,rgb(242,242,242) 100%);padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:column {"verticalAlignment":"center","width":"40%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:40%"><!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"310px","align":"wide","style":{"color":{}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"0"}},"layout":{"type":"constrained","justifyContent":"left","wideSize":""}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:post-terms {"term":"category"} /-->

<!-- wp:post-title {"level":3,"isLink":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20","right":"0","bottom":"var:preset|spacing|20","left":"0"}}},"fontSize":"semi-medium"} /-->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"0","bottom":"0","left":"0"},"blockGap":"var:preset|spacing|40"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","verticalAlignment":"center"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--20);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:post-author {"avatarSize":24} /-->

<!-- wp:paragraph -->
<p>/</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"moreText":"read more","style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template -->

<!-- wp:query-pagination {"paginationArrow":"chevron","layout":{"type":"flex","justifyContent":"center","orientation":"horizontal"}} -->
<!-- wp:query-pagination-previous /-->

<!-- wp:query-pagination-numbers {"style":{"typography":{"letterSpacing":"0px"}}} /-->

<!-- wp:query-pagination-next /-->
<!-- /wp:query-pagination --></div>
<!-- /wp:query -->