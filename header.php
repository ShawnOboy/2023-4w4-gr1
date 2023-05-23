<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mon 4W4</title>
    
    <?php wp_head(); ?>
</head>
<?php
$nouvel_class="";
  if (is_front_page() || is_404()) {
      $nouvel_class = "no-aside";
  }
  if(is_page_template("template-atelier.php")) {
    $nouvel_class="";
  }
?> 

<body class="site <?= $nouvel_class ?>  ">
    <header class="site__entete">
        <input type="checkbox"  id="chkBurger">
        <section class="entete__nav">
            <?php the_custom_logo(); ?> 
            <?= get_search_form(); ?>
            <?php  wp_nav_menu(array( 
                            "menu" => "entete",
                            "container" => "nav",
                            "container_class" => "menu__entete"

                        )); ?>
            
            <label class="burger" for="chkBurger">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32">
            </label>
        </section>
</header>

<?php 
if (! is_front_page()){
    get_template_part("template-parts/aside"); 
}