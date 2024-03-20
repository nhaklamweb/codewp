<?php global $count;  ?>
<?php get_header(); ?>
    <section class="section page_news">
        <div class="row">
            <div class="col large-9 medium-12 small-12 col_content_news">
                <!-- Item Blog Main -->
                <div class="block_news blog_main">
                    <div class="title_block_news">Top News</div>
                    <div class="content_blog_news">
                        <?php
                            $args = array(
                                'post_type'      => 'post',
                                'posts_per_page' => '4',
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
                <!-- Item Blog Main -->
                <div class="block_news blog_news_list">
                    <div class="title_block_news">More News</div>
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
                <!-- Item Blog Main -->
                <div class="block_news blog_main">
                    <div class="title_block_news">Don't Miss</div>
                    <div class="content_blog_news">
                        <?php
                            $args = array(
                                'post_type'      => 'post',
                                'posts_per_page' => '4',
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
                <!-- Item Blog Main -->
                <div class="block_news blog_main">
                    <div class="title_block_news">More News</div>
                    <div class="content_blog_news">
                        <?php
                            $args = array(
                                'post_type'      => 'post',
                                'posts_per_page' => '4',
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
                <!-- Item Blog Main -->
                <div class="block_news blog_main">
                    <div class="title_block_news">Football</div>
                    <div class="content_blog_news">
                        <?php
                            $args = array(
                                'post_type'      => 'post',
                                'posts_per_page' => '4',
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
                <!-- Item Blog Main -->
                <div class="block_news blog_main">
                    <div class="title_block_news">Tennis</div>
                    <div class="content_blog_news">
                        <?php
                            $args = array(
                                'post_type'      => 'post',
                                'posts_per_page' => '4',
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
                <!-- Item Blog Main -->
                <div class="block_news blog_main">
                    <div class="title_block_news">American Sports</div>
                    <div class="content_blog_news">
                        <?php
                            $args = array(
                                'post_type'      => 'post',
                                'posts_per_page' => '4',
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

