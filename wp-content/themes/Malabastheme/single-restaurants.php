
<?php get_header(); ?>

        <?php
                $image_id = get_field( 'banneer_image' );
            
        ?>
        <section class="banneer_image" style="background-image: url('<?= $image_id['url']?>');">
            <h2 class="subtitle"><?php the_field("subtitle_restaurant");?></h2>
            <h1><?php the_field("title_restaurant"); ?></h1>
            <p><?php the_field("city_restaurant")?></p>
        </section>
        <div class="presentation">
                <div class="presentation__intro">
                    <p>Welcome in <?php the_field("city_restaurant"); ?></p>
                    <p>PRESENTATION</p>
                </div>
            <?php if (have_rows("presentation_repeater")): ?>
                <?php $count = 1; ?>
                <?php while(have_rows("presentation_repeater")): the_row()?>
                    <?php if($count%2 == 0) : ?>
                        <div class="presentation__board">
                            <div class="presentation__board__center">
                                <div class="presentation__board__center__left">
                                    <img class="presentation__board__center__image" src="<?php echo get_sub_field("picture_choice")["url"]; ?>" alt="">
                                </div>
                                <div class="presentation__board__center__right">
                                    <p class="presentation__board__center__intro"><?php the_sub_field("description_title")?></p>
                                    <p class="presentation__board__center__title"><?php the_sub_field("title_restaurant")?></p>
                                    <p><?php the_sub_field("text_choice"); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="presentation__board">
                            <div class="presentation__board__center">
                                <div class="presentation__board__center__left">
                                <p class="presentation__board__center__intro"><?php the_sub_field("description_title")?></p>
                                    <p class="presentation__board__center__title"><?php the_sub_field("title_restaurant")?></p>
                                    <p><?php the_sub_field("text_choice"); ?></p>
                                </div>
                                <div class="presentation__board__center__right">
                                    <img class="presentation__board__center__image" src="<?php echo get_sub_field("picture_choice")["url"]; ?>" alt="">
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php $count+=1; ?>
            <?php endwhile; else: ?>
            <?php endif; ?>   
        </div>
    
       
                    
        


    
<?php get_footer(); ?>