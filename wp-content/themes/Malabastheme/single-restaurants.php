
<?php get_header(); ?>

        <?php
                $image_id = get_field( 'banneer_image' );
            
        ?>
        <section class="banneer">
        <div class="banneer_image" style="background-image: url('<?= $image_id['url']?>');">
        
            <div class="hero__wrapper">
                <h2 class="hero__wrapper__subtitle"><?php the_field("subtitle_restaurant");?></h2>
                <h1 class="hero__wrapper__title"><?php the_field("title_restaurant"); ?></h1>
                <p><?php the_field("city_restaurant")?></p>
            </div>
        
        </div>
        </section>
        <div class="presentation">
                <div class="presentation__intro">
                    <p class="presentation__intro__welcome">Welcome in <?php the_field("city_restaurant"); ?></p>
                    <h2>PRESENTATION</h2>
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
                                    <p class="presentation__board__center__text"><?php the_sub_field("text_choice"); ?></p>
                                </div>
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="presentation__board">
                            <div class="presentation__board__center">
                                <div class="presentation__board__center__left">
                                <p class="presentation__board__center__intro"><?php the_sub_field("description_title")?></p>
                                    <p class="presentation__board__center__title"><?php the_sub_field("title_restaurant")?></p>
                                    <p class="presentation__board__center__text"><?php the_sub_field("text_choice"); ?></p>
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
        <div class="map">
                <div class="map__intro">
                    <p>Find Us <?php the_field("city_restaurant"); ?></p>
                    <h2 class="map__intro__bold">LOCATION</h2>
                </div>
        <?php 
            $place = get_field( 'places' );
            if( $place ):
                $lat = esc_attr( $place['lat'] );
                $lng = esc_attr( $place['lng'] );
                $zoom = esc_attr($place['zoom']);
                //TODO address ne fonctionne pas ! (lg 59 à 70)
                $address = '';
                foreach( array('street_number', 'street_name', 'city', 'state', 'post_code', 'country') as $i => $k ) {
                    if( isset( $place[ $k ] ) ) {
                        $address = sprintf( '<span class="segment-%s">%s</span>, ', $k, $place[ $k ] );
                    }
                }
            
                // Trim trailing comma.
                $address = trim( $address, ', ' );
                echo '<p>' . $address . '.</p>';
                
        ?>
        </div>
        <div class="acf-map" data-zoom="<?php echo $zoom; ?>">
            <div class="marker" data-lat="<?php echo $lat; ?>" data-lng="<?php echo $lng; ?>">
            </div>
        </div>

        <?php endif; ?>
        <div class="part_book">
            <div class="book">
                <div class="book__intro">
                    <p class="book__intro__submit">Submit Information to Place Order</p>
                    <h2 class="book__intro__reserve">RESERVE A TABLE</h2>
                </div>  
                <?php $image_register = get_field("image_register"); ?> 
                <img class="image_register" src="<?php echo $image_register["url"] ; ?>" alt="menu">
                <div class="reserve">
                    <form>
                        <div class="reserve__line__1">
                            <div>
                                <label for="name">Nom</label>
                                <input type="text" name="name">
                            </div>
                            <div>
                                <label for="email">Email</label>
                                <input type="text" name="email">
                            </div>
                        </div>
                        <div class="reserve__line__2">
                            <div>
                                <label for="phone_number">Téléphone</label>
                                <input type="text" name="phone_number">
                            </div>
                            <div>
                                <label for="table">Table pour</label>
                                <select name="table">
                                    <option value="volvo">1</option>
                                    <option value="volvo">2</option>
                                    <option value="volvo">3</option>
                                    <option value="volvo">4</option>
                                    <option value="volvo">5</option>
                                    <option value="volvo">6</option>
                                    <option value="volvo">7</option>
                                    <option value="volvo">8</option>
                                    <option value="volvo">9</option>
                                    <option value="volvo">10</option>
                                </select>
                            </div>
                        </div>
                        <div class="reserve__line__3">
                            <label for="customer_address">Adresse</label>
                            <input type="text" name="customer_address">
                        </div>
                        <div class="reserve__line__4">
                            <div>
                                <label class="trip-start" for="trip-start">Date</label>
                                <input type="date" id="start" name="trip-start"
                                        value="2018-07-22"
                                        min="2018-01-01" max="2018-12-31">
                            </div>
                            <div>
                                <label class="time" for="time">Heure</label>
                                <input type="time" value="00:00" name="time">
                            </div>
                        </div>
                        <div class ="message">
                            <label>Message</label>
                            <textarea placeholder="Votre message"></textarea>
                        </div>
                        <div class="submit">
                            <input class="submit__btn"type="submit" value="Réserver">
                        </div>
                    </form>
                </div>            
            </div>
        </div>


    
<?php get_footer(); ?>
