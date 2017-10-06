<?php
    get_header();
    // $postId = get_the_post_id();
?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="mast page-mast">
        <?php
            if( has_post_thumbnail() ) {
                the_post_thumbnail();
            } else {
                echo '<img src="'. home_url() . '/wp-content/uploads/2017/09/mast-contact.jpg" />';
            }

            $mast_content = get_post_meta( get_the_ID(), 'mast_content', true );

            if( empty($mast_content) ) {
                $mast_content =  the_title('<h1>', '</h1>', false);
            }
        ?>
        <div class="container mast-overlay">
            <?php
                echo wpautop( $mast_content );
            ?>
        </div>
    </div>

    <div class="page-content">
        <?php the_content(); ?>
    </div>

<?php endwhile; // End of the loop. ?>

<?php
    get_footer();
