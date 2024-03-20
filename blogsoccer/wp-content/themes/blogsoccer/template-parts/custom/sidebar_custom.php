<div class="sidebar_custom">
    <div class="ads_block block_sidebar">
        <img src="<?= site_url();?>/wp-content/uploads/2024/03/media-1.png" alt="Ads block">
        <span class="ads_text">Advertisement</span>
    </div>
    <!--  -->
    <div class="blog_sidebar block_sidebar">
        <div class="title_blog">Most Read</div>
        <?php
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => '4',
                'order'          => 'DESC',
                'order_by'       =>'date',
            );
            $query = new WP_Query($args);

        ?>
        <div class="list_sb_blog">
            <?php if($query->have_posts()) :  ?>
            <?php while($query->have_posts()) : $query->the_post() ; ?>
                <a href="<?php the_permalink(); ?>" class="post_item post_item_sb d-flex a_center" target="_self" title="<?php the_title(); ?>">
                    <div class="thumb">
                        <?php
                            if ( has_post_thumbnail() ) {
                                the_post_thumbnail();
                            }
                        ?>
                    </div>
                    <div class="btext">
                        <?php the_title(); ?>
                    </div>
                </a>
            <?php endwhile; ?>
            <?php wp_reset_query();  ?>
            <?php endif; ?>
        </div>
    </div>
    <!--  -->
    <div class="ads_block block_sidebar">
        <img src="<?= site_url();?>/wp-content/uploads/2024/03/media-3.png" alt="Ads block">
        <span class="ads_text">Advertisement</span>
    </div>
</div>