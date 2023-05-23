<?php 

/**
 * template name: Atelier
 */

?>

<?php get_header(); ?>

<main class="site__main aside-atelier">

  <?php
    if ( have_posts() ) : the_post(); ?>
      <?php the_post_thumbnail('large'); ?>
      <h1><?= get_the_title(); ?></h1>
      <?php the_content();?>
      <p>Formatteur de l'atelier: <?php the_field('formatteur'); ?></p>
      <p>Date et heure: <?php the_field('date');?> à <?php the_field('heure');?></p>
      <p><?php the_field('nombre_seance');?> séances dans le local <?php the_field('local');?></p>
    <?php endif;
  ?>

</main>

<?php
get_footer();