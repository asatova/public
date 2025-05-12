<?php /* Template name: About page */ ?>

<?php get_header(); ?>
	
    <!-- hero -->
    <?php $featuredImage = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
    <section class="hero hero--mini lozad" data-background-image="<?= $featuredImage[0]; ?>">
        <div class="container">
            <h1><?php the_title(); ?></h1>
        </div>
    </section>
    <!-- ./hero -->

    <div class="about">
        <div class="container">
            <div class="about__media">
            	<?php $aboutImage = get_field('about_image'); ?>
                <img src="<?= $aboutImage; ?>" alt="">
            </div>
            <div class="about__content">
            	<h2 class="section-title"><?php the_title(); ?></h2>
                <?php the_content(); ?>
            </div>
        </div>
    </div>
	
	<?php get_sidebar('reviews'); ?>

	<?php get_sidebar('contacts'); ?>

<?php get_footer(); ?>