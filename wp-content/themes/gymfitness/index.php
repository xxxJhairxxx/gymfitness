<!DOCTYPE html>
<html <?php language_attributes() ?> >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <div class="contenedor barra-navegacion">
            <div class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="logo">
            </div>

            <?php

                $arg = array('theme_location' => 'menu-principal');
                
                wp_nav_menu( $arg  )

            ?>
            
        
            
        </div>

    </header>

<main>

<?php

    while(have_posts()) : the_post();

    the_title();
    the_content();
    
    endwhile;

?>
</main>
    
</body>
</html>
