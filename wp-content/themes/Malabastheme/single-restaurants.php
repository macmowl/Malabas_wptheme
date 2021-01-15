
<?php get_header(); ?>


<?php if(have_posts()): ?>
    <?php while(have_posts()): ?>
    
    <p class="subtitle"><?php the_field("subtitle_restaurant");?></p>
    <h1><?php the_field("title_restaurant"); ?></h1>
    <p><?php the_field("city_restaurant")?></p>
        <?php if (have_rows("presentation_repeater")): ?>
                <?php while(have_rows("presentation_repeater")): ?>
                    <p><?php the_sub_field("picture_choice"); ?></p>
                    <p><?php the_sub_field("text_choice"); ?></p>
                <?php endwhile; else: ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' );?></p>
            <?php endif; ?>

    
<?php endwhile;endif ?>
    
<?php get_footer(); ?>