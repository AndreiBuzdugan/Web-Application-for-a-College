<?php
include 'conexiune.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $role = $_POST['role'];

    $sql = "INSERT INTO persoane (nume, prenume, tip_utilizator) VALUES ('$lastName', '$firstName', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "Persoana a fost adăugată cu succes în baza de date.";

        header("Location: Prof.php");
        exit();
    } else {
        echo "Eroare: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>