<!-- Recent Posts -->
<div class="widget">
    <h3 class="widget-title">Recent Posts</h3>
    <?php
    $recent = new WP_Query(array('posts_per_page' => 5));
    if($recent->have_posts()):
        while($recent->have_posts()): $recent->the_post(); ?>
            <div class="sidebar-post">
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                <span><?php the_date(); ?></span>
            </div>
        <?php endwhile;
        wp_reset_postdata();
    endif; ?>
</div>

<!-- Categories -->
<div class="widget">
    <h3 class="widget-title">Categories</h3>
    <ul class="sidebar-cats">
        <?php wp_list_categories(array(
            'show_count' => true,
            'title_li'   => ''
        )); ?>
    </ul>
</div>