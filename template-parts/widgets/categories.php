<?php
/**
 * Template part for displaying categories
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thezero
 */

?>
<?php
if ( have_posts() ) :

    /* Start the Loop */
    while ( have_posts() ) :
        the_post();?>
            <li>
            <a href="<?php
            $categories = get_the_category();
            if ( ! empty( $categories ) ) {
                echo esc_url( get_category_link( $categories[0]->term_id ) );
            }
        ?>" class="categorie"><?php
            $categories = get_the_category();

            if ( ! empty( $categories ) ) {
                echo esc_html( $categories[0]->name );   
            }?></a>
            <span class="ml-auto"><?php
            $categories = get_the_category();

            if ( ! empty( $categories ) ) {
                echo esc_html( $categories[0]->count );   
            }?> Posts</span>
        </li>

    <?php endwhile;

endif;
?>

