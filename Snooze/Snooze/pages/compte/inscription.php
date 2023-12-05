<?php include 'includes/header.php'; ?>


    <section id="inscription">
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2>Inscription</h2>
                    <?php
                    if (isset($_POST['register_nonce']) && wp_verify_nonce($_POST['register_nonce'], 'register')) {
                        // Traitement du formulaire d'inscription
                        $username = sanitize_user($_POST['user_login']);
                        $email = sanitize_email($_POST['user_email']);
                        $password = $_POST['user_password'];

                        $user_id = wp_create_user($username, $password, $email);

                        if (is_wp_error($user_id)) {
                            echo '<p class="error-message">' . esc_html($user_id->get_error_message()) . '</p>';
                        } else {
                            echo '<p class="success-message">Inscription réussie. Connectez-vous maintenant.</p>';
                        }
                    }
                    ?>

                    <form action="<?php echo esc_url(site_url('wp-login.php?action=register', 'login_post')); ?>" method="post">
                        <?php wp_nonce_field('register', 'register_nonce'); ?>

                        <label for="user_login">Nom d'utilisateur :</label>
                        <input type="text" name="user_login" id="user_login" required />

                        <label for="user_email">Adresse e-mail :</label>
                        <input type="email" name="user_email" id="user_email" required />

                        <label for="user_password">Mot de passe :</label>
                        <input type="password" name="user_password" id="user_password" required />

                        <input type="submit" value="S'inscrire" />
                    </form>
                </div>
            </div>
        </div>
    </section>
    <a href="<?php echo get_template_directory_uri(); ?>/pages/compte/connexion.php">Connexion</a>

<?php include 'includes/footer.php'; ?>
