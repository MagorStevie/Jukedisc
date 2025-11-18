<?php
    include "includes/menu.php";
?>

    <div class="container2">

    <div class="registration-center">
        <div class="registration-nadpis">
            <h1 class="registration"> Registrace </h1>
        </div>
    </div>

        <div class="registration-data">
            <input type="text" placeholder="Jméno nebo přezdívka" class="reg-text">
            <input type="email" placeholder="Email" class="reg-text">
            <div>
                <input type="text" placeholder="Město" class="reg-mensi-text">
                <input type="number" placeholder="PSČ" max="99999" maxlength="5" class="reg-mensi-text">
            </div>
            <input type="text" placeholder="Ulice" class="reg-text">
            <input type="password" placeholder="Heslo" class="reg-password">
            <input type="password" placeholder="Kontrola hesla" class="reg-text">
            
        <button class="reg-btn"> Registrovat </button>
        <a href="login.php" class="log-in"> Log In </a>

        </div>

    </div>

<?php
    include "includes/footer.php";
?>