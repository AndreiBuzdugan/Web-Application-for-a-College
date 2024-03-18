<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proiect_tw";

$link = mysqli_connect($servername, $username, $password, $dbname);

if ($link === false) {
    die("ERROR: Conexiunea nu a putut fi realizată. " . mysqli_connect_error());
}

$nume_utilizator = $_POST['newUsername'];
$parola = password_hash($_POST['newPassword'], PASSWORD_DEFAULT);

$sql = "INSERT INTO utilizatori (nume_utilizator, parola) VALUES ('$nume_utilizator', '$parola')";

if (mysqli_query($link, $sql)) {
    echo "Utilizatorul a fost înregistrat cu succes.";

    // Redirecționare către pagina de autentificare
    header("Location: login.html");
    exit();
} else {
    echo "ERROR: " . mysqli_error($link);
}

mysqli_close($link);
?>
