<?php get_header(); ?>
    <section class="section page_news single_blog">
        <div class="row">
            <div class="col large-9 medium-12 small-12 col_content_news">
                <div class="block_news blog_news_list single_content">
                    <div class="title_block_news"><?php echo single_cat_title(); ?></div>
                    <div class="content_blog_news mt-2">
                        <?php
                        if (have_posts()) :
                            $count = 0; 
                            while (have_posts()) : the_post();
                            $count++;
                        ?>
                            <?php get_template_part('template-parts/custom/post_list') ; ?>
                        <?php endwhile; ?>
                        <?php flatsome_posts_pagination(); ?>

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

