<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom     = htmlspecialchars($_POST['prenom']);
    $nom        = htmlspecialchars($_POST['nom']);
    $email      = htmlspecialchars($_POST['email']);
    $telephone  = htmlspecialchars($_POST['telephone']);
    $entreprise = htmlspecialchars($_POST['entreprise']);
    $objet      = htmlspecialchars($_POST['objet']);
    $message    = nl2br(htmlspecialchars($_POST['message']));

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host = 'ssl0.ovh.net';
        $mail->SMTPAuth = true;
        $mail->Username = 'guillaume.verliac@altarys-capital.fr';
        $mail->Password = 'AltarysFortnite64';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('guillaume.verliac@altarys-capital.fr', 'Formulaire Altarys');
        $mail->addAddress('guillaume.verliac@altarys-capital.fr');
        $mail->addAddress('antoine.delcambre@altarys-capital.fr');

        $mail->isHTML(true);
        $mail->Subject = "Nouveau message via le formulaire Altarys Capital";
        $mail->Body = "
          <h2>Formulaire de contact</h2>
          <p><strong>Prénom :</strong> {$prenom}</p>
          <p><strong>Nom :</strong> {$nom}</p>
          <p><strong>Email :</strong> {$email}</p>
          <p><strong>Téléphone :</strong> {$telephone}</p>
          <p><strong>Entreprise :</strong> {$entreprise}</p>
          <p><strong>Objet :</strong> {$objet}</p>
          <p><strong>Message :</strong><br>{$message}</p>
        ";
        $mail->AltBody = strip_tags($mail->Body);

        $mail->send();
        echo 'success';
    } catch (Exception $e) {
        echo 'Erreur : ' . $mail->ErrorInfo;
    }
}
?>
