<?php
// Récupérer le mot de passe haché envoyé depuis la requête AJAX
$request_body = file_get_contents('php://input');
$data = json_decode($request_body);
$hashedPassword = $data->hashedPassword;

// Mot de passe haché à vérifier (remplacez-le par le bon mot de passe haché)
$correctHashedPassword = "252873aba0c262b294340b4c78d9149c29ab134be84eb48730bcbf4793e1e769";

// Vérifier si les mots de passe hachés correspondent
if ($hashedPassword === $correctHashedPassword) {
    // Mot de passe correct
    $response = array('authenticated' => true);
} else {
    // Mot de passe incorrect
    $response = array('authenticated' => false);
}

// Envoyer la réponse JSON
header('Content-Type: application/json');
echo json_encode($response);
?>
