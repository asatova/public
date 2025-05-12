    <!-- contacts -->
    <section class="contacts bg-gray">
    	<div class="container">
    		<div class="map">
    			<?php the_field('iframe_map','option'); ?>
    		</div>
    		<div class="contacts__info">
    			<h2 class="section-title"><?php the_field('contacts_title','option') ?></h2>
    			<div class="contacts__list">
    			    <div class="contacts__item">
    			        <div class="contacts__text"><?php the_field('address_title','option') ?></div>
    			        <address class="contacts__text"><a target="_blank" href="<?php the_field('address_link','option') ?>"><?php the_field('address_text','option') ?></a></address>
    			    </div>
    			    <div class="contacts__item">
    			        <div class="contacts__text"><?php the_field('phone_text','option') ?></div>
    			    	<a class="contacts__text" target="_blank" href="tel:<?php the_field('private_number','option'); ?>">
                            <?php the_field('visible_number','option'); ?>
                        </a>
    			    </div>
    			    <div class="contacts__item">
    			        <div class="contacts__text"><?php the_field('email_text','option') ?></div>
    			    	<a class="contacts__text" target="_blank" href="mailto:<?php the_field('email','option'); ?>"><?php the_field('email','option'); ?> </a>
    			    </div>
    			</div>
    			<div class="contacts__bh">
    			    <div class="contacts__bh--title"><?php the_field('business_hours_text','option'); ?></div>
    			    <ul class="contacts__bh--list">
                        <?php if (have_rows('business_hours_list','option')) : while (have_rows('business_hours_list','option')) : the_row(); ?>
                        <li><p><?php the_sub_field('business_hours_list_text','option'); ?></p></li>
                        <?php endwhile; endif; ?>
    			    </ul>
    			</div>
    		</div>
    	</div>
    </section>
    <!-- ./contacts -->