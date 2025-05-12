<?php
/* Template name: TERMS OF SERVICE */
?>

<?php get_header(); ?>
<section class="fist-hire-us-section" style="background-image: url(<?php the_field('terms-img'); ?>);">
    <div class="container">
        <div class="hire-us-bg-title" style="text-align: left;"><h1><?php the_field('terms-title'); ?></h1></div>
    </div>
</section>


<div class="gap-48"></div>
<div class="terms-main">
    <div class="container">
        <?php the_field('terms-text'); ?>
    </div>
</div>




<?php get_footer(); ?>
