<?php
    get_header();
?>

<div class="page-content">

	<div class="container-fluid  page-lead-in">
		<div class="container">
			<h1>Our Blog</h1>
			<p>We've been in the industry for a while now. Use our knowledge base to ensure your move goes smooth.</p>
		</div>
	</div>

    <?php while ( have_posts() ) : the_post(); ?>
		
		<div class="container pt-5">
			<div class="">
				<h1><?php the_title(); ?></h1>
				<p><?php the_excerpt(); ?></p>
				<a href="<?php echo get_the_permalink(); ?>" class="btn btn-primary btn-wide btn-arrows">Read More</a>
			</div>
		</div>

    <?php endwhile; // End of the loop. ?>
</div>


<?php
    get_footer();
