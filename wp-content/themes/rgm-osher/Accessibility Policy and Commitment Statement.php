<?php
/* Template name: Accessibility Policy and Commitment Statement */
?>

<?php get_header(); ?>
    <section class="fist-hire-us-section" style="background-image: url(<?php the_field('accessibility-img'); ?>);">
        <div class="container">
            <div class="hire-us-bg-title" style="text-align: left;"><h1><?php the_field('accessibility-title'); ?></h1></div>
        </div>
    </section>


    <div class="gap-48"></div>
    <div class="terms-main">
        <div class="container">
            <p><?php the_field('accessibility-text'); ?></p>
            <a href="<?php the_field('accessibility-tel-url'); ?>"><p><?php the_field('accessibility-tel'); ?></p></a>
            <a href="<?php the_field('accessibility-mail-url'); ?>"><p><?php the_field('accessibility-mail'); ?></p></a>
            <p><?php the_field('accessibility-location'); ?></p>

        </div>
    </div>
    <div class="gap-48"></div>



<?php get_footer(); ?>