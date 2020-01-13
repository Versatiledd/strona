<?php 

    function addScript(){
        wp_enqueue_script('tween max', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js');
        wp_enqueue_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.1/TimelineMax.min.js');
        wp_enqueue_script('jquery', "https://code.jquery.com/jquery-3.4.1.min.js");
        wp_enqueue_script('mobile_nav_menu', get_theme_file_uri('/js/main.js'), NULL, microtime());
        wp_enqueue_style('custom-google-gonts', '//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i');
        wp_enqueue_script('font-awesome', 'https://kit.fontawesome.com/db72fe6d4c.js"');
        // wp_enqueue_script('bootstrap', get_template_directory_uri() . '/inc/bootstrap.min.js', array( 'jquery'), '5.3.2', true);
        // wp_enqueue_style('bootstrap_style', get_template_directory_uri() . '/inc/bootstrap.min.css', array(), '5.3.2', 'all');
        wp_enqueue_style('main_style_frontpage', get_stylesheet_uri(), NULL, microtime());
    }    
    add_action('wp_enqueue_scripts', 'addScript');
    
    add_action('get_header', 'remove_admin_login_header');
    function remove_admin_login_header() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
    function showMenu(){
        register_nav_menu('headerMenu', 'Menu główne');
    }
    add_action('after_setup_theme', 'showMenu');

    function supportWoocomerce(){
        add_theme_support( 'woocommerce', array(
            'thumbnail_image_width' => 300,
            'single_image_width'=> 300,
            'product_grid'=> array(
                'default_rows'=> 10,
                'min_rows'=> 8,
                'max_rows'=>10,
                'default_columns'=>1,
                'min_columns'=>1,
                'max_columns'=>1
            )
        ));
        add_theme_support( 'wc-product-gallery-zoom' );
        add_theme_support( 'wc-product-gallery-lightbox' );
        add_theme_support( 'wc-product-gallery-slider' );

        if(!isset( $content_width) ){
            $content_width = 600;
        }
    }
    add_action('after_setup_theme', 'supportWoocomerce');
    
    add_action('woocommerce_before_shop_loop', 'createMainContainer', 32);
    function createMainContainer(){
        echo '<div class="woocommerce-container"> <div>';
    }
    add_action('woocommerce_before_single_product_summary', 'singleProductContainer', 5);
    function singleProductContainer(){
        echo '<div class="singleProductCont">';
    }
    add_action('woocommerce_simple_add_to_cart', 'closeSingleProductContainer', 44);
    function closeSingleProductContainer(){
        echo '</div>';
    }

    // add_filter('woocommerce_show_page_title', 'remove_shop_title');
    // function remove_shop_title(){
    //     return false;
    // }

    remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar');
    remove_action('woocommerce_before_checkout_form', 'woocommerce_checkout_coupon_form', 10); // usunięcie z zamówienia niepotrzebnej akcji związanej z kuponem
    // remove_action('woocommerce_before_single_product', 'woocommerce_output_all_notices');
    // remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs');
    remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);
    remove_action('woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30);

    // remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper');
?>



