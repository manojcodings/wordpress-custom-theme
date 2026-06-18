<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero">
    <div class="container">
        <div class="hero-inner">
            <div class="hero-content">
                <span class="hero-badge">👋 Welcome to My Portfolio</span>
                <h1 class="hero-title">
                    Hi, I'm <span class="highlight">Manoj Kumar</span><br>
                    Full Stack Developer
                </h1>
                <p class="hero-desc">
                    Passionate about building modern, responsive & high-performance
                    web applications using Laravel, React.js, PHP, MySQL & WordPress.
                </p>
                <div class="hero-btns">
                    <a href="<?php echo esc_url(home_url('/portfolio')); ?>"
                       class="btn btn-primary">
                        <i class="fas fa-briefcase"></i> View My Work
                    </a>
                    <a href="<?php echo esc_url(home_url('/contact')); ?>"
                       class="btn btn-outline">
                        <i class="fas fa-envelope"></i> Contact Me
                    </a>
                </div>
                <div class="hero-stats">
                    <div class="stat">
                        <h3>3+</h3>
                        <p>Projects</p>
                    </div>
                    <div class="stat">
                        <h3>10+</h3>
                        <p>Technologies</p>
                    </div>
                    <div class="stat">
                        <h3>100%</h3>
                        <p>Dedication</p>
                    </div>
                </div>
            </div>
            <div class="hero-image">
                <div class="hero-avatar">
                    <div class="avatar-circle">
    <div class="coder-cartoon">
        <!-- Head -->
        <div class="cartoon-head">
            <div class="cartoon-face">
                <div class="cartoon-eyes">
                    <div class="eye left-eye"></div>
                    <div class="eye right-eye"></div>
                </div>
                <div class="cartoon-mouth"></div>
            </div>
            <div class="cartoon-hair"></div>
            <div class="cartoon-glasses"></div>
        </div>
        <!-- Body -->
        <div class="cartoon-body">
            <div class="cartoon-laptop">
                <div class="laptop-screen">
                    <div class="typing-text"></div>
                </div>
                <div class="laptop-base"></div>
            </div>
            <div class="cartoon-arms">
                <div class="arm left-arm"></div>
                <div class="arm right-arm"></div>
            </div>
        </div>
        <!-- Name Tag -->
        <div class="name-tag">Manoj Kumar</div>
    </div>
</div>
                    <div class="floating-badge badge-1">
                        <i class="fab fa-laravel"></i> Laravel
                    </div>
                    <div class="floating-badge badge-2">
                        <i class="fab fa-react"></i> React
                    </div>
                    <div class="floating-badge badge-3">
                        <i class="fab fa-php"></i> PHP
                    </div>
                    <div class="floating-badge badge-4">
                        <i class="fas fa-database"></i> MySQL
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Skills Section -->
<section class="skills-section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">What I Know</span>
            <h2 class="section-title">My Tech Stack</h2>
            <p class="section-desc">Technologies I work with to build amazing projects</p>
        </div>
        <div class="skills-grid">
            <div class="skill-card">
                <i class="fab fa-laravel skill-icon" style="color:#FF2D20"></i>
                <h4>Laravel</h4>
                <div class="skill-bar"><div class="skill-fill" style="width:85%"></div></div>
                <span>85%</span>
            </div>
            <div class="skill-card">
                <i class="fab fa-react skill-icon" style="color:#61DAFB"></i>
                <h4>React.js</h4>
                <div class="skill-bar"><div class="skill-fill" style="width:80%"></div></div>
                <span>80%</span>
            </div>
            <div class="skill-card">
                <i class="fab fa-php skill-icon" style="color:#777BB4"></i>
                <h4>PHP</h4>
                <div class="skill-bar"><div class="skill-fill" style="width:85%"></div></div>
                <span>85%</span>
            </div>
            <div class="skill-card">
                <i class="fab fa-js skill-icon" style="color:#F7DF1E"></i>
                <h4>JavaScript</h4>
                <div class="skill-bar"><div class="skill-fill" style="width:75%"></div></div>
                <span>75%</span>
            </div>
            <div class="skill-card">
                <i class="fab fa-wordpress skill-icon" style="color:#21759B"></i>
                <h4>WordPress</h4>
                <div class="skill-bar"><div class="skill-fill" style="width:80%"></div></div>
                <span>80%</span>
            </div>
            <div class="skill-card">
                <i class="fas fa-database skill-icon" style="color:#4479A1"></i>
                <h4>MySQL</h4>
                <div class="skill-bar"><div class="skill-fill" style="width:80%"></div></div>
                <span>80%</span>
            </div>
            <div class="skill-card">
                <i class="fab fa-bootstrap skill-icon" style="color:#7952B3"></i>
                <h4>Bootstrap</h4>
                <div class="skill-bar"><div class="skill-fill" style="width:90%"></div></div>
                <span>90%</span>
            </div>
            <div class="skill-card">
                <i class="fab fa-html5 skill-icon" style="color:#E34F26"></i>
                <h4>HTML/CSS</h4>
                <div class="skill-bar"><div class="skill-fill" style="width:95%"></div></div>
                <span>95%</span>
            </div>
        </div>
    </div>
</section>

<!-- Projects Section -->
<section class="projects-section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">My Work</span>
            <h2 class="section-title">Featured Projects</h2>
            <p class="section-desc">Some of my recent work</p>
        </div>
        <div class="projects-grid">
            <div class="project-card">
                <div class="project-icon">
                    <i class="fas fa-shopping-cart"></i>
                </div>
                <div class="project-content">
                    <h3>E-Commerce Platform</h3>
                    <p>Full stack e-commerce with Laravel, MySQL & Bootstrap.
                       Features admin panel, cart, orders & authentication.</p>
                    <div class="project-tags">
                        <span>Laravel</span>
                        <span>MySQL</span>
                        <span>Bootstrap</span>
                        <span>PHP</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/manojcodings/ecommerce-laravel"
                           target="_blank" class="btn-link">
                            <i class="fab fa-github"></i> Code
                        </a>
                    </div>
                </div>
            </div>
            <div class="project-card">
                <div class="project-icon">
                    <i class="fas fa-cloud-sun"></i>
                </div>
                <div class="project-content">
                    <h3>Weather App</h3>
                    <p>React.js weather app using OpenWeatherMap API.
                       Shows current weather & 5-day forecast for any city.</p>
                    <div class="project-tags">
                        <span>React.js</span>
                        <span>API</span>
                        <span>CSS3</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/manojcodings/weather-app-react"
                           target="_blank" class="btn-link">
                            <i class="fab fa-github"></i> Code
                        </a>
                        <a href="https://manojcodings.github.io/weather-app-react"
                           target="_blank" class="btn-link live">
                            <i class="fas fa-external-link-alt"></i> Live
                        </a>
                    </div>
                </div>
            </div>
            <div class="project-card">
                <div class="project-icon">
                    <i class="fas fa-motorcycle"></i>
                </div>
                <div class="project-content">
                    <h3>Ghost Rider Luxury Bikes</h3>
                    <p>Premium motorcycle showcase platform built with
                       React, TypeScript, Tailwind CSS & Framer Motion.</p>
                    <div class="project-tags">
                        <span>React</span>
                        <span>TypeScript</span>
                        <span>Tailwind</span>
                    </div>
                    <div class="project-links">
                        <a href="https://github.com/manojcodings/ghost-rider-luxury-bikes"
                           target="_blank" class="btn-link">
                            <i class="fab fa-github"></i> Code
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="https://github.com/manojcodings" target="_blank" class="btn btn-primary">
                <i class="fab fa-github"></i> View All Projects on GitHub
            </a>
        </div>
    </div>
</section>

<!-- Latest Posts -->
<section class="posts-section">
    <div class="container">
        <div class="section-header">
            <span class="section-badge">Blog</span>
            <h2 class="section-title">Latest Posts</h2>
            <p class="section-desc">Thoughts, tutorials & updates</p>
        </div>
        <div class="posts-grid">
            <?php
            $recent_posts = new WP_Query(array(
                'posts_per_page' => 3,
                'post_status'    => 'publish',
            ));
            if($recent_posts->have_posts()):
                while($recent_posts->have_posts()): $recent_posts->the_post(); ?>
                    <article class="post-card">
                        <?php if(has_post_thumbnail()): ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail('medium'); ?>
                            </div>
                        <?php else: ?>
                            <div class="post-thumbnail-placeholder">
                                <i class="fas fa-file-alt"></i>
                            </div>
                        <?php endif; ?>
                        <div class="post-body">
                            <div class="post-meta">
                                <span><i class="fas fa-calendar"></i> <?php the_date(); ?></span>
                                <span><i class="fas fa-user"></i> <?php the_author(); ?></span>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <p><?php the_excerpt(); ?></p>
                            <a href="<?php the_permalink(); ?>" class="read-more">
                                Read More <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </article>
                <?php endwhile;
                wp_reset_postdata();
            else: ?>
                <p class="no-posts">No posts yet. Check back soon!</p>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>