<?php
/* Template name: Stop sign ticket attorney */
?>

<?php get_header(); ?>
<section class="fist-hire-us-section" style="background-image: url(<?php the_field('hero-img'); ?>);">
    <div class="container">
        <div class="hire-us-bg-title" style="text-align: left"><h1><?php the_field('hero-text'); ?></h1></div>
    </div>
</section>
<!--breadcrumb start-->
<div class="container">
    <ul class="breadcrumb">
        <li><a href="<?php echo get_home_url(); ?>">Home </a></li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aaaa.svg">
        <li><a href="#">Practice Areas </a></li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aaaa.svg">
        <li>Stop sign ticket attorney</li>
    </ul>
</div>
<!--breadcrumb end-->

<section class="stop-sign-section">
<div class="container">
    <div class="gap-48"></div>
    <div class="stop-sign-title"><h2><?php the_field('2-section-title'); ?></h2></div>
    <div class="gap-48"></div>
    <div class="stop-sign-text"><p><?php the_field('2-section-text'); ?></p></div>
    <div class="stop-sign-main-title"><h2><?php the_field('2-section-title-2'); ?></h2></div>
    <div class="gap-48"></div>
    <div class="stop-sign-second-text"><p><?php the_field('2-section-text-2'); ?></p>

        <div class="gap-200"></div>
        <div class="hire-us-images">
            <img src="<?php the_field('3-section-img'); ?>">
        </div>
        <div class="gap-48"></div>
        <div class="stop-sign-title"><h2><?php the_field('3-section-title'); ?></h2></div>
        <div class="gap-48"></div>
        <div class="stop-sign-text"><p><?php the_field('3-section-text'); ?></p>
</div>
</section>



















<div class="gap-48"> </div>

<?php
include 'pre-footer.php';
?>



<?php get_footer(); ?>
