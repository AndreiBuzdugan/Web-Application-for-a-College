<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sali</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-image: url("upb.jpg");
            max-width: 100%;
            height: auto;
            background-size: 100%;
            opacity: 0.80;
            text-align: center;
        }

        .button-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        button {
            background-color: #007BFF;
            color: #fff;
            padding: 20px;
            border: none;
            border-bottom-right-radius: 15px;
            border-top-left-radius: 15px;
            cursor: pointer;
            margin: 10px;
            font-size: 16px;
        }

        button:hover {
            background-color: #0056b3;
            font-size:17px;
            transition-duration: 0.5s;
        }
    </style>
</head>
<body>
    <div class="button-container">
        <button onclick="Vsali()">Vizualizare Profesori si Studenti</button>
        <button onclick="Csali()">Configurare Profesori si Studenti</button>
    </div>
    <script>
        function Vsali() {
            window.location.href = 'vizualizare_persoane.php';
        }

        function Csali() {
            window.location.href = 'index.html';
        }
    </script>
</body>
</html>