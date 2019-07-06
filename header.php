<?php
/*
 * Esta es la plantilla que contiene la cabecera de la pagina
*/
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js" >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title><?php esc_attr(bloginfo('name')); ?></title>
    <?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php echo esc_url( get_bloginfo( 'pingback_url' ) ); ?>">
	<?php endif; ?>	    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
    <script type="application/javascript" src="wp-content\themes\practicando\gui.js"></script>
    <link rel="stylesheet" href="'wp-content\themes\practicando\style.css'">
    <?php wp_head(); ?>
</head>
<body class="<?php body_class(); ?>">            

    
        <header id="masthead" class="site-header">                        
          
                          
          
           <!--Poniendo la image de header-->
            <?php if(get_header_image()): 
                $custom_header_sizes= apply_filters(
                    'tienda_seguridad_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, (max-width: 1280px) 100vw' 
                );                
            ?>            
            <div class="header-image">                    					
						<img src="<?php header_image(); ?>" srcset="<?php echo esc_attr( wp_get_attachment_image_srcset( get_custom_header()->attachment_id ) ); ?>" sizes="<?php echo esc_attr( $custom_header_sizes ); ?>" width="<?php echo esc_attr( get_custom_header()->width ); ?>" height="<?php echo esc_attr( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" class="banner">					
				</div><!-- .header-image -->
			<?php endif; // End header image?>     
       
       
           <!--Si hay nav la agregamos-->
          <?php if(has_nav_menu('primary-menu')): ?>                              
          <nav id="mastnav" class="navbar navbar-expand-md navbar-light">                       
          <!--Si hay logo disponible se agregar-->
           <?php if(function_exists('the_custom_logo')):
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
                <a href="<?php esc_url(home_url('/')); ?>" class="navbar-brand d-sm-none d-none d-md-block">
                <img src="<?php echo $logo[0];?>" alt="El logo de mi tienda" width="<?php echo $logo[1];?>" height="<?php echo $logo[2];?>">
                </a>
            <?php endif;?>                  
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <!--Si hay logo disponible se agregar-->
            
            <!--Poniendo la nav del usuario-->            
                <?php 
                    $navArgs=array(
                        'theme_location'=>'primary-menu',
                        'menu_class'=>'navbar-nav',    
                        'menu_id'=>'primary-menu',
                        'container_class'=>'collapse navbar-collapse justify-content-center',
                        'container_id'=>'navbarNavDropdown',                        
                        'link_class'=>'nav-link',                        
                    );
                    
                    wp_nav_menu($navArgs);
                ?>            
            <!--Poniendo la nav del usuario-->                       
          </nav>          
          <?php endif ?>  
          <!--El logo que ira en medio-->
          <?php if(function_exists('the_custom_logo')):
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );?>
                <a href="<?php esc_url(home_url('/')); ?>" class="navbar-brand center-brand d-md-none d-lg-none">
                <img src="<?php echo $logo[0];?>" alt="El logo de mi tienda" width="<?php echo $logo[1];?>" height="<?php echo $logo[2];?>">
                </a>
            <?php endif;?>                  
        
        </header>

        <p>hola</p>
        
