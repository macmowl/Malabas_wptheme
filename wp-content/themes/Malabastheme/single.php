<section>
    <h1><?php the_field("title"); ?></h1>

    <p><?php the_field("text"); ?></p>

    <img width=600rem src="<?php echo get_field("image")["url"]; ?>" alt="">
</section>

<section>
    <h2>Ingredients :</h2>
    <p><?php the_field("ingredients"); ?></p>
</section>

<section>
    <h2>Instruction :</h2>




<?php
        if( have_rows('instructions') ):
            $instruction_number = 1; ?>
            <ul>
            <?php while( have_rows('instructions') ): the_row(); ?>
                <li>
                    <div>
                        <p><?= $instruction_number++ ?></p>
                        <p><?= get_sub_field( 'instruction', false ); ?></p>
                    </div>
                    <?php
                        $image = get_sub_field('img');
                        if( $image ) {
                            ?><img src=<?= $image; ?>><?php
                        }
                    ?>
                </li>
            <?php endwhile; ?>
            </ul>
        <?php endif;
    ?>
</section>