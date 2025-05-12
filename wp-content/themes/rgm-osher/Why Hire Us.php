<?php
/* Template name: Why Hire Us */
?>

<?php get_header(); ?>

    <section class="fist-hire-us-section" style="background-image: url(<?php the_field('hire-us-bg'); ?>);">
        <div class="container">
            <div class="hire-us-bg-title"><h1><?php the_field('hire-us-bg-title'); ?></h1></div>
        </div>
    </section>
    <!--breadcrumb start-->
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="<?php echo get_home_url(); ?>">Home</a></li>  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aaaa.svg">
            <li>Why Hire Us</li>
        </ul>
    </div>
    <!--breadcrumb end-->
    <div class="hire-us-content-section">
        <div class="container">
            <div class="birinchi-abzas">
                <h2><?php the_field('content-title-1');?></h2>
            </div>
            <div class="gap-48"> </div>
            <div class="birinchi-matn">
                <p><?php the_field('content-text-1');?></p>
            </div>
            <div class="gap-48"> </div>
            <div class="ikkinchi-abzas">
                <h4><?php the_field('content-title-2');?></h4>
            </div>
            <div class="birinchi-matn">
                <p><?php the_field('content-text-2');?></p>
            </div>
            <div class="gap-200"> </div>
            <div class="hire-us-images">
                <img src="<?php the_field('hire-us-content-image');?>">
            </div>
            <div class="gap-48"> </div>
            <div class="hire-us-content-title "<h2><?php the_field('content-title-3');?></h2></div>
           <div class="gap-48"> </div>
        <div class="birinchi-matn">
            <p><?php the_field('content-text-3');?></p>
        </div>
        <div class="birinchi-abzas">
            <h2><?php the_field('content-title-4');?></h2>
        </div>
        <div class="birinchi-matn">
            <p> <?php the_field('content-text-4');?></p>
        </div>
        </div>
    </div>



<div class="gap-100"></div>
<?php
include 'pre-footer.php';
?>

<?php get_footer(); ?>