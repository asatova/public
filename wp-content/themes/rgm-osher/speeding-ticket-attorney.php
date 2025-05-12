<?php
/* Template name: Speeding ticket attorney */
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
        <li>Speeding ticket attorney</li>
    </ul>
</div>
<!--breadcrumb end-->
<div class="traffic-ticket-content-section">
    <div class="container">
        <div class="birinchi-abzas">
            <h2><?php the_field('2-section-title-1'); ?></h1></h2>
        </div>
        <div class="gap-48"> </div>
        <div class="birinchi-matn">
            <p><?php the_field('2-section-text-1'); ?></p>
        </div>
        <div class="gap-48"> </div>
        <div class="ikkinchi-abzas">
            <h4><?php the_field('2-section-title-2'); ?></h4>
        </div>
        <div class="birinchi-matn">
            <p><?php the_field('2-section-text-2'); ?></p>
        </div>
    </div>
</div>
<div class="gap-48"></div>
<div class="speending-center-div-with-bg">
    <div class="container">
        <div class="gap-48"> </div>
        <div class="traffic-ticket-title-section">
            <h2><?php the_field('points-title'); ?></h2>
        </div>
        <div class="speending-ticket-main-text-section">
            <?php the_field('points-text'); ?>
        </div>
    </div>
    <div class="gap-48"> </div>
</div>
<div class="gap-100"> </div>
<div class="traffic-attorney-content-section">
    <div class="container">
        <div class="hire-us-images">
            <img src="<?php the_field('4-section-img');?>">
        </div>
        <div class="gap-48"> </div>
        <div class="birinchi-abzas">
            <h2><?php the_field('4-section-title');?></h2>
        </div>
        <div class="gap-48"> </div>

        <div class="birinchi-matn">
            <p><?php the_field('4-section-text');?></p>
        </div>
        <div class="gap-48"> </div>

    </div>
</div>
<?php
include 'pre-footer.php';
?>



<?php get_footer(); ?>
