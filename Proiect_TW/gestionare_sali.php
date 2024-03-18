<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestionare Sali</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #ebf1f7;

        }

        .highlight {
            background-color: #e6e6e6;
        }

        h1 {
            text-align: center;
            color: #007BFF;
        }

        form {
            max-width: 600px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin: 10px 0;
        }

        input, select {
            
            padding: 11px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input{
            width: 95.75%;
        }

        select{
            width: 100%;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
            padding: 11px 21px;
            transition-duration: 0.5s;
        }
    </style>
</head>
<body>
    <h1>Gestionare Sali</h1>

    <form id="roomForm" method="post" action="adauga_sala.php">
        <label for="roomName">Denumire sală:</label>
        <input type="text" id="roomName" name="roomName" required>

        <label for="capacity">Capacitate sală:</label>
        <input type="number" id="capacity" name="capacity" required>

        <label for="roomType">Tip sală:</label>
        <select id="roomType" name="roomType" required>
            <option value="seminar">Seminariu</option>
            <option value="proiect">Proiect</option>
            <option value="laborator">Laborator</option>
            <option value="laborator-informatic">Laborator informatic</option>
        </select>

        <label for="equipment">Dotare sală:</label>
        <select id="equipment" name="equipment[]" multiple>
            <option value="videoproiector">Videoproiector</option>
            <option value="tabla-creta">Tablă cu cretă</option>
            <option value="tabla-marker">Tablă cu marker</option>
            <option value="tabla-inteligenta">Tablă inteligentă</option>
        </select>

        <button type="submit">Adăugare sală</button>
    </form>
</body>
    <script>
        var elements = document.querySelectorAll('input, select, button');
        elements.forEach(function(element) {
            element.addEventListener('mouseover', function() {
                this.classList.add('highlight');
            });

            element.addEventListener('mouseout', function() {
                this.classList.remove('highlight');
            });
        });
        function addRoom() {
            var roomName = document.getElementById('roomName').value;
            var capacity = document.getElementById('capacity').value;
            var roomType = document.getElementById('roomType').value;
            var equipment = Array.from(document.getElementById('equipment').selectedOptions).map(option => option.value);
            console.log("Denumire sală:", roomName);
            console.log("Capacitate sală:", capacity);
            console.log("Tip sală:", roomType);
            console.log("Dotare sală:", equipment);
        }
    </script>
</html>