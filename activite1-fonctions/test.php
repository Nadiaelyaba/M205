<?php
declare(strict_types=1);

require_once __DIR__ . '/fonctions.php';

echo "12 + 8 = " . additionner(12, 8) . PHP_EOL;
echo "12 - 8 = " . soustraire(12, 8) . PHP_EOL;
echo "12 x 8 = " . multiplier(12, 8) . PHP_EOL;
echo "12 / 8 = " . diviser(12, 8) . PHP_EOL;

try {
    echo diviser(10, 0);
} catch (InvalidArgumentException $e) {
    echo "Erreur : " . $e->getMessage() . PHP_EOL;
}

// Étape 2
echo "7 est pair ? " . (estPair(7) ? "oui" : "non") . PHP_EOL;
echo "-3 est positif ? " . (estPositif(-3) ? "oui" : "non") . PHP_EOL;
echo "Maximum : " . maximum(4, 9, 6) . " / " . maximumNatif(4, 9, 6) . PHP_EOL;
echo "13 est premier ? " . (estPremier(13) ? "oui" : "non") . PHP_EOL;

// Étape 3
$montant = calculerFacture(100, 10, 10, 20);
echo "Facture : " . number_format($montant, 2, ",", " ") . " MAD" . PHP_EOL;

// Étape 4
echo "Moyenne : " . moyenne(12, 15, 9) . PHP_EOL;
echo "Moyenne sans notes : " . moyenne() . PHP_EOL;
echo "Aire du cercle (r=5) : " . aireCercle(5) . PHP_EOL;
echo "25°C = " . celsiusVersFahrenheit(25) . "°F" . PHP_EOL;
echo "100 MAD = " . convertirDevise(100, 0.092) . " EUR" . PHP_EOL;

// Étape 5
echo "5! = " . factorielle(5) . PHP_EOL;
echo "Fibonacci(8) : " . implode(", ", fibonacci(8)) . PHP_EOL;
echo "PGCD(48, 18) = " . pgcd(48, 18) . PHP_EOL;