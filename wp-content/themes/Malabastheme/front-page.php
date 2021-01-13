<?php get_header(); ?>
    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <section class="hero">
        <H2><?php the_field( 'hero-subtitle' ); ?></h2>    
        <h1><?php the_field( 'hero-title' ); ?></h1>
        <p><a href="<?php the_field( 'hero-link' ); ?>"><?php the_field( 'hero-label_link' ); ?></a></p>
        <?php
            $image_id = get_field( 'hero-image' );
            if( $image_id ) {
                echo wp_get_attachment_image( $image_id['ID'], 'medium' );
            }
        ?>
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
            <h2><?php the_field( 'intro_title' ); ?></h>
            <H3><?php the_field( 'intro_subtitle' ); ?></h3> 
            <p><?php the_field( 'intro_content' ); ?></p>
            <h4><?php the_field( 'intro_signature' ); ?></h4>
            <p><?php the_field( 'intro_signature-caption' ); ?></p>
        </div>
    </section>

    <section class="restaurants">

    </section>

    <section class="menu">

    </section>

    
    <?php endwhile; endif; ?>
<?php get_footer(); ?>