<?php global $count; ?>
<a href="<?php the_permalink(); ?>" class="post_item post_item_main item_<?php echo $count; ?> d-flex a_center" target="_self" title="<?php the_title(); ?>">
    <div class="thumb">
        <?php
            if ( has_post_thumbnail() ) {
                the_post_thumbnail();
            }
        ?>
    </div>
    <div class="btext">
        <h4><?php the_title(); ?></h4>
        <span class="date_up fs-12"><?php echo get_the_modified_date(); ?></span>
    </div>
</a>