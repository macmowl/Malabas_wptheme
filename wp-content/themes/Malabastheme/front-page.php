<?php get_header(); ?>
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    
    <?php
        $image_id = get_field( 'hero-image' );
        if( $image_id ) {
    ?>
    <section class="hero" style="background-image: url('<?= $image_id['url']?>');">
        
        <H2 class="hero__subtitle"><?php the_field( 'hero-subtitle' ); ?></h2>    
        <h1 class="hero__title"><?php the_field( 'hero-title' ); ?></h1>
        <p class="hero__link"><a href="<?php the_field( 'hero-link' ); ?>"><?php the_field( 'hero-label_link' ); ?></a></p>
        
    </section>
    <?php
        }
    ?>

    <section class="usps">
        <div class="usp" id="usp1">
            <?php
                $image_id = get_field( 'hero_icon' );
                if( $image_id ) {
                    echo wp_get_attachment_image( $image_id['ID'], 'medium' );
                }
            ?>
            <h3><?php the_field( 'hero_title' ); ?></h3>
            <p><?php the_field( 'hero_description' ); ?></p>
        </div>
        <div class="usp" id="usp2">
            <?php
                $image_id = get_field( 'hero_icon2' );
                if( $image_id ) {
                    echo wp_get_attachment_image( $image_id['ID'], 'medium' );
                }
            ?>
            <h3><?php the_field( 'hero_title2' ); ?></h3>
            <p><?php the_field( 'hero_description2' ); ?></p>
        </div>
        <div class="usp" id="usp3">
            <?php
                $image_id = get_field( 'hero_icon3' );
                if( $image_id ) {
                    echo wp_get_attachment_image( $image_id['ID'], 'medium' );
                }
            ?>
            <h3><?php the_field( 'hero_title3' ); ?></h3>
            <p><?php the_field( 'hero_description3' ); ?></p>
        </div>
    </section>
    
    <section class="intro">  
        <div class="intro__img-wrapper">
            <?php
                $image_id = get_field( 'intro_image' );
                if( $image_id ) {
                    echo wp_get_attachment_image( $image_id['ID'], 'medium' );
                }
            ?>
        </div> 
        <div class="intro__info">
            <h2 class="firstWord intro__info__title"><?php the_field( 'intro_title' ); ?></h>
            <H3 class="intro__info__subtitle"><?php the_field( 'intro_subtitle' ); ?></h3> 
            <p class="intro__info__content"><?php the_field( 'intro_content' ); ?></p>
            <h4 class="intro__info__signature"><?php the_field( 'intro_signature' ); ?></h4>
            <p class="intro__info__signature-caption"><?php the_field( 'intro_signature-caption' ); ?></p>
        </div>
    </section>

    <section class="restaurants">

    </section>

    <section class="menufront">
        <div class="menufront__images">
            <?php
                $image_id = get_field( 'menu_image1' );
                if( $image_id ) {
                    echo wp_get_attachment_image( $image_id['ID'], 'square_menu' );
                }

                $image_id = get_field( 'menu_image2' );
                if( $image_id ) {
                    echo wp_get_attachment_image( $image_id['ID'], 'square_menu' );
                }

                $image_id = get_field( 'menu_image3' );
                if( $image_id ) {
                    echo wp_get_attachment_image( $image_id['ID'], 'square_menu' );
                }

                $image_id = get_field( 'menu_image4' );
                if( $image_id ) {
                    echo wp_get_attachment_image( $image_id['ID'], 'square_menu' );
                }
            ?>
        </div>
        <div class="menufront__infos">
            <p class="menufront__infos-subtitle">
                <?php the_field( 'menu_subtitle' ); ?>
            </p>
            <h2><?php the_field( 'menu_title' ); ?></h2>
            <p><?php the_field( 'menu_description' ); ?></p>
            <button><?php the_field( 'menu_link-label' ); ?></button>
        </div>
    </section>

    <section class="testimonials">
        <div class="testimonials__infos">
            <?php 

                if( have_rows( 'testimonial_testimonial' ) ): while ( have_rows( 'testimonial_testimonial' ) ) : the_row();
                $image_id = get_sub_field( 'testi_rep_image' );
                if( $image_id ) {
                    echo wp_get_attachment_image( $image_id['ID'], 'medium' );
                }
            ?>
                    <p><?php the_sub_field( 'testi_rep_text' ); ?></p>
                    <p class="testimonials__infos-signature"><?php the_sub_field( 'testi_rep_name' ); ?></p>
            <?php
                endwhile; endif;
            ?>
        </div>
    </section>

    <section class="latest-recipes">
                WIP
    </section>
    
    <?php endwhile; endif; ?>
<?php get_footer(); ?>