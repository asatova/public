<?php
/* Template name: Red light ticket attorney */
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
        <li><a href="">Practice Areas </a></li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aaaa.svg">
        <li>Red light ticket attorney</li>
    </ul>
</div>
<!--breadcrumb end-->

<section class="distracted-section">
    <div class="container">
        <div class="gap-48"> </div>
        <div class="distracted-abzas"><h2><?php the_field('2-section-title-1');?></h2></div>
        <div class="gap-48"> </div>
        <div class="distracted-matn">
            <p><?php the_field('2-section-text-1'); ?></p>
        </div>
        <div class="gap-48"> </div>
        <div class="red-lite-main">
            <div class="red-lite-title"><h5><?php the_field('2-section-title-2');?></h5></div><br>
        <p> <?php the_field('2-section-text-2'); ?> </p>
            <?php the_field('2-section-text-3'); ?>
        </div>
        <div class="gap-200"> </div>
        <div class="hire-us-images"><img src="<?php the_field('3-section-img'); ?>"> </div>
        <div class="gap-48"> </div>
        <div class="distracted-abzas"><h2><?php the_field('3-section-title');?></h2></div>
        <div class="gap-48"> </div>
        <div class="distracted-matn">
            <p><?php the_field('3-section-text');?></p>
        </div>
    </div>
</section>
<div class="gap-48"> </div>
<?php
include 'pre-footer.php';
?>
<?php get_footer(); ?>
