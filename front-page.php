<?php
    get_header();
    // $postId = get_the_post_id();
?>

<?php while ( have_posts() ) : the_post(); ?>

        <div class="mast front-page-mast">
            <?php
                if( has_post_thumbnail() ) {
                    the_post_thumbnail();
                } else {
                    echo '<img src="'. home_url() . '/wp-content/uploads2017/09/front-page-mast1.jpg" />';
                }

                $mast_content = get_post_meta( get_the_ID(), 'mast_content', true );

                if( empty($mast_content) ) {
                    $mast_content =  the_title('<h1>', '</h1>', false);
                }
            ?>
            <div class="container mast-overlay">
                <?php
                    echo apply_filters( 'the_content', $mast_content );
                    // echo wpautop( $mast_content );
                ?>
            </div>
        </div>

    <div class="page-content front-page-content">
        <?php the_content(); ?>
    </div>

<?php endwhile; // End of the loop. ?>

<?php
    get_footer();
