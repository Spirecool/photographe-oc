<!DOCTYPE html>

<!-- définit automatiquement la langue du document -->
<html <?php language_attributes(); ?>>

<head>
    <!-- définit l'encodage du site, par défaut en UTF-8 -->
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <!-- Sert à déclarer le chargement des scripts et des styles -->

    <?php wp_head(); ?>
</head>

<body>
    <main class="container">
        <header id="header">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <!-- Logo -->
                    <a class="navbar-brand" href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Logo" id="logo"">
                    </a>

                    <!-- Bouton pour afficher le menu sur les petits écrans -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <!-- Barre de navigation -->
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <?php wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'container' => false,
                            'menu_class' => 'navbar-nav ms-auto menu_nav',
                            'fallback_cb' => '__return_false',
                            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth' => 2
                            ));
                        ?>
                        <?php get_template_part( 'modal'); ?>
                        <button type="button" id="contact-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Contact
                        </button>
                    </div>
                </div>
            </nav>
        </header>
    </main>
   