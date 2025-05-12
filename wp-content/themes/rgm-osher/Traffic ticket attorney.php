<?php
/* Template name: Traffic ticket attorney */
?>

<?php get_header(); ?>
<section class="fist-hire-us-section" style="background-image: url(<?php the_field('traffic-ticket-attorney-bg'); ?>);">
    <div class="container">
        <div class="hire-us-bg-title" style="text-align: left;"><h1><?php the_field('traffic-ticket-attorney-bg-title'); ?></h1></div>
    </div>
</section>
<!--breadcrumb start-->
<div class="container">
    <ul class="breadcrumb">
        <li><a href="<?php echo get_home_url(); ?>">Home </a></li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aaaa.svg">
        <li><a href="#">Practice Areas </a></li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/aaaa.svg">
        <li>Traffic ticket lawyer</li>
    </ul>
</div>
<!--breadcrumb end-->
<div class="gap-48"></div>
<div class="traffic-ticket-content-section">
    <div class="container">
        <div class="birinchi-abzas">
            <h2><?php the_field('traffic-title-1'); ?></h2>
        </div>
        <div class="gap-48"> </div>
          <div class="birinchi-matn">
            <p><?php the_field('traffic-text-1');?></p>
        </div>

        <div class="gap-48"> </div>
        <div class="ikkinchi-abzas">
            <h4><?php the_field('traffic-title-2'); ?></h4>
        </div>
        <div class="birinchi-matn">
            <div class="gap-24"> </div>
            <p><?php the_field('traffic-text-2'); ?></p>
        </div>
    </div>
</div>
<div class="gap-100"></div>


<div class="center-div-with-bg">
    <div class="container">
        <div class="gap-48"> </div>
    <div class="traffic-ticket-title-section"><h2><?php the_field('traffic-points-title'); ?></h2> </div>
            <div class="traffic-ticket-main-text-section">
                <?php the_field('traffic-points-content'); ?>
        </div>
    </div>
    <div class="gap-48"> </div>
</div>
<div class="gap-100"> </div>
<div class="traffic-attorney-contenti-section">
    <div class="container">
        <div class="hire-us-images">
          <img src="<?php the_field('3-section-img'); ?>">
        </div>
        <div class="gap-48"> </div>
        <div class="birinchi-abzas">
            <h2><?php the_field('3-section-title');?></h2>
        </div>
        <div class="gap-48"> </div>
        <div class="birinchi-matn">
            <p><?php the_field('3-section-text');?></p>
        </div>
        <div class="gap-48"> </div>

    </div>
</div>


<?php
include 'pre-footer.php';
?>



<?php get_footer(); ?>
