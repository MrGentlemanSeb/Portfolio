
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["nom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "sebgoleonardo3@gmail.com";
    $subject = "Nouveau message depuis le formulaire";
    $body = "Nom: $name\nE-mail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo "Message envoyé avec succès";
    } else {
        echo "Une erreur s'est produite lors de l'envoi du message";
    }
}
?>