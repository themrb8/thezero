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
<section class="section pt-55 ">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-8 mb-20">
				<?php
			while ( have_posts() ) :
				the_post();?>
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
								<?php echo get_the_tag_list('<ul><li>', '</li><li>', '</li></ul>'); ?>

							</ul>
						</div>
						<?php my_share_buttons(); ?>
					</div>
				</div>
				<!--/-->

				<!--next & previous-posts-->
				<div class="row">
					<?php
						$prevPost = get_previous_post();
						if(is_a($prevPost, 'WP_Post')):
					?>
					<div class="col-md-6">
						<div class="widget">
							<div class="widget-next-post">
								<div class="small-post">
									<div class="image">
										<a href="<?php echo get_permalink($prevPost->ID); ?>">
											<?php echo get_the_post_thumbnail($prevPost->ID); ?>
										</a>
									</div>
									<div class="content">
										<div>
											<a class="link" href="<?php echo get_permalink($prevPost->ID); ?>"><i
													class="arrow_left"></i>Preview post</a>
										</div>
										<a
											href="<?php echo get_permalink($prevPost->ID); ?>"><?php echo get_the_title($prevPost->ID); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php
							endif;
							$nextPost = get_next_post();
							if(is_a($nextPost, 'WP_Post')):
						?>
					<div class="col-md-6">
						<div class="widget">
							<div class="widget-previous-post">
								<div class="small-post">
									<div class="image">
										<a href="<?php echo get_permalink($nextPost->ID); ?>">
											<?php echo get_the_post_thumbnail($nextPost->ID); ?>
										</a>
									</div>
									<div class="content">
										<div>
											<a class="link" href="<?php echo get_permalink($nextPost->ID); ?>">
												<span> Next post</span>
												<span class="arrow_right"></span>
											</a>
										</div>
										<a
											href="<?php echo get_permalink($nextPost->ID); ?>"><?php echo get_the_title($nextPost->ID); ?></a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<?php endif; ?>
				</div>
				<!--/-->

				<!--widget-comments-->
					<!-- If comments are open or we have at least one comment, load up the comment template. -->
					<?php if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif;
				endwhile;
					?>
				<!--/-->
			</div>
			<div class="col-lg-4 max-width">
				<!--widget-author-->
				<div class="widget">
					<div class="widget-author">
						<a href="author.html" class="image">
							<img src="assets/img/author/1.jpg" alt="">
						</a>
						<h6>
							<span>Hi, I'm David Smith</span>
						</h6>
						<p>

							I'm David Smith, husband and father ,
							I love Photography,travel and nature. I'm working as a writer and blogger with experience
							of 5 years until now.
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
				<!--/-->

				<!--widget-latest-posts-->
				<div class="widget ">
					<div class="section-title">
						<h5>Latest Posts</h5>
					</div>
					<ul class="widget-latest-posts">
						<li class="last-post">
							<div class="image">
								<a href="post-default.html">
									<img src="assets/img/latest/1.jpg" alt="...">
								</a>
							</div>
							<div class="nb">1</div>
							<div class="content">
								<p><a href="post-default.html">5 Things I Wish I Knew Before Traveling to Malaysia</a>
								</p>
								<small><span class="icon_clock_alt"></span> January 15, 2021</small>
							</div>
						</li>
						<li class="last-post">
							<div class="image">
								<a href="post-default.html">
									<img src="assets/img/latest/2.jpg" alt="...">
								</a>
							</div>
							<div class="nb">2</div>
							<div class="content">
								<p>
									<a href="post-default.html">Everything you need to know about visiting the
										Amazon.</a>
								</p>
								<small>
									<span class="icon_clock_alt"></span> January 15, 2021</small>
							</div>
						</li>
						<li class="last-post">
							<div class="image">
								<a href="post-default.html">
									<img src="assets/img/latest/3.jpg" alt="...">
								</a>
							</div>
							<div class="nb">3</div>
							<div class="content">
								<p>
									<a href="post-default.html">How to spend interesting vacation after hard work?</a>
								</p>
								<small>
									<span class="icon_clock_alt"></span> January 15, 2021</small>
							</div>
						</li>
						<li class="last-post">
							<div class="image">
								<a href="post-default.html">
									<img src="assets/img/latest/4.jpg" alt="...">
								</a>
							</div>
							<div class="nb">4</div>
							<div class="content">
								<p>
									<a href="post-default.html">10 Best and Most Beautiful Places to Visit in Italy</a>
								</p>
								<small>
									<span class="icon_clock_alt"></span> January 15, 2021</small>
							</div>
						</li>
					</ul>
				</div>
				<!--/-->

				<!--widget-categories-->
				<div class="widget">
					<div class="section-title">
						<h5>Categories</h5>
					</div>
					<ul class="widget-categories">
						<li>
							<a href="#" class="categorie">Livestyle</a>
							<span class="ml-auto">22 Posts</span>
						</li>
						<li>
							<a href="#" class="categorie">Travel</a>
							<span class="ml-auto">18 Posts</span>
						</li>
						<li>
							<a href="#" class="categorie">Food</a>
							<span class="ml-auto">14 Posts</span>
						</li>
						<li>
							<a href="#" class="categorie">fashion</a>
							<span class="ml-auto">10 Posts</span>
						</li>
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
							<li>
								<a href="blog-grid.html">fashion</a>
							</li>
							<li>
								<a href="blog-grid.html">livestyle</a>
							</li>
							<li>
								<a href="blog-grid.html">healty</a>
							</li>
							<li>
								<a href="blog-grid.html">food</a>
							</li>
							<li>
								<a href="blog-grid.html">breakfast</a>
							</li>

						</ul>
					</div>
				</div>
				<!--/-->
			</div>
		</div>
	</div>
</section>
<!--/-->
</div>



<?php
get_sidebar();
get_footer();

				