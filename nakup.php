<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $json = file_get_contents('products.json');
    $products = json_decode($json, true);

    foreach ($products as $product) {
        if ($product['id'] == $id) {
            $nazev = $product['nazev'];
            $popis = $product['popis'];
            $cena = $product['cena'];
            $obrazek = $product['obrazek'];
            break;
        }
    }
} else {
    header('location: index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product | Jukedisc</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>
<?php
    include "includes/menu.php";

    echo('
    <div class="container">
        <div class="nakup">
            <div class="nakup-img">
                <img src="pictures/' . $obrazek . ' " alt="" class="nakup-item-img">
            </div>
            <div class="nakup-name">
                <h2>' . $nazev . '</h2>
                <div class="nakup-item">
                    <p> ' . $popis . ' </p>
                </div>
                <div class="nakup-price">
                    <span class="price">' . $cena . '</span>
                </div>
            </div>
        </div>
    </div>
    ');

    include "includes/footer.php";
?>