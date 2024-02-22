<?php
$jsonFile = 'prixMenu.json';

if (!file_exists($jsonFile)) {
    echo json_encode(["error" => "Le fichier JSON n'existe pas."]);
    exit();
}

$jsonData = file_get_contents($jsonFile);

if (empty($jsonData)) {
    echo json_encode(["error" => "Le fichier JSON est vide."]);
    exit();
}

$prixMenu = json_decode($jsonData, true);

if ($prixMenu === null) {
    echo json_encode(["error" => "Erreur lors de la conversion du JSON en tableau associatif."]);
    exit();
}

echo json_encode($prixMenu);
?>
