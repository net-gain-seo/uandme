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
                    Agents for <a href="https://www.wheatonworldwide.com/" target="_blank"><img src="<?php bloginfo('template_url'); ?>/img/wheaton-sm-transparent.png" alt="Wheaton World Wide Moving"></a>
                </p>
                <p>Worldwide Moving I.C.C. No. MC-87113</p>
                <p>FLA Movers Reg. No. IM400 PBC #M13</p>
            </div>

            <div class="f-item contact">
                <h3>
                    <a href="tel:15618326156">Call 561-832-6156</a>
                </h3>
                <div class="social">
                    <a href="https://www.facebook.com/UandMeMoving" target="_blank" class="i-social i-facebook"><img src="https://www.uandmemoving.com/wp-content/themes/ng_uandme/img/i-facebook.png" alt="U & Me Moving on Facebook"></a>
                    <a href="https://twitter.com/UandMeMoving" target="_blank" class="i-social i-twitter"><img src="https://www.uandmemoving.com/wp-content/themes/ng_uandme/img/i-twitter.png" alt="U & Me Moving on Twitter"></a>
                    <a href="https://www.google.com/search?newwindow=1&safe=off&source=hp&q=u%26me+moving+and+storage&oq=u%26me+moving&gs_l=psy-ab.3.0.0j0i22i30k1l2.1105.7419.0.8666.22.17.4.0.0.0.163.1402.14j2.17.0....0...1.1.64.psy-ab..1.21.1539.6..35i39k1j0i131k1j0i20i264k1j0i10k1.112.Q3PlS_7EsB4#lrd=0x88d8d5da6e75c16d:0x4ceafff85685b71f,3,," target="_blank" class="i-social i-google-review"><img src="https://www.uandmemoving.com/wp-content/themes/ng_uandme/img/i-google-review-v2.png" alt="Review U & Me Moving on Google"></a>
                </div>
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
        <div class="modal-content popover-modal">
            <div class="modal-header">
                <span class="modal-title title">GET AN ESTIMATE</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode( '[contact-form-7 id="257" title="Popover Form" html_class="popover-form"]' ); ?>
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
