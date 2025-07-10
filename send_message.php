<?php
// Récupérer les informations du formulaire
$name = $_POST['name'];
$contact = $_POST['contact'];
$message = $_POST['message'];

// Token de votre bot Telegram
$token = '7986898038:AAEy2utLxduMbiwyM2Ax8daYCaWi1pqCsR0'; // Remplacez par votre token
$chat_id = '7869910410'; // Votre Chat ID

// Créer le message formaté
$formattedMessage = "💬 Nouveau message de contact\n\n";
$formattedMessage .= "🧑 Nom: $name\n";
$formattedMessage .= "📱 Contact: $contact\n";
$formattedMessage .= "📝 Message:\n$message";

// URL de l'API Telegram
$url = "https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($formattedMessage);

// Envoyer la requête HTTP à Telegram
file_get_contents($url);
?>
