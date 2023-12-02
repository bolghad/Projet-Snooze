<?php include 'includes/header.php'; ?>


<section id="connexion">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Connexion</h2>
                <?php
                if (isset($_POST['login_nonce']) && wp_verify_nonce($_POST['login_nonce'], 'login')) {
                    // Traitement du formulaire de connexion
                    $login_data = array(
                        'user_login'    => sanitize_user($_POST['user_login']),
                        'user_password' => $_POST['user_password'],
                        'remember'      => true,
                    );

                    $user = wp_signon($login_data, false);

                    if (is_wp_error($user)) {
                        echo '<p class="error-message">' . esc_html($user->get_error_message()) . '</p>';
                    } else {
                        echo '<p class="success-message">Connexion réussie.</p>';
                        // Redirection vers la page après connexion
                        wp_redirect(home_url('/tableau-de-bord/'));
                        exit;
                    }
                }
                ?>

                <form action="<?php echo esc_url(site_url('wp-login.php', 'login_post')); ?>" method="post">
                    <?php wp_nonce_field('login', 'login_nonce'); ?>

                    <label for="user_login">Nom d'utilisateur ou adresse e-mail :</label>
                    <input type="text" name="user_login" id="user_login" required />

                    <label for="user_password">Mot de passe :</label>
                    <input type="password" name="user_password" id="user_password" required />

                    <input type="submit" value="Se Connecter" />
                </form>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>
