<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Haal formulierdata op
    $naam = $_POST['naam'] ?? 'Onbekend';
    $duur = $_POST['duur'] ?? 'Geen antwoord';
    $toelichtingDuur = $_POST['toelichting_duur'] ?? 'Geen toelichting';
    $agenda = $_POST['agenda'] ?? 'Geen antwoord';
    $toelichtingAgenda = $_POST['toelichting_agenda'] ?? 'Geen toelichting';
    $efficientie = $_POST['efficientie'] ?? 'Geen antwoord';
    $toelichtingEfficientie = $_POST['toelichting_efficientie'] ?? 'Geen toelichting';
    $relevant = $_POST['relevant'] ?? 'Geen antwoord';
    $toelichtingRelevant = $_POST['toelichting_relevant'] ?? 'Geen toelichting';
    $verbetering = $_POST['verbetering'] ?? 'Geen antwoord';
    $toelichtingVerbetering = $_POST['toelichting_verbetering'] ?? 'Geen toelichting';

    // E-mailconfiguratie
    $ontvanger = "b.armanyous@student.avans.nl"; // Vervang door jouw e-mailadres
    $onderwerp = "Feedbackformulier Vergadering";

    // Bericht opstellen
    $bericht = "Feedbackformulier Vergadering:\n\n" .
               "Je hebt nieuwe feedback ontvangen van: $naam\n\n" .
               "1. Duur van de vergadering: $duur\nToelichting: $toelichtingDuur\n\n" .
               "2. Duidelijkheid van de agenda: $agenda\nToelichting: $toelichtingAgenda\n\n" .
               "3. Efficiëntie van de vergadering: $efficientie\nToelichting: $toelichtingEfficientie\n\n" .
               "4. Relevantie van onderwerpen: $relevant\nToelichting: $toelichtingRelevant\n\n" .
               "5. Verbeterpunten: $verbetering\nToelichting: $toelichtingVerbetering\n";

    // E-mail verzenden
    if (mail($ontvanger, $onderwerp, $bericht, $headers)) {
        echo "<h2>Bedankt voor je feedback! Je formulier is succesvol verzonden.</h2>";
    } else {
        echo "<h2>Er is een fout opgetreden bij het verzenden. Probeer het later opnieuw.</h2>";
    }
}
?>