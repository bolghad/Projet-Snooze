<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Votre description ici">
    <title>Snooze</title>

    <!-- Lien vers la bibliothèque Bootstrap depuis un CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Lien vers le fichier CSS global -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/styles.css">
    <!-- ... autres balises head ... -->
    <style>
        #loading-bar::after {
            content: '';
        position: absolute;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 15px;
        height: 15px;
        background: url('<?php echo get_template_directory_uri(); ?>/img/icone.png') no-repeat;
        background-size: cover;
    }
    </style>
    <?php wp_head(); ?>
</head>

<body style="background: linear-gradient(#000 20%, #666334,  50% hsl(120, 50%, 50%))">
    <!-- Barre de chargement -->
    <div id="loading-container">
        <div id="loading-bar"></div>
        <div id="current-time"></div>
    </div>

<!-- En-tête -->
<header class="fixed-top" id="site-header">
    <div class="container">
            <div class="header-content">
                <!-- Boutons de gauche (visible sur desktop) -->
                <div class="header-buttons-left">
                    <div class="dropdown">
                        <button class="header-button">Conseils</button>
                        <div class="dropdown-content">
                            <a href="#">Troubles</a>
                            <a href="#">Guides</a>
                        </div>
                    </div>
                    <a class="header-button">Carte</a>
                    <a class="header-button">Professionnels</a>
                </div>
                <!-- Logo (visible sur desktop) -->
                <div id="logo-container">
                    <a href="index.php">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Snooze" id="logo">
                    </a>
                </div>
                <!-- Boutons de droite (visible sur desktop) -->
                <div class="header-buttons-right">
                    <div class="dropdown">
                        <button class="header-button">Journal</button>
                        <div class="dropdown-content">
                            <a href="#">Dashboard</a>
                            <a href="#">Carnet</a>
                            <a href="#">Paramètres</a>
                        </div>
                    </div>
                    <a class="header-button" href="<?php echo get_template_directory_uri(); ?>/pages/compte/inscription.php">Connexion</a>
                    <div class="dropdown">
                        <button class="header-button">Fr</button>
                        <div class="dropdown-content">
                            <a href="#">Fr</a>
                            <a href="#">En</a>
                            <a href="#">Nl</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    <!-- Mobile -->
    <!-- Bouton du menu burger (visible sur mobile) -->
<div id="burger-menu-icon">
    <img id="burger-mobile" src="<?php echo get_template_directory_uri(); ?>/img/burger.png" alt="Menu">
</div>

<!-- Logo (visible sur mobile) -->
<div id="mobile-logo-container">
    <a href="index.php">
        <img id ="logo-mobile" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Snooze" id="mobile-logo">
    </a>
</div>

<!-- Boutons pour le menu mobile -->
<div id="mobile-buttons">
    <div class="dropdown">
        <button class="header-button">Conseils</button>
        <div class="dropdown-content">
            <a href="#">Troubles</a>
            <a href="#">Guides</a>
        </div>
    </div>
    <a class="header-button">Carte</a>
    <a class="header-button">Professionnels</a>
    <div class="dropdown">
        <button class="header-button">Journal</button>
        <div class="dropdown-content">
            <a href="#">Dashboard</a>
            <a href="#">Carnet</a>
            <a href="#">Paramètres</a>
        </div>
    </div>
    <a class="header-button" href="<?php echo get_template_directory_uri(); ?>/pages/compte/inscription.php">Connexion</a>
    <div class="dropdown">
        <button class="header-button">Fr</button>
        <div class="dropdown-content">
            <a href="#">Fr</a>
            <a href="#">En</a>
            <a href="#">Nl</a>
        </div>
    </div>
</div>

</header>

</div>
