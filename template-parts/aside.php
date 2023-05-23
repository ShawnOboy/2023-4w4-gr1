<?php
/**
 * Template permettant d'afficher la zone aside
 */
?>
<aside class="site__aside">
    <?php 
    $menu = "notes"; 
    // $menu peut prendre les valeurs : "notes" ou "cours"
    if(in_category('cours')){ $menu = "cours";}

      the_post_thumbnail()
      ?><h3>Nos Ateliers en 2023</h3>
      <?php wp_nav_menu(array(
          "menu"=>"atelier",
          "container"=>"nav"
      )); ?>

      <h3>Nos Notes de Cours</h3>
      <?php
        wp_nav_menu(array(
        "menu"=>$menu,
        "container"=>"nav"))
      ?>

</aside>