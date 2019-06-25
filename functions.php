<?php

/**
 * Include CSS files 
 */
function theme_enqueue_scripts() {
        wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.0.8/css/all.css' );
        wp_enqueue_style( 'Font_Monserrat', 'https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&amp;subset=cyrillic,latin-ext' );
        wp_enqueue_style( 'Fonts', get_template_directory_uri() . '/fonts/Lekton-Regular.ttf' );
        wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/css/bootstrap.min.css' );
        wp_enqueue_style( 'MDB', get_template_directory_uri() . '/css/mdb.min.css' );
        wp_enqueue_style( 'Style', get_template_directory_uri() . '/style.css' );
        wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '3.2.1', true );
        wp_enqueue_script( 'Tether', get_template_directory_uri() . '/js/popper.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'MDB', get_template_directory_uri() . '/js/mdb.min.js', array(), '1.0.0', true );
        wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/js/theme-js.js', array( 'jquery' ), '1.0.0', true );
        }
add_action( 'wp_enqueue_scripts', 'theme_enqueue_scripts' );

add_filter( 'show_admin_bar', '__return_false' );


/**
 * Setup Theme
 */

        // Navigation Menus
        register_nav_menus(array(
          'navbar' => __( 'Navbar Menu'),
          'footer' => __( 'Footer menu' ),
          'delatnost-side-menu' => __('Delatnost page menu'),
          'category-menu' => __('Category menu')
          ));


          add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);

          function special_nav_class ($classes, $item) {
              if (in_array('delatnost-side-menu', $classes) ){
                  $classes[] = 'active ';
              }
              return $classes;
          }
        // Add featured image support
        
          add_theme_support('post-thumbnails');
          add_image_size('projekti-grid', 550, 645, true); // main post image in full width
          add_image_size('main-header-image', 1920, 500, true); // Header image
          add_image_size('preuzimanja', 830, 580, true); // Featured image for "Preuzimanja"

      
          add_theme_support( 'post-formats', array( 'gallery', 'aside' ) );

// Theme logo support
function theme_prefix_setup() {

  add_theme_support( 'custom-logo', array(
    'height'      => 70,
    'width'       => 195,
    'flex-width' => true,
    'flex-heigth' => true,

  ) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );

//Register sidebar

function create_widget($name, $id, $description){

	register_sidebar(array(

		'name' => _( $name ),
		'id'   => $id,
		'description' => _( $description),
		'before_widget' => '<div class="widget">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>'

		));

}

	
create_widget( 'Footer menu', 'footer-menu', 'Dodaj linkove za meni u futeru.');
create_widget( 'Footer kontakt', 'footer-kontakt', 'Ovde menjas kontakt info u futeru.');
create_widget( 'Footer objekti', 'footer-objekti', 'Kategorije objekata po nameni');
create_widget( 'Ko smo mi', 'ko-smo-mi', 'Izmena i unos teksta "Ko smo mi na stranici "O nama"".');
create_widget( 'O nama u futeru', 'footer-onama', 'Unos i ispravke teksta u futueru ispod logoa".');
//create_widget( 'Kategorije', 'cat-sorting', 'Sortiranje po kategorijama u referencama.');



/* ACF EXCERPT */


function custom_field_excerpt() {
	global $post;
	$text = get_field('opis'); //Replace 'your_field_name'
	if ( '' != $text ) {
		$text = strip_shortcodes( $text );
		$text = apply_filters('the_content', $text);
		$text = str_replace(']]&gt;', ']]&gt;', $text);
		$excerpt_length = 15; // 20 words
		$excerpt_more = apply_filters('excerpt_more', ' ' . '...');
		$text = wp_trim_words( $text, $excerpt_length, $excerpt_more );
	}
	return apply_filters('the_excerpt', $text);
}


/* LINK CATEGORIES TO PAGE */

function add_taxonomies_to_pages() {
  register_taxonomy_for_object_type( 'post_tag', 'page' );
  register_taxonomy_for_object_type( 'category', 'page' );
  }
 add_action( 'init', 'add_taxonomies_to_pages' );

 add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);



?>