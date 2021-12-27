<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package thezero
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();?>

			<section class="section pt-55 ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 mb-20">
				<!--Post-single-->
				<div class="post-single">
					<div class="post-single-image">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="post-single-content">
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
						<h4><?php the_title(); ?></h4>
						<div class="post-single-info">
							<ul class="list-inline">
								<li><a href="author.html"><?php echo get_avatar( get_the_author_meta('ID'), 20); ?></li>
								<li><a href="author.html"><?php the_author_meta('display_name'); ?></a> </li>
								<li class="dot"></li>
								<li><?php the_author_meta('display_name'); ?></li>
								<li class="dot"></li>
								<li><?php echo get_comments_number(); ?> comments</li>
							</ul>
						</div>
					</div>
				
					<div class="post-single-body">
						<?php the_content(); ?>
					</div>

					<div class="post-single-footer">
						<div class="tags">
							<ul class="list-inline">
								<li>
									<a href="blog-grid.html">Travel</a>
								</li>
								<li>
									<a href="blog-grid.html">Nature</a>
								</li>
								<li>
									<a href="blog-grid.html">tips</a>
								</li>
								<li>
									<a href="blog-grid.html">forest</a>
								</li>
								<li>
									<a href="blog-grid.html">beach</a>
								</li>
							
							</ul>
						</div>
						<div class="social-media">
							<ul class="list-inline">
								<li>
									<a href="#" class="color-facebook">
										<i class="fab fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" class="color-instagram">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
								<li>
									<a href="#" class="color-twitter">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#" class="color-youtube">
										<i class="fab fa-youtube"></i>
									</a>
								</li>
								<li>
									<a href="#" class="color-pinterest">
										<i class="fab fa-pinterest"></i>
									</a>
								</li>
							</ul>
						</div>                           
					</div>
				</div> <!--/-->

				<!--next & previous-posts-->
				
				<div class="row">
				<?php the_post_navigation(
				array(
					'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'thezero' ) . '</span> <span class="nav-title">%title</span>',
					'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'thezero' ) . '</span> <span class="nav-title">%title</span>',
					)
					);?>
				</div><!--/-->

				<!--widget-comments-->
				<div class="widget mb-50">
				// If comments are open or we have at least one comment, load up the comment template.
					<?php if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif;
				endwhile;
					?>
				</div>
			</div>
			<div class="col-lg-4 max-width">
				<!--widget-author-->
				<div class="widget">
					<div class="widget-author">
					<?php echo get_avatar( get_the_author_meta('ID'), 20); ?>
						<h6>
							<span><?php the_author_meta('display_name'); ?></span>
						</h6>
						<p><?php the_author_meta('description'); ?>
					</p>
				
				
						<div class="social-media">
							<ul class="list-inline">
								<li>
									<a href="#" class="color-facebook">
										<i class="fab fa-facebook"></i>
									</a>
								</li>
								<li>
									<a href="#" class="color-instagram">
										<i class="fab fa-instagram"></i>
									</a>
								</li>
								<li>
									<a href="#" class="color-twitter">
										<i class="fab fa-twitter"></i>
									</a>
								</li>
								<li>
									<a href="#" class="color-youtube">
										<i class="fab fa-youtube"></i>
									</a>
								</li>
								<li>
									<a href="#" class="color-pinterest">
										<i class="fab fa-pinterest"></i>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
		<!--widget-latest-posts-->
		<div class="widget ">
					<div class="section-title">
						<h5>Latest Posts</h5>
					</div>
					<ul class="widget-latest-posts">
					<?php get_template_part('template-parts/widgets/latest-post'); ?>
					</ul>
				</div>
				<!--/-->
				
				<!--widget-categories-->
				<div class="widget">
					<div class="section-title">
						<h5>Categories</h5>
					</div>
					<ul class="widget-categories">
					<?php get_template_part('template-parts/widgets/categories'); ?>
					</ul>
				</div><!--/-->
				
				<!--widget-instagram-->
				<div class="widget">
					<div class="section-title">
						<h5>Instagram</h5>
					</div>
					<ul class="widget-instagram">
						<li>
							<a class="image" href="#">
								<img src="assets/img/instagram/1.jpg" alt="">
							</a>
						</li>
						<li>
							<a class="image" href="#">
								<img src="assets/img/instagram/2.jpg" alt="">
							</a>
						</li>
						<li>
							<a class="image" href="#">
								<img src="assets/img/instagram/3.jpg" alt="">
							</a>
						</li>
						<li>
							<a class="image" href="#">
								<img src="assets/img/instagram/4.jpg" alt="">
							</a>
						</li>
						<li>
							<a class="image" href="#">
								<img src="assets/img/instagram/5.jpg" alt="">
							</a>
						</li>
						<li>
							<a class="image" href="#">
								<img src="assets/img/instagram/6.jpg" alt="">
							</a>
						</li>
					</ul>
						
				</div><!--/-->

				<!--widget-tags-->
				<?php get_template_part('template-parts/widgets/tags'); ?>
				<!--/-->
			</div> 
		</div>
	</div>
</section><!--/-->


	</main><!-- #main -->

<?php
get_sidebar();
get_footer();

				