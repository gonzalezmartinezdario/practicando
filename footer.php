<?php 
/*
*   Este es el pie de pagina en wordpress
*/
?>
<br>
</div> <!--.site content (se abrio en el header)-->
<footer id="colophon" class="site-footer" role="contentinfo">
    <di class="container footer-row-container">
        <div class="row">
            <div class="col-md"><?php dynamic_sidebar('Footer columna izquierda'); ?></div>
            <div class="col-md"><?php dynamic_sidebar('Footer columna central'); ?></div>
            <div class="col-md"><?php dynamic_sidebar('Footer columna derecha'); ?></div>
        </div>
           <div class="row">
            <div class="col-md"></div>
            <div class="col-md" style="text-align:center; color: white;">&reg;<span><?php bloginfo('url'); ?></span></div>
            <div class="col-md"></div>
        </div>
    </di>
</footer>
<?php wp_footer(); ?>
</body>
</html>