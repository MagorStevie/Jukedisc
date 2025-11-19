<!DOCTYPE html>
<html lang="cs">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JukeDisc</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
</head>

<body>

    <?php
    include("includes/header.php")
    ?>
    <div class="login">
        <h2>Nezaujaly vás klasické produkty, napište nám svou představu a mi ji převedeme do reality</h2>
        <form method="get" class="form-example">
            <div class="form-example">
                <label for="name">Zadejte jméno: </label>
                <input class="formin" type="name" name="name" id="name" required />
            </div>
            <div class="form-example">
                <label for="email">Zadejte email: </label>
                <input class="formin" type="email" name="email" id="email" required />
            </div>
            <select class="formin" id="what" name="what">
                <option value="klas">Klasická kytara</option>
                <option value="el">Elektrická kytara</option>
                <option value="bas">Baskytara</option>
                <option value="uk">Ukulele</option>
            </select>
            <div class="form-example">
                <label for="fish">Zadejte přání:</label>
                <textarea class="form-zprava" id="fish" type="text"></textarea>
            </div>
            <div class="form-example">
                <label for="adres">Zadejte adresu:</label>
                <input type="text" class="formin" id="adres">
            </div>
            <div class="form-example">
                <input class="submit" type="submit" value="Odeslat" />
            </div>
        </form>
    </div>

    <?php
    include("includes/footer.php")
    ?>

</body>

</html>