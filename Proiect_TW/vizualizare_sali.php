<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vizualizare Săli</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #ebf1f7;
        }

        h1 {
            text-align: center;
            color: #007BFF;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        tr:hover {
            background-color: lightblue;
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 12px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: #fff;
        }
    </style>
</head>
<body>
    <h1>Vizualizare Săli</h1>

    <?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "proiect_tw";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexiunea a eșuat: " . $conn->connect_error);
    }


    $sql = "SELECT * FROM sali";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        echo "<table>
                <tr>
                    <th>ID</th>
                    <th>Denumire sală</th>
                    <th>Capacitate</th>
                    <th>Tip sală</th>
                    <th>Dotare</th>
                </tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["denumire"] . "</td>
                    <td>" . $row["capacitate"] . "</td>
                    <td>" . $row["tip"] . "</td>
                    <td>" . $row["dotare"] . "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "Nu există săli în baza de date.";
    }

    $conn->close();
    ?>

</body>
</html>
