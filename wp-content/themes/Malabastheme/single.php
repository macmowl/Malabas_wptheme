<section class="recipe_Principal">


    <section class="recipe__SectionGray">
        <?php get_header(); ?>
        <section class="boxGrayMiddle">

            <div class="menu__recipe">
                <div class="menu__recipe--left">
                    <a class="menu__recipe--left-btn" href="<?php echo home_url( '/' ); ?>">← return</a>
                    <p class="menu__recipe--left-text">15 March 2020</p>
                </div>
                <p class="menu__recipe--left-text">Local food</p>
            </div>


            <h1 class="single__Title"><?php the_field("title"); ?></h1>
            
            <p class="single__Title--paragraphe"><?php the_field("text"); ?></p>
            <img class="single__Title--image" src="<?php echo get_field("image")["url"]; ?>" alt="">
            
        
        </section>

    </section>

    <section class="recipe__SectionIngredient">
        <section class="box__IngredientEtInstructions">
            <div class="box__Ingredient">
                <h2>Ingredients :</h2>
                <h4>Pour 4 personnes :</h4>
                <div class="ingredient__Text"><?php the_field("ingredients"); ?></div>
            </div>

            <div>
                <h2>Instruction :</h2>
                <?php
                    if( have_rows('instructions') ):
                        $instruction_number = 1; ?>
                        
                        <?php while( have_rows('instructions') ): the_row(); ?>
                            <div class="instructionEtImg">
                                <div class= "instructionNumber">
                                    <p class= "instructionNumberP"><?= $instruction_number++ ?></p>
                                </div>
                                <div>
                                    <p><?= get_sub_field( 'instruction', false ); ?></p>
                                    <?php
                                        $image = get_sub_field('img');
                                        if( $image ) {
                                            ?><img src=<?= $image; ?>><?php
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









<?php get_footer(); ?>
</section>