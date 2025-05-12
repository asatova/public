        <!-- reviews -->
        <section class="reviews">
            <div class="container">
                <h2 class="section-title"><?php the_field('reviews_title','option'); ?></h2>
                <div class="swiper reviews__slider">
                    <div class="swiper-wrapper">
                        <?php if (have_rows('reviews_list','option')) : while (have_rows('reviews_list','option')) : the_row(); ?>
                        <div class="swiper-slide">
                            <div class="reviews__name"><?php the_sub_field('reviews_name','option'); ?></div>
                            <div class="reviews__text">
                                <p><?php the_sub_field('reviews_text','option'); ?></p>
                            </div>
                        </div>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- ./reviews -->