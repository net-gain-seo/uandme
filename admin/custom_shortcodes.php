<?php

/**
 * SHORTCODES
 *
 */

// Remove empty paragraphs from beginning and end of [shortcode][/shortcode]
function noParagraphs($content){
    if ( '</p>' == substr( $content, 0, 4 ) && '<p>' == substr( $content, strlen( $content ) - 3 ) ){
        $content = substr( $content, 4, strlen( $content ) - 7 );
    }
    return $content;
}

function stripAllParagraphs($content) {
    return str_ireplace( array('<p>', '</p>'), '', $content );
}

/**
 * Testimonial slider
 *
 */
function testimonial_slider($atts) {
    extract( shortcode_atts( array(
        'class' => ''
      ), $atts ) );

    // WP_Query arguments
    $args = array(
        'post_type'   => array( 'testimonials' ),
        'post_status' => array( 'published' ),
    );

    // The Query
    $query = new WP_Query( $args );

    $content = do_shortcode( shortcode_unautop( $content ) );
    $content = stripParagraphs($content);

    $return = '';

    $return .= '<div id="testimonials" class="testimonials-slider">';

    foreach( $query->posts as $post ) {
        $excerpt = str_replace('"', '', $post->post_content);
        $excerpt = preg_replace( '/\s+?(\S+)?$/', '', substr( $excerpt, 0, 110 ) ) . '...&quot; <a href="'.home_url().'testimonials/">Read more &raquo;</a>';
        $return .= '<div class="testimonial"><p>&quot;' . $excerpt . '</p><p>' . $post->post_title . '</p></div>';
    }

    // $return .= '</div><button type="button" class="btn btn-main slick-testimonial-prev">&lt;</button><button type="button" class="btn btn-main slick-testimonial-next">&gt;</button>';

    return $return;
}
add_shortcode('testimonials','testimonial_slider');
