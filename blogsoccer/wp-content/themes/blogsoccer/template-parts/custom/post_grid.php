<a href="<?php the_permalink(); ?>" class="post_item post_item_sb d-flex flex-column a_center" target="_self" title="<?php the_title(); ?>">
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