<?php
$condamnations = [15, 2, 8, 20, 5, 1, 10];

// 2. Afficher toutes les valeurs
echo "Liste des condamnations : " . PHP_EOL;
foreach ($condamnations as $value) {
    echo $value . " ans" . PHP_EOL;
}

// 3. Calculer et afficher la moyenne
$somme = array_sum($condamnations);
$nombre = count($condamnations);
$moyenne = $somme / $nombre;
echo PHP_EOL . "La condamnation moyenne est de : " . number_format($moyenne) . " ans" . PHP_EOL;

// 4. Trouver et afficher le max et le min
$Lourde = max($condamnations);
$Legere = min($condamnations);
echo "La condamnation la plus lourde est : " . $Lourde . " ans" . PHP_EOL;
echo "La condamnation la plus légère est : " . $Legere . " ans" . PHP_EOL;

// 5. Défi : Afficher les condamnations supérieures à la moyenne
echo PHP_EOL . "Condamnations supérieures à la moyenne (" . number_format($moyenne) . " ans) : " . PHP_EOL;
foreach ($condamnations as $value) {
    if ($value > $moyenne) {
        echo $value . " ans" . PHP_EOL;
    }
}
?>