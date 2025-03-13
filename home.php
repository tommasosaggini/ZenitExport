<?php
/* Template Name: Home Page */
get_header();
?>

<section id="hero">
    <div class="container"> <!-- This ensures alignment with the header -->
        <div class="hero-text">
            <!-- Main Text -->
            <h1>Effortless International Wine Trade</h1>
            <p class="hero-subtext">Zenit Export specializes in the seamless import and export of your wine across the globe. Our dedicated advisors manage every step—from buying and selling to shipping and paperwork—ensuring your transactions are hassle-free</p>
            <a href="#contact-form" class="hero-button">Get in Touch Now</a>
        </div>
    </div>
</section>

<section id="our-services">
    <div class="container">
        <h2>Our Services</h2>
        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sommelier.webp" alt="Consultancy">
            <div class="service-text">
                <h3>Consultancy</h3>
                <p>We offer an experienced sommelier to guide you through the wine selection process based upon your needs.</p>
            </div>
        </div>
        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/sourcing.webp" alt="Sourcing">
            <div class="service-text">
                <h3>Sourcing</h3>
                <p>We will source any product you need, Italian wine or otherwise.</p>
            </div>
        </div>
        <div class="service-item">
            <img src="<?php echo get_template_directory_uri(); ?>/images/shipping.webp" alt="Shipping">
            <div class="service-text">
                <h3>Shipping</h3>
                <p>We will ensure that the products arrive by the time you need them at the best price on the market.</p>
            </div>
        </div>
    </div>
</section>

<section id="values">
    <div class="container">
        <h2>Our Values</h2>
        <div class="values-images">
            <div class="value-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/van.webp" alt="Speed">
                <h3>Speed</h3>
                <p>We deliver swiftly and reliably across Europe and Southeast Asia, ensuring your products reach you on time, every time.</p>
            </div>
            <div class="value-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/table.webp" alt="Flexibility">
                <h3>Flexibility</h3>
                <p>We're your one-stop shop for sourcing anything you need, from rare Italian vintages to craft spirits and specialty products worldwide. Our extensive network ensures quick and reliable access to the best products.</p>
            </div>
            <div class="value-item">
                <img src="<?php echo get_template_directory_uri(); ?>/images/handshake.webp" alt="Trustworthiness">
                <h3>Trustworthiness</h3>
                <p>Our commitment to quality is unwavering. With sommeliers meticulously selecting the finest wines, you can trust us to deliver only the best, every time.</p>
            </div>
        </div>
    </div>
</section>



<section id="contact-form">
    <div class="container">
        <h2>Get in touch</h2>
        <?php echo do_shortcode('[contact-form-7 id="3c2b437" title="Contact Form Home"]'); ?>
    </div>
</section>

<?php get_footer(); ?>
