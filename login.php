<?php
    include "includes/menu.php";
?>

<div class="container2">

    <div class="login-center">
        <div class="login-nadpis">
            <h1 class="login"> Log In </h1>
        </div>
    </div>

    <div class="login-data-center">
        <div class="login-data">
            <input type="email" placeholder="Email" class="login-text">
            <input type="password" placeholder="Heslo" class="login-password">
            <input type="password" placeholder="Kontrola hesla" class="login-password">
            
        <a href="#"> <button class="login-btn"> Log In </button> </a>
        <span class="login"> <p> Nemáte účet? </p> <a href="register.php" class="log-in"> Registrovat </a> </span>

        </div>

    </div>

</div>

<?php
    include "includes/footer.php";
?>