<?php
/**
 * The template for displaying the footer.
 *
 * @package          Flatsome\Templates
 * @flatsome-version 3.16.0
 */

global $flatsome_opt;
?>

</main>

<footer id="footer" class="footer-wrapper">

	<?php do_action('flatsome_footer'); ?>

</footer>
<section class="formLH">
    <div class="container">
        <div class="wrapper-form-dk form-footer">
            <button class="btn_close"><i class="fas fa-times"></i></button>
			<!-- LOGIN MODAL -->
            <div class="content_popup login_modal mt-2">
            	<div class="mb-2 text-light" style="font-size: 22px; font-weight: bold;">Sign up to get more</div>
				<div class="header_top">
					<span class="text-light text-center fs-14">What extras do you gain for free?</span>
					<div class="d-flex between">
						<div class="icb_top">
							<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/03/headphone-1.svg" alt="icon">
							<div>Enjoy audio commentary</div>
						</div>
						<div class="icb_top">
							<img src="<?php echo site_url(); ?>/wp-content/uploads/2024/03/headphone-1.svg" alt="icon">
							<div>Favorites on all devices</div>
						</div>
					</div>
				</div>
				<div class="nextend_login mt-2">
					<span>Connect Facebook App to login</span>
					<div>
						<?php echo do_shortcode('[nextend_social_login login="1" link="1" unlink="1" heading="Connect Social Accounts"]'); ?>
					</div>
				</div>
				<div class="privacy_login text-left mt-2">
					<div class="text-light fs-12">By clicking on any "Continue with" button, you agree to <a class="" style="color:#8b8b8b" href="<?php echo site_url(); ?>/terms-of-use/" target="_blank">the Terms of Use</a> and acknowledge our <a class="" style="color:#8b8b8b" href="<?php echo site_url(); ?>/privacy-policy/" target="_blank">Privacy Policy</a> on our website.</div>
				</div>
            </div>
			<!-- SEARCH MODAL -->
			<div class="content_popup search_modal mt-2">
				<div class="header_search">
            		<div class="mb-2 text-light text-left" style="font-size: 20px; font-weight: bold;">Search</div>
				</div>
				<div class="content_search">
					<form action="<?php site_url(); ?>">
						<input type="text" name="s" id="search_post" placeholder="Type your search here..." required="required">
						<input type="hidden" name="post_type" value="post">
					</form>
					<div class="desc_search text-left fs-13">Please type at least 2 characters. The results will start displaying here immediately.</div>
					<div class="relate_search">
						<div class="title_rl_search text-left text-light mb-1 mt-2 fs-14">MOST POPULAR SEARCHES</div>
						<div class="list_search_relate">
							<?php
                            $args = array(
                                'post_type'      => 'post',
                                'posts_per_page' => '6',
                                'order'          => 'DESC',
                                'order_by'       =>'date',
                            );
                            $query = new WP_Query($args);

                            if ($query->have_posts()) :
                                while ($query->have_posts()) : $query->the_post();
                            ?>
                                <?php get_template_part('template-parts/custom/post_list') ; ?>

                            <?php endwhile; ?>
                                <?php wp_reset_query();  ?>
                            <?php endif; ?>
						</div>
					</div>
				</div>
            </div>
        </div>
    </div>
</section>
</div>

<?php wp_footer(); ?>

</body>
</html>
