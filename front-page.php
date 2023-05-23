<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main class="site__main">
    <div class="sidebar">
        <?php dynamic_sidebar( 'entete_1' ); ?>
    </div>
    <h1>Bienvenue sur 4W4</h1>
    <h2>Les Événements à venir</h2>

    <section class="bloc__viewport">    
        <?php wp_nav_menu(array(
            "menu"=>"evenement",
            "container"=>"nav"
        )); ?>

      <h2>Notre mission</h2>
        <?php wp_nav_menu(array(
            "menu"=>"bloc-archives",
            "container"=>"nav"
        )); ?>
    </section>

    <section class="blocflex">
        <?php if(have_posts()):
            $id_premiere_image = 0;
            while (have_posts()): the_post(); 
                $la_categorie = 'notes';
                if (in_category('galerie')){
                    $la_categorie = 'galerie';}
                get_template_part("template-parts/categorie", $la_categorie);
            endwhile; 
          endif; ?>
    </section>
    </main>
<?php get_footer(); ?>
