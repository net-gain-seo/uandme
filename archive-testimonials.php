<?php
    // TESTIMONIALS
    get_header();
?>
    <div class="container-fluid page-lead-in">
        <div class="container">
            <h1>About Us</h1>
            <p>Located just north of downtown West Palm Beach, U & Me has over 250,000 sq feet of warehouse space used to store everything from household goods in A/C storage, to palletized storage for local businesses. U & Me also offers Document Storage and Management.</p>
        </div>
    </div>

    <div class="container pb-5 testimonials-listing">
        <h2>Testimonials</h2>
        <?php while ( have_posts() ) : the_post(); ?>
            <article>

                <div class="the-testimonial">
                    <?php the_content(); ?>
                </div>

                <div class="txt-primary">
                    <?php the_title(); ?>
                </div>

            </article>
        <?php endwhile; // End of the loop. ?>
    </div>

    <div class="mast page-mast">
        <img src="<?php echo home_url(); ?>/wp-content/uploads/2017/10/mast-storage-long-term.jpg" alt="" />
    </div>
<?php
    get_footer();
