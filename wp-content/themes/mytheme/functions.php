<?php
define('TPL_DIR_URI', get_template_directory_uri());
// Add css files
function svh_enqueue_styles() {
    wp_enqueue_style('bootstrap', TPL_DIR_URI . '/assets/vendor/bootstrap/css/bootstrap.min.css');
    wp_enqueue_style('core', TPL_DIR_URI . '/style.css');
}
add_action('wp_enqueue_scripts', 'svh_enqueue_styles');

// Add js files
function svh_enqueue_scripts() {
    wp_enqueue_script('pooper', TPL_DIR_URI . '/assets/vendor/bootstrap/popper/popper.min.css', ['jquery']);
    wp_enqueue_script('bootstrap', TPL_DIR_URI . '/assets/vendor/bootstrap/js/bootstrap.min.js', ['jquery']);
}
add_action('wp_enqueue_scripts', 'svh_enqueue_scripts');

function register_svh_menus() {
    register_nav_menus([
        'main-menu' => __( 'Main Menu' )
    ]);
}
add_action('init', 'register_svh_menus');

# Khai báo hằng số TPL_DIR bằng đường dẫn đến thư mục theme
define('TPL_DIR', get_stylesheet_directory());

# Yêu cầu load file class-wp-bootstrap-navwalker.php
function register_navwalker(){
	require_once TPL_DIR . '/inc/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

function svh_widgets_init() {

	register_sidebar(
		[
			'name'          => 'Footer',
			'id'            => 'sidebar-footer',
			'description'   => 'Add widgets here to appear in your footer.',
			'before_widget' => '<div id="%1$s" class="col-12 col-lg-4 footer-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="footer-widget__title">',
			'after_title'   => '</h2>',
        ]
    );

    register_sidebar(
		[
			'name'          => 'Sidebar',
			'id'            => 'sidebar-main',
			'description'   => 'Add widgets here to appear in your sidebar.',
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
        ]
	);

}

add_action( 'widgets_init', 'svh_widgets_init' );

//custom logo
add_theme_support( 'custom-logo' );

function mytheme_custom_logo_setup()
{
	$defaults = array(
		'height'      => 100,
		'width'       => 400,
		'flex-height' => true,
		'flex-width'  => true,
		'header-text' => array('site-title', 'site-description'),
		'unlink-homepage-logo' => true,
	);
	add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'mytheme_custom_logo_setup');
