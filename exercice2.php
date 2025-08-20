<?php
//Tableau contenant les dossiers
$dossiers = [
    "2023-001" => "Affaire A",
    "2023-002" => "Affaire B",
    "2023-003" => "Affaire C",
    "2023-004" => "Affaire D",
    "2023-005" => "Affaire E"
];
// 2. Affichage de tous les dossiers
foreach ($dossiers as $numero => $affaire) {
    echo "Dossier $numero : $affaire" . "\n";
}
echo"Entrer le numero du dossier que vous voulez consulter : ";
$recherche = trim(fgets(STDIN));

// on verifie si le dossier existe 
if (array_key_exists($recherche, $dossiers)) {
    echo "Dossier trouver : " . $dossiers[$recherche] . "\n";
}else {
    echo "Dossier non trouvé." . "\n";
}