<?php


// connecting the style  start

function slurps_style() {
	wp_enqueue_style('custom-style',get_theme_file_uri('./style.css'), array(), filemtime(get_theme_file_path('./style.css')));
    wp_enqueue_style('custom-swiper', 'https://unpkg.com/swiper/swiper-bundle.min.css');
    wp_enqueue_style('custom-swiper-bundle', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.css');
    if ( is_page( 'menu' ) ) {
        wp_enqueue_style('custom-menu-style',get_theme_file_uri('./style2.css'), array(), filemtime(get_theme_file_path('./style2.css')));
      }
	
}
add_action('wp_enqueue_scripts', 'slurps_style');

// connecting the style  end


// connecting the script  start


function comerico_script() {
	wp_enqueue_script('app-js', get_theme_file_uri('./assets/js/app.js'), NULL, microtime(), true); 
	wp_enqueue_script('swipper2-js', get_theme_file_uri('./assets/js/swipper2.js'), NULL, microtime(), true); 
	wp_enqueue_script('jquery-js','https://code.jquery.com/jquery-3.3.1.min.js');
    wp_enqueue_script('jquery-slick-js','https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js');
    wp_enqueue_script('swiper-js','https://unpkg.com/swiper/swiper-bundle.min.js');
    wp_enqueue_script('swiper-min-js','https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js');
    wp_enqueue_script('swiper-bundle-js','https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.5.8/swiper-bundle.min.js');
	
}
add_action('wp_enqueue_scripts', 'comerico_script');

// connecting the script  end



// Menu bar create
function comercio_config(){
    register_nav_menus(
        array(
            'Slurps_main_menu'   =>  'Slurps Main Menu'
        )
        );
}

add_action('after_setup_theme','comercio_config',0);


function handle_form_submission() {
    // Get the submitted form data
    $name = sanitize_text_field($_POST['name']);
    $mobile_number = sanitize_text_field($_POST['mobile_number']);
    $email = sanitize_email($_POST['email']);
    $franchise_location = sanitize_text_field($_POST['franchise_location']);
    $message = sanitize_textarea_field($_POST['message']);

    // Perform any necessary validations on the form data

    // Process the form data as needed (e.g., save to database, send email, etc.)

    // Send a response back to the browser
    wp_send_json_success('Form submitted successfully!');
}
add_action('wp_ajax_{action}', 'handle_form_submission');
add_action('wp_ajax_nopriv_{action}', 'handle_form_submission');


/**
 * Functions and definitions
 *
 * @link https://www.freelancersleague.com/
 *
 * @package FL- Starter Theme-01
 * @since FL- Starter Theme-01 1.0
 */

 if ( !function_exists( 'starter_theme_setup' ) ) {
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * @since FL- Starter Theme-01 1.0
	 *
	 * @return void
	 */
	function starter_theme_setup() {

    // Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

    /*
		 * Let WordPress manage the document title.
		 * This theme does not use a hard-coded <title> tag in the document head,
		 * WordPress will provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/**
		 * Add post-formats support.
		 */
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);
    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary menu', 'gatestarter' ),
				'secondary'  => esc_html__( 'Secondary menu', 'gatestarter' ),
			)
		);

    /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

    /*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		$logo_width  = 300;
		$logo_height = 100;

		add_theme_support(
			'custom-logo',
			array(
				'height'               => $logo_height,
				'width'                => $logo_width,
				'flex-width'           => true,
				'flex-height'          => true,
				'unlink-homepage-logo' => true,
			)
		);

    // Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

    // Custom background color.
		// add_theme_support(
		// 	'custom-background',
		// 	array(
		// 		'default-color' => 'd1e4dd',
		// 	)
		// );

    // Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add support for custom line height controls.
		add_theme_support( 'custom-line-height' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		// Add support for experimental cover block spacing.
		add_theme_support( 'custom-spacing' );

		// Add support for custom units.
		// This was removed in WordPress 5.6 but is still required to properly support WP 5.5.
		add_theme_support( 'custom-units' );

	}
}
add_action( 'after_setup_theme', 'starter_theme_setup' );


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @since FL- Starter Theme-01 1.0
 *
 * @global int $content_width Content width.
 *
 * @return void
 */
function starter_theme_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'starter_theme_content_width', 750 );
}
add_action( 'after_setup_theme', 'starter_theme_content_width', 0 );


// custom post type function
function register_custom_post_types() {
    register_post_type( 'Background',
        array(
            'labels' => array(
                'name' => __( 'Background' ),
                'singular_name' => __( 'Background' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Background'),
            'show_in_rest' => true,
			'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTUiIHZpZXdCb3g9IjAgMCAxOCAxNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyIDNDMTIgMy43OTU2NSAxMS42ODM5IDQuNTU4NzEgMTEuMTIxMyA1LjEyMTMyQzEwLjU1ODcgNS42ODM5MyA5Ljc5NTY1IDYgOSA2QzguMjA0MzUgNiA3LjQ0MTI5IDUuNjgzOTMgNi44Nzg2OCA1LjEyMTMyQzYuMzE2MDcgNC41NTg3MSA2IDMuNzk1NjUgNiAzQzYgMi4yMDQzNSA2LjMxNjA3IDEuNDQxMjkgNi44Nzg2OCAwLjg3ODY4QzcuNDQxMjkgMC4zMTYwNzEgOC4yMDQzNSAwIDkgMEM5Ljc5NTY1IDAgMTAuNTU4NyAwLjMxNjA3MSAxMS4xMjEzIDAuODc4NjhDMTEuNjgzOSAxLjQ0MTI5IDEyIDIuMjA0MzUgMTIgM1YzWiIgZmlsbD0iI0YwRjBGMSIvPgo8cGF0aCBkPSJNMTcgNUMxNyA1LjUzMDQzIDE2Ljc4OTMgNi4wMzkxNCAxNi40MTQyIDYuNDE0MjFDMTYuMDM5MSA2Ljc4OTI5IDE1LjUzMDQgNyAxNSA3QzE0LjQ2OTYgNyAxMy45NjA5IDYuNzg5MjkgMTMuNTg1OCA2LjQxNDIxQzEzLjIxMDcgNi4wMzkxNCAxMyA1LjUzMDQzIDEzIDVDMTMgNC40Njk1NyAxMy4yMTA3IDMuOTYwODYgMTMuNTg1OCAzLjU4NTc5QzEzLjk2MDkgMy4yMTA3MSAxNC40Njk2IDMgMTUgM0MxNS41MzA0IDMgMTYuMDM5MSAzLjIxMDcxIDE2LjQxNDIgMy41ODU3OUMxNi43ODkzIDMuOTYwODYgMTcgNC40Njk1NyAxNyA1VjVaIiBmaWxsPSIjRjBGMEYxIi8+CjxwYXRoIGQ9Ik0xMyAxMkMxMyAxMC45MzkxIDEyLjU3ODYgOS45MjE3MiAxMS44Mjg0IDkuMTcxNTdDMTEuMDc4MyA4LjQyMTQzIDEwLjA2MDkgOCA5IDhDNy45MzkxMyA4IDYuOTIxNzIgOC40MjE0MyA2LjE3MTU3IDkuMTcxNTdDNS40MjE0MyA5LjkyMTcyIDUgMTAuOTM5MSA1IDEyVjE1SDEzVjEyWiIgZmlsbD0iI0YwRjBGMSIvPgo8cGF0aCBkPSJNNSA1QzUgNS41MzA0MyA0Ljc4OTI5IDYuMDM5MTQgNC40MTQyMSA2LjQxNDIxQzQuMDM5MTQgNi43ODkyOSAzLjUzMDQzIDcgMyA3QzIuNDY5NTcgNyAxLjk2MDg2IDYuNzg5MjkgMS41ODU3OSA2LjQxNDIxQzEuMjEwNzEgNi4wMzkxNCAxIDUuNTMwNDMgMSA1QzEgNC40Njk1NyAxLjIxMDcxIDMuOTYwODYgMS41ODU3OSAzLjU4NTc5QzEuOTYwODYgMy4yMTA3MSAyLjQ2OTU3IDMgMyAzQzMuNTMwNDMgMyA0LjAzOTE0IDMuMjEwNzEgNC40MTQyMSAzLjU4NTc5QzQuNzg5MjkgMy45NjA4NiA1IDQuNDY5NTcgNSA1VjVaIiBmaWxsPSIjRjBGMEYxIi8+CjxwYXRoIGQ9Ik0xNSAxNS4wMDAxVjEyLjAwMDFDMTUuMDAxNCAxMC45ODMzIDE0Ljc0MzMgOS45ODMwOSAxNC4yNSA5LjA5NDA2QzE0LjY5MzMgOC45ODA2IDE1LjE1NjggOC45Njk5IDE1LjYwNDkgOS4wNjI3OEMxNi4wNTMgOS4xNTU2NiAxNi40NzQgOS4zNDk2NSAxNi44MzU3IDkuNjI5OTdDMTcuMTk3NCA5LjkxMDI5IDE3LjQ5MDMgMTAuMjY5NSAxNy42OTIxIDEwLjY4MDNDMTcuODkzOSAxMS4wOTEgMTcuOTk5MiAxMS41NDI0IDE4IDEyLjAwMDFWMTUuMDAwMUgxNVoiIGZpbGw9IiNGMEYwRjEiLz4KPHBhdGggZD0iTTMuNzUgOS4wOTQwNEMzLjI1Njc1IDkuOTgzMDkgMi45OTg2IDEwLjk4MzMgMyAxMlYxNUgyLjY1NzJlLTA3VjEyQy0wLjAwMDE5MjQ2OCAxMS41NDIxIDAuMTA0NDYzIDExLjA5MDIgMC4zMDU5NDcgMTAuNjc4OUMwLjUwNzQzMSAxMC4yNjc2IDAuODAwMzk0IDkuOTA3OTggMS4xNjIzOCA5LjYyNzQ2QzEuNTI0MzcgOS4zNDY5NCAxLjk0NTc4IDkuMTUzMDIgMi4zOTQzMSA5LjA2MDU2QzIuODQyODQgOC45NjgxIDMuMzA2NTggOC45Nzk1NSAzLjc1IDkuMDk0MDRWOS4wOTQwNFoiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
        )
    );
	//////////////////// above is for reference

	//Brands - Custom Post Type
	register_post_type( 'OurStory',
        array(
            'labels' => array(
                'name' => __( 'OurStory' ),
                'singular_name' => __( 'OurStory' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'OurStory'),
            'show_in_rest' => true,
			'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTUiIHZpZXdCb3g9IjAgMCAxOCAxNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyIDNDMTIgMy43OTU2NSAxMS42ODM5IDQuNTU4NzEgMTEuMTIxMyA1LjEyMTMyQzEwLjU1ODcgNS42ODM5MyA5Ljc5NTY1IDYgOSA2QzguMjA0MzUgNiA3LjQ0MTI5IDUuNjgzOTMgNi44Nzg2OCA1LjEyMTMyQzYuMzE2MDcgNC41NTg3MSA2IDMuNzk1NjUgNiAzQzYgMi4yMDQzNSA2LjMxNjA3IDEuNDQxMjkgNi44Nzg2OCAwLjg3ODY4QzcuNDQxMjkgMC4zMTYwNzEgOC4yMDQzNSAwIDkgMEM5Ljc5NTY1IDAgMTAuNTU4NyAwLjMxNjA3MSAxMS4xMjEzIDAuODc4NjhDMTEuNjgzOSAxLjQ0MTI5IDEyIDIuMjA0MzUgMTIgM1YzWiIgZmlsbD0iI0YwRjBGMSIvPgo8cGF0aCBkPSJNMTcgNUMxNyA1LjUzMDQzIDE2Ljc4OTMgNi4wMzkxNCAxNi40MTQyIDYuNDE0MjFDMTYuMDM5MSA2Ljc4OTI5IDE1LjUzMDQgNyAxNSA3QzE0LjQ2OTYgNyAxMy45NjA5IDYuNzg5MjkgMTMuNTg1OCA2LjQxNDIxQzEzLjIxMDcgNi4wMzkxNCAxMyA1LjUzMDQzIDEzIDVDMTMgNC40Njk1NyAxMy4yMTA3IDMuOTYwODYgMTMuNTg1OCAzLjU4NTc5QzEzLjk2MDkgMy4yMTA3MSAxNC40Njk2IDMgMTUgM0MxNS41MzA0IDMgMTYuMDM5MSAzLjIxMDcxIDE2LjQxNDIgMy41ODU3OUMxNi43ODkzIDMuOTYwODYgMTcgNC40Njk1NyAxNyA1VjVaIiBmaWxsPSIjRjBGMEYxIi8+CjxwYXRoIGQ9Ik0xMyAxMkMxMyAxMC45MzkxIDEyLjU3ODYgOS45MjE3MiAxMS44Mjg0IDkuMTcxNTdDMTEuMDc4MyA4LjQyMTQzIDEwLjA2MDkgOCA5IDhDNy45MzkxMyA4IDYuOTIxNzIgOC40MjE0MyA2LjE3MTU3IDkuMTcxNTdDNS40MjE0MyA5LjkyMTcyIDUgMTAuOTM5MSA1IDEyVjE1SDEzVjEyWiIgZmlsbD0iI0YwRjBGMSIvPgo8cGF0aCBkPSJNNSA1QzUgNS41MzA0MyA0Ljc4OTI5IDYuMDM5MTQgNC40MTQyMSA2LjQxNDIxQzQuMDM5MTQgNi43ODkyOSAzLjUzMDQzIDcgMyA3QzIuNDY5NTcgNyAxLjk2MDg2IDYuNzg5MjkgMS41ODU3OSA2LjQxNDIxQzEuMjEwNzEgNi4wMzkxNCAxIDUuNTMwNDMgMSA1QzEgNC40Njk1NyAxLjIxMDcxIDMuOTYwODYgMS41ODU3OSAzLjU4NTc5QzEuOTYwODYgMy4yMTA3MSAyLjQ2OTU3IDMgMyAzQzMuNTMwNDMgMyA0LjAzOTE0IDMuMjEwNzEgNC40MTQyMSAzLjU4NTc5QzQuNzg5MjkgMy45NjA4NiA1IDQuNDY5NTcgNSA1VjVaIiBmaWxsPSIjRjBGMEYxIi8+CjxwYXRoIGQ9Ik0xNSAxNS4wMDAxVjEyLjAwMDFDMTUuMDAxNCAxMC45ODMzIDE0Ljc0MzMgOS45ODMwOSAxNC4yNSA5LjA5NDA2QzE0LjY5MzMgOC45ODA2IDE1LjE1NjggOC45Njk5IDE1LjYwNDkgOS4wNjI3OEMxNi4wNTMgOS4xNTU2NiAxNi40NzQgOS4zNDk2NSAxNi44MzU3IDkuNjI5OTdDMTcuMTk3NCA5LjkxMDI5IDE3LjQ5MDMgMTAuMjY5NSAxNy42OTIxIDEwLjY4MDNDMTcuODkzOSAxMS4wOTEgMTcuOTk5MiAxMS41NDI0IDE4IDEyLjAwMDFWMTUuMDAwMUgxNVoiIGZpbGw9IiNGMEYwRjEiLz4KPHBhdGggZD0iTTMuNzUgOS4wOTQwNEMzLjI1Njc1IDkuOTgzMDkgMi45OTg2IDEwLjk4MzMgMyAxMlYxNUgyLjY1NzJlLTA3VjEyQy0wLjAwMDE5MjQ2OCAxMS41NDIxIDAuMTA0NDYzIDExLjA5MDIgMC4zMDU5NDcgMTAuNjc4OUMwLjUwNzQzMSAxMC4yNjc2IDAuODAwMzk0IDkuOTA3OTggMS4xNjIzOCA5LjYyNzQ2QzEuNTI0MzcgOS4zNDY5NCAxLjk0NTc4IDkuMTUzMDIgMi4zOTQzMSA5LjA2MDU2QzIuODQyODQgOC45NjgxIDMuMzA2NTggOC45Nzk1NSAzLjc1IDkuMDk0MDRWOS4wOTQwNFoiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
        )
    );

	//Career - Custom Post Type
	register_post_type( 'AboutUs',
        array(
            'labels' => array(
                'name' => __( 'AboutUs' ),
                'singular_name' => __( 'AboutUs' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'AboutUs'),
            'show_in_rest' => true,
			'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTUiIHZpZXdCb3g9IjAgMCAxOCAxNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyIDNDMTIgMy43OTU2NSAxMS42ODM5IDQuNTU4NzEgMTEuMTIxMyA1LjEyMTMyQzEwLjU1ODcgNS42ODM5MyA5Ljc5NTY1IDYgOSA2QzguMjA0MzUgNiA3LjQ0MTI5IDUuNjgzOTMgNi44Nzg2OCA1LjEyMTMyQzYuMzE2MDcgNC41NTg3MSA2IDMuNzk1NjUgNiAzQzYgMi4yMDQzNSA2LjMxNjA3IDEuNDQxMjkgNi44Nzg2OCAwLjg3ODY4QzcuNDQxMjkgMC4zMTYwNzEgOC4yMDQzNSAwIDkgMEM5Ljc5NTY1IDAgMTAuNTU4NyAwLjMxNjA3MSAxMS4xMjEzIDAuODc4NjhDMTEuNjgzOSAxLjQ0MTI5IDEyIDIuMjA0MzUgMTIgM1YzWiIgZmlsbD0iI0YwRjBGMSIvPgo8cGF0aCBkPSJNMTcgNUMxNyA1LjUzMDQzIDE2Ljc4OTMgNi4wMzkxNCAxNi40MTQyIDYuNDE0MjFDMTYuMDM5MSA2Ljc4OTI5IDE1LjUzMDQgNyAxNSA3QzE0LjQ2OTYgNyAxMy45NjA5IDYuNzg5MjkgMTMuNTg1OCA2LjQxNDIxQzEzLjIxMDcgNi4wMzkxNCAxMyA1LjUzMDQzIDEzIDVDMTMgNC40Njk1NyAxMy4yMTA3IDMuOTYwODYgMTMuNTg1OCAzLjU4NTc5QzEzLjk2MDkgMy4yMTA3MSAxNC40Njk2IDMgMTUgM0MxNS41MzA0IDMgMTYuMDM5MSAzLjIxMDcxIDE2LjQxNDIgMy41ODU3OUMxNi43ODkzIDMuOTYwODYgMTcgNC40Njk1NyAxNyA1VjVaIiBmaWxsPSIjRjBGMEYxIi8+CjxwYXRoIGQ9Ik0xMyAxMkMxMyAxMC45MzkxIDEyLjU3ODYgOS45MjE3MiAxMS44Mjg0IDkuMTcxNTdDMTEuMDc4MyA4LjQyMTQzIDEwLjA2MDkgOCA5IDhDNy45MzkxMyA4IDYuOTIxNzIgOC40MjE0MyA2LjE3MTU3IDkuMTcxNTdDNS40MjE0MyA5LjkyMTcyIDUgMTAuOTM5MSA1IDEyVjE1SDEzVjEyWiIgZmlsbD0iI0YwRjBGMSIvPgo8cGF0aCBkPSJNNSA1QzUgNS41MzA0MyA0Ljc4OTI5IDYuMDM5MTQgNC40MTQyMSA2LjQxNDIxQzQuMDM5MTQgNi43ODkyOSAzLjUzMDQzIDcgMyA3QzIuNDY5NTcgNyAxLjk2MDg2IDYuNzg5MjkgMS41ODU3OSA2LjQxNDIxQzEuMjEwNzEgNi4wMzkxNCAxIDUuNTMwNDMgMSA1QzEgNC40Njk1NyAxLjIxMDcxIDMuOTYwODYgMS41ODU3OSAzLjU4NTc5QzEuOTYwODYgMy4yMTA3MSAyLjQ2OTU3IDMgMyAzQzMuNTMwNDMgMyA0LjAzOTE0IDMuMjEwNzEgNC40MTQyMSAzLjU4NTc5QzQuNzg5MjkgMy45NjA4NiA1IDQuNDY5NTcgNSA1VjVaIiBmaWxsPSIjRjBGMEYxIi8+CjxwYXRoIGQ9Ik0xNSAxNS4wMDAxVjEyLjAwMDFDMTUuMDAxNCAxMC45ODMzIDE0Ljc0MzMgOS45ODMwOSAxNC4yNSA5LjA5NDA2QzE0LjY5MzMgOC45ODA2IDE1LjE1NjggOC45Njk5IDE1LjYwNDkgOS4wNjI3OEMxNi4wNTMgOS4xNTU2NiAxNi40NzQgOS4zNDk2NSAxNi44MzU3IDkuNjI5OTdDMTcuMTk3NCA5LjkxMDI5IDE3LjQ5MDMgMTAuMjY5NSAxNy42OTIxIDEwLjY4MDNDMTcuODkzOSAxMS4wOTEgMTcuOTk5MiAxMS41NDI0IDE4IDEyLjAwMDFWMTUuMDAwMUgxNVoiIGZpbGw9IiNGMEYwRjEiLz4KPHBhdGggZD0iTTMuNzUgOS4wOTQwNEMzLjI1Njc1IDkuOTgzMDkgMi45OTg2IDEwLjk4MzMgMyAxMlYxNUgyLjY1NzJlLTA3VjEyQy0wLjAwMDE5MjQ2OCAxMS41NDIxIDAuMTA0NDYzIDExLjA5MDIgMC4zMDU5NDcgMTAuNjc4OUMwLjUwNzQzMSAxMC4yNjc2IDAuODAwMzk0IDkuOTA3OTggMS4xNjIzOCA5LjYyNzQ2QzEuNTI0MzcgOS4zNDY5NCAxLjk0NTc4IDkuMTUzMDIgMi4zOTQzMSA5LjA2MDU2QzIuODQyODQgOC45NjgxIDMuMzA2NTggOC45Nzk1NSAzLjc1IDkuMDk0MDRWOS4wOTQwNFoiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
        )
    );

	//FAQ - Custom Post Type
	register_post_type( 'Reviews',
        array(
            'labels' => array(
                'name' => __( 'Reviews' ),
                'singular_name' => __( 'Reviews' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'Reviews'),
            'show_in_rest' => true,
			'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMTgiIGhlaWdodD0iMTUiIHZpZXdCb3g9IjAgMCAxOCAxNSIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTEyIDNDMTIgMy43OTU2NSAxMS42ODM5IDQuNTU4NzEgMTEuMTIxMyA1LjEyMTMyQzEwLjU1ODcgNS42ODM5MyA5Ljc5NTY1IDYgOSA2QzguMjA0MzUgNiA3LjQ0MTI5IDUuNjgzOTMgNi44Nzg2OCA1LjEyMTMyQzYuMzE2MDcgNC41NTg3MSA2IDMuNzk1NjUgNiAzQzYgMi4yMDQzNSA2LjMxNjA3IDEuNDQxMjkgNi44Nzg2OCAwLjg3ODY4QzcuNDQxMjkgMC4zMTYwNzEgOC4yMDQzNSAwIDkgMEM5Ljc5NTY1IDAgMTAuNTU4NyAwLjMxNjA3MSAxMS4xMjEzIDAuODc4NjhDMTEuNjgzOSAxLjQ0MTI5IDEyIDIuMjA0MzUgMTIgM1YzWiIgZmlsbD0iI0YwRjBGMSIvPgo8cGF0aCBkPSJNMTcgNUMxNyA1LjUzMDQzIDE2Ljc4OTMgNi4wMzkxNCAxNi40MTQyIDYuNDE0MjFDMTYuMDM5MSA2Ljc4OTI5IDE1LjUzMDQgNyAxNSA3QzE0LjQ2OTYgNyAxMy45NjA5IDYuNzg5MjkgMTMuNTg1OCA2LjQxNDIxQzEzLjIxMDcgNi4wMzkxNCAxMyA1LjUzMDQzIDEzIDVDMTMgNC40Njk1NyAxMy4yMTA3IDMuOTYwODYgMTMuNTg1OCAzLjU4NTc5QzEzLjk2MDkgMy4yMTA3MSAxNC40Njk2IDMgMTUgM0MxNS41MzA0IDMgMTYuMDM5MSAzLjIxMDcxIDE2LjQxNDIgMy41ODU3OUMxNi43ODkzIDMuOTYwODYgMTcgNC40Njk1NyAxNyA1VjVaIiBmaWxsPSIjRjBGMEYxIi8+CjxwYXRoIGQ9Ik0xMyAxMkMxMyAxMC45MzkxIDEyLjU3ODYgOS45MjE3MiAxMS44Mjg0IDkuMTcxNTdDMTEuMDc4MyA4LjQyMTQzIDEwLjA2MDkgOCA5IDhDNy45MzkxMyA4IDYuOTIxNzIgOC40MjE0MyA2LjE3MTU3IDkuMTcxNTdDNS40MjE0MyA5LjkyMTcyIDUgMTAuOTM5MSA1IDEyVjE1SDEzVjEyWiIgZmlsbD0iI0YwRjBGMSIvPgo8cGF0aCBkPSJNNSA1QzUgNS41MzA0MyA0Ljc4OTI5IDYuMDM5MTQgNC40MTQyMSA2LjQxNDIxQzQuMDM5MTQgNi43ODkyOSAzLjUzMDQzIDcgMyA3QzIuNDY5NTcgNyAxLjk2MDg2IDYuNzg5MjkgMS41ODU3OSA2LjQxNDIxQzEuMjEwNzEgNi4wMzkxNCAxIDUuNTMwNDMgMSA1QzEgNC40Njk1NyAxLjIxMDcxIDMuOTYwODYgMS41ODU3OSAzLjU4NTc5QzEuOTYwODYgMy4yMTA3MSAyLjQ2OTU3IDMgMyAzQzMuNTMwNDMgMyA0LjAzOTE0IDMuMjEwNzEgNC40MTQyMSAzLjU4NTc5QzQuNzg5MjkgMy45NjA4NiA1IDQuNDY5NTcgNSA1VjVaIiBmaWxsPSIjRjBGMEYxIi8+CjxwYXRoIGQ9Ik0xNSAxNS4wMDAxVjEyLjAwMDFDMTUuMDAxNCAxMC45ODMzIDE0Ljc0MzMgOS45ODMwOSAxNC4yNSA5LjA5NDA2QzE0LjY5MzMgOC45ODA2IDE1LjE1NjggOC45Njk5IDE1LjYwNDkgOS4wNjI3OEMxNi4wNTMgOS4xNTU2NiAxNi40NzQgOS4zNDk2NSAxNi44MzU3IDkuNjI5OTdDMTcuMTk3NCA5LjkxMDI5IDE3LjQ5MDMgMTAuMjY5NSAxNy42OTIxIDEwLjY4MDNDMTcuODkzOSAxMS4wOTEgMTcuOTk5MiAxMS41NDI0IDE4IDEyLjAwMDFWMTUuMDAwMUgxNVoiIGZpbGw9IiNGMEYwRjEiLz4KPHBhdGggZD0iTTMuNzUgOS4wOTQwNEMzLjI1Njc1IDkuOTgzMDkgMi45OTg2IDEwLjk4MzMgMyAxMlYxNUgyLjY1NzJlLTA3VjEyQy0wLjAwMDE5MjQ2OCAxMS41NDIxIDAuMTA0NDYzIDExLjA5MDIgMC4zMDU5NDcgMTAuNjc4OUMwLjUwNzQzMSAxMC4yNjc2IDAuODAwMzk0IDkuOTA3OTggMS4xNjIzOCA5LjYyNzQ2QzEuNTI0MzcgOS4zNDY5NCAxLjk0NTc4IDkuMTUzMDIgMi4zOTQzMSA5LjA2MDU2QzIuODQyODQgOC45NjgxIDMuMzA2NTggOC45Nzk1NSAzLjc1IDkuMDk0MDRWOS4wOTQwNFoiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
        )
    );


    //Products - Custom Post Type
	register_post_type( 'Gallery',
        array(
            'labels' => array(
                'name' => __( 'Gallery' ),
                'singular_name' => __( 'Gallery' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'Gallery'),
            'show_in_rest' => true,
			'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2LjY2NjcgNi42NjY2M0gzLjMzMzQxVjQuOTk5OTZIMTYuNjY2N1Y2LjY2NjYzWk0xNS4wMDAxIDEuNjY2NjNINS4wMDAwOFYzLjMzMzI5SDE1LjAwMDFWMS42NjY2M1pNMTguMzMzNCA5Ljk5OTk2VjE2LjY2NjZDMTguMzMzNCAxNy4xMDg3IDE4LjE1NzggMTcuNTMyNiAxNy44NDUzIDE3Ljg0NTFDMTcuNTMyNyAxOC4xNTc3IDE3LjEwODggMTguMzMzMyAxNi42NjY3IDE4LjMzMzNIMy4zMzM0MUMyLjg5MTc5IDE4LjMzMiAyLjQ2ODY0IDE4LjE1NiAyLjE1NjM2IDE3Ljg0MzdDMS44NDQwOSAxNy41MzE0IDEuNjY4MDcgMTcuMTA4MiAxLjY2Njc1IDE2LjY2NjZWOS45OTk5NkMxLjY2ODA3IDkuNTU4MzQgMS44NDQwOSA5LjEzNTE4IDIuMTU2MzYgOC44MjI5QzIuNDY4NjQgOC41MTA2MyAyLjg5MTc5IDguMzM0NjEgMy4zMzM0MSA4LjMzMzI5SDE2LjY2NjdDMTcuMTA4NCA4LjMzNDYxIDE3LjUzMTUgOC41MTA2MyAxNy44NDM4IDguODIyOUMxOC4xNTYxIDkuMTM1MTggMTguMzMyMSA5LjU1ODM0IDE4LjMzMzQgOS45OTk5NlpNMTEuNjA1OSAxNC4yMDE2TDEzLjU0MTcgMTIuNTQ2NkwxMC45OTI2IDEyLjMzMzNMMTAuMDAwMSA5Ljk5OTk2TDkuMDA3NTggMTIuMzMzM0w2LjQ1ODQxIDEyLjU0NjZMOC4zOTQyNSAxNC4yMDE2TDcuODEwOTEgMTYuNjY2NkwxMC4wMDAxIDE1LjM1NjZMMTIuMTg5MiAxNi42NjY2TDExLjYwNTkgMTQuMjAxNloiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
        )
    );

    //Service - Custom Post Type
	register_post_type( 'locations',
        array(
            'labels' => array(
                'name' => __( 'locations' ),
                'singular_name' => __( 'locations' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'locations'),
            'show_in_rest' => true,
			'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE0LjE2NjYgMTMuMzMzNUMxMy43MDgzIDEzLjMzMzUgMTMuMzMzMyAxMi45NTg1IDEzLjMzMzMgMTIuNTAwMkg2LjY2NjYzQzYuNjY2NjMgMTIuOTU4NSA2LjI5MTYzIDEzLjMzMzUgNS44MzMyOSAxMy4zMzM1QzUuMzc0OTYgMTMuMzMzNSA0Ljk5OTk2IDEyLjk1ODUgNC45OTk5NiAxMi41MDAySDEuNjY2NjNWMTUuMDAwMkMxLjY2NjYzIDE1LjkxNjggMi40MTY2MyAxNi42NjY4IDMuMzMzMjkgMTYuNjY2OEgxNi42NjY2QzE3LjU4MzMgMTYuNjY2OCAxOC4zMzMzIDE1LjkxNjggMTguMzMzMyAxNS4wMDAyVjEyLjUwMDJIMTVDMTUgMTIuOTU4NSAxNC42MjUgMTMuMzMzNSAxNC4xNjY2IDEzLjMzMzVaTTE2LjY2NjYgNi42NjY4M0gxNC4xNjY2VjUuMDAwMTZDMTQuMTY2NiA0LjA4MzUgMTMuNDE2NiAzLjMzMzUgMTIuNSAzLjMzMzVINy40OTk5NkM2LjU4MzI5IDMuMzMzNSA1LjgzMzI5IDQuMDgzNSA1LjgzMzI5IDUuMDAwMTZWNi42NjY4M0gzLjMzMzI5QzIuNDE2NjMgNi42NjY4MyAxLjY2NjYzIDcuNDE2ODMgMS42NjY2MyA4LjMzMzVWMTEuNjY2OEg0Ljk5OTk2VjEwLjgzMzVDNC45OTk5NiAxMC4zNzUyIDUuMzc0OTYgMTAuMDAwMiA1LjgzMzI5IDEwLjAwMDJDNi4yOTE2MyAxMC4wMDAyIDYuNjY2NjMgMTAuMzc1MiA2LjY2NjYzIDEwLjgzMzVWMTEuNjY2OEgxMy4zMzMzVjEwLjgzMzVDMTMuMzMzMyAxMC4zNzUyIDEzLjcwODMgMTAuMDAwMiAxNC4xNjY2IDEwLjAwMDJDMTQuNjI1IDEwLjAwMDIgMTUgMTAuMzc1MiAxNSAxMC44MzM1VjExLjY2NjhIMTguMzMzM1Y4LjMzMzVDMTguMzMzMyA3LjQxNjgzIDE3LjU4MzMgNi42NjY4MyAxNi42NjY2IDYuNjY2ODNaTTEyLjUgNi42NjY4M0g3LjQ5OTk2VjUuMDAwMTZIMTIuNVY2LjY2NjgzWiIgZmlsbD0iI0YwRjZGQyIvPgo8L3N2Zz4K'
        )
    );



	    //Products - Custom Post Type
		register_post_type( 'highlights',
        array(
            'labels' => array(
                'name' => __( 'highlights' ),
                'singular_name' => __( 'highlights' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'highlights'),
            'show_in_rest' => true,
			'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2LjY2NjcgNi42NjY2M0gzLjMzMzQxVjQuOTk5OTZIMTYuNjY2N1Y2LjY2NjYzWk0xNS4wMDAxIDEuNjY2NjNINS4wMDAwOFYzLjMzMzI5SDE1LjAwMDFWMS42NjY2M1pNMTguMzMzNCA5Ljk5OTk2VjE2LjY2NjZDMTguMzMzNCAxNy4xMDg3IDE4LjE1NzggMTcuNTMyNiAxNy44NDUzIDE3Ljg0NTFDMTcuNTMyNyAxOC4xNTc3IDE3LjEwODggMTguMzMzMyAxNi42NjY3IDE4LjMzMzNIMy4zMzM0MUMyLjg5MTc5IDE4LjMzMiAyLjQ2ODY0IDE4LjE1NiAyLjE1NjM2IDE3Ljg0MzdDMS44NDQwOSAxNy41MzE0IDEuNjY4MDcgMTcuMTA4MiAxLjY2Njc1IDE2LjY2NjZWOS45OTk5NkMxLjY2ODA3IDkuNTU4MzQgMS44NDQwOSA5LjEzNTE4IDIuMTU2MzYgOC44MjI5QzIuNDY4NjQgOC41MTA2MyAyLjg5MTc5IDguMzM0NjEgMy4zMzM0MSA4LjMzMzI5SDE2LjY2NjdDMTcuMTA4NCA4LjMzNDYxIDE3LjUzMTUgOC41MTA2MyAxNy44NDM4IDguODIyOUMxOC4xNTYxIDkuMTM1MTggMTguMzMyMSA5LjU1ODM0IDE4LjMzMzQgOS45OTk5NlpNMTEuNjA1OSAxNC4yMDE2TDEzLjU0MTcgMTIuNTQ2NkwxMC45OTI2IDEyLjMzMzNMMTAuMDAwMSA5Ljk5OTk2TDkuMDA3NTggMTIuMzMzM0w2LjQ1ODQxIDEyLjU0NjZMOC4zOTQyNSAxNC4yMDE2TDcuODEwOTEgMTYuNjY2NkwxMC4wMDAxIDE1LjM1NjZMMTIuMTg5MiAxNi42NjY2TDExLjYwNTkgMTQuMjAxNloiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
        )
    );


     //Products - Custom Post Type
		register_post_type( 'FAQs',
        array(
            'labels' => array(
                'name' => __( 'FAQs' ),
                'singular_name' => __( 'FAQs' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'FAQs'),
            'show_in_rest' => true,
			'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2LjY2NjcgNi42NjY2M0gzLjMzMzQxVjQuOTk5OTZIMTYuNjY2N1Y2LjY2NjYzWk0xNS4wMDAxIDEuNjY2NjNINS4wMDAwOFYzLjMzMzI5SDE1LjAwMDFWMS42NjY2M1pNMTguMzMzNCA5Ljk5OTk2VjE2LjY2NjZDMTguMzMzNCAxNy4xMDg3IDE4LjE1NzggMTcuNTMyNiAxNy44NDUzIDE3Ljg0NTFDMTcuNTMyNyAxOC4xNTc3IDE3LjEwODggMTguMzMzMyAxNi42NjY3IDE4LjMzMzNIMy4zMzM0MUMyLjg5MTc5IDE4LjMzMiAyLjQ2ODY0IDE4LjE1NiAyLjE1NjM2IDE3Ljg0MzdDMS44NDQwOSAxNy41MzE0IDEuNjY4MDcgMTcuMTA4MiAxLjY2Njc1IDE2LjY2NjZWOS45OTk5NkMxLjY2ODA3IDkuNTU4MzQgMS44NDQwOSA5LjEzNTE4IDIuMTU2MzYgOC44MjI5QzIuNDY4NjQgOC41MTA2MyAyLjg5MTc5IDguMzM0NjEgMy4zMzM0MSA4LjMzMzI5SDE2LjY2NjdDMTcuMTA4NCA4LjMzNDYxIDE3LjUzMTUgOC41MTA2MyAxNy44NDM4IDguODIyOUMxOC4xNTYxIDkuMTM1MTggMTguMzMyMSA5LjU1ODM0IDE4LjMzMzQgOS45OTk5NlpNMTEuNjA1OSAxNC4yMDE2TDEzLjU0MTcgMTIuNTQ2NkwxMC45OTI2IDEyLjMzMzNMMTAuMDAwMSA5Ljk5OTk2TDkuMDA3NTggMTIuMzMzM0w2LjQ1ODQxIDEyLjU0NjZMOC4zOTQyNSAxNC4yMDE2TDcuODEwOTEgMTYuNjY2NkwxMC4wMDAxIDE1LjM1NjZMMTIuMTg5MiAxNi42NjY2TDExLjYwNTkgMTQuMjAxNloiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
        )
    );



     //Products - Custom Post Type
     register_post_type( 'Franchise_BG_Image',
     array(
         'labels' => array(
             'name' => __( 'Franchise_BG_Image' ),
             'singular_name' => __( 'Franchise_BG_Image' )
         ),
         'public' => true,
         'has_archive' => false,
         'rewrite' => array('slug' => 'Franchise_BG_Image'),
         'show_in_rest' => true,
         'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2LjY2NjcgNi42NjY2M0gzLjMzMzQxVjQuOTk5OTZIMTYuNjY2N1Y2LjY2NjYzWk0xNS4wMDAxIDEuNjY2NjNINS4wMDAwOFYzLjMzMzI5SDE1LjAwMDFWMS42NjY2M1pNMTguMzMzNCA5Ljk5OTk2VjE2LjY2NjZDMTguMzMzNCAxNy4xMDg3IDE4LjE1NzggMTcuNTMyNiAxNy44NDUzIDE3Ljg0NTFDMTcuNTMyNyAxOC4xNTc3IDE3LjEwODggMTguMzMzMyAxNi42NjY3IDE4LjMzMzNIMy4zMzM0MUMyLjg5MTc5IDE4LjMzMiAyLjQ2ODY0IDE4LjE1NiAyLjE1NjM2IDE3Ljg0MzdDMS44NDQwOSAxNy41MzE0IDEuNjY4MDcgMTcuMTA4MiAxLjY2Njc1IDE2LjY2NjZWOS45OTk5NkMxLjY2ODA3IDkuNTU4MzQgMS44NDQwOSA5LjEzNTE4IDIuMTU2MzYgOC44MjI5QzIuNDY4NjQgOC41MTA2MyAyLjg5MTc5IDguMzM0NjEgMy4zMzM0MSA4LjMzMzI5SDE2LjY2NjdDMTcuMTA4NCA4LjMzNDYxIDE3LjUzMTUgOC41MTA2MyAxNy44NDM4IDguODIyOUMxOC4xNTYxIDkuMTM1MTggMTguMzMyMSA5LjU1ODM0IDE4LjMzMzQgOS45OTk5NlpNMTEuNjA1OSAxNC4yMDE2TDEzLjU0MTcgMTIuNTQ2NkwxMC45OTI2IDEyLjMzMzNMMTAuMDAwMSA5Ljk5OTk2TDkuMDA3NTggMTIuMzMzM0w2LjQ1ODQxIDEyLjU0NjZMOC4zOTQyNSAxNC4yMDE2TDcuODEwOTEgMTYuNjY2NkwxMC4wMDAxIDE1LjM1NjZMMTIuMTg5MiAxNi42NjY2TDExLjYwNTkgMTQuMjAxNloiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
     )
 );

      //Products - Custom Post Type
      register_post_type( 'WhySlurps',
      array(
          'labels' => array(
              'name' => __( 'WhySlurps' ),
              'singular_name' => __( 'WhySlurps' )
          ),
          'public' => true,
          'has_archive' => false,
          'rewrite' => array('slug' => 'WhySlurps'),
          'show_in_rest' => true,
          'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2LjY2NjcgNi42NjY2M0gzLjMzMzQxVjQuOTk5OTZIMTYuNjY2N1Y2LjY2NjYzWk0xNS4wMDAxIDEuNjY2NjNINS4wMDAwOFYzLjMzMzI5SDE1LjAwMDFWMS42NjY2M1pNMTguMzMzNCA5Ljk5OTk2VjE2LjY2NjZDMTguMzMzNCAxNy4xMDg3IDE4LjE1NzggMTcuNTMyNiAxNy44NDUzIDE3Ljg0NTFDMTcuNTMyNyAxOC4xNTc3IDE3LjEwODggMTguMzMzMyAxNi42NjY3IDE4LjMzMzNIMy4zMzM0MUMyLjg5MTc5IDE4LjMzMiAyLjQ2ODY0IDE4LjE1NiAyLjE1NjM2IDE3Ljg0MzdDMS44NDQwOSAxNy41MzE0IDEuNjY4MDcgMTcuMTA4MiAxLjY2Njc1IDE2LjY2NjZWOS45OTk5NkMxLjY2ODA3IDkuNTU4MzQgMS44NDQwOSA5LjEzNTE4IDIuMTU2MzYgOC44MjI5QzIuNDY4NjQgOC41MTA2MyAyLjg5MTc5IDguMzM0NjEgMy4zMzM0MSA4LjMzMzI5SDE2LjY2NjdDMTcuMTA4NCA4LjMzNDYxIDE3LjUzMTUgOC41MTA2MyAxNy44NDM4IDguODIyOUMxOC4xNTYxIDkuMTM1MTggMTguMzMyMSA5LjU1ODM0IDE4LjMzMzQgOS45OTk5NlpNMTEuNjA1OSAxNC4yMDE2TDEzLjU0MTcgMTIuNTQ2NkwxMC45OTI2IDEyLjMzMzNMMTAuMDAwMSA5Ljk5OTk2TDkuMDA3NTggMTIuMzMzM0w2LjQ1ODQxIDEyLjU0NjZMOC4zOTQyNSAxNC4yMDE2TDcuODEwOTEgMTYuNjY2NkwxMC4wMDAxIDE1LjM1NjZMMTIuMTg5MiAxNi42NjY2TDExLjYwNTkgMTQuMjAxNloiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
      )
  );


        //Products - Custom Post Type
        register_post_type( 'FranchiseModels',
        array(
            'labels' => array(
                'name' => __( 'FranchiseModels' ),
                'singular_name' => __( 'FranchiseModels' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'FranchiseModels'),
            'show_in_rest' => true,
            'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2LjY2NjcgNi42NjY2M0gzLjMzMzQxVjQuOTk5OTZIMTYuNjY2N1Y2LjY2NjYzWk0xNS4wMDAxIDEuNjY2NjNINS4wMDAwOFYzLjMzMzI5SDE1LjAwMDFWMS42NjY2M1pNMTguMzMzNCA5Ljk5OTk2VjE2LjY2NjZDMTguMzMzNCAxNy4xMDg3IDE4LjE1NzggMTcuNTMyNiAxNy44NDUzIDE3Ljg0NTFDMTcuNTMyNyAxOC4xNTc3IDE3LjEwODggMTguMzMzMyAxNi42NjY3IDE4LjMzMzNIMy4zMzM0MUMyLjg5MTc5IDE4LjMzMiAyLjQ2ODY0IDE4LjE1NiAyLjE1NjM2IDE3Ljg0MzdDMS44NDQwOSAxNy41MzE0IDEuNjY4MDcgMTcuMTA4MiAxLjY2Njc1IDE2LjY2NjZWOS45OTk5NkMxLjY2ODA3IDkuNTU4MzQgMS44NDQwOSA5LjEzNTE4IDIuMTU2MzYgOC44MjI5QzIuNDY4NjQgOC41MTA2MyAyLjg5MTc5IDguMzM0NjEgMy4zMzM0MSA4LjMzMzI5SDE2LjY2NjdDMTcuMTA4NCA4LjMzNDYxIDE3LjUzMTUgOC41MTA2MyAxNy44NDM4IDguODIyOUMxOC4xNTYxIDkuMTM1MTggMTguMzMyMSA5LjU1ODM0IDE4LjMzMzQgOS45OTk5NlpNMTEuNjA1OSAxNC4yMDE2TDEzLjU0MTcgMTIuNTQ2NkwxMC45OTI2IDEyLjMzMzNMMTAuMDAwMSA5Ljk5OTk2TDkuMDA3NTggMTIuMzMzM0w2LjQ1ODQxIDEyLjU0NjZMOC4zOTQyNSAxNC4yMDE2TDcuODEwOTEgMTYuNjY2NkwxMC4wMDAxIDE1LjM1NjZMMTIuMTg5MiAxNi42NjY2TDExLjYwNTkgMTQuMjAxNloiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
        )
    );


     //Products - Custom Post Type
     register_post_type( 'FranchiseFAQ',
     array(
         'labels' => array(
             'name' => __( 'FranchiseFAQ' ),
             'singular_name' => __( 'FranchiseFAQ' )
         ),
         'public' => true,
         'has_archive' => false,
         'rewrite' => array('slug' => 'FranchiseFAQ'),
         'show_in_rest' => true,
         'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2LjY2NjcgNi42NjY2M0gzLjMzMzQxVjQuOTk5OTZIMTYuNjY2N1Y2LjY2NjYzWk0xNS4wMDAxIDEuNjY2NjNINS4wMDAwOFYzLjMzMzI5SDE1LjAwMDFWMS42NjY2M1pNMTguMzMzNCA5Ljk5OTk2VjE2LjY2NjZDMTguMzMzNCAxNy4xMDg3IDE4LjE1NzggMTcuNTMyNiAxNy44NDUzIDE3Ljg0NTFDMTcuNTMyNyAxOC4xNTc3IDE3LjEwODggMTguMzMzMyAxNi42NjY3IDE4LjMzMzNIMy4zMzM0MUMyLjg5MTc5IDE4LjMzMiAyLjQ2ODY0IDE4LjE1NiAyLjE1NjM2IDE3Ljg0MzdDMS44NDQwOSAxNy41MzE0IDEuNjY4MDcgMTcuMTA4MiAxLjY2Njc1IDE2LjY2NjZWOS45OTk5NkMxLjY2ODA3IDkuNTU4MzQgMS44NDQwOSA5LjEzNTE4IDIuMTU2MzYgOC44MjI5QzIuNDY4NjQgOC41MTA2MyAyLjg5MTc5IDguMzM0NjEgMy4zMzM0MSA4LjMzMzI5SDE2LjY2NjdDMTcuMTA4NCA4LjMzNDYxIDE3LjUzMTUgOC41MTA2MyAxNy44NDM4IDguODIyOUMxOC4xNTYxIDkuMTM1MTggMTguMzMyMSA5LjU1ODM0IDE4LjMzMzQgOS45OTk5NlpNMTEuNjA1OSAxNC4yMDE2TDEzLjU0MTcgMTIuNTQ2NkwxMC45OTI2IDEyLjMzMzNMMTAuMDAwMSA5Ljk5OTk2TDkuMDA3NTggMTIuMzMzM0w2LjQ1ODQxIDEyLjU0NjZMOC4zOTQyNSAxNC4yMDE2TDcuODEwOTEgMTYuNjY2NkwxMC4wMDAxIDE1LjM1NjZMMTIuMTg5MiAxNi42NjY2TDExLjYwNTkgMTQuMjAxNloiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
     )
 );


        //Products - Custom Post Type
        register_post_type( 'OrderMenu',
        array(
            'labels' => array(
                'name' => __( 'OrderMenu' ),
                'singular_name' => __( 'OrderMenu' )
            ),
            'public' => true,
            'has_archive' => false,
            'rewrite' => array('slug' => 'OrderMenu'),
            'show_in_rest' => true,
            'menu_icon' => 'data:image/svg+xml;base64,PHN2ZyB3aWR0aD0iMjAiIGhlaWdodD0iMjAiIHZpZXdCb3g9IjAgMCAyMCAyMCIgZmlsbD0ibm9uZSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIj4KPHBhdGggZD0iTTE2LjY2NjcgNi42NjY2M0gzLjMzMzQxVjQuOTk5OTZIMTYuNjY2N1Y2LjY2NjYzWk0xNS4wMDAxIDEuNjY2NjNINS4wMDAwOFYzLjMzMzI5SDE1LjAwMDFWMS42NjY2M1pNMTguMzMzNCA5Ljk5OTk2VjE2LjY2NjZDMTguMzMzNCAxNy4xMDg3IDE4LjE1NzggMTcuNTMyNiAxNy44NDUzIDE3Ljg0NTFDMTcuNTMyNyAxOC4xNTc3IDE3LjEwODggMTguMzMzMyAxNi42NjY3IDE4LjMzMzNIMy4zMzM0MUMyLjg5MTc5IDE4LjMzMiAyLjQ2ODY0IDE4LjE1NiAyLjE1NjM2IDE3Ljg0MzdDMS44NDQwOSAxNy41MzE0IDEuNjY4MDcgMTcuMTA4MiAxLjY2Njc1IDE2LjY2NjZWOS45OTk5NkMxLjY2ODA3IDkuNTU4MzQgMS44NDQwOSA5LjEzNTE4IDIuMTU2MzYgOC44MjI5QzIuNDY4NjQgOC41MTA2MyAyLjg5MTc5IDguMzM0NjEgMy4zMzM0MSA4LjMzMzI5SDE2LjY2NjdDMTcuMTA4NCA4LjMzNDYxIDE3LjUzMTUgOC41MTA2MyAxNy44NDM4IDguODIyOUMxOC4xNTYxIDkuMTM1MTggMTguMzMyMSA5LjU1ODM0IDE4LjMzMzQgOS45OTk5NlpNMTEuNjA1OSAxNC4yMDE2TDEzLjU0MTcgMTIuNTQ2NkwxMC45OTI2IDEyLjMzMzNMMTAuMDAwMSA5Ljk5OTk2TDkuMDA3NTggMTIuMzMzM0w2LjQ1ODQxIDEyLjU0NjZMOC4zOTQyNSAxNC4yMDE2TDcuODEwOTEgMTYuNjY2NkwxMC4wMDAxIDE1LjM1NjZMMTIuMTg5MiAxNi42NjY2TDExLjYwNTkgMTQuMjAxNloiIGZpbGw9IiNGMEYwRjEiLz4KPC9zdmc+Cg=='
        )
    );


}
add_action( 'init', 'register_custom_post_types' );

add_action('wp_head', 'show_template');
function show_template() {
    global $template;
	
}


//// Allowing SVG Uploads
add_filter('wp_check_filetype_and_ext', function ($data, $file, $filename, $mimes) {

	global $wp_version;
	if ($wp_version !== '4.7.1') {
		return $data;
	}

	$filetype = wp_check_filetype($filename, $mimes);

	return [
		'ext'             => $filetype['ext'],
		'type'            => $filetype['type'],
		'proper_filename' => $data['proper_filename']
	];
}, 10, 4);

function cc_mime_types($mimes)
{
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function fix_svg()
{
	echo '<style type="text/css">
		  .attachment-266x266, .thumbnail img {
			   width: 100% !important;
			   height: auto !important;
		  }
		  </style>';
}
add_action('admin_head', 'fix_svg');


// Active Nav bar

add_filter('nav_menu_css_class', 'special_nav_class', 10, 2);

function special_nav_class($classes, $item)
{
	if (in_array('current-menu-item', $classes)) {
		$classes[] = 'toogle__active ';
	}
	return $classes;
}
// Disables the block editor from managing widgets in the Gutenberg plugin.
add_filter( 'gutenberg_use_widgets_block_editor', '__return_false' );
// Disables the block editor from managing widgets.
add_filter( 'use_widgets_block_editor', '__return_false' );

/// Remove p tag around img
// function filter_ptags_on_images($content){
//    return preg_replace('​<p> <a> <img> </a> </p>', '1 2 3', $content);
// }

// add_filter('the_content', 'filter_ptags_on_images');

function arphabet_widgets_init() {

    register_sidebar( array(
        'name' => 'Home right sidebar',
        'id' => 'home_right_1',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="rounded">',
        'after_title' => '</h2>',
    ) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );


?>

