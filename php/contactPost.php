<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './vendor/autoload.php';

try {
    $config = parse_ini_file(__DIR__ . "/../.env");

    $pdo = new PDO("mysql:dbname={$config["db_name"]};host={$config["db_host"]};charset=utf8mb4", $config["db_user"], $config["db_password"]);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupérer les données du formulaire de contact
    $NomInputForm = $_POST['Nom'];
    $PrenomInputForm = $_POST['Prenom'];
    $EmailInputForm = $_POST['Email'];
    $SujetInputForm = $_POST['Sujet'];
    $MessageInputForm = $_POST['Message'];

    // Insérer les données dans une table 'contacts'
    $insertQuery = "INSERT INTO contacts (nom, prenom, email, sujet, message)
                    VALUES (:nom, :prenom, :email, :sujet, :message)";
    $insertStmt = $pdo->prepare($insertQuery);
    $insertStmt->bindParam(':nom', $NomInputForm);
    $insertStmt->bindParam(':prenom', $PrenomInputForm);
    $insertStmt->bindParam(':email', $EmailInputForm);
    $insertStmt->bindParam(':sujet', $SujetInputForm);
    $insertStmt->bindParam(':message', $MessageInputForm);
    $insertStmt->execute();

    //Envoie email avec PHPMAILER
    $mail = new PHPMailer(true);

    //Configuration SMTP
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = $NomInputForm;
    $mail->Password =
        $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    //Paramètres email
    $mail->setFrom('de@exemple.com', 'Mailer');
    $mail->addAddress($config['smtp_mail'], $config['smtp_name']);
    $mail->isHTML(true);
    $mail->Subject = 'Sujet';
    $mail->Body = '';
    $mail->AltBody = '';

    $mail->send();

    // Redirection vers une page de succès après soumission réussie
    header("Location: /pages/contact.php?success=sent");
    exit();
} catch (Exception $e) {
    error_log("Erreur Mailer : " . $mail->ErrorInfo);
    header("Location: /pages/contact.php?error=mail_error");
    exit();
} catch (PDOException $e) {
    // Enregistrer l'erreur pour le débogage
    error_log("Erreur de soumission du formulaire de contact : " . $e->getMessage());
    // Redirection vers la page de contact avec un message d'erreur
    header("Location: /pages/contact.php?error=database_error");
    exit();
}
