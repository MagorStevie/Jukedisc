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
        <form method="get" class="form-example">
            <div class="form-example">
                <label for="name">Zadejte jméno: </label>
                <input class="formin" type="name" name="name" id="name" required />
            </div>
            <div class="form-example">
                <label for="email">Zadejte email: </label>
                <input class="formin" type="email" name="email" id="email" required />
            </div>
            <div class="form-exmple">
                <label for="name">Zpráva: </label>
                <textarea class="form-zprava" type="zprava" name="zprava" id="zprava" required></textarea>
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