<body <?php body_class('site'); ?>> <!-- permet d'obtenir des noms de classe css en fonction de la page visitée -->

    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <header class="site_header">
                         <?php wp_nav_menu(
                    array(
                        'theme_location' => 'nav_menu',
                        'container' => 'ul', //afin d'éviter que WP ajoute un div autour
                        'menu_class' => 'site_header_menu', //ma classe personnalisée
                    )
                ); ?>
                </div>
            </nav>
        </header>