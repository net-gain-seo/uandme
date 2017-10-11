<?php
    get_header();
    // $postId = get_the_post_id();
?>

<?php while ( have_posts() ) : the_post(); ?>

    <div class="page-content">
        <?php the_content(); ?>
    </div>

    <?php if( has_post_thumbnail() ): ?>
        <div class="mast page-mast">
            <?php the_post_thumbnail(); ?>
        </div>
    <?php endif; ?>

<?php endwhile; // End of the loop. ?>

<?php
    get_footer();
