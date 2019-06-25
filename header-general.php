<!DOCTYPE html>
<html lang="en">

    <head>
        <!-- Required meta tags always come first -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <title>
            <?php bloginfo( 'name' ); ?>
        </title>
    </head>
    <header>
    <!--Navbar-->

    <nav class="navbar py-2 fixed-top navbar-expand-lg navbar-dark white accent-4 nav-onama">
        <div class="container">
        <span class="navbar-brand mb-0" href="#">
            <?php
                    // Display the Custom Logo
                    the_custom_logo();

                    // No Custom Logo, just display the site's name
                    if (!has_custom_logo()) {
                        ?>
                        <h5><?php bloginfo('name'); ?></h5>
                        <?php
                    }
                    ?>
            
            </span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <?php
                        if ( has_nav_menu( 'navbar' ) ) {
                            wp_nav_menu( array(
                            'menu'              => 'navbar',
                            'theme_location'    => 'navbar',
                            'depth'             => 2,
                            'menu_class'        => 'navbar-nav mr-auto',
                            'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                            'container'         => false 
                             
                            ) );
                            
                        } else
                        echo "Please assign Navbar Menu in Wordpress Admin -> Appearance -> Menus -> Manage Locations";
                        ?> 
                </ul>
                
            </div>
        </div>
    </nav>
    
    <!--/.Navbar-->

    <?php wp_head(); ?>
    </header> 

<body>