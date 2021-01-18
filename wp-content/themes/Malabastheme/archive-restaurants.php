<?php get_header(); ?>

<h1 class="site__heading"><?php post_type_archive_title(); ?></h1>

<main class="site__portfolio">
	<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
        <!-- Tu peux modifier de ici -->
        <h2>
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h2>
        <!-- à ici -->
    <?php endwhile; endif; ?>
</main> 

<?php the_posts_pagination(); ?>
<?php get_footer(); ?>