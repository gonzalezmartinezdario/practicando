<?php 
// Agregando las areas para widgets seran 3 columnas en el footer
register_sidebar( array(
    'name'=>_('Footer columna izquierda'),
    'id'=>'footer-left-column',
    'description'=>_('El area de widgets en la columna izquierda del footer'),
    'before_widget'=>'<li id="%1$s" class="widget-container %2$s">',
    'after_widget'=>'</li> <br/>',
    /*'befote_title'=>'<h5>',*/
    'after_title'=>'<hr/>',    
)
);

// Agregando las areas para widgets seran 3 columnas en el footer
register_sidebar( array(
    'name'=>_('Footer columna central'),
    'id'=>'footer-center-column',
    'description'=>_('El area de widgets en la columna central del footer'),
    'before_widget'=>'<li id="%1$s" class="widget-container %2$s">',
    'after_widget'=>'</li> <br/>',
    /*'befote_title'=>'<h5>',*/
    'after_title'=>'<hr/>',    
)
);

// Agregando las areas para widgets seran 3 columnas en el footer
register_sidebar( array(
    'name'=>_('Footer columna derecha'),
    'id'=>'footer-right-column',
    'description'=>_('El area de widgets en la columna derecha del footer'),
    'before_widget'=>'<li id="%1$s" class="widget-container %2$s">',
    'after_widget'=>'</li> <br/>',
    /*'befote_title'=>'<h5>',*/
    'after_title'=>'<hr/>',    
)
);

//Registrando el menu primario
register_nav_menus(
    array(
    'primary-menu' => __( 'Primary Menu' )    
    )
);
//Tratamiento
function change_submenu_class($menu) {  
  //$menu = preg_replace('/ class="sub-menu"/','/ class="myclass" /',$menu);  
    $myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);
  return $menu;  
}  
add_filter('wp_nav_menu','change_submenu_class', 1, 2);  

function add_menu_link_class( $atts, $item, $args ) {
  if (property_exists($args, 'link_class')) {
    $atts['class'] = $args->link_class;
  }
  return $atts;
}
add_filter( 'nav_menu_link_attributes', 'add_menu_link_class', 1, 3 );

//Agregando feature de custom header img
$headerconfig= array(
    'flex-width'=>true,
    'width'=>1600,
    'flex-height'=>true,
    'height'=>340,    
);
//Hace que la pagina Header aparezca en el dashboard
add_theme_support( 'custom-header', $headerconfig );

function theme_prefix_setup() {
	
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 80,
		'flex-width' => true,
	) );

}
add_action( 'after_setup_theme', 'theme_prefix_setup' );


