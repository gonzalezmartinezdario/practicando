$(document).ready(function(){
    function checkWidth(){
        if($(window).width()<=768){
            //La ventana es chica
            $('nav').addClass('bg-light');
            //$('.navbar-brand').addClass('logo-nav');
            if($('nav div.dropdown-divider').hasClass('dropdown-divider-style')){
                $('nav div.dropdown-divider').removeClass('dropdown-divider-style')
            }
            
        }
        else{
            //La ventana es  mediana o grande
            //Si la nav tiene la clase bg light se la quitamos
            if($('nav').hasClass('bg-light')){
                $('nav').removeClass('bg-light');
            }
            
            //if($('nav').hasClass('logo-nav')){
              //  $('nav').removeClass('logo-nav');
            //}
            
            if(!$('nav div.dropdown-divider').hasClass('dropdown-divider-style')){
                $('nav div.dropdown-divider').addClass('dropdown-divider-style')
            }
            
        }
    }    
    function navInit(){
    //Poniendo la clase dropdown solo a los elementos li de primer nivel que contienen un submenu    
    $('header nav ul#primary-menu').children('li').has('ul').addClass('dropdown');
    
    //añadiendo las propiedades a los elementos a dentro de los elementos dropdown
    $('header nav ul#primary-menu li.dropdown').children('a').addClass('dropdown-toggle').attr({"id":"navbarDropdownMenuLink", "data-toggle":"dropdown", "aria-haspopup":"true", "aria-expanded":"false"});
    
    //Agregar la configuracion a los sub menus ul de primer nivel
    $('header nav ul#primary-menu li.dropdown').children('ul').addClass('dropdown-menu').attr("aria-labelledby","navbarDropdownMenuLink");
    
    //dentro de los dropdown menu quitamos la clase nav link !!se puede mejorar!!
    $('ul.dropdown-menu').find('a').removeClass('nav-link');
    
    //dentro de los dropdown menu agregamos la clase dropdown-menu para que se vea bien
    $('ul.dropdown-menu').find('a').addClass('dropdown-item');
    
    //dentro de los dropdown menu en los li que guardan otro ul agregamos la clase dropdown submenu p
    $('ul.dropdown-menu').find('li').has('ul').removeClass('nav-item').addClass('dropdown-submenu');
    
    //a los a que son el link para abrir el submenu anidado se le pone la clase dropdown toggle
    $('li.dropdown-submenu').children('a').addClass('dropdown-toggle');    
    //a los ul dentro de los dropdown menus se le pone la clase dropdown menu
    $('li.dropdown-submenu').children('ul').addClass('dropdown-menu');
    
    //Poner el divider a cada indice de los submenus
    //$('ul#primary-menu').find('a.dropdown-item').not('a.dropdown-toggle').after('<div class="dropdown-divider"></div>');
        
    //Poniendo todos los dividers
    $('ul#primary-menu').find('li').not('li:last-child').find('a').not('a.dropdown-toggle').after('<div class="dropdown-divider"></dv>');   
    
    //Se le quitan los dividers a los ul mas anidados(ul dentro de ul pero que no contiene ul)
    $('ul#primary-menu ul.dropdown-menu:not(:has("ul.dropdown-menu"))').children('li:last-child').children('div').remove();   
    
    checkWidth();
    }    
    navInit();
    
$(window).resize(function(){
    checkWidth();
});
$('a.dropdown-toggle').on('click', function(e) {
  if (!$(this).next().hasClass('show')) {
    $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
  }
  var $subMenu = $(this).next(".dropdown-menu");
  $subMenu.toggleClass('show');


  $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
    $('.dropdown-submenu .show').removeClass("show");
  });


  return false;
});
    
    
    
    //console.log(document.body.innerHTML);
});
    
