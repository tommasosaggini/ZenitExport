<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header>
    <div class="container header-container">
        <div class="site-logo">
        <a href="/home"><img src="<?php echo get_template_directory_uri(); ?>/images/zenit.png" alt="Logo"></a>
        </div>

        <nav class="main-navigation">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'main-menu',
                    'container' => false,  // Remove extra container element
                    'menu_class' => 'menu',  // Add a class to the <ul>
                ) );
            ?>
        </nav>
    </div>
</header>
