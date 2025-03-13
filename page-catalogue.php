<?php
/* Template Name: Wine Catalogue */
get_header();
?>

<section id="wine-catalogue">
    <div class="container">
        <h1>Our Wine Catalogue</h1>
        <div class="wine-list">
            <?php
            // Query for all Wine posts
            $args = array(
                'post_type' => 'wine',
                'posts_per_page' => -1  // Show all wines
            );
            $wine_query = new WP_Query($args);
            $total_wines = $wine_query->found_posts; // Get total number of wines
            $counter = 0;

            // Loop through all wine posts
            if ($wine_query->have_posts()) :
                while ($wine_query->have_posts()) : $wine_query->the_post();
                    $counter++;
                    ?>
                    <div class="wine-item">
                        <a href="<?php the_permalink(); ?>"> <!-- Link to individual wine page -->
                            <div class="wine-thumbnail">
                                <?php the_post_thumbnail('medium'); ?> <!-- Display wine image -->
                            </div>
                            <div class="wine-name">
                                <h3><?php the_title(); ?></h3> <!-- Display wine name -->
                            </div>
                        </a>
                    </div>
                    <?php
                    // Insert divider after every 3 items, except after the last row
                    if ($counter % 3 === 0 && $counter < $total_wines) {
                        echo '<div class="wine-divider"></div>';
                    }
                endwhile;
                wp_reset_postdata(); // Reset query
            else :
                ?>
                <p>No wines found</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>
