<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thezero
 */

get_header();
?>

<!--Categorie-->
<section class="categorie-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8">
                    <div class="categorie-title">
                        <small>
                            <a href="index.html">Home</a>
                            <span class="arrow_carrot-right"></span> Livestyle
                        </small>
                        <h3>Category : <span><?php
            $categories = get_the_category();

            if ( ! empty( $categories ) ) {
                echo esc_html( $categories[0]->name );   
            }?></span> </h3>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/-->
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

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>

				</div>

				<!--pagination-->
				<div class="pagination mt-30">
					<ul class="list-inline">
						<li class="active">
							<a href="#">1</a>
						</li>
						<li>
							<a href="#">2</a>
						</li>
						<li>
							<a href="#">3</a>
						</li>
						<li>
							<a href="#">4</a>
						</li>
						<li>
							<a href="#">
								<i class="arrow_carrot-2right"></i>
							</a>
						</li>
					</ul>
				</div>
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

				</div>
				<!--/-->
				<!--widget-tags-->
				<div class="widget">
					<div class="section-title">
						<h5>Tags</h5>
					</div>
					<div class="widget-tags">
						<?php get_template_part('template-parts/widgets/tags'); ?>
						</ul>
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