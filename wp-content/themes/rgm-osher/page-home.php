<?php /* Template name: Home page */ ?>

<?php get_header(); ?>

    <!-- hero -->
    <?php $bg = get_field('hero_bg'); ?>
    <section class="hero lozad" data-background-image="<?= $bg; ?>">
        <div class="container">
            <h1><?php the_field('hero_title'); ?> </h1>
            <span class="seconder"><?php the_field('sub-title');?></span>
              <h3> <?php the_field('title-2');?></h3>
            <p><?php the_field('hero_text') ?></p>
            <a class="btn btn-green" href="tel:<?php the_field('hero_call_phone'); ?>"><?php the_field('hero_call_text'); ?></a>
        </div>
    </section>
    <!-- ./hero -->
<section class="secunder">
        <div class="container">
         <h2 class="section-title"><?php the_field('2-section-title'); ?></h2>
         <p class="section-text"><?php the_field('2-section-desc'); ?></p>
        </div>
</section>
    <div class="blue-cards-section">
        <div class="container">
            <div class="blue-cards">
            <div class="bir">
            <img src="<?php the_field('2-section-1-card-img'); ?>">
            <p><?php the_field('2-section-1-card-text'); ?></p>
        </div>
            <div class="bir">
                <img src="<?php the_field('2-section-2-card-img'); ?>">
                <p><?php the_field('2-section-2-card-text'); ?></p>
            </div>
            <div class="bir">
                <img src="<?php the_field('2-section-3-card-img'); ?>">
                <p><?php the_field('2-section-3-card-text'); ?></p>
            </div>
            <div class="bir">
                <img src="<?php the_field('2-section-4-card-img'); ?>">
                <p><?php the_field('2-section-4-card-text'); ?></p>
            </div>
            <div class="bir">
                <img src="<?php the_field('2-section-5-card-img'); ?>">
                <p><?php the_field('2-section-5-card-text'); ?></p>
              </div>
            </div>
         </div>
      </div>
  </div>
</section>
    <section class="thirdder">
        <div class="container">
            <h2 class="thirdder-section-title"><?php the_field('3-section-title'); ?></h2>
           </div>
    </section>
    <section class="icon-cards-section">
        <div class="container">
            <div class="ikonlar-qatori">
            <div class="iconkalar">
                <img src="<?php the_field('3-section-1-card-img'); ?>">
            </div>
                <div class="iconkalar">
                    <img src="<?php the_field('3-section-2-card-img'); ?>">
                </div>
                <div class="iconkalar">
                    <img src="<?php the_field('3-section-3-card-img'); ?>">
                </div>
                <div class="iconkalar">
                    <img src="<?php the_field('3-section-4-card-img'); ?>">
                </div>
                <div class="iconkalar">
                    <img src="<?php the_field('3-section-5-card-img'); ?>">
                </div>
                <div class="iconkalar">
                    <img src="<?php the_field('3-section-6-card-img'); ?>">
                </div>
            </div>
        </div>
    </section>

<div class="space-gap">

</div>


    <!-- home desc -->
    <div class="flex-section">
            <div class="desc__media">
                <?php $shopImage = get_field('shop_img'); ?>
                <img class="lozad" data-src="<?= $shopImage; ?>" alt="mini-about">
            </div>
            <div class="desc__info">
                <div class="car-title"><h2><?php the_field('4-section-title'); ?></h2></div>
                <div class="car-desc"><p><?php the_field('4-section-desc'); ?></p></div>
                <a href="<?php the_field('shop_btn_link'); ?>" class="btn btn-orange"><?php the_field('shop_btn_text') ?></a>
            </div>
    </div>
    <section class="secunder">
        <div class="container">
            <h2 class="section-title"><?php the_field('5-section-title'); ?></h2>
            <p class="section-text"><?php the_field('5-section-desc'); ?></p>
        </div>
    </section>
    <section class="blue-blocks-section">
        <div class="container">
            <div class="blue-blocks">
            <div class="first-block">
            <p class="blocks-text"><?php the_field('5-section-1-card-text'); ?></p>
            </div>
            <div class="first-block">
                <p class="blocks-text"><?php the_field('5-section-2-card-text'); ?></p>
            </div>
            <div class="first-block">
                <p class="blocks-text"><?php the_field('5-section-3-card-text'); ?></p>
            </div>
            <div class="first-block">
                <p class="blocks-text"><?php the_field('5-section-4-card-text'); ?></p>
            </div>
            <div class="first-block">
                <p class="blocks-text"><?php the_field('5-section-5-card-text'); ?></p>
            </div>
            <div class="first-block">
                <p class="blocks-text"><?php the_field('5-section-6-card-text'); ?></p>
            </div>
            </div>
        </div>
    </section>

    <div class="space-gap">

    </div>


<!--contact form section-->
<section class="contact-form-section">
    <div class="container">
        <div class="general-contact">
    <div class="left-sections">
        <h2 class="form-title-first"><?php the_field('6-section-1-title'); ?></h2>
        <h2 class="form-title-second"><?php the_field('6-section-2-title'); ?></h2>
        <p class="form-desc-first"><?php the_field('6-section-email-text'); ?></p>
        <p class="form-desc-second"><img src="<?php the_field('6-section-email-icon'); ?>"> <a href="<?php the_field('6-section-email-link'); ?>" style="color: #343434; font-size: 14px;">info@845tickets.com</a></p>
    </div>
   <div class="right-section">
       <h2 class="contact-title">Fill out the below form and we will quickly reach back out to you with answers</h2>
      <div class="form-area">
       <?= do_shortcode('[contact-form-7 id="400762d" title="Contact form 1"]'); ?>
      </div>

   </div>



        </div>
    </div>
</section>


    <div class="space-gap-300"> </div>

<!--   pre footer section-->

<?php
include 'pre-footer.php';
?>




<!--    --><?php //get_sidebar('reviews'); ?>

<!--    --><?php //get_sidebar('contacts'); ?>

<?php get_footer(); ?>