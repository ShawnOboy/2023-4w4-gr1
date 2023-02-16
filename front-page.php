<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main>
        <h1>Bienvenue sur 4W4</h1>
        <section class="blocflex">
    <?php if(have_posts()):
            while (have_posts()): the_post(); ?>
            <article>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <?= wp_trim_words(get_the_excerpt(), 10, " [...]"); ?>
                <!-- <span><?php the_permalink(); ?></span> -->
            </article>
            <?php endwhile; ?>
           <?php  endif; ?>
        </section>
    </main>
    
    <?php get_footer(); ?>
</body>
</html>