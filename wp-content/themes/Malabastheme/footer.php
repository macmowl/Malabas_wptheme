<footer class="site__footer">
       <div class="footer__intro">
            <p class="footer_intro__logo">DEV RESTAURANT</p>
            <p class="footer__intro__pub">Dev Restaurant vous invite dans un cadre chaleureux pour déguster nos plats fast & tasty</p>
            <div class="footer__intro__media">
                <div><img src="<?= get_template_directory_uri(); ?>/assets/svg/linkedin.svg" alt="logo linkedin"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/assets/svg/facebook.svg" alt="logo facebook"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/assets/svg/instagram.svg" alt="logo instagram"></div>
                <div><img src="<?= get_template_directory_uri(); ?>/assets/svg/twitter.svg" alt="logo twitter"></div>
            </div>
       </div>
       <div class="footer__hours">
            <p class="footer__hours__title">Open hours</p>
            <div class="footer__hours__section-1">
                <img class="footer__hours_clock" src="<?= get_template_directory_uri(); ?>/assets/svg/time-clock.svg">
                <div class="footer_schedulde">
                    <p class="footer__hours__day">Mondays</p>
                    <p class="footer__hours__line"><p></p>
                    <p class="footer__hours__time">Closed</p>
                </div>
            </div>
            <div class="footer__hours__section-2">
                <img class="footer__hours_clock" src="<?= get_template_directory_uri(); ?>/assets/svg/time-clock.svg">
                <p class="footer__hours__day">Tue-Fry</p>
                <p class="footer__hours__line"><p></p>
                <p class="footer__hours__time">11am - 14pm</p>
            </div>
            <div class="footer__hours__section-3">
                <img class="footer__hours_clock" src="<?= get_template_directory_uri(); ?>/assets/svg/time-clock.svg">
                <p class="footer__hours__day">Sat-Sun</p>
                <p class="footer__hours__line"><p></p>
                <p class="footer__hours__time">11am - 11pm</p>
            </div>
            <div class="footer__hours__section-4">
                <img class="footer__hours_clock" src="<?= get_template_directory_uri(); ?>/assets/svg/time-clock.svg">
                <p class="footer__hours__day">Public Holidays</p>
                <p class="footer__hours__line"><p></p>
                <p class="footer__hours__time">11am - 11pm</p>
            </div>
       </div>
       <div class="footer__contact">
            <p class="footer__contact__class">Contact us</p>
            <div class="footer__contact__phone">
                <img class="footer__contact__phone__svg" src="<?= get_template_directory_uri(); ?>/assets/svg/call (10).svg" alt="phone">
                <p class="footer__contact__number">+85 21 73 XX </p>
            </div>
            <div class="footer__contact__address">
                <img class="footer__contact__address__svg" src="<?= get_template_directory_uri(); ?>/assets/svg/place (14).svg">
                <p class="footer__contact__address__street">48, rue Lileau<br/>4570 Marchin <br/> Belgium</p>
            </div>
            <div class="footer__contact__mail">
                <img class="footer__contact__mail__svg" src="<?= get_template_directory_uri(); ?>/assets/svg/mail-1.svg">
                <p class="footer__contact__mail__address">malabas_studio@gmail.cocom</p>
            </div>
       </div>
       <div class="footer__instagram">
            
       </div>
</footer>
  
	<?php wp_footer(); ?>
</body>
</html>
