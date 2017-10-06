</main>

<?php
    $postId = get_the_post_id();
?>

<?php if( $postId != 15 ): ?>
<div class="container-fluid footer-contact-container">
    <div class="container">
        <h2 class="inverse">Don't Miss Out On This One Of A Kind Opportunity.</h2>
        <h3 class="inverse">Register Today For More Information.</h3>
    <?php echo do_shortcode( '[contact-form-7 id="48" title="Footer Form" html_class="footer-form"]' ); ?>
    </div>
</div>
<?php endif; ?>

<footer class="container-fluid site-footer">
    <div class="container">
        <div class="flex-footer">
            <div class="f-item logo"><a href="<?php echo home_url(); ?>"><img src="<?php bloginfo('template_url'); ?>/img/logo-footer.png" alt=""></a></div>

            <div class="f-item phone">
                <h3>
                    For Information Call
                    <a href="tel:15099799797">(509) 979-9797</a>
                </h3>
            </div>
        </div>
    </div>

</footer>

<div class="modal fade" id="popForm" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header popover-header">
                <h1 class="modal-title title">Get a Quote</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php // echo do_shortcode( '[contact-form-7 id="254" title="Popover Form" html_class="popover-form"]' ); ?>
            </div>
        </div>
    </div>
</div>

<div id="refContainer" class="container" style="visibility: hidden;"></div>
<div id="openNavOverlay"></div>
<div id="closeNav" class="close-nav">Close <i class="fa fa-times"></i></button></div>
<?php wp_footer(); ?>


</body>
</html>
