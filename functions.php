<?php 

/**
 * L'ensemble des fonctions du thème
 */

function Ajout_css() {

    wp_enqueue_style("4w4_principal",   // identificateur
                    get_template_directory_uri() . "/style.css",    // adresse url du style.css
                    array(),    // défini les dépendances
                    filemtime(get_template_directory() . "/style.css"), // le calcul de la version du fichiercss
                    "all");  // média

}


add_action("wp_enqueue_sscripts", "Ajout_css");