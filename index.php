<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thezero
 */

get_header();
?>

<!--mansory-layout-->
<section class="masonry-layout col2-layout mt-120">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 mt--10 ">
				<!--cards-->
				<div class="card-columns">
					<?php
					if ( have_posts() ) :

						/* Start the Loop */
						while ( have_posts() ) :
							the_post();

							/*
								* Include the Post-Type-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Type name) and that will be used instead.
								*/
							get_template_part( 'template-parts/posts/post', get_post_type() );

						endwhile;

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>

				</div>

				<!--pagination-->
				<?php get_template_part('template-parts/pagination'); ?>
				<!--/-->
			</div>
			<div class="col-lg-4 max-width">
				<!--widget-latest-posts-->
				<div class="widget ">
					<div class="section-title">
						<h5>Latest Posts</h5>
					</div>
					<ul class="widget-latest-posts">
						<?php
							if ( have_posts() ) :

								/* Start the Loop */
								while ( have_posts() ) :
									the_post();

									/*
										* Include the Post-Type-specific template for the content.
										* If you want to override this in a child theme, then include a file
										* called content-___.php (where ___ is the Post Type name) and that will be used instead.
										*/
									get_template_part('template-parts/widgets/latest-post');

								endwhile;

							endif;
							?>

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
						</div>
				<!--/-->

				<!--widget-instagram-->
				<div class="widget">
					<div class="section-title">
						<h5>Instagram</h5>
					</div>
					<?php dynamic_sidebar( 'instagram' ); ?>

				</div>
				<!--/-->
				<!--widget-tags-->
				<div class="widget">
					<div class="section-title">
						<h5>Tags</h5>
					</div>
					<div class="widget-tags">
						<?php get_template_part('template-parts/widgets/tags'); ?>
					</div>
				</div>
				<!--/-->
			</div>
		</div>
	</div>
</section>
<!--/-->

<!--newslettre-->
<section class="newslettre">
	<div class="container-fluid">
		<div class="newslettre-width text-center">
			<div class="newslettre-info">
				<h5>Subscribe to our Newslatter</h5>
				<p> Sign up for free and be the first to get notified about new posts. </p>
			</div>
			<form action="#" class="newslettre-form">
				<div class="form-flex">
					<div class="form-group">
						<input type="email" class="form-control" placeholder="Your email adress" required="required">
					</div>
					<button class="submit-btn" type="submit">Subscribe</button>
				</div>
			</form>
			<div class="social-icones">
				<ul class="list-inline">
					<li>
						<a href="#">
							<i class="fab fa-facebook-f"></i>Facebook</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-twitter"></i>Twitter </a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-instagram"></i>Instagram </a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-youtube"></i>Youtube</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<?php
get_sidebar();
get_footer();