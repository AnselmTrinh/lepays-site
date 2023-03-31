<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
    <?php wp_head(); ?>
</head>


<!-- /* Style pour la navigation */ -->
<style>
.navbar {
    background-color: #fff;
    border-bottom: none;
    box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.1);
    padding: 10px 20px;
    transition: all 0.3s ease-in-out;
}

.navbar:hover {
    box-shadow: 0px 1px 15px rgba(0, 0, 0, 0.2);
}

.navbar-brand img {
    height: 50px;
}

.navbar-nav {
    margin-left: auto;
}

.nav-item {
    position: relative;
}

.nav-link {
    color: #333;
    font-weight: 500;
    font-size: 16px;
    transition: all 0.3s ease-in-out;
    padding: 10px;
    border-radius: 5px;
}

.nav-link:hover {
    color: #007bff;
    background-color: #f5f5f5;
}

.nav-item:after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    height: 2px;
    background-color: #007bff;
    transform: scaleX(0);
    transition: all 0.3s ease-in-out;
    transform-origin: left;
}

.nav-item:hover:after {
    transform: scaleX(1);
}

.dropdown-toggle::after {
    display: none;
}

.dropdown-menu {
    border-radius: 5px;
    box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.1);
}

.dropdown-item {
    font-weight: 500;
    font-size: 14px;
    color: #333;
    padding: 10px 20px;
    transition: all 0.3s ease-in-out;
}

.dropdown-item:hover {
    background-color: #f5f5f5;
}

@media (max-width: 991.98px) {
    .navbar-collapse {
        margin-top: 10px;
        box-shadow: 0px 1px 10px rgba(0, 0, 0, 0.1);
    }

    .navbar-nav {
        flex-direction: column;
    }

    .nav-item {
        margin: 5px 0;
    }

    .nav-item:after {
        display: none;
    }

    .dropdown-menu {
        border: none;
        box-shadow: none;
    }

    .dropdown-item {
        border-radius: 0;
    }
}

.navbar-logo img {
    width: 150px;
    height: 150px;
}

.navbar {
    background-color: #8ecae6
}
</style>


<body <?php body_class(); ?>>

    <header>
        <!-- Votre code pour l'en-tête du site -->
        <nav class="navbar">
            <div class="navbar-logo">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <img src="https://i.imgur.com/tG543Ev.png" alt="Logo">
                </a>
            </div>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">Accueil</a>
                </li>
                <?php
        $pages = get_pages(); // Récupère toutes les pages
        foreach ( $pages as $page ) {
          $page_link = get_page_link( $page->ID ); // Récupère le lien de la page
          $page_title = $page->post_title; // Récupère le titre de la page
          ?>
                <li class="nav-item">
                    <a class="nav-link"
                        href="<?php echo esc_url( $page_link ); ?>"><?php echo esc_html( $page_title ); ?></a>
                </li>
                <?php } ?>
            </ul>
        </nav>
    </header>



    <?php get_template_part( 'navbar' ); ?>




    <?php wp_footer(); ?>