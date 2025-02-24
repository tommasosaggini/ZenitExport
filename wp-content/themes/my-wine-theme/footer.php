<footer id="site-footer">
    <div class="container">
        <!-- Company Name and Social Media in a Flex Container -->
        <div class="footer-top">
            <!-- Company Name -->
            <div class="footer-section">
                <h3>Zenit</h3>
            </div>
        
            <!-- Social Media Icons (aligned to the right) -->
            <div class="footer-section social-media">
                <a href="https://www.linkedin.com" target="_blank" aria-label="LinkedIn">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://www.instagram.com" target="_blank" aria-label="Instagram">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>

        <!-- Email Address -->
        <div class="footer-section">
            <p>Email: <a href="mailto:info@zenitexport.com">info@zenitexport.com</a></p>
        </div>

        <!-- Links to Privacy Policy and Terms -->
        <div class="footer-section">
            <a href="/privacy-policy">Privacy Policy</a> | <a href="/terms-conditions">Terms & Conditions</a>
        </div>
    </div>
</footer>

<!-- Add your JavaScript here -->
<script>
document.addEventListener("scroll", function() {
    var header = document.querySelector("header");
    if (window.scrollY > 50) {
        header.style.backgroundColor = "white";  // Change background color to white on scroll
    } else {
        header.style.backgroundColor = "transparent";  // Reset background to transparent
        header.style.boxShadow = "none";  // Remove shadow when at top
    }
});
</script>

<!-- This is important for WordPress functionality -->
<?php wp_footer(); ?>

</body>
</html>
