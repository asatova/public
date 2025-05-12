<?php
/* Template name: Failure to yield ticket attorney */
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
        <li>Failure to yield ticket attorney</li>
    </ul>
</div>
<!--breadcrumb end-->

<section class="failure-section">
    <div class="container">
        <div class="gap-48"></div>
        <div class="failure-title"><h2><?php the_field('2-section-title'); ?></h2></div>
        <div class="gap-48"></div>
        <div class="failure-text"><p><?php the_field('2-section-text'); ?></p></div>
    </div>
</section>
<div class="gap-48"></div>
<div class="failure-with-bg">
    <div class="container">
        <div class="gap-48"></div>
        <div class="failure-with-bg-title"><h2><?php the_field('3-section-title'); ?></h2></div>
        <div class="gap-48"></div>
        <div class="failure-with-bg-text"><p><?php the_field('3-section-text'); ?> </p>
          <div class="failure-list">
            <ul>
                <?php the_field('3-section-text-list-1'); ?>
            </ul>
          </div>
          <div class="gap-48"></div>
        <div class="failure-with-bg-second-text"><p><?php the_field('3-section-text-2'); ?></p>
            <div class="failure-list">
                <ul>
                    <?php the_field('3-section-list-2'); ?>
                </ul>
            </div>
          </div>
        <div class="gap-48"></div>
    </div>
</div>
</div>

<div class="gap-100"></div>





    <div class="failure-last-section">
        <div class="container">

            <div class="failure-images">
                <img src="<?php the_field('4-section-img'); ?>">
            </div>
            <div class="gap-48"></div>
        <div class="failure-last-title"><h2><?php the_field('4-section-title'); ?></h2></div>
            <div class="gap-48"></div>
            <div class="failure-last-text"><p><?php the_field('4-section-text'); ?></p></div>


        </div>


    </div>







<div class="gap-48"> </div>


<?php
include 'pre-footer.php';
?>

<?php get_footer(); ?>
