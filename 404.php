<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main class="site__main" >
        <h1>Erreur 404</h1>
        <h4>- Voici les options possibles -</h4>

        <h4>- Voici les choix de cours possibles -</h4>
        <?php
            wp_nav_menu(array(
            "menu"=>"cours",
            "container"=>"nav"))
        ?>

        <h4>- Voici les notes de cours possibles -</h4>
        <?php
            wp_nav_menu(array(
            "menu"=>"notes",
            "container"=>"nav"))
        ?>

    </main>
<?php get_footer(); ?>