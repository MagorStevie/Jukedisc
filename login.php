<?php
    include "includes/menu.php";
?>

<main class="auth-page" id="main-content" tabindex="-1">
    <section class="auth-card auth-card-compact">
        <div class="auth-intro">
            <p class="section-eyebrow">Vítejte zpět</p>
            <h1>Přihlášení</h1>
            <p>Přihlaste se ke svému účtu Jukedisc.</p>
        </div>

        <div class="auth-fields">
            <label class="auth-field">
                <span>E-mail</span>
                <input type="email" placeholder="vas@email.cz" autocomplete="email">
            </label>
            <label class="auth-field">
                <span>Heslo</span>
                <input type="password" placeholder="Vaše heslo" autocomplete="current-password">
            </label>
        </div>

        <p class="auth-notice">Přihlášení zatím není propojeno s uživatelským účtem.</p>
        <button class="auth-submit" type="button" disabled>Přihlášení bude brzy dostupné</button>
        <p class="auth-switch">Ještě nemáte účet? <a href="register.php">Vytvořit účet</a></p>
    </section>
</main>

<?php
    include "includes/footer.php";
?>