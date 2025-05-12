<?php
/**
 * /* Template Name: 404 Content
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Traffic ticket
 */

get_header();
?>

  <div class="not-found-page">
      <div class="container">
            <div class="not-found-content">
          <div class="not-found-image"><img src="<?php the_field('404-img', 826);?>"></div>
          <div class="not-found-content-text">
              <h2><?php the_field('404-title',826 );?></h2>
              <p><?php the_field('404-text', 826);?></p>
              <a href="<?php echo get_home_url(); ?>"><button class="not-button">Go to Home</button></a>
          </div>
        </div>
      </div>
  </div>

<?php
get_footer();
