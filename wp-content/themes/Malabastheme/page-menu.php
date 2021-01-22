
    <?php get_header(); ?>
    <section class="sectionHero">
        <img  class="HeroImage" src="<?= get_field( 'heroimage' ); ?>" alt="">
       
        <div class="boxTitleHero">
            <div>
                <h2 class="HeroTitle"><?= get_field( 'herotitle' ); ?></h2>
                <h2 class="HeroTitle2">THE MENU</h2>
                </div>
            <h2 class="HeroTitle3">&horbar;&horbar; Order online</h2>
        </div>
        
    </section>
    <img class="MenuHachureBlancheHero" src="<?= get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" alt="">

    <section class="sectionTitle">
        <h2 class="welcome">Welcome</h2>
        <h1 class="TheMenu">THE MENU</h1>
    </section>

    <div class="boxSectionMenu">
        <div class="section1">
            <h2 class="titleStarter">STARTERS</h2>

            <?php if( have_rows('starter') ): ?>                 
                <?php while( have_rows('starter') ): the_row();?> 

                    <div class="starterBox <?= get_sub_field( 'starterselection' )?"selection":""; ?>">
                        <div class="boxNameAndPrice">
                            <h3 class="Name"><?= get_sub_field( 'startername' ); ?></h3>
                            <div class="Dot"></div>
                            <h3><?= get_sub_field( 'starterprice' ); ?>€</h3>
                        </div>
                        <h4 class="Description"><?= get_sub_field( 'starterdescription' ); ?></h4>
                    </div>

                <?php endwhile; ?>                   
            <?php endif; ?>
        </div> 



        <div class="section1">
            <h2 class="titleStarter">MAIN</h2>

            <?php if( have_rows('main') ): ?>                 
                <?php while( have_rows('main') ): the_row(); ?>

                    <div class="mainBox <?= get_sub_field( 'mainselection' )?"selection":""; ?>">
                        <div class="boxNameAndPrice">
                            <h3 class="Name"><?= get_sub_field( 'mainname' ); ?></h3>
                            <div class="Dot"></div>
                            <h3><?= get_sub_field( 'mainprice' ); ?>€</h3>
                        </div>
                        <h4 class="Description"><?= get_sub_field( 'maindescription' ); ?></h4>
                    </div>

                <?php endwhile; ?>                   
            <?php endif; ?>
        </div> 



        <div class="section1">
            <h2 class="titleStarter">DESSERTS</h2>

            <?php if( have_rows('dessert') ): ?>                 
                <?php while( have_rows('dessert') ): the_row(); ?>

                    <div class="dessertBox <?= get_sub_field( 'dessertselection' )?"selection":""; ?>">
                        <div class="boxNameAndPrice">
                            <h3 class="Name"><?= get_sub_field( 'dessertname' ); ?></h3>
                            <div class="Dot"></div>
                            <h3><?= get_sub_field( 'dessertprice' ); ?>€</h3>
                        </div>
                        <h4 class="Description"><?= get_sub_field( 'dessertdescription' ); ?></h4>
                    </div>
                
                <?php endwhile; ?>                   
            <?php endif; ?>
        </div> 
    </div>
    
    <?php get_template_part( 'parts/latest-recipes' ); ?>

<?php get_footer(); ?>