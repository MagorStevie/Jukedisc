<?php
$products = json_decode(file_get_contents('products.json'), true);
$products = is_array($products) ? $products : [];
$query = isset($_GET['q']) && is_string($_GET['q']) ? trim($_GET['q']) : '';
$selectedCategory = isset($_GET['category']) && is_string($_GET['category']) ? $_GET['category'] : '';
$minPriceInput = isset($_GET['min_price']) && is_string($_GET['min_price']) ? $_GET['min_price'] : '';
$maxPriceInput = isset($_GET['max_price']) && is_string($_GET['max_price']) ? $_GET['max_price'] : '';
$minPrice = $minPriceInput !== '' && ctype_digit($minPriceInput) ? (int) $minPriceInput : null;
$maxPrice = $maxPriceInput !== '' && ctype_digit($maxPriceInput) ? (int) $maxPriceInput : null;
$filterError = ($minPriceInput !== '' && $minPrice === null)
    || ($maxPriceInput !== '' && $maxPrice === null)
    || ($minPrice !== null && $maxPrice !== null && $minPrice > $maxPrice);
$normalizeSearch = function ($value) {
    $value = strtr($value, [
        'á' => 'a', 'č' => 'c', 'ď' => 'd', 'é' => 'e', 'ě' => 'e',
        'í' => 'i', 'ň' => 'n', 'ó' => 'o', 'ř' => 'r', 'š' => 's',
        'ť' => 't', 'ú' => 'u', 'ů' => 'u', 'ý' => 'y', 'ž' => 'z',
        'Á' => 'a', 'Č' => 'c', 'Ď' => 'd', 'É' => 'e', 'Ě' => 'e',
        'Í' => 'i', 'Ň' => 'n', 'Ó' => 'o', 'Ř' => 'r', 'Š' => 's',
        'Ť' => 't', 'Ú' => 'u', 'Ů' => 'u', 'Ý' => 'y', 'Ž' => 'z',
    ]);
    return mb_strtolower($value, 'UTF-8');
};
$categories = [];
foreach ($products as $product) {
    if (isset($product['kategorie'])) {
        $categories[] = $product['kategorie'];
    }
}
$categories = array_values(array_unique($categories));
include "includes/menu.php";
?>

<main class="container home-page" id="main-content" tabindex="-1">
    <section class="aktuality" aria-label="Představení obchodu">
        <div class="aktuality_img">
            <div class="hero-copy">
                <p class="hero-eyebrow">Vítejte v Jukediscu</p>
                <h1>Najdi svůj zvuk.</h1>
                <p>Hudební nástroje a vybavení pro každý nový začátek i velké vystoupení.</p>
                <a class="hero-button" href="#produkty">Prohlédnout nabídku <span aria-hidden="true">→</span></a>
            </div>
        </div>
    </section>

    <section class="products-section" id="produkty">
        <div class="section-heading">
            <p class="section-eyebrow"><?= $query === '' ? 'Vybráno pro vás' : 'Výsledky hledání' ?></p>
            <h2><?= $query === '' ? 'Nabídka produktů' : 'Hledání: ' . htmlspecialchars($query, ENT_QUOTES, 'UTF-8') ?></h2>
            <p><?= $query === '' ? 'Najděte nástroj, který vás rozezní.' : 'Produkty odpovídající vašemu hledání.' ?></p>
        </div>

        <form class="product-filters" action="index.php#produkty" method="get" aria-label="Filtrování produktů">
            <label>
                <span>Kategorie</span>
                <select name="category">
                    <option value="">Všechny kategorie</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= htmlspecialchars($category, ENT_QUOTES, 'UTF-8') ?>" <?= $selectedCategory === $category ? 'selected' : '' ?>>
                            <?= htmlspecialchars($category, ENT_QUOTES, 'UTF-8') ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </label>
            <label>
                <span>Min. cena (Kč)</span>
                <input type="number" name="min_price" min="0" step="1" value="<?= htmlspecialchars($minPriceInput, ENT_QUOTES, 'UTF-8') ?>" inputmode="numeric">
            </label>
            <label>
                <span>Max. cena (Kč)</span>
                <input type="number" name="max_price" min="0" step="1" value="<?= htmlspecialchars($maxPriceInput, ENT_QUOTES, 'UTF-8') ?>" inputmode="numeric">
            </label>
            <?php if ($query !== ''): ?>
                <input type="hidden" name="q" value="<?= htmlspecialchars($query, ENT_QUOTES, 'UTF-8') ?>">
            <?php endif; ?>
            <button type="submit">Použít filtry</button>
            <?php if ($selectedCategory !== '' || $minPriceInput !== '' || $maxPriceInput !== ''): ?>
                <a href="index.php<?= $query !== '' ? '?q=' . rawurlencode($query) . '#produkty' : '#produkty' ?>">Zrušit filtry</a>
            <?php endif; ?>
        </form>
        <?php if ($filterError): ?>
            <p class="filter-error" role="alert">Zkontrolujte cenové rozmezí. Zadejte nezáporná celá čísla a minimální cena nesmí být vyšší než maximální.</p>
        <?php endif; ?>

        <div class="product-grid">
<?php 
    $resultCount = 0;

    foreach ($products as $product) {
        if ($filterError) {
            break;
        }

        $searchable = $product['nazev'] . ' ' . $product['popis'] . ' ' . $product['cena'] . ' ' . ($product['kategorie'] ?? '');
        if ($query !== '' && strpos($normalizeSearch($searchable), $normalizeSearch($query)) === false) {
            continue;
        }

        $productPrice = (int) preg_replace('/\D/u', '', $product['cena']);
        if (($selectedCategory !== '' && ($product['kategorie'] ?? '') !== $selectedCategory)
            || ($minPrice !== null && $productPrice < $minPrice)
            || ($maxPrice !== null && $productPrice > $maxPrice)) {
            continue;
        }

        $resultCount++;
        $popis = $product['popis'];
        $id = htmlspecialchars($product['id'], ENT_QUOTES, 'UTF-8');
        $nazev = htmlspecialchars($product['nazev'], ENT_QUOTES, 'UTF-8');
        $obrazek = htmlspecialchars($product['obrazek'], ENT_QUOTES, 'UTF-8');
        $popis = htmlspecialchars($popis, ENT_QUOTES, 'UTF-8');
        $cena = htmlspecialchars($product['cena'], ENT_QUOTES, 'UTF-8');
        echo('
            <a class="product-card" href="nakup.php?id=' . $id . '">
                <span class="product-image-wrap">
                    <img src="pictures/' . $obrazek . '" alt="' . $nazev . '" class="product-image">
                </span>
                <span class="product-info">
                    <h3 class="product-name">' . $nazev . '</h3>
                    <span class="product-description">' . $popis . '</span>
                    <span class="product-bottom">
                        <span class="product-price">' . $cena . '</span>
                        <span class="product-link">Zobrazit produkt <span aria-hidden="true">→</span></span>
                    </span>
                </span>
            </a>
        ');
    }

    if ($resultCount === 0) {
        echo '<p class="search-empty">Žádné produkty neodpovídají hledání a filtrům. Zkuste upravit hledaný výraz nebo filtry.</p>';
    }
?>
        </div>
    </section>
</main>

<?php
    include "includes/footer.php";
?>