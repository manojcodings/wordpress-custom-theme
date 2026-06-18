<!-- Footer -->
<footer class="site-footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-grid">
                <!-- About -->
                <div class="footer-col">
                    <h3 class="footer-title">M.Rajpoot</h3>
                    <p class="footer-desc">
                        A passionate Full Stack Developer skilled in Laravel, React.js,
                        PHP, MySQL, Bootstrap & WordPress. Building modern web solutions.
                    </p>
                    <div class="footer-social">
                        <a href="https://github.com/manojcodings" target="_blank">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/in/manoj-kumar-684b133a6/" target="_blank">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div class="footer-col">
                    <h3 class="footer-title">Quick Links</h3>
                    <ul class="footer-links">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">
                            <i class="fas fa-chevron-right"></i> Home</a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/about')); ?>">
                            <i class="fas fa-chevron-right"></i> About</a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/portfolio')); ?>">
                            <i class="fas fa-chevron-right"></i> Portfolio</a>
                        </li>
                        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">
                            <i class="fas fa-chevron-right"></i> Contact</a>
                        </li>
                    </ul>
                </div>

                <!-- Skills -->
                <div class="footer-col">
                    <h3 class="footer-title">Tech Stack</h3>
                    <ul class="footer-links">
                        <li><i class="fab fa-laravel"></i> Laravel</li>
                        <li><i class="fab fa-react"></i> React.js</li>
                        <li><i class="fab fa-php"></i> PHP</li>
                        <li><i class="fab fa-js"></i> JavaScript</li>
                        <li><i class="fab fa-wordpress"></i> WordPress</li>
                        <li><i class="fas fa-database"></i> MySQL</li>
                    </ul>
                </div>

                <!-- Contact -->
                <div class="footer-col">
                    <h3 class="footer-title">Contact</h3>
                    <ul class="footer-contact">
                        <li>
                            <i class="fas fa-envelope"></i>
                            <span>manojcodewith@gmail.com</span>
                        </li>
                        <li>
                            <i class="fab fa-github"></i>
                            <a href="https://github.com/manojcodings" target="_blank">
                                github.com/manojcodings
                            </a>
                        </li>
                        <li>
                            <i class="fab fa-linkedin"></i>
                            <a href="https://www.linkedin.com/in/manoj-kumar-684b133a6/" target="_blank">
                                LinkedIn Profile
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="container">
            <p>&copy; <?php echo date('Y'); ?> M.Rajpoot — All Rights Reserved.</p>
            <p>Built with <i class="fas fa-heart text-red"></i> using WordPress & PHP</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>