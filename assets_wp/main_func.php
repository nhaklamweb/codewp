<?php
// Add custom Theme Functions here
$lang=get_bloginfo("language"); 
global $lang;

// Ly - SEO
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;
    
    if ($pagenow === 'edit-comments.php') {
        wp_safe_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page in menu
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});
// Ly - SEO

// END ENQUEUE PARENT ACTION
define('URL_NLW', get_stylesheet_directory_uri());
define('LANG', get_bloginfo("language"));
define('VERSION', '1.0');
define('DOMAIN', 'flatsome');
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
add_filter('use_widgets_block_editor', '__return_false');
add_filter('use_block_editor_for_post', '__return_false');

// Require File 
// require_once('/inc/all_func.php');

//add theme
add_action('wp_enqueue_scripts', function () {
    
    wp_enqueue_script('main-jquery', URL_NLW . '/assets/js/main.js', array('jquery'), VERSION);
    wp_enqueue_style('nlw_main_css', URL_NLW .'/assets/css/main.css', '', VERSION);
    wp_enqueue_style('nlw_responsive_css', URL_NLW .'/assets/css/responsive.css', '', VERSION);
    wp_enqueue_style('fancybox-style', URL_NLW . '/assets/js/image/fancybox.css', '', VERSION);

    wp_enqueue_style('font-baomoi', get_stylesheet_directory_uri() . '/assets/fonts/fonts.css');
    wp_enqueue_style('awesome-style', URL_NLW . '/assets/fonts/awesome6/css/all.css', '', VERSION);
    wp_enqueue_style('owl-theme-style', URL_NLW . '/assets/js/owl/dist/assets/owl.theme.default.css', '', VERSION);
    wp_enqueue_style('owl-style', URL_NLW . '/assets/js/owl/dist/assets/owl.carousel.css', '', VERSION);
    wp_enqueue_script('owl-jquery', URL_NLW . '/assets/js/owl/dist/owl.carousel.js', array('jquery'), VERSION, false);
    wp_enqueue_script('fancybox-jquery', URL_NLW . '/assets/js/image/fancybox.umd.js', array('jquery'), VERSION, false);
    
    //load script main
    wp_localize_script('main-jquery', 'bk', [
        'url' => URL_NLW,
        'url_ajax' => admin_url('admin-ajax.php'),
    ]);
});

/* -----Update Flatsome */
update_option( 'flatsome_wup_purchase_code', 'B5E0B5F8DD8689E6ACA49DD6E6E1A930' );
update_option( 'flatsome_wup_supported_until', '01.01.2050' );
update_option( 'flatsome_wup_buyer', 'Licensed' );
update_option( 'flatsome_wup_sold_at', time() );
delete_option( 'flatsome_wup_errors');
delete_option( 'flatsome_wupdates');

// Shortcode Polylang
function shortcode_polylang(){ ?>

    <?php $lang=get_bloginfo("language"); ?>
    <?php if($lang == "en-US"){ ?>
        <li><a class="languge_icon" href="<?= site_url(); ?>/en/"><img src="<?= site_url(); ?>/wp-content/uploads/2024/03/united.svg" alt="United"></a></li>
    <?php }else{ ?>
        <li><a class="languge_icon" href="<?= site_url(); ?>/vi/"><img src="<?= site_url(); ?>/wp-content/uploads/2024/03/vietnam-flagvietnam.svg" alt="Vietnam"></a></li>
    <?php }
}
add_shortcode("shortcode_polylang","shortcode_polylang");

function yoursitename_remove_comment_url($arg) {
    $arg['url'] = '';
    return $arg;
}
     
add_filter('comment_form_default_fields', 'yoursitename_remove_comment_url');
function wpb_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}    
// PolyLang Switcher Custom
function custom_polylang_langswitcher() { ?>
    <div class="languge_custom">
		<div class="languge_switcher d-flex a_center">
			 <i class="icb_lang"></i>
			 <span class="fs12 d-block" style="margin-right:4px"><?php echo (LANG == 'vi') ? 'Tiếng việt' : 'English'  ; ?></span>
			 <i class="fa fa-caret-down" aria-hidden="true"></i>
			 <div class="sub_lang">
				 <?php if ( function_exists( 'pll_the_languages' ) ) {
					 $args   = [
						 'show_flags' => 1,
						 'show_names' => 1,
						 'echo'       => 0,
					 ];
					 ?>
					 <ul class="polylang_langswitcher">
						 <?php echo pll_the_languages( $args ); ?>
					 </ul>
				 <?php } ?>
			</div>
    	</div>
	</div>
<?php }
add_shortcode( 'polylang_langswitcher', 'custom_polylang_langswitcher' );


// Gửi mail 
add_action('phpmailer_init', function ($phpmailer) {
	if (!is_object($phpmailer))
	$phpmailer = (object) $phpmailer;
	$phpmailer->Mailer = 'smtp';
	$phpmailer->Host = 'smtp.gmail.com';
	$phpmailer->SMTPAuth = 1;
	$phpmailer->Port = 587;
	$phpmailer->Username = 'proxy456.com@gmail.com';
	$phpmailer->Password = 'xrcfzyilgothmcxj';
	$phpmailer->SMTPSecure = 'TLS';
	$phpmailer->From = 'proxy456.com@gmail.fom';
	$phpmailer->FromName = 'Proxy456';
});
add_filter( 'use_default_gallery_style', '__return_false' );
