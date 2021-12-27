<?php
/**
 * Template part for displaying post
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thezero
 */

?>
<!--Post-1-->
<div class="card">
    <div class="post-card">
    <div class="post-card-image">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    </div>
    <div class="post-card-content">
        <a href="<?php
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
                echo esc_url( get_category_link( $categories[0]->term_id ) );
            }
        ?>" class="categorie">
            <?php
            $categories = get_the_category();

            if ( ! empty( $categories ) ) {
                echo esc_html( $categories[0]->name );   
            }?>
        </a>  
        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a> </h5>
        <p><?php the_excerpt(); ?>
        </p>
        <div class="post-card-info">
            <ul class="list-inline">
                <li><a href="<?php the_author_meta('user_url'); ?>"><?php echo get_avatar( get_the_author_meta('ID'), 20); ?></a></li>
                <li>
                    <a href="<?php the_author_meta('user_url'); ?>"><?php the_author_meta('display_name'); ?></a>
                </li>
                <li class="dot"></li>
                <li><?php echo get_the_date('F j, Y')?></li>
            </ul>
        </div>
    </div>
    </div><!--/-->
</div>