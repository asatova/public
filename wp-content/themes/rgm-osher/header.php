<!doctype html>
<html <?php language_attributes(); ?>>
<head>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta content="#ffff" data-react-helmet="true" name="theme-color" />
    <meta http-equiv="X-UA-Compatible" content="IE=Edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- favicon -->
    <meta name="msapplication-TileColor" content="#1C509D">
    <meta name="theme-color" content="#1C509D" />
    <meta name="format-detection" content="telephone=no" />

    <!-- style -->
    <link rel="stylesheet" media="all" href="<?= get_template_directory_uri(); ?>/assets/css/style.css" />
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


	<header>
		<div class="container">
			<a href="/" class="logo" title="Traffic Ticket" aria-label="<?php wp_title(); ?>" style="margin-top:99px">
                <?php $logo = get_field('logo','option'); ?>
				<img src="<?= $logo; ?>" alt="<?php wp_title(); ?>" title="<?php wp_title(); ?>">
			</a>
            <?php
                wp_nav_menu([
                    'theme_location'  => 'footer',
                    'menu_class'      => 'menu',
                    'echo'            => true,
                    'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
                ]);
            ?>
          <a href="tel:84584255387"><button class="click-to-call"> <img src="<?= get_template_directory_uri(); ?>/assets/img/Vector.png">Click to Call</button></a>
            <button class="burger" type="button" title="Burger">
                <span></span>
                <span></span>
                <span></span>
            </button>
		</div>
	</header>

    <?php
        wp_nav_menu([
            'theme_location'  => 'footer',
            'menu_class'      => 'menu menu__mobile',
            'echo'            => true,
            'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
        ]);
    ?>
