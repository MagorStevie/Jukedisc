<?php
    include "includes/menu.php";
?>

<main class="auth-page" id="main-content" tabindex="-1">
    <section class="auth-card">
        <div class="auth-intro">
            <p class="section-eyebrow">Přidejte se k nám</p>
            <h1>Vytvořit účet</h1>
            <p>Mějte své hudební vybavení a nákupy vždy po ruce.</p>
        </div>

        <div class="auth-fields">
            <label class="auth-field">
                <span>Jméno nebo přezdívka</span>
                <input type="text" placeholder="Jak vám máme říkat?" autocomplete="name">
            </label>
            <label class="auth-field">
                <span>E-mail</span>
                <input type="email" placeholder="vas@email.cz" autocomplete="email">
            </label>
            <div class="auth-field-row">
                <label class="auth-field">
                    <span>Město</span>
                    <input type="text" placeholder="Město" autocomplete="address-level2">
                </label>
                <label class="auth-field">
                    <span>PSČ</span>
                    <input type="text" inputmode="numeric" placeholder="110 00" autocomplete="postal-code">
                </label>
            </div>
            <label class="auth-field">
                <span>Ulice</span>
                <input type="text" placeholder="Ulice a číslo popisné" autocomplete="street-address">
            </label>
            <label class="auth-field">
                <span>Heslo</span>
                <input type="password" placeholder="Zvolte si heslo" autocomplete="new-password">
            </label>
            <label class="auth-field">
                <span>Kontrola hesla</span>
                <input type="password" placeholder="Zadejte heslo znovu" autocomplete="new-password">
            </label>
        </div>

        <p class="auth-notice">Registrace zatím není propojena s uživatelským účtem.</p>
        <button class="auth-submit" type="button" disabled>Registrace bude brzy dostupná</button>
        <p class="auth-switch">Už u nás máte účet? <a href="login.php">Přihlásit se</a></p>
    </section>
</main>

<?php
    include "includes/footer.php";
?>