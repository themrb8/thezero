<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package thezero
 */

?>

<!--newslettre-->
<section class="newslettre">
	<div class="container-fluid">
		<div class="newslettre-width text-center">
			<div class="newslettre-info">
				<h5>Subscribe to our Newslatter</h5>
				<p> Sign up for free and be the first to get notified about new posts. </p>
			</div>
			<form action="#" class="newslettre-form">
				<?php echo do_shortcode('[contact-form-7 id="123" title="CF7 - TheZero Newsletter"]'); ?>
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
<!--footer-->
<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="copyright">
					<?php
					if(is_active_sidebar('copyright')){
						dynamic_sidebar('copyright');
					}
					?>
				</div>
				<div class="back">
					<a href="#" class="back-top">
						<i class="arrow_up"></i>
					</a>
				</div>
			</div>
		</div>
	</div>
</footer>

<!--Search-form-->
	<?php get_template_part('template-parts/page', 'search'); ?>
<!--/-->

<?php wp_footer(); ?>

</body>
</html>