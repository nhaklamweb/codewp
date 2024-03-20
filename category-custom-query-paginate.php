<?php
get_header(); ?>
    <section class="section page_news single_blog">
        <div class="row">
            <div class="col large-9 medium-12 small-12 col_content_news">
                <div class="block_news blog_news_list single_content">
                    <div class="title_block_news"><?php echo single_cat_title(); ?></div>
                    <div class="content_blog_news mt-2">
                        <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $query_post = new WP_Query(array(
                            'cat' => get_query_var('cat'),
                            'posts_per_page' => 5, // Số bài đăng hiển thị trên mỗi trang
                            'orderby' => 'date',
                            'order' => 'DESC',
                            'paged' => $paged // Trang hiện tại
                        ));

                        if ($query_post->have_posts()) :
                            $count = 0; 
                            while ($query_post->have_posts()) : $query_post->the_post();
                            $count++;
                        ?>
                            <?php get_template_part('template-parts/custom/post_list') ; ?>
                        <?php endwhile; ?>

                        <?php
                        // Hiển thị phân trang
                        echo paginate_links(array(
                            'total' => $query_post->max_num_pages,
                            'prev_text' => __('« Previous'),
                            'next_text' => __('Next »'),
                        ));
                        ?>

                        <?php wp_reset_postdata();  ?>
                        <?php endif; ?>
                    </div>
                </div>

            </div>
            <div class="col large-3 medium-12 small-12 sidebar_news">
                <?php get_template_part('template-parts/custom/sidebar_custom') ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>

<!-- Get Item First Child in category -->
<div class="item_first">
    <?php
    $first_post = new WP_Query(array(
        'cat' => get_query_var('cat'),
        'posts_per_page' => 1,
        'orderby' => 'date',
        'order' => 'DESC'
    ));
    if ($first_post->have_posts()) :
        while ($first_post->have_posts()) : $first_post->the_post();
            // Hiển thị nội dung của bài đăng đầu tiên ở đây
        endwhile;
    endif;
    wp_reset_postdata();
    ?>
</div>