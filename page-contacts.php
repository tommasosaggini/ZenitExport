<?php
/* Template Name: Contact Page */
?>
<?php get_header(); ?>

<section id="contact-page">
    <div class="container">
        <div class="contact-columns">
            <!-- Left Column: Contact Info -->
            <div class="contact-info">
                <h2>Contact Us</h2>
                <p><strong>Address:</strong> Roermond, NL</p>
                <p><strong>Phone:</strong> +39 320 367 8640</p>
                <p><strong>Email:</strong> <a href="mailto:info@zenitexport.com">info@zenitexport.com</a></p>
            </div>

            <!-- Right Column: Contact Form -->
            <div class="contact-form">
                <h2>Get in Touch</h2>
                <?php echo do_shortcode('[contact-form-7 id="cfd36f2" title="Contact Form"]'); ?>
            </div>
        </div>
    </div>
</section>


<?php get_footer(); ?>
