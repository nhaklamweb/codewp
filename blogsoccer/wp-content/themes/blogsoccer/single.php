<?php get_header(); ?>
    <section class="section page_news single_blog">
        <div class="row">
            <div class="col large-9 medium-12 small-12 col_content_news">
                <!-- Content -->
                <div class="block_news single_content">
                    <div class="breadcrumb_single"><?php echo do_shortcode('[rank_math_breadcrumb]'); ?></div>
                    <h1 class="title_single fs-40"><?php the_title(); ?></h1>
                    <span class="date_up fs-14"><?php echo get_the_modified_date(); ?></span>
                    <!-- Content -->
                    <div class="content_blog_news mt-2">
                        <?php the_content(); ?>
                    </div>
                    <div class="tags">
                        <div class="fw-bold">MENTIONS:</div>
                        <ul class="list-none list_tags d-flex a_center mt-2">
                            <?php $tags = wp_get_post_tags(get_the_ID());
                            if ($tags != "" && count($tags) > 1):
                                ?>
                                <?php foreach ($tags as $tag): ?>
                                <li><a href="<?= site_url(); ?>/tag/<?= $tag->slug ?>"><?= $tag->name ?></a></li>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <!-- Relate -->
                <div class="block_news blog_news_list single_relate_box">
                        <div class="title_block_news">Related Articles</div>
                        <div class="content_blog_news">
                            <?php
                            $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 4, 'post__not_in' => array($post->ID) ) );
                            if( $related ) foreach( $related as $post ) {
                            setup_postdata($post); ?>
                                 <?php get_template_part('template-parts/custom/post_list') ; ?>
                                 
                            <?php }
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                    <!-- Relate -->
                    <div class="block_news blog_news_list single_relate_box">
                        <div class="title_block_news">Tennis</div>
                        <div class="content_blog_news">
                            <?php
                                $args = array(
                                    'post_type'      => 'post',
                                    'posts_per_page' => '6',
                                    'order'          => 'DESC',
                                    'order_by'       =>'date',
                                );
                                $query = new WP_Query($args);

                                if ($query->have_posts()) :
                                    $count = 0; // Khởi tạo biến đếm
                                    while ($query->have_posts()) : $query->the_post();
                                        $count++; // Tăng giá trị của biến đếm
                                ?>
                                    <?php get_template_part('template-parts/custom/post_list') ; ?>

                                <?php endwhile; ?>
                                    <?php wp_reset_query();  ?>
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

