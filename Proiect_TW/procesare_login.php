<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proiect_tw";

$link = mysqli_connect($servername, $username, $password, $dbname);

if ($link === false) {
    die("ERROR: Conexiunea nu a putut fi realizată. " . mysqli_connect_error());
}

$nume_utilizator = $_POST['admin'];
$parola = $_POST['parola'];

$sql = "SELECT * FROM utilizatori WHERE nume_utilizator = '$nume_utilizator'";

$result = mysqli_query($link, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);

    if ($row) {
        if (password_verify($parola, $row['parola'])) {
            // Autentificare reușită, setarea sesiunii și redirecționare
            session_start();
            $_SESSION['utilizator_autentificat'] = true;

            header("Location: ButonSali.html");
            exit();
        } else {
            // Parola incorectă, redirecționare către pagină de eșec
            header("Location: pagina_esuare_autentificare.php");
            exit();
        }
    } else {
        // Utilizatorul nu există, redirecționare către pagină de eșec
        header("Location: pagina_esuare.php");
        exit();
    }
} else {
    echo "ERROR: " . mysqli_error($link);
}

mysqli_close($link);
?>
