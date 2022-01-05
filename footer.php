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
<!--footer-->
<footer class="footer">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="copyright">
					<p>© Copyright 2021
						<a href="#">JS Bangladesh</a>, All rights reserved.</p>
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
	<?php get_template_part('template-parts', 'page-search'); ?>
<!--/-->

<?php wp_footer(); ?>

</body>
</html>