<?php
/**
 * Template part for share posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thezero
 */

?>
<div class="social-media">
    <ul class="list-inline">
        <li>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink();?>" class="color-facebook" target="_blank" title="Share on Facebook">
                <i class="fab fa-facebook"></i>
            </a>
        </li>
        <li>
            <a href="#" class="color-instagram">
                <i class="fab fa-instagram"></i>
            </a>
        </li>
        <li>
            <a href="https://twitter.com/intent/tweet?url=<?php the_permalink();?>&text=<?php echo the_title(); ?>&via=<?php the_author_meta('twitter');?>" title="Tweet this" target="_blank" class="color-twitter">
                <i class="fab fa-twitter"></i>
            </a>
        </li>
        <li>
            <a href="#" class="color-youtube">
                <i class="fab fa-youtube"></i>
            </a>
        </li>
        <li>
            <a href="//pinterest.com/pin/create/%20button?url=<?php the_permalink(); ?>&description=<?php echo the_title();?>" title="Pin it" target="_blank" class="color-pinterest">
                <i class="fab fa-pinterest"></i>
            </a>
        </li>
    </ul>
</div>