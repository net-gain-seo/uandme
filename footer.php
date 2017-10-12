</main>

<?php
    $postId = get_the_post_id();
?>

<?php if( $postId != 48 ): ?>
<div class="container-fluid footer-contact-container">
    <div class="container">
        <h2>Get a Moving Estimate</h2>
    <?php echo do_shortcode( '[contact-form-7 id="149" title="Footer Form" html_class="footer-form"]' ); ?>
    </div>
</div>
<?php endif; ?>

<footer class="site-footer">
    <div class="container">
        <div class="flex-footer subfooter">
            <div class="f-item agents">
                <p>
                    Agents for <a href="https://www.wheatonworldwide.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/wheaton-sm.png" alt=""></a>
                </p>
                <p>Worldwide Moving I.C.C. No. MC-87113</p>
                <p>FLA Movers Reg. No. IM400 PBC #M13</p>
            </div>

            <div class="f-item links">
                <ul>
                    <li><a href="<?php echo home_url(); ?>/moving/">Moving</a></li>
                    <li><a href="<?php echo home_url(); ?>/storage/">Storage</a></li>
                    <li><a href="<?php echo home_url(); ?>/packing-shipping/">Packaging &amp; Shipping</a></li>
                    <li><a href="<?php echo home_url(); ?>/other-services/">Other Services</a></li>
                </ul>
            </div>

            <div class="f-item contact">
                <h3>
                    <a href="tel:15618326156">Call 561-832-6156</a>
                </h3>
                <p>
                    2626 Electronics Way<br />
                    West Palm Beach, FL 33407
                </p>
            </div>
        </div>

    </div>
    <div class="copyright-container">
        <div class="container">
            <div class="flex-footer">
                <div class="copyright">Copyright&copy; <?php echo date("Y"); ?>. All Rights Reserved.</div>
                <div class="netgain">Website Designed by <a href="http://www.netgainseo.com" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/netgain.png" alt=""></a></div>
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
