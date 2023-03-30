<?php 
/**
 * index.php est le modèle par défaut du thème 4w4 
 */
?>

<?php get_header(); ?>
    <main class="site__main page__404" >
        <h1>Erreur 404</h1>
        <h3>- Voici les options possibles -</h3>

        <h4>- Vous pouvez tenter une recherche -</h4>
        <?= get_search_form(); ?>

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