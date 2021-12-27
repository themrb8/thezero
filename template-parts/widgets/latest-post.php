<?php
/**
 * Template part for displaying latest posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thezero
 */

?>
<li class="last-post">
    <div class="image">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    </div>
    <div class="nb">1</div>
    <div class="content">
        <p>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </p>
        <small>
            <span class="icon_clock_alt"></span> <?php echo get_the_date('F j, Y'); ?></small>
    </div>
</li>