<?php
/**
 * Title: Sidebar
 * Slug: ascendoor-fse/sidebar
 * Categories: ascendoor-fse
 */
?>

<!-- wp:column {"width":"30%","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|50","left":"0"}}}} -->
<div class="wp-block-column" style="padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--50);padding-left:0;flex-basis:30%"><!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:search {"label":"Search","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search"} /-->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50","bottom":"0"}},"border":{"style":"dotted","width":"1px"}},"borderColor":"cyan-bluish-gray","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color has-cyan-bluish-gray-border-color" style="border-style:dotted;border-width:1px;margin-top:var(--wp--preset--spacing--50);margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3} -->
    <h3><?php echo esc_html__( 'Follow Us', 'ascendoor-fse' ); ?></h3>
    <!-- /wp:heading -->
    
    <!-- wp:social-links {"iconBackgroundColorValue":"#0693e3","showLabels":true,"className":"is-style-default","layout":{"type":"flex","orientation":"horizontal","flexWrap":"wrap"}} -->
    <ul class="wp-block-social-links has-visible-labels has-icon-background-color is-style-default"><!-- wp:social-link {"url":"#","service":"facebook"} /-->
    
    <!-- wp:social-link {"url":"#","service":"youtube"} /-->
    
    <!-- wp:social-link {"url":"#","service":"instagram"} /-->
    
    <!-- wp:social-link {"url":"#","service":"twitter"} /-->
    
    <!-- wp:social-link {"url":"#","service":"whatsapp"} /--></ul>
    <!-- /wp:social-links --></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50","bottom":"0"}},"border":{"style":"dotted","width":"1px"}},"borderColor":"cyan-bluish-gray","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color has-cyan-bluish-gray-border-color" style="border-style:dotted;border-width:1px;margin-top:var(--wp--preset--spacing--50);margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3} -->
    <h3><?php echo esc_html__( 'Latest Post', 'ascendoor-fse' ); ?></h3>
    <!-- /wp:heading -->
    
    <!-- wp:latest-posts {"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left","featuredImageSizeWidth":75,"featuredImageSizeHeight":75,"addLinkToFeaturedImage":true} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50","bottom":"0"}},"border":{"style":"dotted","width":"1px"}},"borderColor":"cyan-bluish-gray","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color has-cyan-bluish-gray-border-color" style="border-style:dotted;border-width:1px;margin-top:var(--wp--preset--spacing--50);margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3} -->
    <h3><?php echo esc_html__( 'Categories', 'ascendoor-fse' ); ?></h3>
    <!-- /wp:heading -->
    
    <!-- wp:categories {"showPostCounts":true,"style":{"spacing":{"margin":{"top":"0","right":"0","bottom":"0","left":"0"},"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|50"}}}} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50","bottom":"0"}},"border":{"style":"dotted","width":"1px"}},"borderColor":"cyan-bluish-gray","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color has-cyan-bluish-gray-border-color" style="border-style:dotted;border-width:1px;margin-top:var(--wp--preset--spacing--50);margin-bottom:0;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:heading {"level":3} -->
    <h3><?php echo esc_html__( 'Latest Comment', 'ascendoor-fse' ); ?></h3>
    <!-- /wp:heading -->
    
    <!-- wp:latest-comments /--></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"border":{"width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"blockGap":"0","margin":{"top":"var:preset|spacing|50"}}},"borderColor":"cyan-bluish-gray","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color has-cyan-bluish-gray-border-color" style="border-width:1px;margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:tag-cloud {"numberOfTags":22,"smallestFontSize":"12pt","largestFontSize":"12pt","className":"is-style-outline","style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}}} /--></div>
    <!-- /wp:group -->
    
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","right":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"var:preset|spacing|50"}},"border":{"width":"1px"}},"borderColor":"cyan-bluish-gray","layout":{"type":"constrained"}} -->
    <div class="wp-block-group has-border-color has-cyan-bluish-gray-border-color" style="border-width:1px;margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)"><!-- wp:calendar /--></div>
    <!-- /wp:group --></div>
    <!-- /wp:group --></div>
    <!-- /wp:column -->