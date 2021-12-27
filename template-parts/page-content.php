<?php
/**
 * Template Name: Contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mrb
 */

get_header();
?>

<!--contact us-->
<section class="section pt-50">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h5>Contact us</h5>
                </div>
            </div>
        </div>
        
        <div class="row mb-20">
            <div class="col-lg-8 mt-30">
                <div class="contact">
                    <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7496149.95373021!2d85.84621250756469!3d23.452185887261447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30adaaed80e18ba7%3A0xf2d28e0c4e1fc6b!2sBangladesh!5e0!3m2!1sen!2sbd!4v1640613690899!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <form action="https://noonpost.netlify.app/html/template/assets/php/mail.php" class="widget-form contact_form " method="POST" id="main_contact_form">
                        <?php echo do_shortcode('[contact-form-7 id="121" title="CF7 - The Zero"]'); ?>
                    </form>
                </div> 
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
            </div>
        </div>
        
    </div>
</section>    


<?php
get_footer();