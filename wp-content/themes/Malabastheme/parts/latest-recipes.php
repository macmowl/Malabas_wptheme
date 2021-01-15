<section class="latestrecipes">

    <h3 class="latestrecipes__subtitle">Latest updated</h3>
    <h2 class="latestrecipes__title">Recipes blog</h2>
    <?php 
    // 1. On définit les arguments pour définir ce que l'on souhaite récupérer
    $args = array(
        'post_type' => 'post',
        'category_name' => 'recipe',
        'posts_per_page' => 3,
    );

    // 2. On exécute la WP Query
    $my_query = new WP_Query( $args );

    // 3. On lance la boucle !
    if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
    ?>
    <div class="recipe">
        <div class="recipe__img-wrapper">
            <?php $image_id = get_field( 'image' );
                if ($image_id) {
                    echo wp_get_attachment_image( $image_id['ID'], 'medium' );
                }
            ?>
        </div>
        <div class="recipe__infos">
            <p class="recipe__infos-date"><?php the_date(); ?></p>
            <h4 class="recipe__infos-title"><?php the_field( 'title' ); ?></h4>
            <p class="recipe__infos-desc"><?php the_field( 'text' ); ?></p>
        </div>
        
    </div>

    <?php
        the_title();
        the_content();
        

    endwhile;
    endif;

    // 4. On réinitialise à la requête principale (important)
    wp_reset_postdata();
    ?>

</section>