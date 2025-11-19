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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
</html>

<script>
function openPopup() {
    document.getElementById("myModal").style.display = "flex";
}

function closePopup() {
    document.getElementById("myModal").style.display = "none";
}

</script>

<?php
    include "includes/menu.php";

    echo('
    <div class="container">
        <div class="nakup">
            <div class="nakup-spolu">
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
                    <div class="nakup-btn">
                        <button id="openModalBtn" class="btn-price" onclick="openPopup()"> Přidat do košíku </button>
                    </div>
                </div>
            </div>

                <div class="nakup-podrobnejsi-info">
                    <div class="podrobnejsi-info">
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et lacus consequat, hendrerit turpis et, sagittis tortor. Mauris feugiat </p>
                        <p> egestas lorem. Nam vel facilisis nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris </p>                        
                        <p> arcu velit, maximus a mattis non, sodales vitae ligula. Integer non massa in tortor commodo faucibus. In vestibulum diam eget quam </p>
                        <p> fermentum cursus. Nunc quis est erat. Suspendisse vitae velit urna. Quisque eros ante, sagittis et maximus at, posuere sed purus. </p>
                    </div>
                    <div class="podrobnejsi-info2">
                        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris et lacus consequat, hendrerit turpis et, sagittis tortor. Mauris feugiat </p>
                        <p> egestas lorem. Nam vel facilisis nisl. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris </p>                        
                        <p> arcu velit, maximus a mattis non, sodales vitae ligula. Integer non massa in tortor commodo faucibus. In vestibulum diam eget quam </p>
                        <p> fermentum cursus. Nunc quis est erat. Suspendisse vitae velit urna. Quisque eros ante, sagittis et maximus at, posuere sed purus. </p>
                    </div>
                </div>
        </div>
    </div>

            <div class="modal" id="myModal" style="display: none;">
                <div class="modal-content">
                    <span class="close" onclick="closePopup()"> &times; </span>
                    <h2> Došlo k chybě </h2>
                    <p> Zkuste to později </p>
                </div>
            </div>
    ');

    include "includes/footer.php";
?>