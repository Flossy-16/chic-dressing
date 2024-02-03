<?php 

add_action( 'wp_enqueue_scripts', 'chicdressing_enqueue_styles' );
function chicdressing_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); 
}

add_filter( 'big_image_size_threshold', '__return_false' );


/* NF : décharger le script du thème parent : désactiver les fonts du thème parent */

function remove_ashe_fonts() {
    /*fonction wp_dequeue_style utilisée pour retirer une feuille de style 
    précédemment ajoutée avec la fonction wp_enqueue_style.*/
    wp_dequeue_style('ashe-playfair-font');
    wp_dequeue_style('ashe-opensans-font');
    wp_dequeue_style('ashe-kalam-font');
    wp_dequeue_style('ashe-rokkitt-font');
    
     /*fonction wp_deregister_style utilisée pour retirer l'enregistrment d'une feuille de style 
    précédemment ajoutée avec la fonction wp_register_style.*/
    wp_deregister_style('ashe-playfair-font');
    wp_deregister_style('ashe-opensans-font');
    wp_deregister_style('ashe-kalam-font');
    wp_deregister_style('ashe-rokkitt-font');

}

add_action('wp_enqueue_scripts', 'remove_ashe_fonts', 999);
 /*pas de priorité spécifiée dans le code du thème parent, 
 donc utilisation d'une valeur élévée pour la priorité 
 pour être sûr que l'action s'exécute après celle du thème parent */



// Hooks
add_filter( 'upload_mimes', 'capitaine_mime_types' );
add_filter( 'wp_check_filetype_and_ext', 'capitaine_file_types', 10, 4 );

// Autoriser l'import des fichiers SVG et WEBP
function capitaine_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';
    return $mimes;
}

// Contrôle de l'import d'un WEBP
function capitaine_file_types( $types, $file, $filename, $mimes ) {
	if ( false !== strpos( $filename, '.webp' ) ) {
    	$types['ext'] = 'webp';
   		$types['type'] = 'image/webp';
	}
	return $types;
}