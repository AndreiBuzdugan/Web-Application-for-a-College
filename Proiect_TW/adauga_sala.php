<?php
include 'conexiune.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $denumire = $_POST['roomName'];
    $capacitate = $_POST['capacity'];
    $tip = $_POST['roomType'];
    $dotare = implode(", ", $_POST['equipment']);

    $sql = "INSERT INTO sali (denumire, capacitate, tip, dotare) VALUES ('$denumire', $capacitate, '$tip', '$dotare')";
    if ($conn->query($sql) === TRUE) {
        echo "Sala a fost adăugată cu succes în baza de date.";

        header("Location: Sali.html");
        exit();
    } else {
        echo "Eroare: " . $sql . "<br>" . $conn->error;
    }
}
$conn->close();
?>
