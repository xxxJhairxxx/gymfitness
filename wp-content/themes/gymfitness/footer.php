
    <footer class="footer contenedor">

        <hr>
        <div class="contenido-footer">
            <?php
                $arg = array('theme_location' => 'menu-principal','container' => 'nav','container_class'=> 'menu-principal');
                wp_nav_menu( $arg  );
            ?>
            <p class='copyright'>Todos los derechos reservados. <?php echo get_bloginfo().' '. date('Y'); ?></p>
        </div>
        
    </footer>
    <?php wp_footer();//habilita el menu del admin ?>
</body>
</html>
