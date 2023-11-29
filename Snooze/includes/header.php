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
                <!-- Boutons de gauche -->
                <div class="header-buttons-left">
                    <button class="header-button">Conseils</button>
                    <button class="header-button">Carte</button>
                    <button class="header-button">Professionnels</button>
                </div>
                <!-- Logo -->
                <div id="logo-container">
                    <a href="index.php">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Logo Snooze" id="logo">
                    </a>
                </div>
                <!-- Boutons de droite -->
                <div class="header-buttons-right">
                    <button class="header-button">Journal</button>
                    <button class="header-button">Discussion</button>
                    <button class="header-button" id="lang-toggle">FR</button>
                </div>
            </div>
        </div>
    </header>
