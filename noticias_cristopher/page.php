<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
    <header>
        <h1>Estoy en page.php</h1>
        <div class="logo">
            <img src="<?php echo get_template_directory_uri();?>/images/logo.jpg" alt = "logo">
        </div>
    <?php
        $arg = array(
            'theme_location' => 'main-menu',
            'container' => 'nav',
            'container_class' => 'main-nav',
            'menu_class' => 'main-nav'
        );
        wp_nav_menu($arg);
    ?>
    </header>
    <main>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
                the_content();
            endwhile;
        else :
            echo '<p>No se encontraron páginas.</p>';
        endif;
        ?>
    </main>
    <footer class='estatico_foot'>
        <footer>
    <?php
    if (has_nav_menu('footer-menu')) {
        wp_nav_menu(array(
            'theme_location' => 'footer-menu',
            'container' => 'nav',
            'container_class' => 'footer-nav',
            'menu_class' => 'footer-menu',
            'fallback_cb' => false
        ));
    }
    ?>
</footer>
    </footer>
    
</body>
</html>