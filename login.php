<?php
    include "includes/menu.php";
?>

    <div class="container2">

    <div class="login-center">
        <div class="login-nadpis">
            <h1 class="login"> Registrace </h1>
        </div>
    </div>

        <div class="registration-data">
            <input type="email" placeholder="Email" class="login-text">
            <input type="password" placeholder="Heslo" class="login-password">
            <input type="password" placeholder="Kontrola hesla" class="login-password">
            
        <button class="login-btn"> Log In </button>
        <span class="login"> Nemáte účet? <a href="register.php" class="log-in"> Registrovat </a> </span>

        </div>

    </div>

    </div>

<?php
    include "includes/footer.php";
?>