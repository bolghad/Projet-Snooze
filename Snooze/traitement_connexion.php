<!-- traitement_connexion.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Valider les informations de connexion (vous devrez implémenter votre propre logique ici)

    // Rediriger l'utilisateur après la connexion
    header("Location: dashboard.php");
    exit();
}
?>
