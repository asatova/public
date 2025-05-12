<?php
/* Template name: Cell phone ticket attorney */
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
        <li><a href="<?php echo get_home_url(); ?>">Home </a></li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aaaa.svg">
        <li><a href="#">Practice Areas </a></li> <img src="<?php echo get_template_directory_uri(); ?>/assets/img/aaaa.svg">
        <li>Cell phone ticket attorney</li>
    </ul>
</div>
<!--breadcrumb end-->
<div class="gap-48"></div>
<div class="birinchi-sectioni">
    <div class="container">
        <div class="first-title-div"><h2><?php the_field('cell-phone-title-1');?></h2> </div>
        <div class="gap-48"></div>
        <div class="fist-text-div"><p><?php the_field('cell-phone-text-1');?></p></div>
        <div class="gap-48"></div>
        <div class="second-title-div"><h4><?php the_field('cell-phone-title-2');?></h4></div>
        <div class="gap-48"></div>
        <div class="second-text-div"><p><?php the_field('cell-phone-text-2');?></p>
            <div class="second-text-list">
                <ul>
                    <?php the_field('2-section-list');?>
                </ul>
            </div>
        </div>
        <div class="cell-phone-gap-200"></div>
        <img src="<?php the_field('3-section-img');?>"/>
        <div class="gap-48"></div>
        <div class="third-title-div"> <h2><?php the_field('3-section-title');?></h2></div>
        <div class="gap-48"></div>
        <div class="third-text-div"><p><?php the_field('3-section-text');?><br><br></p></div>
        <div class="third-text-list">
            <ul>
                <?php the_field('section-text-list');?>
            </ul>
        </div>
        <div class="gap-48"></div>
        <div class="third-text-div"><p><?php the_field('3-section-pre-text');?></p></div>
    </div>
</div>
<div class="gap-48"></div>
<div class="fourth-sectioni">
    <div class="container">
        <div class="gap-48"></div>
        <div class="fourth-title-section"><h2><?php the_field('4section-title');?></h2></div>
        <div class="gap-48"></div>
        <div class="fourth-border-section">
            <div class="fourth-text-section"><p><?php the_field('4-section-content');?></p></div>
            <div class="fourth-list-section">
                <ul>
                    <?php the_field('4-section-list');?>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="gap-100"></div>
<div class="container">  <img src="<?php the_field('5-section-img');?>"/></div>
<div class="gap-48"></div>
<div class="fifth-section">
    <div class="container">
        <div class="fifth-section-title"><h4><?php the_field('5-section-title');?></h4></div>
        <div class="gap-48"></div>
        <div class="fifth-section-text"><p><?php the_field('5-section-content');?><br></p></div>
        <div class="fifth-section-list">
            <ul>
                <?php the_field('5-section-content-list');?>
            </ul>
        </div>
    </div>
</div>
<div class="cell-phone-gap-200"></div>
<div class="sixth-section">
    <div class="container">
        <div class="sixth-section-first-title"><h4><?php the_field('6-section-title-1');?></h4></div>
        <div class="gap-48"></div>
        <div class="sixth-section-first-text"><p>  <?php the_field('6-section-text-1');?><br></p></div>
        <div class="sixth-section-first-list">
            <ul>
                <?php the_field('6-section-list');?>
            </ul>
        </div>
        <div class="gap-48"></div>

        <div class="sixth-section-second-title"><h4><?php the_field('6-section-title-2');?></h4></div>
        <div class="gap-48"></div>
        <div class="sixth-section-second-text"><p><?php the_field('6-section-text-2');?><br></p></div>
        <div class="sixth-section-second-list">
            <ul>
                <?php the_field('6-section-list-2');?>
            </ul>
        </div>
        <div class="sixth-section-second-text"><p><?php the_field('7-section-title');?><br></p></div>
        <div class="gap-100"></div>
    </div>
</div>
<div class="seventh-first-section">
    <div class="container">
        <div class="gap-48"></div>
        <div class="seventh-first-section-title"><h2><?php the_field('7-section-title-1');?></h2></div>
        <div class="gap-48"></div>
        <div class="seventh-first-section-box">
            <p><?php the_field('7-section-list-title');?></p>
            <ul>
                <?php the_field('7-section-list');?>
            </ul>
        </div>
    </div>
</div>

<div class="gap-100"></div>
<div class="container">  <img src="<?php the_field('8-section-img');?>"/>
    <div class="gap-48"></div>
    <div class="eight-section">
        <h2><?php the_field('8-section-title');?></h2>
        <p><?php the_field('8-section-text');?></p>
    </div>
</div>
<div class="ninth-first-section">
    <div class="container">
        <div class="gap-48"></div>
        <div class="ninth-first-section-title"><h2><?php the_field('9-section-title');?></h2></div>
        <div class="gap-48"></div>
        <div class="ninth-first-section-box">
            <?php the_field('9-section-text');?>
        </div>
    </div>
</div>
<div class="tenth-section">
    <div class="container">
        <div class="gap-48"></div>
        <div class="tenth-section-title"><h2><?php the_field('10-section-title');?></h2>
            <div class="gap-48"></div>
            <p><?php the_field('10-section-text');?></p>
        </div>

        <div class="gap-48"></div>
        <div class="tenth-section-title"><h2><?php the_field('10-section-title-2');?></h2>
            <div class="gap-48"></div>
            <p><?php the_field('10-section-text-2');?></p>
        </div>
    </div>
</div>
<div class="gap-48"></div>









<?php
include 'pre-footer.php';
?>
<?php get_footer(); ?>
