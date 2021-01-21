<?php get_header(); ?>
<section class="sectionHero">
    
    <?php
        $post_id = 15; 
        $queried_post = get_post($post_id);
        $src = wp_get_attachment_image_src(get_post_thumbnail_id($queried_post->ID), '') ;
        $thumb_id = get_post_thumbnail_id($post_id);
    ?>
    
    <img class="HeroImage" src="<?php echo $src[0]; ?>" class="img-responsive" />
    
    <div class="herocontent">
        <h2 class="herocontent__subtitle">The Chef's selection</h2>
        <h1 class="herocontent__title">RECIPES BLOG</h1>
        <img src="<?= get_template_directory_uri(); ?>/assets/svg/dash.svg" alt=""> <a href="<?= get_page_link( get_option( 'menu' ) ); ?>" class="herocontent__link">Check our menu</a>
    </div>
</section>

<section class="recipes-container">
    <div class="recipes-list">
        <div class="recipes-list__tag">
            <?php
                $tags = get_tags();
                if ( $tags ) :
                    foreach ( $tags as $tag ) : ?>
                        <img src="<?= get_template_directory_uri(); ?>/assets/svg/cutelry.svg" alt=""><span><?php echo esc_html( $tag->name ); ?></span>
                    <?php endforeach; endif; ?>
            </div>
        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <div class="recipe-item">
            
            <?php the_post_thumbnail('post_recipe'); ?>
            <div class="recipe-item__infos">
                <div class="recipe-item__infos-tag">
                    <?php the_tags('<img src="' . get_template_directory_uri() . '/assets/svg/cutelry.svg" alt=""> ', '', ''); ?>
                </div>
                    
                <p class="recipe-item__infos-date"><?php the_date(); ?></p>
                <h3><?php the_title(); ?></h3>
                <p><?php the_content(); ?></p>
                <a href="<?php the_permalink(); ?>" class="recipe-item__infos-link btn">More infos</a>
            </div>
        </div>
        <?php endwhile; endif; ?>
        <?php posts_nav_link(); ?>
    </div>
</section>


<?php get_template_part( 'parts/discover-menu' ); ?>

<?php get_footer(); ?>