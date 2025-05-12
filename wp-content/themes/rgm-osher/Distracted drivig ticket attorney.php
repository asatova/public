<?php
/* Template name: Distracted driving ticket attorney */
?>

<?php get_header(); ?>
<section class="fist-hire-us-section" style="background-image: url(<?php the_field('hero-img'); ?>);">
    <div class="container">
        <div class="hire-us-bg-title" style="text-align: left"><h1><?php the_field('hero-title'); ?></h1></div>
    </div>
</section>
<!--breadcrumb start-->
<div class="container">
    <ul class="breadcrumb">
        <li><a href="<?php echo get_home_url(); ?>">Home</a></li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aaaa.svg">
        <li><a href="#">Practice Areas </a></li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aaaa.svg">
        <li>Distracted drivig ticket attorney</li>
    </ul>
</div>
<!--breadcrumb end-->

<section class="distracted-section">
    <div class="container">
        <div class="gap-48"> </div>
        <div class="distracted-abzas"><h2><?php the_field('content-title-1');?></h2></div>
        <div class="gap-48"> </div>
        <div class="distracted-matn">
            <p><?php the_field('content-text-1');?></p>
        </div>
        <div class="gap-200"> </div>
        <div class="hire-us-images">
            <img src="<?php the_field('content-img');?>">
        </div>
        <div class="gap-48"> </div>
        <div class="distracted-abzas"><h2><?php the_field('content-title-2');?></h2></div>
        <div class="gap-48"> </div>
        <div class="distracted-matn">
            <p><?php the_field('content-text-2');?></p>
        </div>
    </div>

</section>


















    <div class="gap-48"> </div>

<?php
include 'pre-footer.php';
?>



<?php get_footer(); ?>
