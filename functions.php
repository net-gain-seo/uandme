<?php

if ( ! function_exists( 'ngmvp_setup' ) ) :

    function ngmvp_setup() {
        /**
         * Enable theme support features
         *
         * @link https://developer.wordpress.org/reference/functions/add_theme_support/
         */
        add_theme_support( 'title-tag' );

        // add_theme_support( 'custom-header' );

        add_theme_support( 'post-thumbnails' );

        // add_theme_support( 'custom-background' );

        // add_theme_support( 'post-formats', array(
        //  'aside', 'image', 'video', 'quote', 'link', 'gallery',
        // ) );

        /**
         * Register navigation menus
         *
         * @link https://developer.wordpress.org/reference/functions/register_nav_menus/
         */
        register_nav_menus( array( 'main' => 'Main Nav' ) );

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support( 'html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ) );

    } // end setup function
endif;
add_action( 'after_setup_theme', 'ngmvp_setup' );

/**
 * Enqueue scripts and styles.
 */
function ngmvp_scripts() {
    wp_enqueue_script( 'ngacustom', get_bloginfo('template_url') . '/js/custom.js', 'jquery', '1.0', true );
    wp_enqueue_style( 'ngmvp_main', get_bloginfo('template_url') . '/main.css', array('bootstrap'), false );
    wp_enqueue_style( 'fontawesome', get_bloginfo('template_url') . '/css/font-awesome.min.css' );
}
add_action( 'wp_enqueue_scripts', 'ngmvp_scripts' );


/// ADD CUSTOM FIELDS FOR PAGES (HEADER MAST)
function page_add_meta_box() {
    add_meta_box( 'page_meta_box_mast_content',
        'Page Mast Content',
        'display_page_meta_box_mast_content',
        'page'
    );
}

add_action( 'admin_init', 'page_add_meta_box' );

function display_page_meta_box_mast_content() {
    global $post;

    $mast_content =  get_post_meta( $post->ID, 'mast_content', true );
    wp_editor( $mast_content,'mast_content', array('textarea_rows'=>5,'wpautop'=>true) );


    echo '<input type="hidden" name="mast_flag" value="true" />';
}

function update_page_meta_box( $post_id, $post ) {
    if ( $post->post_type == 'page' ) {
        if ( isset($_POST['mast_flag']) ) {

            if ( isset( $_POST['mast_content'] ) && $_POST['mast_content'] != '' ) {
                update_post_meta( $post_id, 'mast_content', $_POST['mast_content'] );
            } else {
                update_post_meta( $post_id, 'mast_content', '');
            }

        }
    }
}

add_action( 'save_post', 'update_page_meta_box', 10, 2 );



/*
* Utility Function
*
* Mainly used to get the post id of a page outside of the loop in a page template
 */
function get_the_post_id() {
  if (in_the_loop()) {
       $post_id = get_the_ID();
  } else {
       global $wp_query;
       $post_id = $wp_query->get_queried_object_id();
         }
  return $post_id;
}

include(STYLESHEETPATH.'/admin/custom_shortcodes.php');
