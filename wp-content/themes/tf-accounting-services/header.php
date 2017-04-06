<?php
    /* Header Template */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <nav class="clearfix main-navigation-container mobile-menu">
            <a href="#" id="menu-icon"><img src="<?php bloginfo('template_url')?>/images/icon-menu.png" alt="" class="menu-icon"></a>
            <a href="http://localhost/"><img src="<?php bloginfo('template_url')?>/images/T&FTaxservices-logo.png" alt="" class="logo"></a>

                <?php
                    wp_nav_menu( $arg = array (
                            'menu_class' => 'main-navigation',
                            'theme_location' => 'primary'
                    ));
                ?>
            
        </nav>
    </header>