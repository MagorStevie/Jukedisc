<?php
    include "includes/menu.php";
?>

<div class="container">

    <div class="aktuality">
        <div class="aktuality_img">
            <button class="btn-left"> < </button>
            <div class="santa-guitar"></div>
            <button class="btn-right"> > </button>
        </div>
    </div>

    <div class="nabidka">
        <h2> Nabídka produktů: </h2>
    </div>

    <div class="list">
<?php 
    $json = file_get_contents('products.json');
    $products = json_decode($json, true);

    foreach ($products as $product) {
        $popis = (mb_strlen($product['popis'], 'UTF-8') > 50) ? mb_substr($product['popis'], 0, 50, 'UTF-8') . '...' : $product['popis'];
        echo('

    <div class="list">
            <a class="item" href="nakup.php?id=' . $product['id'] . '">   
                <img src="pictures/' . $product['obrazek'] . '" alt="" class="item-img">
                    <h2>' . $product['nazev'] . '</h2>
                    <p>' . $popis . '</p>
                    <p>' . $product['cena'] . '</p> 
            </a>
    </div>');
    }
?>
    </div>

</div>

<?php
    include "includes/footer.php";
?>