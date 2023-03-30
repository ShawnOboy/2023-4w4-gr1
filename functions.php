<?php
/**
* L'ensemble des fonctions du thème
*/
function enfiler_css() {
wp_enqueue_style('4w4-gr1-principal', // id
        get_template_directory_uri() . '/style.css', // adresse url de style.css
        array(), // définir les dépendances
        filemtime(get_template_directory() . '/style.css'), // le calcul de la version du fichier css
        'all'); // media

wp_enqueue_style("google_font",
                "https://fonts.googleapis.com/css2?family=Smokum&display=swap",
                false);       
}  






add_action( 'wp_enqueue_scripts', 'enfiler_css' );  

/* -------------------------------------- Enregitrement des menus */
function enregistre_menus(){
        register_nav_menus( array(
        'menu_entete' => 'Menu entete',
        'menu_sidebar'  => 'Menu sidebar',
        ) );
}
add_action( 'after_setup_theme', 'enregistre_menus', 0 );

/* -------------------------------------- add_theme_suport */

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo', array(
    'height' => 150,
    'width'  => 150
) );
add_theme_support('custom-background');


/**
 * Modifie la requete principale de Wordpress avant qu'elle soit exécuté
 * le hook « pre_get_posts » se manifeste juste avant d'exécuter la requête principal
 * Dépendant de la condition initiale on peut filtrer un type particulier de requête
 * Dans ce cas çi nous filtrons la requête de la page d'accueil
 * @param WP_query  $query la requête principal de WP
 */
function cidweb_modifie_requete_principal( $query ) {
        if (    $query->is_home() // si page d'accueil
                && $query->is_main_query() // si requête principale
                && ! is_admin() ) { // si pas dans le tableau de bord
          // $query->set permet de modifier la requête principale               
          $query->set( 'category_name', 'notes' ); // filtre les articles de categorie «4w4» slug
          $query->set( 'orderby', 'title' ); // trier selon le champ title
          $query->set( 'order', 'ASC' ); // trier en ordre ascendant
          }
         }
         add_action( 'pre_get_posts', 'cidweb_modifie_requete_principal' );
         
/**
 * Permet de personnalisé chacun des titre du menu cours
 * @param $title : titre du menu à modifier
 *         $item : la structure «li» du menu
 *         $args : objet décrivant l'ensemble des menu de notre site
 *         $depth : Niveau de profondeur du menu (on a retirer ici)     
 */

function perso_menu_item_title($title, $item, $args) {
// Remplacer 'nom_de_votre_menu' par l'identifiant de votre menu
if($args->menu == 'cours') { // on filtre uniquement le menu «cours»
// Modifier la longueur du titre en fonction de nos besoins
   $sigle = substr($title,4,3);
   $titre = substr($title, 7, -6);

   if(is_404()) {
      $title = "<code>" . wp_trim_words($titre, 3, "...") . "</code>";
   }

   else {
      $title = "<code>" .$sigle. "</code>";
   }

}
if($args->menu == 'notes') {
   if(substr($title,0,1) == "0") {$title = substr($title,1);}
}

return $title;
}
add_filter('nav_menu_item_title', 'perso_menu_item_title', 10, 3);         