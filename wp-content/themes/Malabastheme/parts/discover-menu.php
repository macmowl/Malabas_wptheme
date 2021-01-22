<section class="menufront">
        <div class="menufront__mobile">
            <p class="menufront__mobile__infos-subtitle">
                <?php the_field( 'menu_subtitle' ); ?>
            </p>
            <h2><?php the_field( 'menu_title' ); ?></h2>
        </div>
        <div class="menufront__images">
            
            <?php
                $image_id = get_field( 'menu_image1', 2 );
                if( $image_id ) {
                    echo wp_get_attachment_image( $image_id['ID'], 'square_menu' );
                }

                $image_id = get_field( 'menu_image2', 2 );
                if( $image_id ) {
                    echo wp_get_attachment_image( $image_id['ID'], 'square_menu' );
                }

                $image_id = get_field( 'menu_image3', 2 );
                if( $image_id ) {
                    echo wp_get_attachment_image( $image_id['ID'], 'square_menu' );
                }

                $image_id = get_field( 'menu_image4', 2 );
                if( $image_id ) {
                    echo wp_get_attachment_image( $image_id['ID'], 'square_menu' );
                }
            ?>
        </div>
        <div class="menufront__infos">
            <div class="menufront__infos__desktop">
                <h3 class="menufront__infos__desktop-subtitle">
                    <?php the_field( 'menu_subtitle', 2 ); ?>
            </h3>
                <h2 class="menufront__infos__desktop-title"><?php the_field( 'menu_title', 2 ); ?></h2>
            </div>
            <p class="menufront__infos-description"><?php the_field( 'menu_description', 2 ); ?></p>
            <a href="<?= get_page_link( get_option( 'menu' ) ); ?>/menu" class="btn"><?php the_field( 'menu_link-label', 2 ); ?></a>
        </div>
    </section>