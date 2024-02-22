<?php
$jsonFile = 'prixMenu.json';

$request_body = file_get_contents('php://input');
$data = json_decode($request_body, true);

if (!empty($data)) {
    $jsonData = json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    file_put_contents($jsonFile, $jsonData);
    echo json_encode(array('success' => true, 'message' => 'Modifications enregistrées avec succès.'));
} else {
    echo json_encode(array('success' => false, 'message' => 'Aucune donnée reçue.'));
}
?>
