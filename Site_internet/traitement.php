<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les valeurs des champs du formulaire
    $nom = $_POST['identité'];
    $prénom = $_POST['identité'];
    $email = $_POST['identité'];
    $tel = $_POST['identité'];
    $fonction = $_POST['identité'];
    $titre_message = $_POST['message'];
    $message = $_POST['message'];

    // Adresse e-mail où envoyer le formulaire
    $to = 'hernandezlucas081@gmail.com';

    // Sujet du message
    $subject = 'Nouveau message depuis le formulaire';

    // Corps du message
    $body = "Nom: $nom\n";
    $body .= "Prénom: $prénom\n";
    $body .= "Email: $email\n";
    $body .= "Téléphone: $tel\n";
    $body .= "Fonction: $fonction\n\n";
    $body .= "Titre du message: $titre_message\n";
    $body .= "Message:\n$message";

    // En-têtes du message
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Envoi du message
    if (mail($to, $subject, $body, $headers)) {
        echo '<p>Votre message a été envoyé avec succès. Merci de nous avoir contactés!</p>';
    } 
    else {
        echo '<p>Une erreur s\'est produite lors de l\'envoi de votre message. Veuillez réessayer plus tard.</p>';
    }
}
?>
