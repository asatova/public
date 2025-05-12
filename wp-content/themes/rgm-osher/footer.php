    <footer class="footer">
        <div class="footer-gap-top"></div>
    	<div class="footer__top">
    		<div class="container">
    			<a href="/" class="logo" aria-label="<?php wp_title(); ?>">
                    <?php $logo = get_field('logo','option'); ?>
    				<img src="<?= $logo; ?>" alt="" title="">
    			</a>
                <div class="contact-us-block">

                    <div class="footer-third-title"><p><?php the_field('contact-us-text','option'); ?></p> <p>Menu</p></div>
                    <div class="icon-text-list">
                    <img src="<?php the_field('tel-icon','option'); ?>"><a href="<?php the_field('footer-tel-link','option'); ?>"><p><?php the_field('footer-tel','option'); ?></p></a>
                    </div>
                    <div class="icon-text-list">
                 <img src="<?php the_field('mail-icon','option'); ?>"><a href="<?php the_field('footer-mail-link','option'); ?>"><p><?php the_field('footer-mail','option'); ?></p></a>
                    </div>
                    <div class="icon-text-list">
                   <img src="<?php the_field('location-icon','option'); ?>"> <a href="https://www.google.com/maps/place/Traffic+Ticket+Lawyer+James+Medows,+Esq.+845-TICKETS/@40.6210335,-73.7162266,17z/data=!4m15!1m8!3m7!1s0x89c265bc4fb9c60f:0x1aaa1d1ca23de73f!2zMjggTG90dXMgU3QsIENlZGFyaHVyc3QsIE5ZIDExNTE2LCDQodCo0JA!3b1!8m2!3d40.6210335!4d-73.7162266!16s%2Fg%2F11c1yyybs_!3m5!1s0x89c26521f7e5c2a5:0x1350ed2467efc79b!8m2!3d40.6210346!4d-73.7162778!16s%2Fg%2F11fwbl6nh7?entry=ttu" target="_blank"> <p style="font-family: 'ITC Avant Garde Gothic Std',sans-serif;
                    font-size: 16px;
                    font-style: normal;
                    margin-top: 3px;
                    font-weight: 700;"><?php the_field('footer-adress','option'); ?></p></a>
                    </div>
                    <div class="sub-icon-text-list"> <p style="margin-top: -18px;margin-left: 37px;"><?php the_field('footer-sub-adress','option'); ?></p></div>

                    <div class="icon-text-list">
                    <img src="<?php the_field('footer-sub-adress-icon','option'); ?>"><a href="https://www.google.com/maps/place/James+Medows,+Esq./@40.6883306,-73.9876441,16.5z/data=!4m15!1m8!3m7!1s0x89c25a4ddf6e9d11:0xe6a6213625cc2c70!2zMzA2IEF0bGFudGljIEF2ZSwgQnJvb2tseW4sIE5ZIDExMjAxLCDQodCo0JA!3b1!8m2!3d40.688254!4d-73.9887365!16s%2Fg%2F11c25c9r3g!3m5!1s0x89c25a4c1d685b47:0xeeac31361034579b!8m2!3d40.688254!4d-73.9887365!16s%2Fg%2F1v_ndf5b?entry=ttu" target="_blank"> <p style="font-family: 'ITC Avant Garde Gothic Std',sans-serif;
                    font-size: 16px;
                    font-style: normal;
                    margin-top: 3px;
                    font-weight: 700;"><?php the_field('footer-adress-2','option'); ?></p></a>
                    </div>
                    <div class="sub-icon-text-list"><p style="margin-left: 37px;margin-top: -18px;"><?php the_field('footer-sub-address-2','option'); ?></p> </div>

                </div>
            <div class="to-up" style="margin-top:-80px;">
                <?php

                    wp_nav_menu([
                        'theme_location'  => 'footer',
                        'menu_class'      => 'menu',
                        'echo'            => true,
                        'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                    ]);
                ?>
            </div>
    		</div>
    	</div>
    	<div class="footer__bottom">
    		<div class="container">
                <hr class="horizontal-line"></div>
            <div class="copyright-text">
            <p><?php the_field('copyright-text','option'); ?></p>
            </div>
    		</div>
        <div class="red-footter-section">
            <div class="red-footter-text-section">
            <h5><?php the_field('important-notice-text','option'); ?></h5>
            <p><?php the_field('important-notice-sub-text','option'); ?></p>
            </div>
        </div>
        <div class="last-footer">
            <div class="container">
            <div class="last-footer-text">
                <p><a href="<?php the_field('last-footer-link-1','option'); ?>"><?php the_field('last-footer-text-1','option'); ?></a></p>
                <p><a href="<?php the_field('last-footer-link-2','option'); ?>"><?php the_field('last-footer-text-2','option'); ?></a></p>
                <p><a href="<?php the_field('last-footer-link-3','option'); ?>"><?php the_field('last-footer-text-3','option'); ?></a></p>
                <p> <?php the_field('rjm-text','option'); ?> <span class="copyright-rgm"><a href="<?php the_field('copyright-rgm-link','option'); ?>"><?php the_field('copyright-rgm','option'); ?></a></span></p>
            </div>
            </div>
        </div>


    </footer>
    <!-- BEGIN scripts -->
    <script defer type="text/javascript" src="<?= get_template_directory_uri(); ?>/assets/js/app.js"></script>
    <!-- END scripts -->
    <?php wp_footer(); ?>
</body>
</html>