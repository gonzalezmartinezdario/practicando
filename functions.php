<?php 

register_nav_menus(
    array(
    'primary-menu' => __( 'Primary Menu' )    
    )
);

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
    'width'=>1200,
    'flex-height'=>true,
    'height'=>280,    
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


