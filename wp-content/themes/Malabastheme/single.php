<section class="recipe_Principal">


    <section class="recipe__SectionGray">
        <?php get_header(); ?>
        <section class="boxGrayMiddle">

            <div class="menu__recipe">
                <div class="menu__recipe--left">
                    <a class="menu__recipe--left-btn" href="<?php echo home_url( '/' ); ?>">Return</a>
                    <p class="menu__recipe--left-text"><?php echo get_the_date(); ?></p>
                </div>
                <p class="menu__recipe--left-text"><?php the_tags($before = ''); ?></p>
            </div>


            <h1 class="single__Title"><?php the_title(); ?></h1>
            
            <div class="single__Title--paragraphe"><?php the_content(); ?></div>
            <div class="single__Title--image">
                <?php the_post_thumbnail( 'recipe_img_principale' ); ?>
            </div>
            
        
        </section>

    </section>

    <section class="recipe__SectionIngredient">
        <section class="box__IngredientEtInstructions">
            <div class="box__Ingredient">

                <div class="boxImgSocialMedia">
                    <a href="#"><img class="imgFace" src="/malabas/wp-content/themes/Malabastheme/assets/svg/facebook2.svg" alt="facebook"></a>
                    <a href="#"><img class="imgFace" src="/malabas/wp-content/themes/Malabastheme/assets/svg/twitter2.svg" alt="twitter"></a>
                    <a href="#"><img class="imgFace" src="/malabas/wp-content/themes/Malabastheme/assets/svg/instagram2.svg" alt="instagram"></a>
                    <a href="#"><img class="imgFace" src="/malabas/wp-content/themes/Malabastheme/assets/svg/email.svg" alt="mail"></a>
                </div>

                <h2 class="title__Ingredients">Ingredients :</h2>
                <h4 class="nbrPersons">Pour 4 personnes :</h4>
                <div class="ingredient__Text"><?php the_field("ingredients"); ?></div>
            </div>

            <div class="box__Instructions">
                <h2 class="title__Instructions">Instructions :</h2>
                <?php
                    if( have_rows('instructions') ):
                        $instruction_number = 1; ?>
                        
                        <?php while( have_rows('instructions') ): the_row(); ?>
                            <div class="instructionEtImg">
                                <div class= "instructionNumber">
                                    <p class= "instructionNumberP"><?= $instruction_number++ ?></p>
                                </div>
                                <div>
                                    <div class="instru"><?= get_sub_field( 'instruction', false ); ?></div>
                                        
                                            <?php
                                                $image = get_sub_field('imageinstruction');
                                                $url = wp_get_attachment_image_src( $image, 'recipe_img_instruction' );
                                                if( $image ) {
                                                    ?>
                                                        <div class="boxImgInstruction">
                                                            <img class="imgInstruction" src="<?php echo $url[0]; ?>">
                                                        </div>
                                                    <?php
                                                }
                                            ?>
                                        
                                </div>
                            </div>
                        <?php endwhile; ?>
                        
                    <?php endif;
                ?>
            </div>

        </section>


    </section>

    <?php get_template_part( 'parts/latest-recipes' ); ?>



<?php get_footer(); ?>
</section>