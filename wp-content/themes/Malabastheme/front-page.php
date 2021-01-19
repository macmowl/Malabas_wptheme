<?php get_header(); ?>
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <?php
        $image_id = get_field( 'hero-image' );
        if( $image_id ) {
    ?>
    <section class="hero" style="background-image: url('<?= $image_id['url']?>'); z-index: 0;">
        <div class="hero__wrapper">
            <H2 class="hero__wrapper__subtitle"><?php the_field( 'hero-subtitle' ); ?></h2>    
            <h1 class="hero__wrapper__title firstWordTitle"><?php the_field( 'hero-title' ); ?></h1>
            <div class="hero__wrapper__separator"></div>
            <a  class="hero__wrapper__link"href="<?php the_field( 'hero-link' ); ?>"><?php the_field( 'hero-label_link' ); ?></a>
        </div>
    </section>
    <?php
        }
    ?>

    <section class="usps">
        <div class="usps-wrapper">
            <div class="usps-wrapper__usp" id="usp1">
                <?php
                    $image_id = get_field( 'hero_icon' );
                    if( $image_id ) {
                        echo wp_get_attachment_image( $image_id['ID'], 'medium' );
                    }
                ?>
                <div class="usps-wrapper__usp-wrapper">
                    <h3 class="usps-wrapper__usp-title"><?php the_field( 'hero_title' ); ?></h3>
                    <p class="usps-wrapper__usp-desc"><?php the_field( 'hero_description' ); ?></p>
                </div>
            </div>
            <div class="usps-wrapper__usp" id="usp2">
                <?php
                    $image_id = get_field( 'hero_icon2' );
                    if( $image_id ) {
                        echo wp_get_attachment_image( $image_id['ID'], 'medium' );
                    }
                ?>
                <div class="usps-wrapper__usp-wrapper">
                    <h3 class="usps-wrapper__usp-title"><?php the_field( 'hero_title2' ); ?></h3>
                    <p class="usps-wrapper__usp-desc"><?php the_field( 'hero_description2' ); ?></p>
                </div>
            </div>
            <div class="usps-wrapper__usp" id="usp3">
                <?php
                    $image_id = get_field( 'hero_icon3' );
                    if( $image_id ) {
                        echo wp_get_attachment_image( $image_id['ID'], 'medium' );
                    }
                ?>
                <div class="usps-wrapper__usp-wrapper">
                    <h3 class="usps-wrapper__usp-title"><?php the_field( 'hero_title3' ); ?></h3>
                    <p class="usps-wrapper__usp-desc"><?php the_field( 'hero_description3' ); ?></p>
                </div>
            </div>
        </div>
        
    </section>
    
    <section class="intro">  
        <div class="intro-wrapper">
            <div class="intro-wrapper__img-wrapper">
                <?php
                    $image_id = get_field( 'intro_image' );
                    if( $image_id ) {
                        echo wp_get_attachment_image( $image_id['ID'], 'medium' );
                    }
                ?>
            </div> 
            <div class="intro-wrapper__info">
                <h2 class="firstWord intro-wrapper__info__title"><?php the_field( 'intro_title' ); ?></h>
                <H3 class="intro-wrapper__info__subtitle"><?php the_field( 'intro_subtitle' ); ?></h3> 
                <?php the_field( 'intro_content' ); ?>
                <p class="intro-wrapper__info__signature-caption"><?php the_field( 'intro_signature-caption' ); ?></p>
                <h4 class="intro-wrapper__info__signature"><?php the_field( 'intro_signature' ); ?></h4>
                
            </div>
        </div>
        
    </section>

    <section class="restaurants">
        <h3 class="restaurants__subtitle">Discover our franchise</h3>
        <h2 class="restaurants__title">Our restaurants</h2>
        <?php 
            $args = array(
                'post_type' => 'restaurants',
                'posts_per_page' => 4,
                'order' => 'DESC'
            );

            $my_query = new WP_Query( $args );

            if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
        ?>
        <div class="resto-item">
            <div class="resto-item__img-wrapper">
                <?php the_post_thumbnail( 'restaurant_mobile_header' ); ?>
                
            </div>
            <div class="resto-item__infos">
                <h4 class="resto-item__infos-subtitle"><?php the_field( 'subtitle_restaurant' ); ?></h4>
                <h3 class="resto-item__infos-title"><?php the_title(); ?></h3>
                <p class="resto-item__infos-desc"><?php the_field( 'description_place' ); ?></p>
                <a href="<?php the_permalink(); ?>" class="btn">More infos</a>
            </div>
        </div>

        <?php
            endwhile;
            endif;

            wp_reset_postdata();
        ?>
    </section>

    <?php get_template_part( 'parts/discover-menu' ); ?>

    <section class="testimonials">
        <div class="testimonials__wrapper">            
            <div class="testimonials__wrapper-slides">
                <?php 
                    if( have_rows( 'testimonial_testimonial' ) ): while ( have_rows( 'testimonial_testimonial' ) ) : the_row();
                ?>
                    <div class="testimonials__slide">
                        <div class="testimonials__infos">
                            <p class="testimonials__infos-quote"><?php the_sub_field( 'testi_rep_text' ); ?></p>
                            <div class="testimonials__infos-separator"></div><p class="testimonials__infos-signature"><?php the_sub_field( 'testi_rep_name' ); ?></p>
                        </div>
                    </div>
                <?php
                    endwhile; endif;
                ?>
            </div>
        </div>
        <?php
            $image_id = get_field( 'quote_image' );
            if( $image_id ) {
                echo wp_get_attachment_image( $image_id['ID'], 'medium' );
            }
        ?>
    </section>

    
    <?php get_template_part( 'parts/latest-recipes' ); ?>
    
    <?php endwhile; endif; ?>
<?php get_footer(); ?>