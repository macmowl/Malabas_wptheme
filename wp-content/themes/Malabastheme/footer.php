<div class="newsletter"><?php get_template_part( 'parts/newsletter' ); ?></div>

<footer class="site__footer"> 
    <!-- <img class="footer__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/hachures-noires.png"/> -->
            <div class="footer__intro">
                    <p class="footer__intro__logo">DEV RESTAURANT</p>
                        
                    <div class="footer__intro__pub"> <?php the_field('introduction', "option")? the_field('introduction'): "no field"; ?></div>  
                    <div class="footer__intro__media">
                        <div><img src="<?= get_template_directory_uri(); ?>/assets/svg/linkedin.svg" alt="logo linkedin"></div>
                        <div><img src="<?= get_template_directory_uri(); ?>/assets/svg/facebook.svg" alt="logo facebook"></div>
                        <div><img src="<?= get_template_directory_uri(); ?>/assets/svg/instagram.svg" alt="logo instagram"></div>
                        <div><img src="<?= get_template_directory_uri(); ?>/assets/svg/twitter.svg" alt="logo twitter"></div>
                    </div>
            </div>
            
            <div class="footer__open__hours">
                <p class="footer__open__hours__repeater">Open hours</p>  
                <?php if( have_rows('open_hours', 'option') ): ?>
                        <?php while( have_rows('open_hours', 'option') ): the_row(); ?>  
                            <div class="footer__open__hours__flex">  
                                <img src="<?= get_template_directory_uri(); ?>/assets/svg/time-clock.svg" alt="logo clock">
                                <p class="footer__open__hours__repeater__day"><?php the_sub_field('day_of_week','option'); ?></p>
                                <p class="footer__open__hours__repeater__line"></p>
                                <p class="footer__open__hours__repeater__time"><?php the_sub_field('hour', 'option'); ?></p>
                            </div>
                    <?php endwhile;endif; ?>
            </div>
            <div class="footer__contact">
                <p class="footer__contact__title">Contact-us</p>
                <div class="footer__contact__phone">
                    <img class="footer__contact__phone__icone" src="<?= get_template_directory_uri(); ?>/assets/svg/call.svg" alt="phone"/>
                    <p class="footer__contact__phone__number"><?php the_field("contact_us","option"); ?></p>
                </div>
                <div class="footer__contact__adress">
                    <img class="footer__contact__adress__icone" src="<?= get_template_directory_uri();?>/assets/svg/place.svg" alt="location">
                        <div class="footer__contact__adress__restaurant">
                            <p><?php the_field("adress","option");?></p>
                            <p><?php the_field("zip_city","option"); ?></p>
                            <p><?php the_field("country","option"); ?></p>
                        </div>
                </div>
            </div>
            
            <div class="footer__instagram">
            <?php echo do_shortcode('[iscwp-grid username="best.burgers.insta" grid="3" limit="6"]'); ?>
           
                    
            </div>
       </div>
       
</footer>
<div class="site__footer__part__two">
    <div class="site__footer__part__two__line">
        <p>Tous droits réservés à la Malabas Team <p>
    </div>
           
</div>
	<?php wp_footer(); ?>
</body>
</html>
