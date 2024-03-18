<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "proiect_tw";

$link = mysqli_connect($servername, $username, $password);

if ($link === false) {
    die("ERROR: Conexiunea nu a putut fi realizată. " . mysqli_connect_error());
}

$sql = "CREATE DATABASE IF NOT EXISTS proiect_tw";

if (mysqli_query($link, $sql)) {
    echo "Baza de date a fost creată cu succes<br>";
} else {
    echo "ERROR: Nu a putut fi executat $sql. " . mysqli_error($link) . "<br>";
}

mysqli_close($link);

$link = mysqli_connect($servername, $username, $password, $dbname);

if ($link === false) {
    die("ERROR: Conexiunea nu a putut fi realizată. " . mysqli_connect_error());
}

// Creare tabela 'sali'
$sqlSali = "CREATE TABLE IF NOT EXISTS sali (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    denumire VARCHAR(255) NOT NULL,
    capacitate INT NOT NULL,
    tip VARCHAR(50) NOT NULL,
    dotare VARCHAR(255)
)";

// Creare tabela 'persoane'
$sqlPersoane = "CREATE TABLE IF NOT EXISTS persoane (
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    nume VARCHAR(50) NOT NULL,
    prenume VARCHAR(50) NOT NULL,
    tip_utilizator ENUM('Student', 'Profesor') NOT NULL
)";

if (mysqli_query($link, $sqlSali) && mysqli_query($link, $sqlPersoane)) {
    echo "Tabelele 'sali' și 'persoane' au fost create cu succes<br>";
} else {
    echo "ERROR: Nu a putut fi executat $sqlSali sau $sqlPersoane. " . mysqli_error($link) . "<br>";
}

mysqli_close($link);
?>