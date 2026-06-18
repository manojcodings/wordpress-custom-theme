<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<!-- Top Bar -->
<div class="top-bar">
    <div class="container">
        <div class="top-bar-left">
            <span><i class="fas fa-envelope"></i> manojcodewith@gmail.com</span>
            <span><i class="fas fa-phone"></i> +91 XXXXXXXXXX</span>
        </div>
        <div class="top-bar-right">
            <a href="#"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/manoj-kumar-684b133a6/"><i class="fab fa-linkedin"></i></a>
        </div>
    </div>
</div>

<!-- Header -->
<header class="site-header">
    <div class="container">
        <div class="header-inner">
            <!-- Logo -->
            <div class="site-branding">
                <?php if(has_custom_logo()): ?>
                    <?php the_custom_logo(); ?>
                <?php else: ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                        <span class="logo-icon">M</span>
                        <div class="logo-text">
                            <span class="logo-name">Manoj Kumar</span>
                            <span class="logo-tagline">Full Stack Developer</span>
                        </div>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Navigation -->
            <nav class="site-nav">
                <?php wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_class'     => 'nav-menu',
                    'fallback_cb'    => false,
                )); ?>
            </nav>

            <!-- Mobile Menu Toggle -->
            <button class="menu-toggle" id="menuToggle">
                <i class="fas fa-bars"></i>
            </button>
        </div>
    </div>
</header>

<!-- Mobile Menu -->
<div class="mobile-menu" id="mobileMenu">
    <div class="mobile-menu-inner">
        <button class="mobile-close" id="mobileClose">
            <i class="fas fa-times"></i>
        </button>
        <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class'     => 'mobile-nav-menu',
            'fallback_cb'    => false,
        )); ?>
    </div>
</div>
<div class="overlay" id="overlay"></div>