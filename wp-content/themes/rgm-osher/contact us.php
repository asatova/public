<?php
/* Template name: Contact us */
?>

<?php get_header(); ?>
<section class="fist-hire-us-section" style="background-image: url(<?php the_field('contact-us-bg'); ?>);">
    <div class="container">
        <div class="hire-us-bg-title"><h1><?php the_field('contact-us-bg-title'); ?></h1></div>
    </div>
</section>
<div class="container">
    <div class="gap-100"> </div>
    <div class="birinchi-abzas-contact">
        <h2><?php the_field('contact-title-1'); ?></h2>
    </div>
    <div class="gap-100"> </div>
</div>

<section class="main-contact-section">
    <div class="container">
        <div class="important-class">
            <div class="main-contact-left-section">
                <p style="font-weight: 700; font-size: 16px;"><?php the_field('contact-text-1'); ?></p>

                <div class="main-contact-icon-section">
                    <img src="<?php the_field('contact-tel-icon'); ?>"><a href="<?php the_field('contact-tel-number-link'); ?>"><p><?php the_field('contact-tel-number'); ?></p></a>
                </div>
                <div class="main-contact-mail-section">
                    <img src="<?php the_field('contact-mail-icon'); ?>"><a href="<?php the_field('contact-icon-link'); ?>"><p><?php the_field('contact-mail-text'); ?></p></a>
                </div>
            </div>
            <div class="main-contact-right-section">
                <div class="icon-text-right-list">
                    <img src="<?php the_field('contact-location-icon-1'); ?>"> <a href="https://www.google.com/maps/place/Traffic+Ticket+Lawyer+James+Medows,+Esq.+845-TICKETS/@40.6210335,-73.7162266,17z/data=!4m15!1m8!3m7!1s0x89c265bc4fb9c60f:0x1aaa1d1ca23de73f!2zMjggTG90dXMgU3QsIENlZGFyaHVyc3QsIE5ZIDExNTE2LCDQodCo0JA!3b1!8m2!3d40.6210335!4d-73.7162266!16s%2Fg%2F11c1yyybs_!3m5!1s0x89c26521f7e5c2a5:0x1350ed2467efc79b!8m2!3d40.6210346!4d-73.7162778!16s%2Fg%2F11fwbl6nh7?entry=ttu" target="_blank">  <h4><?php the_field('contact-location-text'); ?></h4></a>

                </div>
                <div class="icon-text-right-list-p" style="margin-left: 39px;"><p><?php the_field('contact-location-subtext'); ?></p> </div>

                <div class="icon-second-text-right-list">
                    <img src="<?php the_field('contact-location-icon-2'); ?>"><a href="https://www.google.com/maps/place/James+Medows,+Esq./@40.6883306,-73.9876441,16.5z/data=!4m15!1m8!3m7!1s0x89c25a4ddf6e9d11:0xe6a6213625cc2c70!2zMzA2IEF0bGFudGljIEF2ZSwgQnJvb2tseW4sIE5ZIDExMjAxLCDQodCo0JA!3b1!8m2!3d40.688254!4d-73.9887365!16s%2Fg%2F11c25c9r3g!3m5!1s0x89c25a4c1d685b47:0xeeac31361034579b!8m2!3d40.688254!4d-73.9887365!16s%2Fg%2F1v_ndf5b?entry=ttu" target="_blank"> <h4><?php the_field('contact-location-text-2'); ?></h4></a>

                </div>

                <div class="icon-second-text-right-list-p" style="margin-left: 39px;"><p><?php the_field('contact-location-subtext-2'); ?></p></div>
                <div class="map-contact">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3028.4011936059824!2d-73.7162266!3d40.621033499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c265bc4fb9c60f%3A0x1aaa1d1ca23de73f!2s28%20Lotus%20St%2C%20Cedarhurst%2C%20NY%2011516%2C%20USA!5e0!3m2!1sen!2s!4v1699546555162!5m2!1sen!2s" ></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
<!--    <div class="gap-48"> </div>-->
    <div class="ikkinchi-abzas-contact">
        <h2><?php the_field('contact-last-title'); ?></h2>
    </div>
    <div class="gap-48"> </div>
</div>
<div class="container">
<div class="form-area-section">
    <div class="form-area">
        <?= do_shortcode('[contact-form-7 id="400762d" title="Contact form 1"]'); ?>
    </div>
    </div>
</div>
<div class="gap-48"> </div>
<div class="gap-48"> </div>



<?php get_footer(); ?>
