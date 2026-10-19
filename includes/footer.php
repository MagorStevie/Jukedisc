<footer class="site-footer">
    <div class="site-footer-main">
        <div class="footer-brand">
            <a href="index.php" aria-label="Jukedisc – úvodní stránka">
                <img src="pictures/logo+obrazek.png" alt="Jukedisc" class="footer-logo">
            </a>
            <p>Hudební nástroje a vybavení pro každý nový začátek i velké vystoupení.</p>
        </div>

        <nav class="footer-column" aria-label="Obchod">
            <h2>Obchod</h2>
            <a href="index.php">Domů</a>
            <a href="index.php#produkty">Nabídka produktů</a>
            <a href="shopping-list.php">Nákupní košík</a>
        </nav>

        <nav class="footer-column" aria-label="Váš účet">
            <h2>Váš účet</h2>
            <a href="register.php">Registrace</a>
            <a href="login.php">Přihlášení</a>
        </nav>

        <div class="footer-column footer-social">
            <h2>Sledujte nás</h2>
            <a href="https://www.instagram.com/jukedisc_/" target="_blank" rel="noopener noreferrer">
                <img src="pictures/instagram-icon.png" alt="" class="icon">
                Instagram <span>@jukedisc_</span>
            </a>
        </div>
    </div>

    <div class="site-footer-bottom">
        <p>&copy; <?= date('Y') ?> Jukedisc</p>
        <a href="index.php">Najdi rytmus ve svém srdci.</a>
    </div>
</footer>
<script src="script.js" defer></script>
</body>
</html>
