<?php
/**
 * Template permettant d'afficher la zone aside
 */
?>
<aside class="site__aside">
    <h3>Menu secondaire</h3>
    <?php 
    $menu = "notes"; 
    if(in_category('cours')){ $menu = "cours";}
      // $menu peut prendre les valeurs : "notes" ou "cours"
        echo $menu;
        wp_nav_menu(array(
        "menu"=>$menu,
        "container"=>"nav"
    )) ?>
</aside>