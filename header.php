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
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>   
    <script type="application/javascript" src="wp-content\themes\practicando\gui.js"></script>
    <link rel="stylesheet" href="'wp-content\themes\practicando\style.css'">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>            
<!--
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="#">Hidden brand</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
   <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown link
        </a>
        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Submenu</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Submenu action</a></li>
              <li><a class="dropdown-item" href="#">Another submenu action</a></li>


              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Subsubmenu</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                  <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu"><a class="dropdown-item dropdown-toggle" href="#">Second subsubmenu</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Subsubmenu action</a></li>
                  <li><a class="dropdown-item" href="#">Another subsubmenu action</a></li>
                </ul>
              </li>



            </ul>
          </li>
        </ul>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
   -->
    
        <header id="masthead" class="site-header">                
           <!--Poniendo la image de header-->
            <?php if(get_header_image()): 
                $custom_header_sizes= apply_filters(
                    'tienda_seguridad_custom_header_sizes', '(max-width: 709px) 85vw, (max-width: 909px) 81vw, (max-width: 1362px) 88vw, (max-width: 1280px) 100vw' 
                );                
            ?>        
                <div class="banner" style="background-image: url('<?php header_image(); ?>'); "></div>    
            
			<?php endif;?>
       
       
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
<div class="site-content">
       <br>
        
