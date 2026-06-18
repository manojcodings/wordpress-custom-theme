<?php get_header(); ?>

<div class="container" style="padding: 80px 20px;">
    <div class="single-post-grid">
        <!-- Post Content -->
        <main class="single-post">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
                <article class="single-article">
                    <?php if(has_post_thumbnail()): ?>
                        <div class="single-thumbnail">
                            <?php the_post_thumbnail('full'); ?>
                        </div>
                    <?php endif; ?>
                    <div class="single-content">
                        <h1><?php the_title(); ?></h1>
                        <div class="post-meta">
                            <span><i class="fas fa-calendar"></i> <?php the_date(); ?></span>
                            <span><i class="fas fa-user"></i> <?php the_author(); ?></span>
                            <span><i class="fas fa-folder"></i> <?php the_category(', '); ?></span>
                        </div>
                        <div class="post-body-content">
                            <?php the_content(); ?>
                        </div>
                    </div>
                </article>
            <?php endwhile; endif; ?>
        </main>

        <!-- Sidebar -->
        <aside class="single-sidebar">
            <?php get_sidebar(); ?>
        </aside>
    </div>
</div>

<?php get_footer(); ?>