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
        <h1><?php bloginfo('name'); ?></h1>
        <p><?php bloginfo('description'); ?></p>
        <nav>
            <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
        </nav>
    </header>

    <main>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        <?php endwhile; else: ?>
            <p>No content available.</p>
        <?php endif; ?>
    </main>

    <?php get_footer(); ?>
</body>
</html>
