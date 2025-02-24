<?php get_header(); ?>

<section id="single-wine">
    <div class="container">
        <div class="wine-content">
            <!-- Wine Image (left) -->
            <div class="wine-image">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail('large'); ?> <!-- Display large wine image -->
                <?php endif; ?>
            </div>

            <!-- Wine Info (right) -->
            <div class="wine-info">
                <h1><?php the_title(); ?></h1> <!-- Wine name -->

                <!-- Display ACF fields (Year, Brand, Alcoholic Percentage, Price, Description) -->
                <ul class="wine-details">
                    <li><strong>Winery:</strong> <?php the_field('wine_brand'); ?></li> <!-- ACF Brand -->
                    <li><strong>Alcoholic Percentage:</strong> <?php the_field('alcohol_content'); ?>%</li> <!-- ACF Alcoholic Percentage -->
                    <li><strong>Description:</strong> <?php the_field('description'); ?></li> <!-- ACF Description -->
                    <li><strong>Grape:</strong> <?php the_field('grape'); ?></li> <!-- ACF Grape -->
                </ul>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>