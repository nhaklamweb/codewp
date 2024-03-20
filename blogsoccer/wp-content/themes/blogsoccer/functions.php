<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );

// END ENQUEUE PARENT ACTION

define('URL_NLW', get_stylesheet_directory_uri());
define('LANG', get_bloginfo("language"));
define('VERSION', 3.1);
define('DOMAIN', 'flatsome');
add_filter('gutenberg_use_widgets_block_editor', '__return_false');
add_filter('use_widgets_block_editor', '__return_false');
add_filter('use_block_editor_for_post', '__return_false');


//add theme
add_action('wp_enqueue_scripts', function () {
    
    wp_enqueue_style('nlw_rp_css', URL_NLW .'/assets/css/responsive.css', '', VERSION);
    wp_enqueue_style('nlw_all_css', URL_NLW .'/assets/css/all.css', '', VERSION);
    wp_enqueue_style('nlw_main_css', URL_NLW .'/assets/css/main.css', '', VERSION);


    wp_enqueue_style('nlw_responsive_css', URL_NLW .'/assets/css/responsive.css', '', VERSION);
    wp_enqueue_style('fancybox-style', URL_NLW . '/assets/js/image/fancybox.css', '', VERSION);

    wp_enqueue_style('awesome-style', URL_NLW . '/assets/fonts/awesome6/css/all.css', '', VERSION);
    wp_enqueue_style('owl-theme-style', URL_NLW . '/assets/js/owl/dist/assets/owl.theme.default.css', '', VERSION);
    wp_enqueue_style('owl-style', URL_NLW . '/assets/js/owl/dist/assets/owl.carousel.css', '', VERSION);
    wp_enqueue_script('owl-jquery', URL_NLW . '/assets/js/owl/dist/owl.carousel.js', array('jquery'), VERSION, false);
    wp_enqueue_script('fancybox-jquery', URL_NLW . '/assets/js/image/fancybox.umd.js', array('jquery'), VERSION, false);
    wp_enqueue_script('main-jquery', URL_NLW . '/assets/js/main.js', array('jquery'), VERSION);
    
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

// SHORTCODE LOGIN
add_shortcode('popup_setting','create_shortcode_popup_setting');
function create_shortcode_popup_setting(){ ?>
    <div class="setting_menu">
        <div class="icon_btn"><i class="icon-menu"></i></div>
        <div class="setting_content">
            <div class="item_setting d-flex a_center between">
                <div class="left_icon">Settings <i class="fa fa-cog" aria-hidden="true"></i></div>
                <div class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
            </div>
            <div class="item_setting darkmode d-flex a_center between">
                <div class="left_icon">Dark mode <i class="fa fa-moon-o" aria-hidden="true"></i></div>
                <div class="dark-mode-switcher">
                    <input type="checkbox" id="dark-mode-toggle" class="checkbox">
                    <label for="dark-mode-toggle" class="switch"></label>
                </div>
            </div>
        </div>
    </div>
<?php }

// SHORTCODE LOGIN
add_shortcode('popup_login','create_shortcode_popup_login');
function create_shortcode_popup_login(){ ?>
    <div class="login_menu d-flex a_center">
        <div class="ic_btn_header btn_search mr-1"><i class="fa fa-search" aria-hidden="true"></i></div>
        <div class="ic_btn_header btn_login"><img src="http://localhost/blogsoccer/wp-content/uploads/2024/03/user-1.svg" alt=""> Login</div>
    </div>
<?php }

// SHORTCODE LOGIN
add_shortcode('list_icon_header_mb','create_shortcode_list_btn_header_mobile');
function create_shortcode_list_btn_header_mobile(){ ?>
    <div class="list_btn_mb d-flex a_center">
        <div class="ic_btn_header btn_search mr-1"><i class="fa fa-search" aria-hidden="true"></i></div>
        <div class="ic_btn_header btn_login mr-1"><i class="fa-solid fa-user"></i></div>
        
        <div class="setting_menu">
            <div class="ic_btn_header icon_btn"><i class="icon-menu"></i></div>
            <div class="setting_content">
                <div class="item_setting d-flex a_center between">
                    <div class="left_icon">Settings <i class="fa fa-cog" aria-hidden="true"></i></div>
                    <div class="right"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
                </div>
                <div class="item_setting darkmode d-flex a_center between">
                    <div class="left_icon">Dark mode <i class="fa-solid fa-moon"></i></div>
                    <div class="dark-mode-switcher">
                        <input type="checkbox" id="dark-mode-toggle" class="checkbox">
                        <label for="dark-mode-toggle" class="switch"></label>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php }