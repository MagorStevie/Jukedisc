<?php

function load_products(): array
{
    $json = file_get_contents(__DIR__ . '/../products.json');
    if ($json === false) {
        throw new RuntimeException('Nepodařilo se načíst katalog produktů.');
    }

    $products = json_decode($json, true, 512, JSON_THROW_ON_ERROR);
    if (!is_array($products)) {
        throw new RuntimeException('Soubor s produkty neobsahuje platný JSON katalog.');
    }

    return $products;
}

function normalize_search_text(string $text): string
{
    $withoutDiacritics = strtr($text, [
        'á' => 'a', 'č' => 'c', 'ď' => 'd', 'é' => 'e', 'ě' => 'e',
        'í' => 'i', 'ň' => 'n', 'ó' => 'o', 'ř' => 'r', 'š' => 's',
        'ť' => 't', 'ú' => 'u', 'ů' => 'u', 'ý' => 'y', 'ž' => 'z',
        'Á' => 'a', 'Č' => 'c', 'Ď' => 'd', 'É' => 'e', 'Ě' => 'e',
        'Í' => 'i', 'Ň' => 'n', 'Ó' => 'o', 'Ř' => 'r', 'Š' => 's',
        'Ť' => 't', 'Ú' => 'u', 'Ů' => 'u', 'Ý' => 'y', 'Ž' => 'z',
    ]);

    return mb_strtolower($withoutDiacritics, 'UTF-8');
}

function product_price_value(string $price): int
{
    return (int) preg_replace('/\D/u', '', $price);
}

function format_price(int $price): string
{
    return number_format($price, 0, ',', ' ') . ' Kč';
}
