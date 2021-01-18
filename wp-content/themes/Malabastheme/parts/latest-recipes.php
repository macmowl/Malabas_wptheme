<section class="latestrecipes">

    <h3 class="latestrecipes__subtitle">Latest updated</h3>
    <h2 class="latestrecipes__title">Recipes blog</h2>
    <div class="latestrecipes-wrapper">
    <?php 
        // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
        $args = array(
            'post_type' => 'post',
            'category_name' => 'recipe',
            'posts_per_page' => 4,
        );

        // 2. On exécute la WP Query
        $my_query = new WP_Query( $args );

        // 3. On lance la boucle !
        if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
        ?>
        <div class="lastrecipe">
            <div class="lastrecipe__img-wrapper">
                <?php the_post_thumbnail( 'medium_large' ); ?>
                
            </div>
            <div class="lastrecipe__infos">
                <p class="lastrecipe__infos-date"><img src="<?= get_template_directory_uri(); ?>/assets/svg/time-clock.svg" alt="Clock"><?php the_date(); ?></p>
                <h4 class="lastrecipe__infos-title"><?php the_title(); ?></h4>
                <p class="lastrecipe__infos-desc"><?php echo get_excerpt(125); ?></p>
            </div>
        </div>

        <?php
        endwhile;
        endif;

        // 4. On réinitialise à la requête principale (important)
        wp_reset_postdata();
        ?>
    </div>

</section>